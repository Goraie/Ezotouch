<footer class="footer">
	<div class="container">
		<div class="footer__left">
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" aria-label="Home">
				<img class="logo__image" src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="" width="200"
					height="29" loading="lazy">
			</a>
			<div class="footer__bottom">
				<div class="footer__col">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__link">Политика конфиденциальности</a><span>Все права защищены</span>
				</div><span>2026</span>
			</div>
		</div>
		<div class="footer__center">
			<h5 class="footer__title opa-5">Связаться с нами</h5>
			<div class="footer__menu">
				<ul class="footer__list">
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__contacts">telegram</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__contacts">whatsapp</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__contacts">example@gmail.com</a>
					</li>
				</ul>
				<div class="footer__action">
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
			</div>
		</div>
		<div class="footer__right">
			<form class="footer__form" data-js-telegram-form="true">
				<div class="footer__fields">
					<div class="field footer__input">
						<input class="field__control" id="анастасия" type="input" placeholder="Анастасия" required=""
							inputMode="text">
					</div>
					<div class="field footer__input">
						<input class="field__control" id="+7-(999)-999-99-99" placeholder="+7 (999) 999-99-99" required=""
							inputMode="tel" data-js-input-mask="+7 (000) 000-00-00">
					</div>
					<div class="field footer__input">
						<textarea class="field__control" id="напишите-послание" type="textarea" placeholder="Напишите послание"
							required="" inputMode="text"></textarea>
					</div>
				</div>
				<button class="btn btn-primary btn-submit footer__submit" type="submit"><span>Отправить послание</span><span
						class="bg"></span></button>
			</form>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>