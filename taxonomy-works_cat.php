
<?php get_header(); ?>
  <main>
    <?php custom_breadcrumb(); ?>
    <section class="p-works">
      <div class="container">
      <?php 
        global $post;
        $term = array_shift(get_the_terms($post->ID, 'works_cat')); 
        console.log($post);
        $args = array(
        'numberposts' => 5, //(8件表示の場合)
        'post_type' => 'works', //カスタム投稿タイプ名
        'taxonomy' => 'works_cat', //タクソノミー名
        'term' => $term->slug, //ターム名 
        'post__not_in' => array($post->ID)
        );
      ?>
      <ul class="category">
        <?php
          $terms = get_terms('works_cat');
          foreach ( $terms as $term ) {
            echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
          }
        ?>
      </ul>
      <?php $myPosts = get_posts($args); if($myPosts) : ?>
        <ul class="p-works__list">
          <?php foreach($myPosts as $post) : setup_postdata($post); ?>
            <li><a href="<?php the_permalink(); ?>">
            <div class="img-box">
                <?php the_post_thumbnail('medium'); ?>
            </div>
            <h2 class="heading">
              <?php the_title(); ?>
            </h2>
            </a></li>
          <?php endforeach; ?>
        </ul>
      <?php else : ?>
        <p>投稿が見つかりません</p>
      <?php endif; wp_reset_postdata(); ?>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
