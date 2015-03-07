<?php
/*
Template Name: Page Of Posts
*/

/* This example is for a child theme of Twenty Thirteen:
*  You'll need to adapt it the HTML structure of your own theme.
*/

get_header(); ?>

	<div id="content_sidebar_wrap" class="clearfix">
		<div id="content" class="grid_8 alpha">
			<div id="content_inside">
        <?php
        /* The loop: the_post retrieves the content
         * of the new Page you created to list the posts,
         * e.g., an intro describing the posts shown listed on this Page..
         */
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              // Display content of page
              get_template_part( 'content', get_post_format() );
              wp_reset_postdata();

            endwhile;
        endif;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            // Change these category SLUGS to suit your use.
            'category_name' => 'england',
            'paged' => $paged
        );

        $list_of_posts = new WP_Query( $args );
        ?>
        <?php if ( $list_of_posts->have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post(); ?>
				<?php // Display content of posts ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php //twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'loop-nav' ); ?>
		<?php endif; ?>
	</div>
		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
