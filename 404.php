<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="mast page-mast">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Sub-Page-Banner.jpg" class="subpage banner" alt="Vista Patio Doors">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Sub-Page-Waves.png" class="subpagewaves" alt="Vista Patio Doors">
</div>
<div class="container">
    <div class="row">
      <div class="col col-12 col-lg-12">
        <h1>404 Page Not Found</h1>
          <p>Oops, we’re sorry. We can’t find the page you’re looking for. </p>
          <p>The link you followed may be broken or the page may have been removed.</p>
          <p>Back to <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a></p>
			</div><!-- .page-wrapper -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
