<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<main id="main-content">
	<?php if ( have_posts() ) {
       while ( have_posts() ) {
            the_post(); ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php the_title(); ?></h1>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>			
	    <?php }
	} ?>
</main>

<?php get_footer(); ?>