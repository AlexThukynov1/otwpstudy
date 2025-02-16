<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package otwpstudy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();
	 ?>
</head>

<body <?php body_class(); ?>>

Header
<!-- <?php 

	// get_template_part("parts/part");
	// get_template_part("parts/part", "one");
	// get_template_part("parts/part", "two");

?> -->
<?php wp_body_open(); ?>
