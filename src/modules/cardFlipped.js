document.addEventListener('DOMContentLoaded', function () {
  const s_round = '.day__btn'

  const roundElements = document.querySelectorAll(s_round)

  roundElements.forEach((element) => {
    element.addEventListener('click', function (e) {
      e.preventDefault()

      document.querySelectorAll('.day__flipped').forEach((flipBox) => {
        flipBox.classList.toggle('flipped')
      })
    })
  })
})

document.addEventListener('DOMContentLoaded', (e) => {
  if (
    window.location.pathname === '/' ||
    window.location.pathname === '/catalog-taro' ||
    window.location.pathname === '/catalog-mak'
  ) {
    const body = document.querySelector('body')
    body.classList.add('texture')
  }
})
