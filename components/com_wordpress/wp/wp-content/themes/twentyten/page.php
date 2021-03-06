<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); 

$template_company = get_site_option( 'wpj_template_club', '' );

if( 'rockettheme' == $template_company ) {
	$template_wrapper	= 'maincontent-block';
} elseif( 'rockettheme_gantry_1' == $template_company ) {
	$template_wrapper	= 'page';
} elseif( 'joomlart' == $template_company ) {
	$template_wrapper	= 'ja-content';
} else {
	$template_wrapper	= 'wp-maincontent';
}
?>

		<div id="wp-container" class="<?php echo $template_company; ?>">
			<div id="<?php echo $template_wrapper; ?>">
				<div id="wp-content" class="inside" role="main">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="articleheading">
							<div class="article-rel-wrapper title_wrapper">
								<?php if ( is_front_page() ) { ?>
									<h2 class="entry-title contentheading"><span><?php the_title(); ?></span></h2>
								<?php } else { ?>
									<h2 class="entry-title contentheading"><span><?php the_title(); ?></span></h2>
								<?php } ?>
							</div>
						</div>
						<div class="articledivider"></div>

						<div class="contentpaneopen clearfix">
							<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
							</div><!-- .entry-content -->
						</div><!-- .contentpaneopen -->
						
						<div class="articlefooter"></div>
						
					</div><!-- #post-## -->

					<?php comments_template( '', true ); ?>

	<?php endwhile; ?>

				</div><!-- #content -->
			</div><!-- #<?php echo $template_wrapper; ?> -->
		</div><!-- #wp-container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
