<?php get_header(); ?>

<main>
    <section class="blogNav">
      <div class="blogNav-link">
        <a>HOME&nbsp;&nbsp;</a>
        <span>/</span>
        <a>&nbsp;&nbsp;Template</a>
      </div>
    </section>

    <section class="blog">
      <div class="blog-img">
        <?php if(has_post_thumbnail()) {?>
          <?php the_post_thumbnail();?>
        <?php } else { ?>
        <img src="<?php bloginfo('template_url');?>/img/main.jpg">
        <?php }?>
      </div>

      <div class="blog-time">
        <span><?php echo get_the_date();?></span>
      </div>

      <div class="blog-ttl">
        <h2><?php the_title();?></h2>
      </div>

      <div class="blog-main">
        <p><?php the_content(); ?>
        </p>
        <p><?php the_content(); ?></p>
      </div>

      <div class="blog-headlineH3">
        <h3><?php the_title();?></h3>
      </div>
      <div class="blog-headlineH4">
        <h4><?php the_title();?></h4>
      </div>
    </section>

    <div class="line"></div>

    <section class="contact" id="contact">
      <div class="contactMain">
        <div class="contactMain-group1">
          <div class="contact__title">
            <h2>Contact / お問い合わせ</h2>
          </div>
          <div class="contact__main">
            <p>ご質問・お見積もり、採用情報に関するご質問がございましたらお気軽にご連絡ください。</p>
          </div>
        </div>
        <div class="contactMain-group2">
          <div class="contact__tel">
            <p>Tel: 012-345-6789</p>
            <p>受付時間: 10:00~17:00</p>
            <p>土日祝休み</p>
          </div>
          <div class="contact__form">
            <div class="contact__form__group">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="16" viewBox="0 0 20.001 16">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fafafa;
                      }
                    </style>
                  </defs>
                  <path id="Icon" class="cls-1" d="M868,1502H852a2,2,0,0,1-2-2v-12a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v12A2,2,0,0,1,868,1502Zm-15.15-13.32a.849.849,0,0,0-.45,1.569l6.54,4.09a1.978,1.978,0,0,0,2.119,0l6.54-4.09a.849.849,0,1,0-.9-1.44L860,1493l-6.7-4.19A.863.863,0,0,0,852.85,1488.68Z" transform="translate(-850 -1486)"/>
                </svg>        
              </span>
              <a>お問い合わせフォーム</a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>
