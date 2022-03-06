<?php
/*
Template Name: works
*/
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
  'post_type' => 'works',// 投稿タイプを指定
  'posts_per_page' => 6,// 表示する記事数
  'paged' => $paged,
);
$works_query = new WP_Query( $args ); // 投稿オブジェクトの定義
?>

<?php get_header(); ?>
   <main>
      <?php custom_breadcrumb(); ?>
      <section class="p-works">
        <div class="container">
          <h1 class="c-ttl">WORKS</h1>
          <p class="lead">Webデザインの制作実績です</p>
          <ul class="category">
            <?php
              $terms = get_terms('works_cat');
              foreach ( $terms as $term ) {
                echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
              }
            ?>
          </ul>
          <ul class="p-works__list">
          <?php
          if ( $works_query->have_posts() ):
            while ( $works_query->have_posts() ):
              $works_query->the_post(); ?>
              <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ): ?>
                    <div class="img-box"> 
                      <?php the_post_thumbnail('medium'); ?>
                    </div>
                  <?php else: ?>
                    <div class="img-box">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/no-image.png">
                    </div>
                  <?php endif; ?>
                    <h2 class="heading">
                      <?php the_title(); ?>
                    </h2>
                </a>
              </li>
            <?php endwhile; 
            endif;
            // new WP_Query を使って二番目のクエリを実行した後に、メインクエリの $post グローバル変数を復元するために使用。
            wp_reset_postdata();
            // pagenation
            ?>
          </ul>
          <div class="pagination">
              <!-- ナビゲーション -->
              <?php
                $big = 999999999; // need an unlikely integer
                echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $works_query->max_num_pages
                ) );
              ?>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
