<?php
/*
Template Name: 製作実績一覧
*/
$args = array(
  'post_type' => 'works',// 投稿タイプを指定
  'posts_per_page' => 5,// 表示する記事数
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
          <ul>
            <?php
              $terms = get_terms('works-cat');
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
                  <php? else: ?>
                    <div class="img-box">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/no-image.png">
                    </div>
                  <?php endif; ?>
                  <p class="heading">
                    <?php the_title(); ?>
                  </p>
                </a>
              </li>
            <?php endwhile; 
            endif;
            wp_reset_postdata();
          ?>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
