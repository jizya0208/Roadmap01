<?php
/*
Template Name: 制作実績
*/
?>
<?php get_header(); ?>
   <main>
      <?php custom_breadcrumb(); ?>
      <section class="">
         <div class="">
            <h1 class="c-ttl">WORKS</h1>
            <p class="">お仕事のご依頼などお待ちしております。</p>
            <div class="">
               <?php if (have_posts()): ?>
                  <?php while (have_posts()) : the_post(); ?>
                     <?php echo apply_filters(the_content()) ?>
                  <?php endwhile; ?>
               <?php else: ?>
                  投稿が無い時の処理
               <?php endif; ?>
            </div>
                  <!-- $post_id = 25;
                  $post = get_post($post_id);
                  echo apply_filters( 'the_content', $page->post_content ); -->
         </div>
      </section>
   </main>
<?php get_footer(); ?>
