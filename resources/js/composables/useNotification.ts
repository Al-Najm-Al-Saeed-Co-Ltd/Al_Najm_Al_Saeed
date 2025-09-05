import { ref, reactive } from 'vue'

interface NotificationItem {
  id: string
  message: string
  type: 'success' | 'error' | 'info' | 'warning'
  duration?: number
  autoClose?: boolean
}

const notifications = ref<NotificationItem[]>([])
let nextId = 1

export const useNotification = () => {
  const addNotification = (notification: Omit<NotificationItem, 'id'>) => {
    const id = `notification-${nextId++}`
    const newNotification: NotificationItem = {
      id,
      duration: 5000,
      autoClose: true,
      ...notification
    }
    
    notifications.value.push(newNotification)
    return id
  }

  const removeNotification = (id: string) => {
    const index = notifications.value.findIndex(n => n.id === id)
    if (index > -1) {
      notifications.value.splice(index, 1)
    }
  }

  const clearAll = () => {
    notifications.value = []
  }

  // Convenience methods
  const success = (message: string, options?: Partial<NotificationItem>) => {
    return addNotification({ message, type: 'success', ...options })
  }

  const error = (message: string, options?: Partial<NotificationItem>) => {
    return addNotification({ message, type: 'error', ...options })
  }

  const info = (message: string, options?: Partial<NotificationItem>) => {
    return addNotification({ message, type: 'info', ...options })
  }

  const warning = (message: string, options?: Partial<NotificationItem>) => {
    return addNotification({ message, type: 'warning', ...options })
  }

  return {
    notifications,
    addNotification,
    removeNotification,
    clearAll,
    success,
    error,
    info,
    warning
  }
}
