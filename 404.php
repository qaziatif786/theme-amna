<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package Shape
* @since Shape 1.0
*/
 
get_header(); ?>

 
<div id="primary" class="content-area ">
    <div class="site-width">
        <div id="content" class="site-content" role="main">
			
			<h1> <?php _e( 'Not Found', 'amana' ); ?></h1>
        
        </div><!-- #content .site-content -->
        
    </div>
</div><!-- #primary .content-area -->


<?php get_footer(); ?>