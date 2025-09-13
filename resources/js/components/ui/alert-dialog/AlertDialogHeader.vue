<template>
  <DialogHeader class="flex flex-col space-y-1.5 text-center sm:text-left">
    <slot />
  </DialogHeader>
</template>

<script setup lang="ts">
import { DialogHeader } from '@/components/ui/dialog'
</script>
