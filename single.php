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
 
get_header(); 
$options = get_option( 'amna_fields' );
$single_layout = $options['single']['layout'];
if ($single_layout === '1')
	$class = 'single-full-width';
if ($single_layout === '2')
	$class = 'single-left-sidebar';
if ($single_layout === '3')
	$class = 'single-right-sidebar';
?>

<?php do_action( 'beforeheader' ); ?>
 
<div id="primary" class="content-area <?php echo $class ?>">
    <div class="site-width">
        <div id="content" class="site-content" role="main">
     
        <?php if ( have_posts() ) : ?>
     
    
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
     
                <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to overload this in a child theme then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-part/blog','layout' );
                ?>
     
            <?php endwhile; ?>
     
            <?php do_action( 'pagination' ); ?>
     
        <?php endif; ?>
        </div><!-- #content .site-content -->
        <?php if ($single_layout != '1') 
			get_sidebar(); ?>
    </div>
</div><!-- #primary .content-area -->


<?php get_footer(); ?>