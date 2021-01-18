
<footer class="footer">
  <div class="footer-inner">
    <img src="<?php bloginfo('template_url');?>/img/hama-icon2.png">
    <div class="footer-inner__address">
      <h2 class="footer-company">株式会社ハマ建設</h2>
      <span class="footer-address">〒123-4567 東京都杉並区23-56 ハマビル</span>
    </div>
  </div>
  <div class="footer-group">
    <?php
        wp_nav_menu( array( 
        'theme_location' => 'footer-menu1',
        'container' => 'nav',
        'container_class' => 'footerItem1',
        'items_wrap' => '<ul>%3$s</ul>',
        'link_after'      => '',
      ) ); 
      ?>
    <!-- <div class="footerItem1">
      <ul>
        <li><a>Home</a></li>
        <li><a>News</a></li>
        <li><a>Servies</a></li>
        <li><a>Information</a></li>
        <li><a>Reclute</a></li>
      </ul>
    </div> -->

    <?php
      wp_nav_menu( array( 
      'theme_location' => 'footer-menu2',
      'container' => 'nav',
      'container_class' => 'footerItem2',
      'items_wrap' => '<ul>%3$s</ul>',
      'link_after'      => '',
    ) ); 
    ?>

    <!-- <div class="footerItem2">
      <ul>
        <li><a>Group</a></li>
        <li><a>土木グループ</a></li>
        <li><a>建築グループ</a></li>
        <li><a>通路グループ</a></li>
        <li><a>ダムグループ</a></li>
      </ul>
    </div> -->

    <?php
      wp_nav_menu( array( 
      'theme_location' => 'footer-menu3',
      'container' => 'nav',
      'container_class' => 'footerItem3',
      'items_wrap' => '<ul>%3$s</ul>',
      'link_after'      => '',
    ) ); 
    ?>
    <!-- <div class="footerItem3">
      <span>Contact</span>
    </div> -->
  </div>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>





