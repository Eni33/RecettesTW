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
			<div class="container mb-3 mt-3">
				<div class="row">
					<div class="col-md-12">
						<h1><?php the_title(); ?></h1>
                    </div>
				</div>
            </div>
            <div class="container mb-3 mt-3">
				<div class="row">
					<div class="col-md-6">
                        <?php the_content(); ?>
                        <?php 
                            $liste_des_ingredients = get_field_object('liste_des_ingredients');
                            $temps_de_cuisson = get_field_object('temps_de_cuisson');
                            $etapes = get_field_object('etapes');

                            $acf_array = [
                                [$liste_des_ingredients['label'],$liste_des_ingredients['value']] ,
                                [$temps_de_cuisson['label'],$temps_de_cuisson['value']] ,
                                [$etapes['label'],$etapes['value']]
                            ];
                        ?>
                        <div class="accordion" id="accordionBoot">
                            <?php foreach($acf_array as $key => $value) { 
                                if(!empty($value[1])) {?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $key ?>">
                                        <button class="accordion-button <?php if ($key !== array_key_first($acf_array)) {echo 'collapsed';} ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key ?>" aria-expanded="true" aria-controls="collapse<?php echo $key ?>">
                                            <?php echo $value[0]; ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $key ?>" class="accordion-collapse collapse <?php if ($key === array_key_first($acf_array)) {echo 'show';} ?>" aria-labelledby="heading<?php echo $key ?>" data-bs-parent="#accordionBoot">
                                        <div class="accordion-body">
                                            <?php echo $value[1]; ?>
                                        </div>
                                    </div>
                                </div> 
                                <?php }
                            } ?>
                        </div>                              
					</div>
                    <div class="col-md-6">
                        <?php if (has_post_thumbnail( $post->ID ) ) {
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <img class="card-img-top" src="<?php echo $image[0]; ?>" alt="Card image cap">
                        <?php } ?>
					</div>
				</div>
			</div>			
	    <?php }
	} ?>
</main>

<?php get_footer(); ?>