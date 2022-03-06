<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
   <main>
      <?php custom_breadcrumb(); ?>
      <section class="contact-form">
         <div class="p-contact">
            <h1 class="c-ttl">CONTACT</h1>
            <p class="lead">お仕事のご依頼などお待ちしております。</p>
            <div class="form-box">
               <?= do_shortcode('[mwform_formkey key="27"]') ?>
            </div>
         </div>
      </section>
   </main>
<?php get_footer(); ?>
