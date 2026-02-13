const popup = document.querySelector('.popup')
const popupOpen = document.querySelectorAll('.popup-open')

popupOpen.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    popup.classList.add('active')
    document.querySelector('html').classList.add('is-lock')
  })
})

popup.addEventListener('click', (e) => {
  if (e.target.classList.contains('popup')) {
    popup.classList.remove('active')
    document.querySelector('html').classList.remove('is-lock')
  }
})
