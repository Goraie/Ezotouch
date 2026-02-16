<section class="day gsap-smooth" aria-labelledby="day-title">
	<div class="container">
		<div class="section-top day-top">
			<h2 class="section-top__title">Ваша карта дня</h2>
			<div class="section-top__right">
				<p class="section-top__text text-2">Узнайте какая из карт сегодня выпадет Вам.<!-- --> <span
						class="opa-5">Возможно, это знак</span></p>
			</div>
		</div>
		<div class="day__wrapper">
			<div class="day__card">
				<div class="day__flipped">
					<img
						srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-close-360x644.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-close-400x716.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-close-640x1146.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-close-800x1432.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-close-958x1717.png 958w"
						src="<?php bloginfo('template_directory'); ?>/assets/images/card-close-958x1717.png"
						sizes="(min-width: 958px) 958px, 100vw" width="958" height="1717" alt decoding="async" loading="lazy"
						class="day__close">
					<img
						srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-open-360x644.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-open-400x716.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-open-640x1146.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-open-800x1432.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-open-958x1717.png 958w"
						src="<?php bloginfo('template_directory'); ?>/assets/images/card-open-958x1717.png"
						sizes="(min-width: 958px) 958px, 100vw" width="958" height="1717" alt decoding="async" loading="lazy"
						class="day__open">
				</div>
			</div>
			<div class="day__descr">
				<div class="day__top"><span class="day__span">Ваша карта</span>
					<h2 class="day__title">Название карты</h2>
				</div>
				<div class="day__content">
					<p>Тут будет описание вашей карты</p>
				</div>
				<div class="day__action">
					<button class="btn btn btn-primary day__btn" type="button"><span>Подобрать карту</span><span
							class="bg"></span></button>
				</div>
			</div>
		</div>
	</div>
</section>