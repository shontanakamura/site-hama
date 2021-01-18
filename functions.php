<?php
/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */

function my_setup() {
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */

function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'header-menu' => 'Header Menu',
    'footer-menu1'  => 'Footer Menu1',
    'footer-menu2'  => 'Footer Menu2',
    'footer-menu3'  => 'Footer Menu3',
  ) );
}

add_action( 'after_setup_theme', 'register_my_menus' );

//メニューの<li>からID除去
function removeMenuId( $id ){
  return $id = array();
}
add_filter('nav_menu_item_id', 'removeMenuId', 10);

//メニューの<li>からクラス除去
function removeMenuClass( $classes ) {
  return $classes = array();
} 
add_filter( 'nav_menu_css_class', 'removeMenuClass', 10, 2 );
  // add_action( 'init', 'create_post_type' );



function cpt_register_news() {  
  
  $labels = [
    "singular_name" => "news",
    "edit_item" => "news",
  ];
  $args = [
    "label" => "お知らせ",
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "map_meta_cap" => true,
    "hierachical" => true,
    "rewrite" => ["slug" => "news","with_front" => true],
    "query_var" => true,
    "menu_position" => 2,
    "supports" => ["title","editor","thumbnail"],
  ];
  register_post_type("news",$args);

}
add_action('init','cpt_register_news');


// JS・CSSファイルを読み込む
function add_files() {
	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込みco
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', "", "20160608", false );
  wp_enqueue_script( 'swiper', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array( 'jquery' ), '20160608', true );
  wp_enqueue_script( 'js', get_template_directory_uri() . '/js/common.js', array( 'jquery' ), array( 'jquery' ) , '20160608', false );
  wp_enqueue_script( 'glide1', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/@glidejs/glide', array( 'jquery' ), '20160608', true );
  wp_enqueue_script( 'glide2', get_template_directory_uri() . '/js/glide.min.js', "", '20160608', true );
  wp_enqueue_script( 'glide3', get_template_directory_uri() . 'swiper.js', array( 'jquery' ), '20160608', true );
  wp_enqueue_script( 'glide36', get_template_directory_uri() . '/js/particles.min.js', array( 'jquery' ), '20160608', true );
	// サイト共通のCSSの読み込み
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', "", '' );
  wp_enqueue_style( 'archive',get_template_directory_uri() . '/css/archive.css', "", '' );
  wp_enqueue_style( 'page',get_template_directory_uri() . '/css/page.css', "", '' );
  wp_enqueue_style( 'info',get_template_directory_uri() . '/css/info.css', "", '' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', "", '20160608' );
	wp_enqueue_style( 'glide4', get_template_directory_uri() . '/css/glide.core.min.css', "", '20160608' );
  wp_enqueue_style( 'glide5', get_template_directory_uri() . '/css/glide.theme.min.css', "", '20160608' );
}
add_action('wp_enqueue_scripts', 'add_files');


//ページネーション
function pagination($pages = '', $range = 1)
{
  $showitems = ($range * 2)+1;  

  global $paged;
  if(empty($paged)) $paged = 1;

  if($pages == '')
  {
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages)
      {
          $pages = 1;
      }
  }   

  if(1 != $pages)
  {
      echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\">Page ".$paged." of ".$pages."</span>";
      if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
      if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
      for ($i=1; $i <= $pages; $i++)
      {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
      {
          echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
      }
      }
      if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
      if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
      echo "</div></div>\n";
  }
}

remove_action('wp_head','wp_generator');
//WordPress以外の外部ツールからの投稿プロトコルのタグ非表示

remove_action('wp_head', 'rsd_link');

//Windows Live Writerで投稿する場合に必要なタグ非表示
remove_action('wp_head', 'wlwmanifest_link');

//ページネーション非表示
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

//短縮リンク非表示
remove_action('wp_head', 'wp_shortlink_wp_head');