<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
   <section class="contact-form">
      <div class="">
         <h1 class="main-heading">CONTACT</h1>
         <p class="contact-content">テキストテキストテキストテキスト「<a href="/privacy-policy.html"
            class="privacy-policy">個人情報保護方針</a>」テキストテキストテキストテキストテキストテキストテキストテキスト</p>
         <div>
               <!-- $post_id = 25;
               $post = get_post($post_id);
               echo apply_filters( 'the_content', $page->post_content ); -->
         <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
               <?php echo apply_filters(the_content()); ?>
               <?php echo apply_filters( 'the_content', get_post(25)->post_content ); ?>
            <?php endwhile; ?>
         <?php else: ?>
           投稿が無い時の処理
         <?php endif; ?>
      </div>
  </section>
<?php get_footer(); ?>