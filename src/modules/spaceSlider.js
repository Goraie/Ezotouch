import Swiper from 'swiper'
import { Autoplay } from 'swiper/modules'
import 'swiper/css'

function initSpaceSlider() {
  const spaceList = document.querySelector('.space__list.swiper')
  if (!spaceList) {return}

  const isMobile = window.innerWidth <= 1024
  let swiperInstance = spaceList.swiper

  if (isMobile && !swiperInstance) {
    const boxes = document.querySelectorAll('.space__card')
    if (window.gsap) {
      boxes.forEach((box) => {
        window.gsap.set(box, { clearProps: 'x,y' })
      })
    }

    swiperInstance = new Swiper(spaceList, {
      modules: [Autoplay],
      loop: true,
      slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 20,
      speed: 700,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      breakpoints: {
        480: {
          spaceBetween: 20,
        },
        768: {
          spaceBetween: 24,
        },
      },
    })
  } else if (!isMobile && swiperInstance) {
    swiperInstance.destroy(true, true)
    spaceList.swiper = null
  }
}

function debounce(func, wait) {
  let timeout
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout)
      func(...args)
    }
    clearTimeout(timeout)
    timeout = setTimeout(later, wait)
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initSpaceSlider)
} else {
  initSpaceSlider()
}

let resizeTimer
window.addEventListener('resize', () => {
  clearTimeout(resizeTimer)
  resizeTimer = setTimeout(() => {
    initSpaceSlider()
  }, 250)
})
