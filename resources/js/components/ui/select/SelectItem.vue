<script setup lang="ts">
import { cn } from '@/lib/utils';

export interface SelectItemProps {
  class?: string;
  value: string;
  disabled?: boolean;
}

const props = withDefaults(defineProps<SelectItemProps>(), {
  disabled: false,
});
</script>

<template>
  <option :class="cn(
    'relative flex w-full cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm outline-none focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50',
    props.class
  )" :value="value" :disabled="disabled">
    <slot />
  </option>
</template>
