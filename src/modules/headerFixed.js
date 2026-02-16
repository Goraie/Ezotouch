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
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight
    const isNearBottom = window.scrollY >= maxScroll - resetOffset

    if (window.scrollY <= 200) {
      headerTogglePos(header, false, true)
      header.classList.remove('fixed')
      header.classList.remove('active')
    } else if (window.scrollY > 200 && window.scrollY < offerHeight - 200) {
      headerTogglePos(header, true, false)
      header.classList.add('fixed')
      header.classList.remove('active')
    } else if (
      window.scrollY >= offerHeight - resetOffset &&
      window.scrollY < offerHeight
    ) {
      headerTogglePos(header, true, true)
      header.classList.add('fixed')
      header.classList.add('active')
    } else if (window.scrollY >= offerHeight && !isNearBottom) {
      headerTogglePos(header, true, true)
      header.classList.add('fixed')
      header.classList.add('active')
    } else if (isNearBottom) {
      headerTogglePos(header, true, true)
      header.classList.add('fixed')
      header.classList.remove('active')
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
