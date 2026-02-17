<?php

/*

Template Name: Главная

*/

include_once('layout/global/header.php'); ?>

<main class="content">
  <section class="offer container" aria-labelledby="offer-title">
    <div class="offer__w">
      <div class="offer__left">
        <h1 class="offer__title">Магическая Библиотека колод Таро и&nbsp;МАК</h1>
        <div class="offer__text-mobile">
          <p class="text-2">Каждая колода Ezotouch&nbsp;&mdash; это отдельный мир со&nbsp;своей энергией и&nbsp;историей
          </p>
          <p class="text-2 opa-5">Каждая карта продумана до&nbsp;мелочей, она хранит свой смысл и&nbsp;помогает увидеть
            ответы на&nbsp;любые вопросы</p>
        </div>
        <div class="offer__action">
          <a class="btn btn btn-primary" href="<?php echo esc_url(home_url('/deck-type/taro')); ?>"><span>Выбрать
              колоду Таро</span><span class="bg"></span></a>
          <a class="btn btn" href="<?php echo esc_url(home_url('/deck-type/mak')); ?>"><span>Выбрать колоду
              МАК</span><span class="bg"></span></a>
        </div>
      </div>
      <div class="offer__text">
        <p class=" text-2">Каждая колода Ezotouch&nbsp;&mdash; это отдельный мир со&nbsp;своей энергией и&nbsp;историей
        </p>
        <p class=" text-2 opa-5">Каждая карта продумана до&nbsp;мелочей, она хранит свой смысл и&nbsp;помогает увидеть
          ответы на&nbsp;любые вопросы</p>
      </div>
    </div>

    <img
      srcset="<?php bloginfo('template_directory'); ?>/assets/images/first-bg-360x202.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-400x224.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-640x358.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-800x448.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-1024x573.png 1024w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-1280x717.png 1280w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-1440x806.png 1440w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-1920x1075.png 1920w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-2560x1434.png 2560w, <?php bloginfo('template_directory'); ?>/assets/images/first-bg-2880x1600.png 2880w"
      src="<?php bloginfo('template_directory'); ?>/assets/images/first-bg-2880x1600.png"
      sizes="(min-width: 2880px) 2880px, 100vw" width="2880" height="1600" alt decoding="async" loading="lazy"
      class="offer__bg">
  </section>
  <section class="taro gsap-smooth" aria-labelledby="offer-title">
    <div class="container">
      <div class="section-top taro-top">
        <h2 class="section-top__title">Карты таро EZOTOUCH</h2>
        <div class="section-top__right">
          <p class="section-top__text text-2">Наши колоды разработаны на&nbsp;основе <span class="opa-5">классической
              системы Таро Райдера&#8209;Уэйта</span></p>
        </div>
      </div>
      <div class="taro__w">
        <div class="taro__left">
          <div class="taro__list">
            <div class="taro-card">
              <img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
                src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
                sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
                class="taro-card__img">
              <p class="taro-card__text">Это диалог с&nbsp;собой через визуальные образы.<span class="opa-6">Карты
                  помогают найти ответы на&nbsp;вопросы, которые вас так волнуют</span></p>
            </div>
            <div class="taro-card">
              <img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
                src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
                sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
                class="taro-card__img">
              <p class="taro-card__text">Это инструмент структурирования мышления<span class="opa-6">Он&nbsp;позволяет
                  увидеть ситуацию целиком и&nbsp;отделить главное от&nbsp;второстепенного</span></p>
            </div>
            <div class="taro-card">
              <img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
                src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
                sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
                class="taro-card__img">
              <p class="taro-card__text">Это способ поиска опоры и&nbsp;решений<span class="opa-6">Карты используют
                  не&nbsp;для предсказаний, а&nbsp;для выбора направления и&nbsp;конкретных шагов</span></p>
            </div>
          </div>
          <a class="btn btn btn-primary taro__btn"
            href="<?php echo esc_url(home_url('/deck-type/taro')); ?>"><span>Перейти в Библиотеку Таро</span><span
              class="bg"></span></a>
        </div>
        <img
          srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-taro-360x324.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-taro-400x360.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-taro-640x576.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-taro-800x720.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-taro-1024x922.png 1024w, <?php bloginfo('template_directory'); ?>/assets/images/card-taro-1046x941.png 1046w"
          src="<?php bloginfo('template_directory'); ?>/assets/images/card-taro-1046x941.png"
          sizes="(min-width: 1046px) 1046px, 100vw" width="1046" height="941" alt decoding="async" loading="lazy"
          class="taro__right">
      </div>
    </div>
  </section>
  <section class="taro-read gsap-smooth" aria-labelledby="taro-read-title">
    <div class="container">
      <h2 class="taro-read__title">Как читать и&nbsp;понимать карты ТАРО?</h2>
      <div class="taro-read__w">
        <div class="taro-read__card">
          <div class="taro-read__image">
            <img
              srcset="<?php bloginfo('template_directory'); ?>/assets/images/taro-read-1-360x115.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-1-400x128.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-1-640x205.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-1-800x256.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-1-898x284.png 898w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/taro-read-1-898x284.png"
              sizes="(min-width: 898px) 898px, 100vw" width="898" height="284" alt decoding="async" loading="lazy"
              class="taro-read__img">
            <p class="taro-read__descr big-text-m">С&nbsp;чего начинается диалог с&nbsp;картами?</p>
          </div>
          <div class="taro-read__content">
            <h4 class="taro-read__heading">Настрой перед раскладом</h4>
            <div class="taro-read__bottom">
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Выбор колоды</h5>
                <p class="text-2 opa-5">Для начала рекомендуется выбрать классическую колоду, например, Таро
                  Райдера-Уэйта, так как большинство учебных материалов и&nbsp;значений карт основаны именно на&nbsp;ней
                </p>
              </div>
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Изучение значений</h5>
                <p class="text-2 opa-5">Каждая из&nbsp;78&nbsp;карт (Арканов) имеет свое уникальное значение. Важно
                  изучить как Старшие (22), так и&nbsp;Младшие Арканы (56). Можно начать с&nbsp;изучения нескольких карт
                  или мастей, постепенно расширяя знания</p>
              </div>
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Развитие интуиции</h5>
                <p class="text-2 opa-5">Помимо заучивания значений, ключевым аспектом является ваша личная интерпретация
                  символов и&nbsp;образов, которые вы&nbsp;видите на&nbsp;картах. Практика помогает развить эту интуицию
                </p>
              </div>
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Подготовка</h5>
                <p class="text-2 opa-5">Перед сеансом важно очистить разум, сфокусироваться на&nbsp;своем вопросе
                  и&nbsp;создать спокойную атмосферу</p>
              </div>
            </div>

          </div>
        </div>
        <div class="taro-read__card">
          <div class="taro-read__image">
            <img
              srcset="<?php bloginfo('template_directory'); ?>/assets/images/taro-read-2-360x115.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-2-400x128.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-2-640x205.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-2-800x256.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/taro-read-2-898x284.png 898w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/taro-read-2-898x284.png"
              sizes="(min-width: 898px) 898px, 100vw" width="898" height="284" alt decoding="async" loading="lazy"
              class="taro-read__img">
            <p class="taro-read__descr big-text-m">Дальше переходим к магии</p>
          </div>
          <div class="taro-read__content">
            <h4 class="taro-read__heading">Техники расклада</h4>
            <div class="taro-read__bottom">
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Выбор колоды</h5>
                <p class="text-2 opa-5">Для новичков отлично подходят простые расклады, например, на&nbsp;трех картах
                  (прошлое/настоящее/будущее, ситуация/действие/результат)</p>
              </div>
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Формулировка вопроса</h5>
                <p class="text-2 opa-5">Четко и&nbsp;ясно сформулируйте вопрос, на&nbsp;который вы&nbsp;хотите получить
                  ответ. От&nbsp;этого зависит точность толкования</p>
              </div>
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Перемешивание карт</h5>
                <p class="text-2 opa-5">Тщательно перемешайте колоду, держа в&nbsp;уме свой вопрос. Затем вытащите карты
                  в&nbsp;соответствии с&nbsp;выбранной схемой расклада</p>
              </div>
              <div class="taro-read__point">
                <h5 class="text-2 opa-8">Толкование</h5>
                <p class="text-2 opa-5">Разложите карты (обычно рубашкой вверх, затем переворачивая)
                  и&nbsp;интерпретируйте их&nbsp;значения в&nbsp;контексте заданного вопроса и&nbsp;позиций
                  в&nbsp;раскладе</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="list-cards gsap-smooth" aria-labelledby="list-cards-title">
    <div class="container">
      <div class="section-top taro-cards-top">
        <h2 class="section-top__title">Выберите колоду таро, которая вам откликнется</h2>
        <div class="section-top__right">
          <p class="section-top__text text-2">Каждая колода состоит из&nbsp;78&nbsp;карт &mdash;<span
              class="opa-5">классический формат, принятый в&nbsp;системе Таро Райдера-Уэйта</span></p>
          <a class="btn btn-primary section-top__btn"
            href="<?php echo esc_url(home_url('/deck-type/taro')); ?>"><span>Посмотреть другие колоды</span><span
              class="bg"></span></a>
        </div>
      </div>
      <div class="list-cards__w">
        <div class="list-cards__arrow list-cards__arrow-prev">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <div class="list-cards__arrow list-cards__arrow-next">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438" stroke="black" stroke-width="2"></path>
          </svg>
        </div>
        <div class="list-cards__slider">
          <div class="list-cards__swiper swiper taro" data-list-cards>
            <div class="swiper-wrapper">
              <?php
              $decsHits = get_field('taro-cards');

              if ($decsHits):
                if (is_array($decsHits)):
                  foreach ($decsHits as $post):

                    setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <div class="card">
                        <a href="<?php echo get_permalink(); ?>" class=" card__img">
                          <?php
                          $preview = get_field('deck-preview');
                          if ($preview):
                            ?>
                            <img src="<?php echo esc_url($preview['url']); ?>"
                              width="<?php echo esc_attr($preview['width']); ?>"
                              height="<?php echo esc_attr($preview['height']); ?>"
                              alt="<?php echo esc_attr($preview['alt'] ?? $title); ?>" decoding="async" loading="lazy">
                          <?php else: ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/card-fallback.png" width="966"
                              height="1170" alt="<?php echo esc_attr($title); ?>" decoding="async" loading="lazy">
                          <?php endif; ?>
                        </a>

                        <div class="card__cont">
                          <div class="card__top">
                            <?php if (get_the_title()): ?>
                              <h3 class="card__title">
                                <a href="<?php echo get_permalink(); ?>">
                                  <?php echo get_the_title() ?>
                                </a>
                              </h3>
                            <?php endif; ?>
                            <?php if (get_field('deck-descr')): ?>
                              <div class=" card__descr opa-7 text-3">
                                <?php the_field('deck-descr'); ?>
                              </div>
                            <?php endif; ?>
                          </div>
                          <div class="card__action">
                            <a class="btn btn card__btn" href="<?php echo get_permalink(); ?>">
                              <span>Подробнее</span><span class="bg"></span>
                            </a>
                            <div class="card__bottom">
                              <a class="btn btn btn-marketplace btn-marketplace-wb"
                                href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank"
                                rel="noopener noreferrer">
                                <span class="icon">
                                  <svg fill="currentColor" stroke="none">
                                    <use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
                                  </svg>
                                </span>
                                <span class="bg"></span>
                              </a>
                              <a class="btn btn btn-marketplace btn-marketplace-ozon"
                                href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank"
                                rel="noopener noreferrer">
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
                  <?php endforeach;
                  wp_reset_postdata();
                else: ?>
                  <p>Проверь поле "hit" в админке</p>
                <?php endif;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
      <a class="btn btn-primary list-cards__btn"
        href="<?php echo esc_url(home_url('/deck-type/taro')); ?>"><span>Посмотреть другие колоды</span><span
          class="bg"></span></a>
    </div>
  </section>
  <section class="mak gsap-smooth" aria-labelledby="mak-title">
    <div class="container">
      <div class="mak__top">
        <h2 class="mak__title">Метафорические ассоциативные карты</h2>
        <p class="mak__text opa-8 big-text-l">Вытяните карту&nbsp;&mdash; и&nbsp;пусть её&nbsp;образ станет зеркалом для
          ваших мыслей и&nbsp;чувств</p>
        <p class="mak__text opa-8 big-text-l">Простой способ увидеть своё состояние со&nbsp;стороны, найти ясность
          и&nbsp;внутреннюю опору</p>
      </div>
      <img
        srcset="<?php bloginfo('template_directory'); ?>/assets/images/mak-360x176.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/mak-400x196.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/mak-640x314.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/mak-800x392.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/mak-1024x502.png 1024w, <?php bloginfo('template_directory'); ?>/assets/images/mak-1280x627.png 1280w, <?php bloginfo('template_directory'); ?>/assets/images/mak-1440x706.png 1440w, <?php bloginfo('template_directory'); ?>/assets/images/mak-1920x941.png 1920w, <?php bloginfo('template_directory'); ?>/assets/images/mak-2560x1254.png 2560w, <?php bloginfo('template_directory'); ?>/assets/images/mak-2720x1336.png 2720w"
        src="<?php bloginfo('template_directory'); ?>/assets/images/mak-2720x1336.png"
        sizes="(min-width: 2720px) 2720px, 100vw" width="2720" height="1336" alt decoding="async" loading="lazy"
        class="mak__img">
    </div>
  </section>
  <section class="mak-read gsap-smooth" aria-labelledby="mak-read-title">
    <div class="container">
      <div class="section-top mak-read-top">
        <h2 class="section-top__title">Как работать с&nbsp;метафорическими картами</h2>
        <div class="section-top__right">
          <p class="section-top__text text-2"><span class="opa-6">(инструкция)</span></p>
        </div>
      </div>
      <div class="mak-read__w">
        <div class="mak-read-card">
          <div class="mak-read-card__top"><span class="mak-read-card__count">01</span>
            <img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
              sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
              class="mak-read-card__icon">
          </div>
          <div class="mak-read-card__bottom">
            <h3 class="mak-read-card__title">Сформулируйте вопрос</h3>
            <div class="mak-read-card__cont">
              <div class="mak-read-card__w">
                <p>Он&nbsp;должен касаться вас лично и&nbsp;ваших внутренних процессов</p>
                <p>Он&nbsp;не&nbsp;должен запрашивать конкретные даты или сроки</p>
              </div>
              <div class="mak-read-card__w">
                <h5>Примеры</h5>
                <p>&quot;Что мешает мне принять решение?&quot;, &quot;Какой ресурс поможет мне в текущей
                  ситуации?&quot;, &quot;Что я чувствую по отношению к этой проблеме?&quot;</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mak-read-card">
          <div class="mak-read-card__top"><span class="mak-read-card__count">02</span>
            <img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
              sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
              class="mak-read-card__icon">
          </div>
          <div class="mak-read-card__bottom">
            <h3 class="mak-read-card__title">Выберите карту</h3>
            <div class="mak-read-card__cont">
              <div class="mak-read-card__w">
                <h5>"Вслепую"</h5>
                <p>Вытащите карту из&nbsp;колоды, не&nbsp;глядя на&nbsp;изображение. Этот способ часто используется для
                  получения неожиданных ответов от&nbsp;подсознания</p>
              </div>
              <div class="mak-read-card__w">
                <h5>"В открытую"</h5>
                <p>Просмотрите колоду и&nbsp;выберите изображение, которое &laquo;цепляет&raquo; вас больше всего,
                  вызывает эмоциональный отклик или кажется наиболее подходящим к&nbsp;вашему вопросу</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mak-read-card">
          <div class="mak-read-card__top"><span class="mak-read-card__count">03</span>
            <img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
              sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
              class="mak-read-card__icon">
          </div>
          <div class="mak-read-card__bottom">
            <h3 class="mak-read-card__title">Исследуйте карту (интерпретация)</h3>
            <div class="mak-read-card__cont">
              <div class="mak-read-card__w">
                <h5>Задайте себе вопросы, глядя на выбранную карту:</h5>
                <p>Что вы&nbsp;видите на&nbsp;картинке? Опишите детали, цвета, объекты</p>
                <p>Какие&nbsp;чувства и&nbsp;эмоции вызывает у&nbsp;вас это изображение?</p>
                <p>Какое отношение эта карта имеет к&nbsp;вашему запросу (вопросу)?</p>
                <p>Что символизирует для вас этот образ?</p>
                <p>На&nbsp;что (или кого) похож этот персонаж/объект из&nbsp;вашей жизни?</p>
                <p>Какой совет или послание содержится в&nbsp;этой карте для вас?</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mak-read-card">
          <div class="mak-read-card__top"><span class="mak-read-card__count">04</span>
            <img srcset="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png 50w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/star-50x55.png"
              sizes="(min-width: 50px) 50px, 100vw" width="50" height="55" alt decoding="async" loading="lazy"
              class="mak-read-card__icon">
          </div>
          <div class="mak-read-card__bottom">
            <h3 class="mak-read-card__title">Сделайте выводы и&nbsp;наметьте действия</h3>
            <div class="mak-read-card__cont">
              <div class="mak-read-card__w">
                <p>Обобщите свои ассоциации и&nbsp;инсайты</p>
                <p>Как они помогают вам по-новому взглянуть на&nbsp;вашу ситуацию?</p>
                <p>Подумайте, какие конкретные шаги вы&nbsp;можете предпринять, исходя из&nbsp;полученных озарений </p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="list-cards gsap-smooth" aria-labelledby="list-cards-title">
    <div class="container">
      <div class="section-top mak-cards-top">
        <h2 class="section-top__title">Выберите колоду мак, которая вам откликнется</h2>
        <div class="section-top__right">
          <p class="section-top__text text-2">Метафорические карты используются для работы<!-- --> <span class="opa-6">
              с&nbsp;чувствами, мыслями и&nbsp;внутренними состояниями через образы </span></p>
          <a class="btn btn-primary section-top__btn"
            href="<?php echo esc_url(home_url('/deck-type/mak')); ?>"><span>Посмотреть другие колоды</span><span
              class="bg"></span></a>
        </div>
      </div>
      <div class="list-cards__w">
        <div class="list-cards__arrow list-cards__arrow-prev">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <div class="list-cards__arrow list-cards__arrow-next">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438" stroke="black" stroke-width="2"></path>
          </svg>
        </div>
        <div class="list-cards__slider">
          <div class="list-cards__swiper swiper mak" data-list-cards>
            <div class="swiper-wrapper ">
              <?php
              $decsHits = get_field('mak-cards');

              if ($decsHits):
                if (is_array($decsHits)):
                  foreach ($decsHits as $post):

                    setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <div class="card">
                        <a href="<?php echo get_permalink(); ?>" class=" card__img">
                          <?php
                          $preview = get_field('deck-preview');
                          if ($preview):
                            ?>
                            <img src="<?php echo esc_url($preview['url']); ?>"
                              width="<?php echo esc_attr($preview['width']); ?>"
                              height="<?php echo esc_attr($preview['height']); ?>"
                              alt="<?php echo esc_attr($preview['alt'] ?? $title); ?>" decoding="async" loading="lazy">
                          <?php else: ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/card-fallback.png" width="966"
                              height="1170" alt="<?php echo esc_attr($title); ?>" decoding="async" loading="lazy">
                          <?php endif; ?>
                        </a>

                        <div class="card__cont">
                          <div class="card__top">
                            <?php if (get_the_title()): ?>
                              <h3 class="card__title">
                                <a href="<?php echo get_permalink(); ?>">
                                  <?php echo get_the_title() ?>
                                </a>
                              </h3>
                            <?php endif; ?>
                            <?php if (get_field('deck-descr')): ?>
                              <div class=" card__descr opa-7 text-3">
                                <?php the_field('deck-descr'); ?>
                              </div>
                            <?php endif; ?>
                          </div>
                          <div class="card__action">
                            <a class="btn btn card__btn" href="<?php echo get_permalink(); ?>">
                              <span>Подробнее</span><span class="bg"></span>
                            </a>
                            <div class="card__bottom">
                              <a class="btn btn btn-marketplace btn-marketplace-wb"
                                href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank"
                                rel="noopener noreferrer">
                                <span class="icon">
                                  <svg fill="currentColor" stroke="none">
                                    <use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
                                  </svg>
                                </span>
                                <span class="bg"></span>
                              </a>
                              <a class="btn btn btn-marketplace btn-marketplace-ozon"
                                href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank"
                                rel="noopener noreferrer">
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
                  <?php endforeach;
                  wp_reset_postdata();
                else: ?>
                  <p>Проверь поле "hit" в админке</p>
                <?php endif;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
      <a class="btn btn-primary list-cards__btn"
        href="<?php echo esc_url(home_url('/deck-type/mak')); ?>"><span>Посмотреть другие колоды</span><span
          class="bg"></span></a>
    </div>
  </section>

  <?php include_once('layout/section/day.php'); ?>

  <section class="list-cards gsap-smooth" aria-labelledby="list-cards-title">
    <div class="container">
      <div class="section-top popular-top">
        <h2 class="section-top__title">Хиты продаж</h2>
        <div class="section-top__right">
          <p class="section-top__text text-2">Колоды, которые чаще всего выбирают и&nbsp;к&nbsp;которым
            возвращаются&nbsp;&mdash; проверенные интуицией и&nbsp;опытом</p>
        </div>
      </div>
      <div class="list-cards__w">
        <div class="list-cards__arrow list-cards__arrow-prev">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <div class="list-cards__arrow list-cards__arrow-next">
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.28265 0.707031L1.41406 6.5752L7.28265 12.4438" stroke="black" stroke-width="2"></path>
          </svg>
        </div>
        <div class="list-cards__slider">
          <div class="list-cards__swiper swiper hit" data-list-cards>
            <div class="swiper-wrapper ">
              <?php
              $decsHits = get_field('hit');

              if ($decsHits):
                if (is_array($decsHits)):
                  foreach ($decsHits as $post):

                    setup_postdata($post); ?>
                    <div class="swiper-slide">
                      <div class="card">
                        <a href="<?php echo get_permalink(); ?>" class=" card__img">
                          <?php
                          $preview = get_field('deck-preview');
                          if ($preview):
                            ?>
                            <img src="<?php echo esc_url($preview['url']); ?>"
                              width="<?php echo esc_attr($preview['width']); ?>"
                              height="<?php echo esc_attr($preview['height']); ?>"
                              alt="<?php echo esc_attr($preview['alt'] ?? $title); ?>" decoding="async" loading="lazy">
                          <?php else: ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/card-fallback.png" width="966"
                              height="1170" alt="<?php echo esc_attr($title); ?>" decoding="async" loading="lazy">
                          <?php endif; ?>
                        </a>

                        <div class="card__cont">
                          <div class="card__top">
                            <?php if (get_the_title()): ?>
                              <h3 class="card__title">
                                <a href="<?php echo get_permalink(); ?>">
                                  <?php echo get_the_title() ?>
                                </a>
                              </h3>
                            <?php endif; ?>
                            <?php if (get_field('deck-descr')): ?>
                              <div class=" card__descr opa-7 text-3">
                                <?php the_field('deck-descr'); ?>
                              </div>
                            <?php endif; ?>
                          </div>
                          <div class="card__action">
                            <a class="btn btn card__btn" href="<?php echo get_permalink(); ?>">
                              <span>Подробнее</span><span class="bg"></span>
                            </a>
                            <div class="card__bottom">
                              <a class="btn btn btn-marketplace btn-marketplace-wb"
                                href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank"
                                rel="noopener noreferrer">
                                <span class="icon">
                                  <svg fill="currentColor" stroke="none">
                                    <use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
                                  </svg>
                                </span>
                                <span class="bg"></span>
                              </a>
                              <a class="btn btn btn-marketplace btn-marketplace-ozon"
                                href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank"
                                rel="noopener noreferrer">
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
                  <?php endforeach;
                  wp_reset_postdata();
                else: ?>
                  <p>Проверь поле "hit" в админке</p>
                <?php endif;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('layout/section/space.php'); ?>
  <?php include_once('layout/section/world.php'); ?>
  <?php include_once('layout/section/library.php'); ?>

</main>

<?php include_once('layout/global/footer.php'); ?>