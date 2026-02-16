<section class="library gsap-smooth" id="library" aria-labelledby="offer-title">
	<div class="container">
		<div class="section-top">
			<h2 class="section-top__title">Погрузитесь в волшебную библиотеку EZOTOUCH</h2>
			<div class="section-top__right">
				<p class="section-top__text text-2">Познайте свои чувства и эмоции через наши карты</p>
				<button class="btn btn-primary section-top__btn popup-open" type="button"><span>Перейти в библиотеку</span><span class="bg"></span></button>
			</div>
		</div>
		<div class="library__w">
			<div class="library__w-t">
				<div class="library__card">
					<p class="library__text">Самопознание</p>
				</div>
				<div class="library__card">
					<p class="library__text">Психологические практики</p>
				</div>
			</div>
			<div class="library__w-t">
				<div class="library__card">
					<p class="library__text">Консультации</p>
				</div>
				<div class="library__card">
					<p class="library__text">Расклады на любовь, путь и предназначение</p>
				</div>
			</div>
		</div>
		<button class="btn btn-primary library__btn popup-open" type="button"><span>Перейти в библиотеку</span><span
				class="bg"></span></button>
	</div>
	<div class="popup">
		<div class="popup__w">
			<h2 class="popup__title">Выбери свой путь</h2>
			<div class="popup__list">
				<div class="popup__card">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/taro-bg.png"
						sizes="(min-width: 2880px) 2880px, 100vw" width="2880" height="1600" alt decoding="async" loading="lazy"
						class="popup__img">
					<a class="btn btn-primary popup__btn" href="<?php echo esc_url( home_url( '/catalog-taro' ) ); ?>"><span>Перейти в библиотеку Таро</span><span
							class="bg"></span></a>
				</div>
				<div class="popup__line"></div>
				<div class="popup__card">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/mak-bg.png"
						sizes="(min-width: 2880px) 2880px, 100vw" width="2880" height="1600" alt decoding="async" loading="lazy"
						class="popup__img">
					<a class="btn btn-primary popup__btn" href="<?php echo esc_url( home_url( '/catalog-mak' ) ); ?>"><span>Перейти в библиотеку Мак</span><span
							class="bg"></span></a>
				</div>
			</div>
		</div>
	</div>
</section>