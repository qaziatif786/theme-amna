<?php
/**
 * Header file for the Amna default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Anma
 * @since Amna 1.0
 */

?><!DOCTYPE html>
<?php
get_header(); 
$options = get_option('amna_fields');
$header_layout = $options['header']['type'];
?>


<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
		<?php 
		if ($header_layout === '1' ) {
			get_template_part( 'template-part/header' , 'v1');
		}
		if ($header_layout === '2' ) {
			get_template_part( 'template-part/header' , 'v2');
		}
		?>