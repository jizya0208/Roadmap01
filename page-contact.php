<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
   <section class="contact-form">
      <div class="p-contact">
         <h1 class="c-ttl">CONTACT</h1>
         <p class="text">お仕事のご依頼などお待ちしております。</p>
         <div class="form-box">
            <?php if (have_posts()): ?>
               <?php while (have_posts()) : the_post(); ?>
                  <?php echo apply_filters(the_content()) ?>
                  <?php echo apply_filters( 'the_content', get_post(25)->post_content ); ?>
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
<?php get_footer(); ?>