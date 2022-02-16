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
         <?php
               $post_id = 25;
               $post = get_post($post_id);
               echo apply_filters( 'the_content', $page->post_content );
         ?>
      </div>
  </section>
<?php get_footer(); ?>