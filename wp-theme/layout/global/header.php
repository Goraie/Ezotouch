<!doctype html>
<html lang="ru">
<?php include_once('head.php') ?>

<style>
	.breadcrumbs a::after {
		background: url('<?php bloginfo('template_directory'); ?>/assets/images/arrow-next.svg') no-repeat center / contain;
	}
</style>

<body>
	<header class="header" data-js-overlay-menu="">
		<div class="header__container container">
			<nav class="header__menu">
				<ul class="header__menu-list">
					<li class="header__menu-item">
						<a class="header__menu-link" href="<?php echo esc_url( home_url( '/deck-type/taro' ) ); ?>">ТАРО</a>
					</li>
					<li class="header__menu-item">
						<a class="header__menu-link" href="<?php echo esc_url( home_url( '/deck-type/mak' ) ); ?>">МАК</a>
					</li>
					<li class="header__menu-item">
						<a class="header__menu-link is-active" href="#library">О нас</a>
					</li>
					<li class="header__menu-item">
						<a class="header__menu-link is-active" href="<?php echo esc_url( home_url( '/' ) ); ?>">Карта дня</a>
					</li>
				</ul>
			</nav>
			<a class="logo header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" aria-label="Home">
				<img class="logo__image" src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="" width="200"
					height="29" loading="eager">
			</a>
			<div class="header__action">
				<a class="btn btn btn-marketplace white btn-marketplace-wb header__btn" href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank" rel="noopener noreferrer"><span>Купить
						на</span><span class="icon">
						<svg fill="currentColor" stroke="none">
							<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
						</svg>
					</span><span class="bg"></span></a>
				<a class="btn btn btn-marketplace white btn-marketplace-ozon header__btn" href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank" rel="noopener noreferrer"><span>Купить
						на</span><span class="icon">
						<svg fill="currentColor" stroke="none">
							<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#ozon"></use>
						</svg>
					</span><span class="bg"></span></a>
			</div>
			<button class="burger-button header__burger" type="button" aria-label="Open menu" title="Open menu"
				data-js-overlay-menu-burger-button="">
				<svg class="burger-button__svg" width="30" height="30" viewBox="0 0 100 100">
					<path class="burger-button__line burger-button__line--1"
						d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
					</path>
					<path class="burger-button__line burger-button__line--2" d="M 20,50 H 80"></path>
					<path class="burger-button__line burger-button__line--3"
						d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
					</path>
				</svg>
			</button>
		</div>
		<div class="header-menu" data-js-overlay-menu-dialog="true">
			<div class="header-menu__popup">
				<button class="burger-button header-menu__burger is-active" type="button" aria-label="Open menu"
					title="Open menu" data-js-overlay-menu-burger-button="">
					<svg class="burger-button__svg" width="30" height="30" viewBox="0 0 100 100">
						<path class="burger-button__line burger-button__line--1"
							d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
						</path>
						<path class="burger-button__line burger-button__line--2" d="M 20,50 H 80"></path>
						<path class="burger-button__line burger-button__line--3"
							d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
						</path>
					</svg>
				</button>
				<ul class="header-menu__list">
					<li class="header-menu__item">
						<a class="header-menu__link big-text-m" href="<?php echo esc_url( home_url( '/deck-type/taro' ) ); ?>">ТАРО</a>
					</li>
					<li class="header-menu__item">
						<a class="header-menu__link big-text-m" href="<?php echo esc_url( home_url( '/deck-type/mak' ) ); ?>">МАК</a>
					</li>
					<li class="header-menu__item">
						<a class="header-menu__link big-text-m is-active" href="<?php echo esc_url( home_url( '#library' ) ); ?>">О нас</a>
					</li>
					<li class="header-menu__item">
						<a class="header-menu__link big-text-m is-active" href="<?php echo esc_url( home_url( '/' ) ); ?>">Карта дня</a>
					</li>
				</ul>
				<div class="header-menu__action">
					<a class="btn btn btn-marketplace white btn-marketplace-wb header-menu__btn header__btn"
						href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank" rel="noopener noreferrer"><span>Купить на</span><span class="icon">
							<svg fill="currentColor" stroke="none">
								<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
							</svg>
						</span><span class="bg"></span></a>
					<a class="btn btn btn-marketplace white btn-marketplace-ozon header-menu__btn header__btn"
						href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank" rel="noopener noreferrer"><span>Купить на</span><span class="icon">
							<svg fill="currentColor" stroke="none">
								<use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#ozon"></use>
							</svg>
						</span><span class="bg"></span></a>
				</div>
			</div>
		</div>
	</header>