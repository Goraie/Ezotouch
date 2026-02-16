<div class="card">
	<div class="card__img">
		<img
			srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-origin-360x436.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-400x484.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-640x774.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-800x968.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-966x1170.png 966w"
			src="<?php bloginfo('template_directory'); ?>/assets/images/card-origin-966x1170.png"
			sizes="(min-width: 966px) 966px, 100vw" width="966" height="1170" alt decoding="async" loading="lazy">
	</div>
	<div class="card__cont">
		<div class="card__top">
			<?php if ($title): ?>
				<h3 class="card__title"><?php $title; ?></h3>
			<?php endif; ?>
			<?php if ($description): ?>
				<p class="card__descr opa-7 text-3"><?php $description; ?></p>
			<?php endif; ?>
		</div>
		<div class="card__action">
			<a class="btn btn card__btn" href="<?php echo esc_url( home_url( '/pack' ) ); ?>"><span>Подробнее</span><span class="bg"></span></a>
			<div class="card__bottom">
				<a class="btn btn btn-marketplace btn-marketplace-wb" href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank" rel="noopener noreferrer"><span class="icon">
						<svg fill="currentColor" stroke="none">
							<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
						</svg>
					</span><span class="bg"></span></a>
				<a class="btn btn btn-marketplace btn-marketplace-ozon" href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank" rel="noopener noreferrer"><span class="icon">
						<svg fill="currentColor" stroke="none">
							<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#ozon"></use>
						</svg>
					</span><span class="bg"></span></a>
			</div>
		</div>
	</div>
</div>