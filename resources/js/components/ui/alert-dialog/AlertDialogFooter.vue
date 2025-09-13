<template>
  <DialogFooter class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
    <slot />
  </DialogFooter>
</template>

<script setup lang="ts">
import { DialogFooter } from '@/components/ui/dialog'
</script>
