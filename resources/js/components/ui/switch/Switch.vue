<script setup lang="ts">
import { cn } from '@/lib/utils';

export interface SwitchProps {
  class?: string;
  checked?: boolean;
  disabled?: boolean;
}

const props = withDefaults(defineProps<SwitchProps>(), {
  checked: false,
  disabled: false,
});

const emit = defineEmits<{
  'update:checked': [checked: boolean];
}>();

const handleChange = (event: Event) => {
  const target = event.target as HTMLInputElement;
  emit('update:checked', target.checked);
};
</script>

<template>
  <button
    type="button"
    role="switch"
    :aria-checked="checked"
    :data-state="checked ? 'checked' : 'unchecked'"
    :disabled="disabled"
    :class="cn(
      'peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input',
      props.class
    )"
    @click="handleChange"
  >
    <span
      :class="cn(
        'pointer-events-none block h-5 w-5 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-5 data-[state=unchecked]:translate-x-0'
      )"
      :data-state="checked ? 'checked' : 'unchecked'"
    />
  </button>
</template>
