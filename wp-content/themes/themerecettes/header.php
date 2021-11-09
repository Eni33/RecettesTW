<?php
/**
 * This is the template that displays all of the <head> section and <header> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="main-navigation"> 
	<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
		<div class="container-fluid"> 
			<?php 
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}else{
					echo '<p>' . get_bloginfo('name') . '</p>';
				}
			?> 
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
				<span class="navbar-toggler-icon"></span> 
			</button> 
			<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
				<?php wp_nav_menu( 
					array( 
						'theme_location' => 'main-menu', 
						'menu_id' => 'primary-menu', 
						'container_class'=> 'ms-auto ', 
						'menu_class'=>'navbar-nav',
						'li_class_bootstrap'  => 'nav-item',
						'a_class_bootstrap'  => 'nav-link'
					) 
				); ?> 
			</div> 
		</div> 
	</nav> 
</header>