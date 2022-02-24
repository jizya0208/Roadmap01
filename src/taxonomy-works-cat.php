<p>works-cat</p>
<?php get_header(); ?>
   <section>
      <?php query_posts($query_string . "&pst_type=jiseki&posts_per_page=30&paged='.$paged"); ?>
      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
      <div>

         <?php
      $terms = get_the_terms( get_the_ID(), 'works-cat' );
      if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
      ?>

      <?php foreach( $terms as $term ) : ?>
      <span class="icon01 <?php echo "$term->slug"; ?>"><?php echo $term->name; ?></span>
      <?php endforeach; ?>

      <?php endif; endif; ?>
         
         <h2 class="h2Style03"><?php the_title(); ?></h2>
         <p><?php the_content(); ?></p>
      </div>
      <?php endwhile; endif; ?>
   </section>
<?php get_footer(); ?>​