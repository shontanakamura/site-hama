
<?php get_header(); ?>

<main>
    <section class="news">
      <div class="news-img">
        <img src="<?php bloginfo('template_url');?>/img/news_top.jpg">
      </div>
      <div class="news-txt">
        <p>News</p>
      </div>
    </section>

    <section class="diary">
            <?php if ( have_posts() ) : ?>
      <div class="diary-list">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="diary-list-1">
          
          <div class="list1-img">
            <?php if(has_post_thumbnail()) {?>
              <?php the_post_thumbnail();?>
            <?php } else { ?>
              <img src="<?php bloginfo('template_url');?>/img/info-ceo.jpg">
            <?php }?>
            <span class="bottom"></span>
          </div>
          <div class="list1-content">
            <span class="date"><?php echo get_the_date();?></span>
            <p><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
            <span class="more">more→</span>
          </div>
        </div>
        <?php endwhile;?>
        <?php else : ?>
        <p>記事はありません。</p>
        <?php endif; ?>
      </div>
    </secion>
<!-- 
        <div class="diary-list-2">
          <div class="list1-img">
            <img src="img/info-ceo.jpg">
            <span class="bottom"></span>
          </div>
          <div class="list2-content">
            <span class="date">2020.08.01</span>
            <p>マスクの販売始めました。</p>
            <span class="more">more→</span>
          </div>
        </div>

        <div class="diary-list-3">
          <div class="list3-img">
            <img src="img/info-ceo.jpg">
            <span class="bottom"></span>
          </div>
          <div class="list3-content">
            <span class="date">2020.08.01</span>
            <p>マスクの販売始めました。</p>
            <span class="more">more→</span>
          </div>
        </div>

        <div class="diary-list-4">
          <div class="list4-img">
            <img src="img/info-ceo.jpg">
            <span class="bottom"></span>
          </div>
          <div class="list4-content">
            <span class="date">2020.08.01</span>
            <p>マスクの販売始めました。</p>
            <span class="more">more→</span>
          </div>
        </div>

        <div class="diary-list-5">
          <div class="list5-img">
            <img src="img/info-ceo.jpg">
            <span class="bottom"></span>
          </div>
          <div class="list5-content">
            <span class="date">2020.08.01</span>
            <p>マスクの販売始めました。</p>
            <span class="more">more→</span>
          </div>
        </div>

        <div class="diary-list-6">
          <div class="list6-img">
            <img src="img/info-ceo.jpg">
            <span class="bottom"></span>
          </div>
          <div class="list6-content">
            <span class="date">2020.08.01</span>
            <p>マスクの販売始めました。</p>
            <span class="more">more→</span>
          </div>
        </div>
      </div> -->


    <section class="page">
      <div class="page-group">
      <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
      } ?>
        <!-- <ul class="pagenation">
          <li><a class="active" href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">></a></li> -->
        </ul>
      </div>
    </section>

    <?php get_template_part('contact'); ?>

</main>
<?php get_footer(); ?>

