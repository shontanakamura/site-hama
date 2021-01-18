<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>ハマ建設株式会社</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css"> 
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

<?php wp_head(); ?>
</head>
<body>

<header>
  <nav class="nav">
    <div class="nav__icon">
    <img class="icon" src="<?php bloginfo('template_url');?>/img/hama-icon.png">
      
    </div>

    <div class="humburgerMenu">
      <div class="buns"></div>
      <div class="patty"></div>
      <div class="buns"></div>
    </div>

    <?php 
      wp_nav_menu( array( 
      'theme_location' => 'header-menu',
      'menu_class' => 'link',
      'link_after'      => '',
      'container' => 'false'
    ) ); 
      ?>
    <!-- <ul class="link">
      <li class="nav01"><a href="#">Home</a></li>
      <li class="nav02"><a href="#">News</a></li>
      <li class="nav03"><a href="#">Service</a></li>
      <li class="nav04"><a href="#">info</a></li>
      <li class="nav05"><a href="#">Reclute</a></li>
      <li class="nav06"><a href="#">Group</a></li>
      <li class="nav07"><a href="#">Contact</a></li>
    </ul> -->
  </nav>
</header>



