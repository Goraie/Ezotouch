<?php include_once('layout/global/header.php'); ?>

<div class="catalog-page">

	<?php

	$current_term = get_queried_object();
	$term_slug = $current_term->slug;
	// $term_name = $current_term->name;
	$term_name = get_field('deck-type-title', $current_term);
	$description = get_field('deck-type-text', $current_term);
	$banner = get_field('deck-type-bg', $current_term);


	$decks = new WP_Query([
		'post_type' => 'deck',
		'tax_query' => [
			[
				'taxonomy' => 'deck-type',
				'field' => 'slug',
				'terms' => $term_slug
			]
		],
		'posts_per_page' => -1
	]);
	?>

</div>

<main class="content">
	<section class="offer offer-cat container" aria-labelledby="offer-title">
		<div class="offer__w">
			<div class="offer__left">
				<h1 class="offer__title"><?php echo $term_name; ?></h1>
				<?php if ($description): ?>
					<div class="offer__text-mobile text-2">
						<?php echo $description; ?>
					</div>
				<?php endif; ?>

			</div>
			<?php if ($description): ?>
				<div class="offer__text text-2">
					<?php echo $description; ?>
				</div>
			<?php endif; ?>

		</div>

		<?php
		if ($banner):
			echo '<img src="' . $banner['url'] . '" alt="' . $banner['alt'] . ' " decoding="async" loading="lazy" class="offer__bg"> ';
		endif;
		?>

	</section>
	<section class="catalog" aria-labelledby="catalog-title">
		<div class="container">

			<div class="section-top popular-top">
				<h2 class="section-top__title">Миры EZOTOUCH</h2>
				<div class="section-top__right">
					<p class="section-top__text text-2"></p>
				</div>
			</div>


			<div class="catalog__slider-wrapper">
				<div class="catalog__w catalog__w--desktop">
					<?php while ($decks->have_posts()):
						$decks->the_post();
						$title = get_the_title();
						$description = get_field('deck-descr');
						$permalink = get_permalink();
						?>
						<div class="card">
							<div class="card__img">
								<?php
								$preview = get_field('deck-preview');
								if ($preview):
									?>
									<img src="<?php echo esc_url($preview['url']); ?>" width="<?php echo esc_attr($preview['width']); ?>"
										height="<?php echo esc_attr($preview['height']); ?>"
										alt="<?php echo esc_attr($preview['alt'] ?? $title); ?>" decoding="async" loading="lazy">
								<?php else: ?>
									<img src="<?php bloginfo('template_directory'); ?>/assets/images/card-fallback.png" width="966"
										height="1170" alt="<?php echo esc_attr($title); ?>" decoding="async" loading="lazy">
								<?php endif; ?>
							</div>

							<div class="card__cont">
								<div class="card__top">
									<?php if ($title): ?>
										<h3 class="card__title">
											<?php echo esc_html($title); ?>
										</h3>
									<?php endif; ?>
									<?php if ($description): ?>
										<p class="card__descr opa-7 text-3">
											<?php echo esc_html($description); ?>
										</p>
									<?php endif; ?>
								</div>
								<div class="card__action">
									<a class="btn btn card__btn" href="<?php echo esc_url($permalink); ?>">
										<span>Подробнее</span><span class="bg"></span>
									</a>
									<div class="card__bottom">
										<a class="btn btn btn-marketplace btn-marketplace-wb" href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank" rel="noopener noreferrer">
											<span class="icon">
												<svg fill="currentColor" stroke="none">
													<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
												</svg>
											</span>
											<span class="bg"></span>
										</a>
										<a class="btn btn btn-marketplace btn-marketplace-ozon" href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank" rel="noopener noreferrer">
											<span class="icon">
												<svg fill="currentColor" stroke="none">
													<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#ozon"></use>
												</svg>
											</span>
											<span class="bg"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>

				<div class="catalog__slider catalog__w--mobile swiper" data-swiper="catalog">
					<div class="swiper-wrapper">
						<?php
						$decks_mobile = new WP_Query([
							'post_type' => 'deck',
							'tax_query' => [['taxonomy' => 'deck-type', 'field' => 'slug', 'terms' => get_queried_object()->slug]],
							'posts_per_page' => -1
						]);

						while ($decks_mobile->have_posts()):
							$decks_mobile->the_post();
							$title = get_the_title();
							$description = get_field('deck-descr');
							$permalink = get_permalink();
							?>
							<div class="swiper-slide">
								<div class="card">
									<div class="card__img">
										<?php
										$preview = get_field('deck-preview');
										if ($preview):
											?>
											<img src="<?php echo esc_url($preview['url']); ?>" width="<?php echo esc_attr($preview['width']); ?>"
												height="<?php echo esc_attr($preview['height']); ?>"
												alt="<?php echo esc_attr($preview['alt'] ?? $title); ?>" decoding="async" loading="lazy">
										<?php else: ?>
											<img src="<?php bloginfo('template_directory'); ?>/assets/images/card-fallback.png" width="966"
												height="1170" alt="<?php echo esc_attr($title); ?>" decoding="async" loading="lazy">
										<?php endif; ?>
									</div>

									<div class="card__cont">
										<div class="card__top">
											<?php if ($title): ?>
												<h3 class="card__title">
													<?php echo esc_html($title); ?>
												</h3>
											<?php endif; ?>
											<?php if ($description): ?>
												<p class="card__descr opa-7 text-3">
													<?php echo esc_html($description); ?>
												</p>
											<?php endif; ?>
										</div>
										<div class="card__action">
											<a class="btn btn card__btn" href="<?php echo esc_url($permalink); ?>">
												<span>Подробнее</span><span class="bg"></span>
											</a>
											<div class="card__bottom">
												<a class="btn btn btn-marketplace btn-marketplace-wb" href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank" rel="noopener noreferrer">
													<span class="icon">
														<svg fill="currentColor" stroke="none">
															<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
														</svg>
													</span>
													<span class="bg"></span>
												</a>
												<a class="btn btn btn-marketplace btn-marketplace-ozon" href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank" rel="noopener noreferrer">
													<span class="icon">
														<svg fill="currentColor" stroke="none">
															<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#ozon"></use>
														</svg>
													</span>
													<span class="bg"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
				</div>
			</div>

		</div>
	</section>

	<?php if ($term_slug == 'taro'): ?>
		<section class="open" aria-labelledby="open-title">
			<div class="container">
				<div class="open__w">
					<div class="open__left">
						<div class="open__top">
							<h2 class="open__title">Откройте врата к истокам</h2>
							<div class="open__text text-2 opa-9">
								<p>Таро Райдера-Уэйта — классика, прошедшая испытание временем, раскрывающая скрытые силы вселенной через символы и архетипы. Каждая карта — живая история, полная мудрости, которая помогает найти ясность
									и ответы на жизненные вопросы</p>
								<p>Исследуйте мир Таро Райдера-Уэйта и откройте для себя силу этой уникальной колоды. Откройте для себя
									карты, с которых все началось</p>
							</div>
						</div>
						<button class="btn btn-primary open__btn" type="button"><span>Подробное описание колоды</span><span
								class="bg"></span></button>
					</div>
					<div class="open__right">
						<img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
							src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
							sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
							class="open__icon">
						<img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
							src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
							sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
							class="open__icon">
						<img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
							src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
							sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
							class="open__icon">
						<img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
							src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
							sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
							class="open__icon">
						<img
							srcset="<?php bloginfo('template_directory'); ?>/assets/images/main-taro-360x616.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/main-taro-400x684.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/main-taro-640x1094.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/main-taro-800x1368.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/main-taro-991x1695.png 991w"
							src="<?php bloginfo('template_directory'); ?>/assets/images/main-taro-991x1695.png"
							sizes="(min-width: 991px) 991px, 100vw" width="991" height="1695" alt decoding="async" loading="lazy"
							class="open__img">
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>



	<section class="world" aria-labelledby="offer-title">
		<div class="container">
			<h2 class="world__title">Найдите свой мир в библиотеке EZOTOUCH</h2>
			<div class="world__w">
				<div class="world__line"></div>
				<div class="world__card">
					<div class="world__top"><span class="world__count">1</span>
						<p class="world__text text-1">Каждая колода создается командой психологов и художников</p>
					</div>
					<img
						srcset="<?php bloginfo('template_directory'); ?>/assets/images/world-1-360x256.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/world-1-400x284.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/world-1-640x454.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/world-1-800x568.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/world-1-842x600.png 842w"
						src="<?php bloginfo('template_directory'); ?>/assets/images/world-1-842x600.png"
						sizes="(min-width: 842px) 842px, 100vw" width="842" height="600" alt decoding="async" loading="lazy"
						class="world__img">
				</div>
				<div class="world__line"></div>
				<div class="world__card">
					<div class="world__top"><span class="world__count">2</span>
						<p class="world__text text-1"><b>Мы прислушиваемся к тем,</b> кто работает с нашими картами, и бережно
							дорабатываем каждую деталь</p>
					</div>
					<img
						srcset="<?php bloginfo('template_directory'); ?>/assets/images/world-2-360x256.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/world-2-400x284.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/world-2-640x454.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/world-2-800x568.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/world-2-842x600.png 842w"
						src="<?php bloginfo('template_directory'); ?>/assets/images/world-2-842x600.png"
						sizes="(min-width: 842px) 842px, 100vw" width="842" height="600" alt decoding="async" loading="lazy"
						class="world__img">
				</div>
				<div class="world__line"></div>
				<div class="world__card">
					<div class="world__top"><span class="world__count">3</span>
						<p class="world__text text-1"><b>Карты сделаны так, чтобы с ними хотелось работать</b> (мягкие края и
							гладкая поверхность)</p>
					</div>
					<img
						srcset="<?php bloginfo('template_directory'); ?>/assets/images/world-3-360x256.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/world-3-400x284.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/world-3-640x454.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/world-3-800x568.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/world-3-842x600.png 842w"
						src="<?php bloginfo('template_directory'); ?>/assets/images/world-3-842x600.png"
						sizes="(min-width: 842px) 842px, 100vw" width="842" height="600" alt decoding="async" loading="lazy"
						class="world__img">
				</div>
				<div class="world__line"></div>
			</div>
		</div>
	</section>
	<section class="library" aria-labelledby="offer-title">
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
						<p class="library__text">Расклады на любовь, путь и предназначение</p>
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
						<img
							srcset="<?php bloginfo('template_directory'); ?>/assets/images/offer-bg-360x202.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-400x224.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-640x358.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-800x448.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1024x573.png 1024w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1280x717.png 1280w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1440x806.png 1440w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1920x1075.png 1920w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-2560x1434.png 2560w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-2880x1600.png 2880w"
							src="<?php bloginfo('template_directory'); ?>/assets/images/offer-bg-2880x1600.png"
							sizes="(min-width: 2880px) 2880px, 100vw" width="2880" height="1600" alt decoding="async" loading="lazy"
							class="popup__img">
						<a class="btn btn-primary popup__btn" href="<?php echo esc_url( home_url( '/deck-type/taro' ) ); ?>"><span>Перейти в библиотеку Таро</span><span
								class="bg"></span></a>
					</div>
					<div class="popup__line"></div>
					<div class="popup__card">
						<img
							srcset="<?php bloginfo('template_directory'); ?>/assets/images/offer-bg-360x202.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-400x224.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-640x358.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-800x448.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1024x573.png 1024w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1280x717.png 1280w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1440x806.png 1440w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-1920x1075.png 1920w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-2560x1434.png 2560w, <?php bloginfo('template_directory'); ?>/assets/images/offer-bg-2880x1600.png 2880w"
							src="<?php bloginfo('template_directory'); ?>/assets/images/offer-bg-2880x1600.png"
							sizes="(min-width: 2880px) 2880px, 100vw" width="2880" height="1600" alt decoding="async" loading="lazy"
							class="popup__img">
						<a class="btn btn-primary popup__btn" href="<?php echo esc_url( home_url( '/deck-type/mak' ) ); ?>"><span>Перейти в библиотеку Мак</span><span
								class="bg"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>


<?php include_once('layout/global/footer.php'); ?>
