<script setup lang="ts">
import { cn } from '@/lib/utils';
import { computed } from 'vue';

export interface TextareaProps {
  class?: string;
  modelValue?: string;
  placeholder?: string;
  rows?: number | string;
  disabled?: boolean;
  readonly?: boolean;
  required?: boolean;
}

const props = withDefaults(defineProps<TextareaProps>(), {
  rows: 3,
  disabled: false,
  readonly: false,
  required: false,
});

// Convert rows to number if it's a string
const rowsValue = computed(() => {
  return typeof props.rows === 'string' ? parseInt(props.rows, 10) : props.rows;
});

const emit = defineEmits<{
  'update:modelValue': [value: string];
}>();

const handleInput = (event: Event) => {
  const target = event.target as HTMLTextAreaElement;
  emit('update:modelValue', target.value);
};
</script>

<template>
  <textarea
    :class="cn(
      'flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50',
      props.class
    )"
    :value="modelValue"
    :placeholder="placeholder"
    :rows="rowsValue"
    :disabled="disabled"
    :readonly="readonly"
    :required="required"
    @input="handleInput"
  />
</template>
