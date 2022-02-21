<?php
$args = array(
  'post_type' => 'works',// 投稿タイプを指定
  'posts_per_page' => 5,// 表示する記事数
);
$works_query = new WP_Query( $args );
if ( $works_query->have_posts() ): 
  while ( $works_query->have_posts() ): 
    $works_query->the_post(); 
?>

<!-- ここにhtml -->
<p>アーカイブです</p>
<?php endwhile;
endif;
wp_reset_postdata();
?>

<?php 
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}else{ ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noimage.jpg">
<?php } ?>