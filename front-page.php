
<?php get_header(); ?>

<main>
  <section class="mainVisual">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php bloginfo('template_url');?>/img/main.jpg" alt=""></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url');?>/img/main2.jpg" alt=""></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url');?>/img/main3.jpg" alt=""></div>
      </div>
      <div class="main-text">
        <img src="<?php bloginfo('template_url');?>/img/main_text.png" alt="site-logo">
      </div>
    </div>
    <section class="news" id="news">
      <div class="news__title">
        <div class="news__title-top">
          <p><a href="<?php echo home_url('/category/archive'); ?>">News</a> /<a href="<?php echo home_url('/info'); ?>">お知らせ</a></p>
          <?php
            $args = array(
            'post_type' => 'news',
            'posts_per_page' => 2,
            'paged' => $paged
            );
            $the_query = new WP_Query($args);if($the_query->have_posts()):
          ?>
          <?php while($the_query->have_posts()):$the_query->the_post();?>
        </div>
        <div class="news__title-content">
          <div class="newsContent1">
            <span><?php echo get_the_date(); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <?php wp_reset_postdata();?>
          <?php endwhile;?>
          <?php else : ?>
            <div class="error">
              <p>お探しの記事は見つかりませんでした。</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="news__view">
        <div class="newsText">
          <a>View all</a>
        </div>
      </div>
    </section>
  </section>






  <section class="services" id="services">
    <div class="services__top">
      <div class="services__top__title">
        <h2>Services / ハマ建設の事業</h2>
      </div>
      <div class="services__top__explanation">
        <p>現場は全員ハマ建の従業員｡</p>
        <p>住民が望むインフラを整備し社会貢献いたします。</p>
      </div>
    </div>
    <div class="services__content">
      <div class="services__content__img">
        <img class="bridge" src="<?php bloginfo('template_url');?>/img/bridge.jpg">
      </div>
      <div class="services__content__text">
        <p>ハマ建設では、多くの人から愛されるインフラの整備を設計から製造、テスト全ての工程に携わっています。</p>
        <p>行う工事は全国にわたり、国内で工事を行ったことのない都道府県はございません。どのような工事も常に住民の方が望む工事をお届けたします。</p>
      </div>
    </div>

  </section>

  <div class="services-img">
    <img src="<?php bloginfo('template_url');?>/img/bg-attachment.jpg">
  </div>

  <section class="group" id="groupe">
    <div class="group__name">
      <h2>Group / グループ会社の紹介</h2>
    </div>
    <div class="group__messages">
      <div class="group__message1">
        <p> グループ会社全体で施工することで、工事全体で住民の思いを反映します。</p>
      </div>

      <div class="group__message2">
        <p>ハマ建設の工事全体の品質はグループ会社で請け負っているため、全員同じ思いで全ての施工に臨むことができます。</p>
      </div>
    </div>

    <div class="group__image">
      <div class="group__image__civil">
        <img class="civil" src="<?php bloginfo('template_url');?>/img/civil.jpg">
          <div class="civil__text">
            <span>Civil</span>
          </div>
      </div>
      <div class="group__image__bridge">
        <img class="bridge" src="<?php bloginfo('template_url');?>/img/bridge.jpg">
          <div class="bridge__text">
            <span>Bridge</span>
          </div>
      </div>
      <div class="group__image__load">
        <img class="load" src="<?php bloginfo('template_url');?>/img/load.jpg">
          <div class="load__text">
            <span>Load</span>
          </div>
      </div>
      <div class="group__image__dum">
        <img class="dum" src="<?php bloginfo('template_url');?>/img/dum.jpg">
          <div class="dum__text">
            <span>Dum</span>
          </div>
      </div>
    </div>
    <div class="backBorder"> 
      
    </div>
  </section>

  <section class="info" id="info">

    <div class="info-header">
      <div class="info-header__title">
        <h2>Information /<a>企業案内</a></h2>
      </div>
    </div>

    <div class="info-main">
      
      <div class="info-main__img">
        <img src="<?php bloginfo('template_url');?>/img/info.jpg">
      </div>

      <div class="info-main__content">
        <div class="infoMessage">
          <p>ハマ建設の会社概要、アクセス、代表メッセージをご紹介します。</p>
        </div>
      </div>

        <div class="infoArrow">
          <p>企業案内はこちら</p>
          <svg xmlns="http://www.w3.org/2000/svg" style="display: block;
          margin-left: auto;
          margin-right: 0 " width="73.376" height="8.829" viewBox="0 0 73.376 8.829">
            <g id="グループ_4" data-name="グループ 4" transform="translate(-233.5 -2409.171)">
              <line id="線_1" data-name="線 1" x2="73" transform="translate(233.5 2417.5)" fill="none" stroke="#fafafa" stroke-width="1"/>
              <line id="線_2" data-name="線 2" x1="7" y1="8" transform="translate(299.5 2409.5)" fill="none" stroke="#fafafa" stroke-width="1"/>
            </g>
          </svg>
        </div>

    </div>
  </section>

  <section class="recluite" id="recluite">
    <div class="recluite__title">
      <h2>Reclute / 採用情報</h2>
    </div>
    <div class="recluite-img">
      <img src="<?php bloginfo('template_url');?>/img/recruit.jpg">
    </div>
    <div class="container">
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="view">
                <p class="view__text"> <span class="view__number">01</span>施工管理技士</p>
                <p class="view__text2">工事全体の管理をして頂きます。</p>
                <p class="view__text3">将来性のあるお仕事です！</p>
              </div>
              <div class="view__more">
                <p>View more</p>
              </div>
            </li>
            <li class="glide__slide">
              <div class="view">
                <p class="view__text"> <span class="view__number">02</span>測量士</p>
                <p class="view__text2">工事全体の管理をして頂きます。</p>
                <p class="view__text3">将来性のあるお仕事です！</p>
              </div>
              <div class="view__more">
                <p>View more</p>
              </div>
            </li>
            <li class="glide__slide">
              <div class="view">
                <p class="view__text view__text4"> <span class="view__number">03</span>コンクリート診断士</p>
                <p class="view__text2">工事全体の管理をして頂きます。</p>
                <p class="view__text3">将来性のあるお仕事です！</p>
              </div>
              <div class="view__more">
                <p>View more</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
          <span class="glide__arrow1" data-glide-dir="<">
            <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="20.517" viewBox="0 0 11.797 20.517"><path d="M1.09,20.325l-.9-.9a.62.62,0,0,1,0-.9l8.271-8.271L.192,1.988a.62.62,0,0,1,0-.9l.9-.9a.62.62,0,0,1,.9,0L11.6,9.81a.62.62,0,0,1,0,.9L1.988,20.325A.619.619,0,0,1,1.09,20.325Z" transform="translate(11.797 20.517) rotate(180)" fill="#080808"/></svg>
          </span>
          <span class="glide__arrow2" data-glide-dir=">">
            <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="20.517" viewBox="0 0 11.797 20.517"><path d="M13.39,20.325l-.9-.9a.62.62,0,0,1,0-.9l8.271-8.271L12.492,1.988a.62.62,0,0,1,0-.9l.9-.9a.62.62,0,0,1,.9,0L23.9,9.81a.62.62,0,0,1,0,.9l-9.617,9.617A.619.619,0,0,1,13.39,20.325Z" transform="translate(-12.3)" fill="#080808"/></svg>
          </span>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('contact'); ?>
</main>

<?php get_footer(); ?>

