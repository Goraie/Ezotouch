<?php include_once('layout/global/header.php'); ?>

<main class="content">
  <?php
  $deck_id = get_queried_object_id();
  $deck_title = get_the_title( $deck_id );
  $deck_descr = get_field( 'deck-descr', $deck_id );
  $deck_preview = get_field( 'deck-preview', $deck_id );
  $tpl_uri = get_template_directory_uri();
  ?>
  <section class="first container" aria-labelledby="first-title">


    <?php echo tarot_breadcrumbs(); ?>


    <div class="first__w">
      <div class="first__left">
        <h1 class="first__title" id="first-title"><?php echo esc_html( $deck_title ); ?></h1>
      </div>
      <div class="first__main">
        <?php if ( ! empty( $deck_preview['url'] ) ) : ?>
          <img src="<?php echo esc_url( $deck_preview['url'] ); ?>"
            width="<?php echo esc_attr( $deck_preview['width'] ?? '' ); ?>"
            height="<?php echo esc_attr( $deck_preview['height'] ?? '' ); ?>"
            alt="<?php echo esc_attr( $deck_preview['alt'] ?? $deck_title ); ?>"
            decoding="async" loading="lazy" class="first__img"><span></span>
        <?php else : ?>
          <img
            srcset="<?php echo esc_url( $tpl_uri ); ?>/assets/images/offer-360x626.png 360w, <?php echo esc_url( $tpl_uri ); ?>/assets/images/offer-400x696.png 400w, <?php echo esc_url( $tpl_uri ); ?>/assets/images/offer-640x1114.png 640w, <?php echo esc_url( $tpl_uri ); ?>/assets/images/offer-667x1162.png 667w"
            src="<?php echo esc_url( $tpl_uri ); ?>/assets/images/offer-667x1162.png"
            sizes="(min-width: 667px) 667px, 100vw" width="667" height="1162" alt="<?php echo esc_attr( $deck_title ); ?>"
            decoding="async" loading="lazy" class="first__img"><span></span>
        <?php endif; ?>
      </div>
      <div class="first__right">
        <?php if ( $deck_descr ) : ?>
          <p class="first__descr text-2 opa-7"><?php echo wp_kses_post( $deck_descr ); ?></p>
        <?php endif; ?>
        <div class="first__action">
          <a class="btn btn-marketplace btn-marketplace-wb" href="https://www.wildberries.ru/brands/312174691-ezotouch" target="_blank" rel="noopener noreferrer"><span class="icon">
              <svg fill="currentColor" stroke="none">
                <use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#wb"></use>
              </svg>
            </span><span class="bg"></span></a>
          <a class="btn btn-marketplace btn-marketplace-ozon" href="https://www.ozon.ru/brand/ezotouch-101849711/?abt_att=1" target="_blank" rel="noopener noreferrer"><span class="icon">
              <svg fill="currentColor" stroke="none">
                <use href="<?php bloginfo('template_directory'); ?>/assets/images/icons.svg#ozon"></use>
              </svg>
            </span><span class="bg"></span></a>
        </div>
      </div>
    </div>
  </section>
  <?php
  $article_toc = [
    [ 'id' => 'n1', 'title' => 'Легенда' ],
    [ 'id' => 'n2', 'title' => 'Старшие арканы' ],
    [ 'id' => 'n3', 'title' => 'Что такое карты Таро' ],
    [ 'id' => 'n4', 'title' => 'Положение карты' ],
    [ 'id' => 'n5', 'title' => 'Расклад на отношения и любовь' ],
    [ 'id' => 'n6', 'title' => 'Прямое положение' ],
    [ 'id' => 'n7', 'title' => 'Пример карточки' ],
  ];
  ?>
  <section class="article" aria-labelledby="article-title">
    <div class="container">
      <div class="article__sidebar sidebar">
        <h4 class="sidebar__title">Содержание</h4>
        <ul class="sidebar__list">
          <?php foreach ( $article_toc as $i => $item ) : ?>
          <li><span><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
            <a class="text-2" href="#<?php echo esc_attr( $item['id'] ); ?>"><?php echo esc_html( $item['title'] ); ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="article__main">
        <div class="article__w">
          <h3 class="article__title" id="n1">Легенда</h3>
          <div class="article__text big-text-m opa-8">
            <p>В последние годы спрос на карты Таро резко возрос. В условиях кризисов и неопределённости люди хотят
              получить совет, как правильно поступить и какое решение принять, чтобы улучшить свою жизнь. В сложном,
              быстроменяющемся мире хочется обрести какой‑то островок стабильности, и карты Таро могут им стать.
              Гадание — отличный способ замедлиться, подумать о себе и способах решения накопившихся проблем.</p>
            <p>Причин популярности Таро очень много, но самая основная в том, что карты помогают разобраться в себе.
              С помощью таролога человек задаётся сложными вопросами и находит «корни» своих проблем, начинает лучше
              понимать близких людей и мотивы их поступков.</p>
            <p>В этом материале расскажем о значении и толковании всех 78 карт.</p>
          </div>
        </div>
        <div class="article__w">
          <h3 class="article__title h2" id="n2">Старшие арканы</h3>
          <table class="article__table">
            <thead>
              <tr>
                <th>Порядковый номер карты в колоде</th>
                <th>Название карты</th>
                <th>Оригинальное название</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $deck_id = get_queried_object_id();
              $cards_query = new WP_Query([
                'post_type'      => 'card',
                'posts_per_page' => -1,
                'meta_query'     => [
                  'relation' => 'OR',
                  [
                    'key'     => 'card-relation',
                    'value'   => (string) $deck_id,
                    'compare' => '=',
                  ],
                  [
                    'key'     => 'card-relation',
                    'value'   => '"' . $deck_id . '"',
                    'compare' => 'LIKE',
                  ],
                ],
                'orderby'        => 'menu_order title',
                'order'          => 'ASC',
              ]);
              if ( $cards_query->have_posts() ) :
                $num = 0;
                while ( $cards_query->have_posts() ) :
                  $cards_query->the_post();
                  $card_id = get_the_ID();
                  $original = get_field( 'card-original-name', $card_id );
                  if ( $original === null || $original === '' ) {
                    $original = get_the_title();
                  }
                  $num++;
                  ?>
              <tr>
                <td><?php echo (int) $num; ?></td>
                <td>
                  <a href="<?php echo esc_url( get_permalink( $card_id ) ); ?>"><?php the_title(); ?></a>
                </td>
                <td><?php echo esc_html( $original ); ?></td>
              </tr>
              <?php
                endwhile;
                wp_reset_postdata();
              else :
                $fallback_cards = get_posts( [
                  'post_type'      => 'card',
                  'posts_per_page' => 1,
                  'post_status'    => 'publish',
                  'orderby'        => 'title',
                  'order'          => 'ASC',
                ] );
                $fallback_url    = home_url( '/card' );
                $fallback_title  = 'Шут';
                $fallback_original = 'The FooL';
                if ( ! empty( $fallback_cards[0] ) ) {
                  $fb             = $fallback_cards[0];
                  $fallback_url   = get_permalink( $fb->ID );
                  $fallback_title = get_the_title( $fb->ID );
                  $fallback_original = get_field( 'card-original-name', $fb->ID );
                  if ( $fallback_original === null || $fallback_original === '' ) {
                    $fallback_original = $fallback_title;
                  }
                }
                ?>
              <tr>
                <td>0</td>
                <td>
                  <a href="<?php echo esc_url( $fallback_url ); ?>"><?php echo esc_html( $fallback_title ); ?></a>
                </td>
                <td><?php echo esc_html( $fallback_original ); ?></td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <div class="article__w">
          <h3 class="article__title h2" id="n3">Что такое карты Таро</h3>
          <div class="article__text big-text-m opa-8">
            <p>Доподлинно неизвестно, когда возникла первая колода карт Таро. Упоминания появились в начале XV века.
              Но существует версия, что карты были придуманы в Древнем Египте. В настоящее же время это система карт,
              с помощью которых можно получить ответы на интересующие вопросы и заглянуть в будущее.</p>
          </div>
        </div>
        <div class="article__w">
          <h3 class="article__title h2" id="n4">Положение карты Король Пентаклей</h3>
          <div class="article__text big-text-m opa-8">
            <p>В Таро очень важное значение имеет не только сама карта, но и ее положение в раскладе — прямое или
              перевернутое.</p>
          </div>
        </div>
        <div class="article__w">
          <h3 class="article__title h2" id="n5">Расклад карты Король Пентаклей на отношения и любовь</h3>
          <div class="article__text big-text-m opa-8">
            <p>Король Пентаклей Таро в отношениях чаще всего обозначает мужчину. Это пресловутый принц на белом коне,
              но уже остепенившийся, знающий, чего он хочет от жизни и от партнерши.</p>
          </div>
        </div>
        <div class="article__w">
          <h3 class="article__title" id="n6">Прямое положение</h3>
          <div class="article__text big-text-m opa-8">
            <p>В прямом положении Король Пентаклей означает скорое появление в жизни вопрошающей мужчины-покровителя.
              Это будет заботливый, серьезный, страстный, но сдержанный в повседневном общении человек. Такой мужчина
              ценит стабильность и будет требовать от своей избранницы верности. При этом властность его натуры может
              давать «побочный эффект» в виде проявлений ревности.</p>
            <p>Для сложившихся пар Король Пентаклей — признак крепких и долгосрочных отношений, когда никто никуда
              не уходит и вряд ли просто так отпустит свою половинку. Это налаженный совместный быт, мужчина здесь
              «голова» и «добытчик», с хорошей потенцией и желанием иметь потомство. Он рачительный хозяин и планирует
              отпуск за пол года вперед, содержит семью и ему можно доверить свое будущее.</p>
            <p>Единственный минус такого союза — недостаток романтики.</p>
          </div>
        </div>
        <div class="article__w">
          <img
            srcset="<?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-360x263.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-400x292.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-640x467.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-800x584.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-1024x748.png 1024w, <?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-1280x934.png 1280w, <?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-1338x974.png 1338w"
            src="<?php bloginfo('template_directory'); ?>/assets/images/Frame 2136140491-1338x974.png"
            sizes="(min-width: 1338px) 1338px, 100vw" width="1338" height="974" alt decoding="async" loading="lazy">
        </div>
        <div class="article__w">
          <h4 class="article__title" id="n7">Пример карточки</h4>
          <div class="article__card">
            <h4 class="article__heading"><span>01</span>Настрой перед раскладом</h4>
            <div class="article__cit">
              <p>— Если мы говорим о запросах к картам Таро, то существуют этические правила тарологов, которыми они
                руководствуются. Не делать расклады на здоровье человека, мы не врачи, а наоборот, часто настоятельно
                рекомендуем обратится к доктору, а не искать в картах ответы. Обычно тарологи не делают расклады
                на вопросы жизни и смерти. Не отвечают на вопросы, связанные со случайностью, такие, как «выиграю ли
                я в лотерею» и так далее.</p>
              <p>Если вопрос о том, в каких случаях не стоит садится за карты, то, конечно, если вы устали, болеете или
                находитесь в негативных эмоциях, в такие периоды гадание лучше отложить.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="comm" aria-labelledby="comm-title">
    <div class="container">
      <div class="comm__top">
        <h2 class="comm__title">Как общаться с картами</h2>
        <div class="comm__text">
          <p>Это универсальная колода Таро, созданная для работы с интуицией и внутренними образами.</p>
          <p>Она подходит для глубоких раскладов, медитативных практик и проективной работы — в метафорических,
            психологических и коучинговых сессиях.</p>
          <p>Колода идеальна для тех, кто мыслит визуально и ценит свободу личной интерпретации.</p>
        </div>
      </div>
      <img
        srcset="<?php bloginfo('template_directory'); ?>/assets/images/how-360x176.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/how-400x196.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/how-640x314.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/how-800x392.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/how-1024x502.png 1024w, <?php bloginfo('template_directory'); ?>/assets/images/how-1280x627.png 1280w, <?php bloginfo('template_directory'); ?>/assets/images/how-1440x706.png 1440w, <?php bloginfo('template_directory'); ?>/assets/images/how-1920x941.png 1920w, <?php bloginfo('template_directory'); ?>/assets/images/how-2560x1254.png 2560w, <?php bloginfo('template_directory'); ?>/assets/images/how-2718x1336.png 2718w"
        src="<?php bloginfo('template_directory'); ?>/assets/images/how-2718x1336.png"
        sizes="(min-width: 2718px) 2718px, 100vw" width="2718" height="1336" alt decoding="async" loading="lazy"
        class="comm__img">
    </div>
  </section>
  <section class="list-cards" aria-labelledby="list-cards-title">
    <?php
    $popular_deck_links = [];
    $popular_decks = get_posts( [ 'post_type' => 'deck', 'numberposts' => -1, 'post_status' => 'publish' ] );
    foreach ( $popular_decks as $p ) {
      $popular_deck_links[ $p->post_title ] = get_permalink( $p->ID );
    }
    $pack_fallback = home_url( '/pack' );
    ?>
    <div class="container">
      <div class="section-top popular-top">
        <h2 class="section-top__title">Хиты продаж</h2>
        <div class="section-top__right">
          <p class="section-top__text text-2">Колоды, которые чаще всего выбирают и к которым возвращаются — проверенные
            интуицией и опытом.</p>
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
          <div class="list-cards__swiper swiper popular" data-list-cards>
            <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="card">
          <div class="card__img">
            <img
              srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-origin-360x436.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-400x484.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-640x774.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-800x968.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-origin-966x1170.png 966w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/card-origin-966x1170.png"
              sizes="(min-width: 966px) 966px, 100vw" width="966" height="1170" alt decoding="async" loading="lazy">
          </div>
          <div class="card__cont">
            <div class="card__top">
              <h3 class="card__title">Таро уэйта</h3>
              <p class="card__descr opa-7 text-3">Универсальная колода, которая <br>поможет вам быстро освоить основы
                раскладов</p>
            </div>
            <div class="card__action">
              <a class="btn btn card__btn" href="<?php echo esc_url( $popular_deck_links['Таро уэйта'] ?? $pack_fallback ); ?>"><span>Подробнее</span><span class="bg"></span></a>
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
        </div>
        <div class="swiper-slide">
        <div class="card">
          <div class="card__img">
            <img
              srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-elf-360x436.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-elf-400x484.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-elf-640x774.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-elf-800x968.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-elf-966x1170.png 966w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/card-elf-966x1170.png"
              sizes="(min-width: 966px) 966px, 100vw" width="966" height="1170" alt decoding="async"
              loading="lazy"><span>авторская колода</span>
          </div>
          <div class="card__cont">
            <div class="card__top">
              <h3 class="card__title">Таро Эльфов</h3>
              <p class="card__descr opa-7 text-3">Авторская колода интуитивной практики, раскладов на отношения, работу
                и личностное развитие</p>
            </div>
            <div class="card__action">
              <a class="btn btn card__btn" href="<?php echo esc_url( $popular_deck_links['Таро Эльфов'] ?? $pack_fallback ); ?>"><span>Подробнее</span><span class="bg"></span></a>
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
        </div>
        <div class="swiper-slide">
        <div class="card">
          <div class="card__img">
            <img
              srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-infinity-360x436.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-infinity-400x484.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-infinity-640x774.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-infinity-800x968.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-infinity-966x1170.png 966w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/card-infinity-966x1170.png"
              sizes="(min-width: 966px) 966px, 100vw" width="966" height="1170" alt decoding="async"
              loading="lazy"><span>авторская колода</span>
          </div>
          <div class="card__cont">
            <div class="card__top">
              <h3 class="card__title">Вечная жизнь</h3>
              <p class="card__descr opa-7 text-3">Авторская колода, рассчитаная на самостоятельную интерпретацию без привязки к готовым трактовкам</p>
            </div>
            <div class="card__action">
              <a class="btn btn card__btn" href="<?php echo esc_url( $popular_deck_links['Вечная жизнь'] ?? $pack_fallback ); ?>"><span>Подробнее</span><span class="bg"></span></a>
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
        </div>
        <div class="swiper-slide">
        <div class="card">
          <div class="card__img">
            <img
              srcset="<?php bloginfo('template_directory'); ?>/assets/images/card-shades-360x436.png 360w, <?php bloginfo('template_directory'); ?>/assets/images/card-shades-400x484.png 400w, <?php bloginfo('template_directory'); ?>/assets/images/card-shades-640x774.png 640w, <?php bloginfo('template_directory'); ?>/assets/images/card-shades-800x968.png 800w, <?php bloginfo('template_directory'); ?>/assets/images/card-shades-966x1170.png 966w"
              src="<?php bloginfo('template_directory'); ?>/assets/images/card-shades-966x1170.png"
              sizes="(min-width: 966px) 966px, 100vw" width="966" height="1170" alt decoding="async"
              loading="lazy"><span>авторская колода</span>
          </div>
          <div class="card__cont">
            <div class="card__top">
              <h3 class="card__title">Таро теней</h3>
              <p class="card__descr opa-7 text-3">Колода, исследующая скрытые <br>стороны личности и подсознательные
                процессы</p>
            </div>
            <div class="card__action">
              <a class="btn btn card__btn" href="<?php echo esc_url( $popular_deck_links['Таро теней'] ?? $pack_fallback ); ?>"><span>Подробнее</span><span class="bg"></span></a>
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
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
          <button class="btn btn-primary section-top__btn popup-open" type="button"><span>Перейти в
              библиотеку</span><span class="bg"></span></button>
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