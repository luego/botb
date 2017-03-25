<?php
/**
 *  Template Name: Tickets
 */
get_header(); ?>
<div id="page-full-width" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  <div <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
	      <div class="cars-tiles">
		    <div class="row wac-row">
		        <?php echo do_shortcode('[pods name="tc_tickets" template="Tickets"]'); ?>
		    </div>
		</div>
	  </div>
	<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer(); ?>