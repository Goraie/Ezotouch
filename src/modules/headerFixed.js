const header = document.querySelector('.header'),
  footer = document.querySelector('.footer'),
  body = document.querySelector('body'),
  block = document.querySelector('main').firstChild,
  resetOffset = 300

if (window.outerWidth > 1024) {
  window.addEventListener('DOMContentLoaded', (e) => headerDesk())
} else {
  window.addEventListener('scroll', (e) => {
    if (window.scrollY > 320) {
      header.classList.add('fixed')
    } else {
      header.classList.remove('fixed')
    }
  })
}

function headerTogglePos(top = Boolean, display = Boolean) {
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

function headerDesk() {
  window.addEventListener('scroll', (e) => {
    let offerHeight = block.offsetHeight

    if (window.scrollY > 200 && window.scrollY < offerHeight - 200) {
      headerTogglePos(true, false)
      header.style.transform = 'translateY(100px)'
      header.classList.add('fixed')
    } else if (
      window.scrollY > offerHeight - resetOffset &&
      window.scrollY < offerHeight
    ) {
      headerTogglePos(true, true)
      header.style.transform = 'translateY(100px)'
      header.classList.add('fixed')
    } else if (
      window.scrollY > offerHeight &&
      window.scrollY <
        document.documentElement.scrollHeight -
          document.documentElement.clientHeight -
          resetOffset
    ) {
      headerTogglePos(true, true)
      header.style.transform = 'translateY(0)'
      header.classList.add('fixed')
    } else if (
      window.scrollY >
      document.documentElement.scrollHeight -
        document.documentElement.clientHeight -
        resetOffset
    ) {
      headerTogglePos(true, true)
      header.style.transform = 'translateY(100px)'
      header.classList.add('fixed')
    } else {
      headerTogglePos(false, true)
      header.style.transform = 'translateY(0)'
      header.classList.remove('fixed')
    }
  })
}
