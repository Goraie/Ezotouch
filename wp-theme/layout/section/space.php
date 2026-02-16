<style>

	<?php 
	$strokeBig = get_field('stroke-bg', 'option'); 
	$strokeSmall = get_field('stroke-sm', 'option'); 
	
	if ($strokeBig): ?>
    .space__path{
		background: url('<?php echo $strokeBig; ?>') no-repeat center / cover;
	}
	<?php endif; ?>
	
	<?php if ($strokeSmall): ?>
	.space__cont-circ{
		background: url('<?php echo $strokeSmall; ?>') no-repeat center / cover;
	}
	<?php endif; ?>

	
</style>


<section class="space gsap-smooth">
	<div class="space__w">
		<div class="container">
			<div class="space__path"></div>
			<div class="space__cont-circ"></div>

			<div class="space__cont">
				<h2>Найдите свой мир во вселенной EZOTOUCH</h2>
				<div class="space__mid">
					<div class="space__text big-text-m">
						<p>
							Ezotouch — это команда людей, которые создают визуальные
							вселенные.
						</p>
						<p>
							Мы работаем с Таро и метафорическими картами, как с живым
							языком образов и смыслов. Каждая колода для нас — это
							отдельная реальность, собранная с вниманием к мельчайшим
							деталям: свету, символам, композиции, настроению.
						</p>
					</div>
					<div class="space__text opa-7 text-1">
						<p>
							Мы продумываем не только внешний образ карт, но и их
							внутреннюю логику, создаём легенды и трактовки.
						</p>
						<p>
							Наши колоды остаются с человеком надолго: к ним
							возвращаются, их перечитывают, с ними работают в моменты
							тревоги, поиска и тишины. Они помогают упорядочить мысли,
							услышать себя, успокоиться и найти ответы внутри, а не
							снаружи
						</p>
					</div>
				</div>
				<div class="space__action">
					<button class="btn btn-primary space__btn" type="button">
						<span>Перейти в Библиотеку Таро</span><span class="bg"></span>
					</button>
					<button class="btn space__btn" type="button">
						<span>Перейти в библиотеку МАК</span><span class="bg"></span>
					</button>
				</div>
			</div>

			<?php
			$gallery_images = get_field('deck-gallery', 'option');

			if( $gallery_images && is_array($gallery_images) && !empty($gallery_images) ):
			?>
			<div class="space__list swiper">
				<div class="swiper-wrapper">
					<?php
					foreach( $gallery_images as $image_id ):

					$image_array = wp_get_attachment_image_src($image_id, 'large');

					if( $image_array ):
					$image_src = $image_array[0];
					$width = $image_array[1];
					$height = $image_array[2];
					$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
					if (!$image_alt) {
						$image_alt = 'Изображение из галереи';
					}

					$srcset_parts = [];
					$image_sizes = ['thumbnail', 'medium', 'medium_large', 'large', 'xlarge'];

					foreach ($image_sizes as $size_name) {
						$size_data = wp_get_attachment_image_src($image_id, $size_name);
						if ($size_data) {
							$srcset_parts[] = $size_data[0] . ' ' . $size_data[1] . 'w';
						}
					}

					$full_size_data = wp_get_attachment_image_src($image_id, 'full');
					if ($full_size_data) {
						if (!in_array($full_size_data[0], array_column(array_map(function($s) use ($image_id) { $d = wp_get_attachment_image_src($image_id, $s); return $d ? [$d[0]] : []; }, $image_sizes), 0))) {
							$srcset_parts[] = $full_size_data[0] . ' ' . $full_size_data[1] . 'w';
						}
					}

					$srcset_attr = '';
					if (!empty($srcset_parts)) {
						$srcset_attr = implode(', ', $srcset_parts);
					}
					$sizes_attr = "(max-width: 767px) 100vw, (max-width: 1023px) 50vw, (min-width: 1024px) calc(25vw - 20px)";

					?>
					<div class="space__card swiper-slide">
						<img
							 srcset="<?php echo esc_attr($srcset_attr); ?>"
							 src="<?php echo esc_url($image_src); ?>"
							 sizes="<?php echo esc_attr($sizes_attr); ?>"
							 width="<?php echo esc_attr($width); ?>"
							 height="<?php echo esc_attr($height); ?>"
							 alt="<?php echo esc_attr($image_alt); ?>"
							 decoding="async"
							 loading="lazy"
							 />
					</div>
					<?php
					endif;
					endforeach;
					?>
				</div>
			</div>
			<?php
			endif;
			?>
		</div>
	</div>
</section>