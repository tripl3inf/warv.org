<?php
/*
Template Name: Home Template
*/
global $post;
if ( ! empty( $post ) ) {
//    $slider_imgs = get_post_meta(get_the_ID(), '_cmb_slider_home', true);
}
?>


<?php while ( have_posts() ) : the_post(); ?>
  <section class="widget_home">





    <?php
//    if ( has_nav_menu( 'film_pages_navigation' ) ) :
//      wp_nav_menu( array( 'theme_location' => 'film_pages_navigation', 'menu_class' => 'nav' ) );
//    endif;
    ?>


  </section>



  <?php the_content(); ?>













<?php endwhile; ?>
