import Swiper from 'swiper'
import 'swiper/css'

function initListCardsSlider() {
	if (typeof document === 'undefined') {return}

	const swiperEls = document.querySelectorAll('.swiper[data-list-cards]')

	swiperEls.forEach((swiperEl) => {
		if (!swiperEl || swiperEl.swiper) {return}

		const wrap = swiperEl.closest('.list-cards__w')
		const prevBtn = wrap?.querySelector('.list-cards__arrow-prev')
		const nextBtn = wrap?.querySelector('.list-cards__arrow-next')

		if (!prevBtn || !nextBtn) {return}

		const swiper = new Swiper(swiperEl, {
			loop: true,
			grabCursor: true,
			slidesPerView: 1.2,
			spaceBetween: 20,
			speed: 400,

			navigation: {
				nextEl: nextBtn,
				prevEl: prevBtn,
			},

			breakpoints: {
				480: {
					slidesPerView: 1.6,
					spaceBetween: 20,
				},
				768: {
					spaceBetween: 24,
					slidesPerView: 2,
				},
				1024: {
					spaceBetween: 24,
					slidesPerView: 3,
				},
				1420: {
					spaceBetween: 24,
					slidesPerView: 4,
				},
			},
		})
	})
}

if (typeof document !== 'undefined') {
	const init = () => {
		setTimeout(initListCardsSlider, 100)
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init)
	} else {
		init()
	}

	window.addEventListener('load', () => {
		setTimeout(initListCardsSlider, 200)
	})

	// Отслеживание появления новых элементов (для React)
	if (typeof MutationObserver !== 'undefined') {
		const observer = new MutationObserver(() => {
			initListCardsSlider()
		})

		observer.observe(document.body, {
			childList: true,
			subtree: true,
		})
	}
}
