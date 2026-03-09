import typograf from '@/utils/typograf'

function processTextNodes(node) {
  if (node.nodeType === Node.TEXT_NODE) {
    const text = node.textContent.trim()
    if (text && /[а-яА-ЯёЁ]/.test(text)) {
      const processed = typograf(text)
      if (processed !== text) {
        node.textContent = processed
      }
    }
  } else if (node.nodeType === Node.ELEMENT_NODE) {
    const tagName = node.tagName?.toLowerCase()
    const skipTags = ['script', 'style', 'code', 'pre', 'noscript']
    
    if (!skipTags.includes(tagName)) {
      Array.from(node.childNodes).forEach(processTextNodes)
    }
  }
}

function initTypografAuto() {
  if (typeof document === 'undefined') {return}

  const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      mutation.addedNodes.forEach((node) => {
        if (node.nodeType === Node.ELEMENT_NODE || node.nodeType === Node.TEXT_NODE) {
          processTextNodes(node)
        }
      })
    })
  })

  observer.observe(document.body, {
    childList: true,
    subtree: true,
  })

  processTextNodes(document.body)
}

if (typeof window !== 'undefined') {
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTypografAuto)
  } else {
    initTypografAuto()
  }
}
