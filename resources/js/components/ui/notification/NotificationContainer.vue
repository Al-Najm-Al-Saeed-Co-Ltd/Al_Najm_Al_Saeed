<template>
  <div class="fixed top-24 left-4 right-4 z-50 mx-auto max-w-7xl sm:top-4">
    <div class="flex justify-end">
      <div class="space-y-2 max-w-md w-full">
      <Notification
        v-for="notification in notifications"
        :key="notification.id"
        :message="notification.message"
        :type="notification.type"
        :duration="notification.duration"
        :auto-close="notification.autoClose"
        @close="removeNotification(notification.id)"
      />
      </div>
    </div>
  </div>
</template>

<script setup>
import { useNotification } from '@/composables/useNotification'
import Notification from './Notification.vue'

const { notifications, removeNotification } = useNotification()
</script>
