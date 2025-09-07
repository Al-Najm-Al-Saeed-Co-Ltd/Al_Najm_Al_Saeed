import { ref, onMounted, onUnmounted, nextTick } from 'vue'

export function useScrollAnimations() {
  const visibleSections = ref(new Set())

  // Scroll-triggered animations
  const handleIntersection = (entries: IntersectionObserverEntry[]) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        visibleSections.value.add(entry.target.id)
      }
    })
  }

  const setupScrollAnimations = () => {
    const observer = new IntersectionObserver(handleIntersection, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    })

    const sections = document.querySelectorAll('section[id]')
    sections.forEach(section => observer.observe(section))

    return observer
  }

  // Smooth scrolling
  const smoothScrollTo = (elementId: string) => {
    const element = document.getElementById(elementId)
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' })
    }
  }

  // Setup smooth scrolling for navigation links
  const setupSmoothScrolling = () => {
    const navLinks = document.querySelectorAll('a[href^="#"]')
    navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault()
        const targetId = link.getAttribute('href')?.substring(1)
        if (targetId) {
          smoothScrollTo(targetId)
        }
      })
    })
  }

  let scrollObserver: IntersectionObserver | null = null

  const initialize = async () => {
    await nextTick()
    
    // Setup scroll animations
    scrollObserver = setupScrollAnimations()
    
    // Add smooth scrolling to navigation links
    setupSmoothScrolling()
  }

  const cleanup = () => {
    if (scrollObserver) {
      scrollObserver.disconnect()
    }
  }

  return {
    visibleSections,
    initialize,
    cleanup,
    smoothScrollTo
  }
}
