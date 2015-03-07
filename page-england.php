<?php
/*
Template Name: Page of Some Posts
*/

get_header();	?>

<div id="content_sidebar_wrap" class="clearfix">

  <div id="content" class="grid_8 alpha">
    <div id="content_inside">

	  <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'loop-error' ); ?>

      <?php endif; ?>

      <?php get_template_part( 'loop-nav' ); ?>

    </div>
  </div> <!-- end #content -->

  <?php get_sidebar(); ?>

</div> <!-- end #content_sidebar_wrap -->

<?php get_footer(); ?>
