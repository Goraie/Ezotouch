gsap.registerPlugin(ScrollTrigger)

if (window.outerWidth > 1024) {
  document.addEventListener('DOMContentLoaded', function () {
    const heroSection = document.querySelector('.space')
    const container = document.querySelector('.container')
    const boxes = document.querySelectorAll('.space__card')
    const circ = document.querySelector('.space__cont-circ')

    const centerX = container.offsetWidth / 2
    const centerY = container.offsetHeight / 2
    const diametr = container.offsetWidth
    const radius = diametr / 2
    const totalBoxes = boxes.length
    const angleStep = 360 / totalBoxes

    const baseAngles = []

    boxes.forEach((box, i) => {
      const angle = i * angleStep
      baseAngles.push(angle)

      const rad = (angle * Math.PI) / 180
      const x = centerX + radius * Math.cos(rad)
      const y = centerY + radius * Math.sin(rad)

      gsap.set(box, {
        x: x - box.offsetWidth / 2,
        y: y - box.offsetHeight / 2,
      })
    })

    let isAnimating = false
    let rotationTimeline = null

    function createAnimation() {
      if (rotationTimeline) {
        rotationTimeline.kill()
      }

      rotationTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: heroSection,
          start: 'top bottom',
          end: 'bottom top',
          scrub: 1,
          toggleActions: 'play none none reverse',
          onEnter: () => {
            isAnimating = true
          },
          onLeave: () => {
            isAnimating = false
          },
          onEnterBack: () => {
            isAnimating = true
          },
          onLeaveBack: () => {
            isAnimating = false
          },
        },
      })

      rotationTimeline.to(
        {},
        {
          duration: 1,
          onUpdate: () => {
            const progress = rotationTimeline.progress()

            const rotationAngle = progress * 30

            boxes.forEach((box, i) => {
              const currentAngle = baseAngles[i] + rotationAngle
              const rad = (currentAngle * Math.PI) / 180

              const x = centerX + radius * Math.cos(rad)
              const y = centerY + radius * Math.sin(rad)

              rotateCirc(currentAngle)

              gsap.set(box, {
                x: x - box.offsetWidth / 2,
                y: y - box.offsetHeight / 2,
              })
            })
          },
        }
      )
    }

    function rotateCirc(angle) {
      circ.style.transform = `translate(-50%, -50%) rotate(-${angle / 2}deg)`
    }

    createAnimation()

    let resizeTimer
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer)
      resizeTimer = setTimeout(() => {
        createAnimation()
      }, 250)
    })
  })
}

function initIndividualSmoothAppear() {
  const config = {
    duration: 1,
    ease: 'power2.out',
    scrollTrigger: {
      start: 'top 75%',
      once: true,
      toggleActions: 'play none none reverse',
    },
  }

  gsap.utils.toArray('.gsap-smooth').forEach((element) => {
    gsap.fromTo(
      element,
      {
        y: 30,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: config.duration,
        ease: config.ease,
        scrollTrigger: {
          ...config.scrollTrigger,
          trigger: element,
        },
      }
    )
  })
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initIndividualSmoothAppear)
} else {
  initIndividualSmoothAppear()
}
