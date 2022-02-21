<?php 

function add_scripts() {
  wp_enqueue_script('jquery');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/index.js');
  wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
}
add_action('wp_enqueue_scripts', 'add_scripts');

// パンくずリスト自動生成
if (!function_exists('custom_breadcrumb')) {
  function custom_breadcrumb($wp_obj = null)
    {
    // トップページは対象外
    if (is_home() || is_front_page()) return false;
    //そのページのWPオブジェクトを取得
    $wp_obj = $wp_obj ?: get_queried_object();
    $sep = '>>';
    echo '<div class="l-breadcrumb">' .
      '<ol itemscope itemtype="http://schema.org/BreadcrumbList" class="l-breadcrumb__list">' .
        '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumb__item">' .
          '<a itemprop="item" href="' . home_url() . '"><span itemprop="name">HOME</span></a>' .
          '<meta itemprop="position" content="1" />' .
        '</li>' .
        $sep;
        if (is_attachment()) {
        /**
        * 添付ファイルページ ( $wp_obj : WP_Post )
        * ※ 添付ファイルページでは is_single() も true になるので先に分岐
        */
        echo '<li class="l-breadcrumb__item"><a href="' . home_url() . '">' . $wp_obj->post_title . '</a></li>';
        } elseif (
        is_page()
        ) {
        /**
        * 固定ページ ( $wp_obj : WP_Post )
        */
        $page_id = $wp_obj->ID;
        $page_title = $wp_obj->post_title;
  
        // 親ページがあれば順番に表示
        if ($wp_obj->post_parent !== 0) {
        $parent_array = array_reverse(get_post_ancestors($page_id));
          foreach ($parent_array as $parent_id) {
            echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumb__item">' .
              '<a itemprop="item" href="' . get_permalink($parent_id) . '"><span itemprop="name">' . get_the_title($parent_id) . '</span></a>' .
              '<meta itemprop="position" content="2" />' .
            '</li>';
          }
        }
        // 投稿自身の表示
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumb__item"> ' . '<span itemprop="name">' . $page_title . '</span></li>' .
             '<meta itemprop="position" content="2" />';
        } elseif (
        is_post_type_archive()
        ) {
        /**
        * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
        */
        echo '<li class="l-breadcrumb__item"><a href="' . home_url() . '">' . $wp_obj->label . '</a></li>';
        }
        echo '</ol>
    </div>'; // 冒頭に合わせて閉じタグ
    }
  }
  

// カスタム投稿タイプ

function create_post_type() {
  $exampleSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type( 'works',  // カスタム投稿ID
    array(
      'label' => '制作実績',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    )
  );
  register_taxonomy(
    'works-cat',
    'news',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );

  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
    )
  );
}
add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックします

/* ---------- thumbnailの有効化---------- */
add_theme_support('post-thumbnails');