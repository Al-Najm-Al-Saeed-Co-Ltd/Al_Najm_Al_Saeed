<template>
  <DialogContent class="sm:max-w-[425px]" v-bind="$attrs">
    <slot />
  </DialogContent>
</template>

<script setup lang="ts">
import { DialogContent } from '@/components/ui/dialog'
</script>
