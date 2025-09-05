<template>
  <Transition
    enter-active-class="transition-all duration-300 ease-out"
    enter-from-class="opacity-0 transform translate-x-full scale-95"
    enter-to-class="opacity-100 transform translate-x-0 scale-100"
    leave-active-class="transition-all duration-300 ease-in"
    leave-from-class="opacity-100 transform translate-x-0 scale-100"
    leave-to-class="opacity-0 transform translate-x-full scale-95"
  >
    <div
      v-if="isVisible"
      class="w-full"
    >
        <div
          :class="[
            'rounded-2xl shadow-2xl border p-3 sm:p-4 flex items-start sm:items-center space-x-3',
            typeClasses
          ]"
        >
          <div class="flex-shrink-0">
            <CheckCircle v-if="type === 'success'" class="w-5 h-5 text-green-600" />
            <AlertCircle v-if="type === 'error'" class="w-5 h-5 text-red-600" />
            <Info v-if="type === 'info'" class="w-5 h-5 text-blue-600" />
            <AlertTriangle v-if="type === 'warning'" class="w-5 h-5 text-yellow-600" />
          </div>
          <div class="flex-1 min-w-0">
            <p :class="['text-sm font-medium leading-relaxed break-words', textClasses]">
              {{ message }}
            </p>
          </div>
          <button
            @click="close"
            class="flex-shrink-0 ml-2 sm:ml-4 text-gray-500 hover:text-gray-700 transition-colors duration-200 p-2 -m-2 touch-manipulation rounded-lg hover:bg-white/20"
            aria-label="Close notification"
          >
            <X class="w-4 h-4" />
          </button>
        </div>
      </div>
    </Transition>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { CheckCircle, AlertCircle, Info, AlertTriangle, X } from 'lucide-vue-next'

const props = defineProps({
  message: {
    type: String,
    required: true
  },
  type: {
    type: String,
    default: 'success',
    validator: (value) => ['success', 'error', 'info', 'warning'].includes(value)
  },
  duration: {
    type: Number,
    default: 5000
  },
  autoClose: {
    type: Boolean,
    default: true
  }
})

const emit = defineEmits(['close'])

const isVisible = ref(false)
let timeoutId = null

const typeClasses = computed(() => {
  const classes = {
    success: 'bg-green-500/10 border-green-500/20 backdrop-blur-xl bg-white/70',
    error: 'bg-red-500/10 border-red-500/20 backdrop-blur-xl bg-white/70',
    info: 'bg-blue-500/10 border-blue-500/20 backdrop-blur-xl bg-white/70',
    warning: 'bg-yellow-500/10 border-yellow-500/20 backdrop-blur-xl bg-white/70'
  }
  return classes[props.type]
})

const textClasses = computed(() => {
  const classes = {
    success: 'text-green-900',
    error: 'text-red-900',
    info: 'text-blue-900',
    warning: 'text-yellow-900'
  }
  return classes[props.type]
})

const close = () => {
  isVisible.value = false
  if (timeoutId) {
    clearTimeout(timeoutId)
    timeoutId = null
  }
  setTimeout(() => {
    emit('close')
  }, 300) // Wait for transition to complete
}

onMounted(() => {
  isVisible.value = true
  
  if (props.autoClose && props.duration > 0) {
    timeoutId = setTimeout(() => {
      close()
    }, props.duration)
  }
})

onUnmounted(() => {
  if (timeoutId) {
    clearTimeout(timeoutId)
  }
})
</script>
