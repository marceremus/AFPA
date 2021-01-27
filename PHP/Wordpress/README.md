
## WORDPRESS

### Documentations
- https://wpmarmite.com/difference-article-page-wordpress/
- https://tutoriels-wordpress.babel-web.info/custom-post-types-pourquoi-et-comment/
- https://developer.wordpress.org/reference/


#### Création de la template personnalisée:

	<?php
	/*
	* Template name: portails
	*/

#### rappel de header
get_header();
	<?php
	/*
	*Template name: contact
	*/



#### rappel de footer
get_footer();

### WORDPRESS PLUGIN BOILERPLATE GENERATOR
-https://wppb.me/

### Les methodes WP

	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">
	<head>
		// utilisation de UTF-8 en fonction de langue du site
		<meta charset="<?php bloginfo( 'charset' ); ?>">


		// lien vers les images 
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/themify-f1380-256-128x128.png" type="image/x-icon">


		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/et-line-font-plugin/style.css">


		// liens vers les pages 
		<div class="navbar-brand">
		<a href="<?php echo esc_url(home_url("/")); ?>" class="navbar-logo">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logookner-300x60.png" alt="Site web">
	</a>
	</div>


	<div class="dropdown-menu">
		<a class="dropdown-item" href="<?php echo esc_url(home_url("/isolation")); ?>">Isolation</a>
		<a class="dropdown-item" href="<?php echo esc_url(home_url("/extension-bois")); ?>">Extension bois</a>
		<a class="dropdown-item" href="<?php echo esc_url(home_url("/terrasse")); ?>">Terrasses</a>
	</div>



