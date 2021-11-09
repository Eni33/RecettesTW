<?php
/**
 * Template Name: Custom Full Width
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

<?php

// second loop avec CPT Recettes limit 3 dernières
$args = array(
	'post_type'              => array( 'recettes' ),
	'post_status'            => array( 'publish' ),
	'order'                  => 'DESC',
	'orderby'                => 'date',
	'posts_per_page'    	 =>  3
);


$query = new WP_Query( $args );
?>

<div class="container mb-3 mt-2">
	<div class="row">
	
<?php


if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<?php if (has_post_thumbnail( $post->ID ) ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img class="card-img-top" src="<?php echo $image[0]; ?>" alt="Card image cap">
					<?php } ?>
				<div class="card-body">
					<h5 class="card-title">
						<?php the_title(); ?>
					</h5>
					<p class="card-text">
						<?php echo mb_strimwidth(get_the_content(), 0, 250, '...');?>
					</p>
					<a href="<?php echo get_post_permalink(); ?>" class="btn btn-primary">Lire la recette</a>
				</div>
				</div>
			</div>	
		<?php
	}?>
	</div>
</div>
<?php } else {?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Aucune recettes trouvées</h3>
			</div>
		</div>
	</div>	
<?php }

wp_reset_postdata();

?>

<?php get_footer(); ?>