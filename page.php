<?php get_header(); ?>
<main>
    <section class="blogNav">
      <div class="blogNav-link">
      <a href="<?php echo home_url('/')?>">HOME&nbsp;&nbsp;</a>
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
        <p><?php the_content();?>
        </p>
      </div>

      <div class="blog-headlineH3">
        <h3><?php the_title();?></h3>
      </div>
      <div class="blog-headlineH4">
        <h4><?php the_title();?></h4>
      </div>
    </section>

    <div class="line"></div>
</main>
    <?php get_footer(); ?>
