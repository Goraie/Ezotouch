const resetOffset = 300

function headerTogglePos(header, top, display) {
  if (top) {
    header.style.top = 'auto'
    header.style.bottom = '0'
  } else {
    header.style.top = '0'
    header.style.bottom = 'auto'
  }
  if (display) {
    header.style.display = 'block'
  } else {
    header.style.display = 'none'
  }
}

function headerDesk(header, block) {
  window.addEventListener('scroll', () => {
    const offerHeight = block.offsetHeight

    if (window.scrollY > 200 && window.scrollY < offerHeight - 200) {
      headerTogglePos(header, true, false)
      header.style.transform = 'translateY(100px)'
      header.classList.add('fixed')
    } else if (
      window.scrollY > offerHeight - resetOffset &&
      window.scrollY < offerHeight
    ) {
      headerTogglePos(header, true, true)
      header.style.transform = 'translateY(100px)'
      header.classList.add('fixed')
    } else if (
      window.scrollY > offerHeight &&
      window.scrollY <
        document.documentElement.scrollHeight -
          document.documentElement.clientHeight -
          resetOffset
    ) {
      headerTogglePos(header, true, true)
      header.style.transform = 'translateY(0)'
      header.classList.add('fixed')
    } else if (
      window.scrollY >
      document.documentElement.scrollHeight -
        document.documentElement.clientHeight -
        resetOffset
    ) {
      headerTogglePos(header, true, true)
      header.style.transform = 'translateY(100px)'
      header.classList.add('fixed')
    } else {
      headerTogglePos(header, false, true)
      header.style.transform = 'translateY(0)'
      header.classList.remove('fixed')
    }
  })
}

function initHeaderFixed() {
  const header = document.querySelector('.header')
  if (!header) return

  if (window.outerWidth > 1024) {
    const main = document.querySelector('main')
    const block = main?.firstElementChild ?? main?.firstChild
    if (!block) return
    headerDesk(header, block)
  } else {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 320) {
        header.classList.add('fixed')
      } else {
        header.classList.remove('fixed')
      }
    })
  }
}

window.addEventListener('DOMContentLoaded', initHeaderFixed)
