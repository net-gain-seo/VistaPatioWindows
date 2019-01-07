<!--
This is the default layout for the pages of your site. The default page is a full width layout. If you need a different default page layout please duplicate this template in your child theme and make your changes there.

* * * N O T E * * * mast and page-mast classes are used in the parent theme styles. Please keep these for proper functionality unless you plan to override. If you need a sidebar layout for your pages, there is one created. Just select it from the WordPress page editor.
-->

<?php get_header(); ?>

<?php
		if(has_post_thumbnail()) {
				echo '<div class="mast page-mast">';
						the_post_thumbnail();
				echo '<img src="'.get_stylesheet_directory_uri().'/img/Sub-Page-Waves.png" class="subpagewaves" alt="Vista Patio Doors">';
				echo '</div>'; // End of page-mast container
			}	else{
				echo '<div class="mast page-mast">';
				echo '<img src="'.get_stylesheet_directory_uri().'/img/Sub-Page-Banner.jpg" class="subpagewaves" alt="Vista Patio Doors">';
				echo '<img src="'.get_stylesheet_directory_uri().'/img/Sub-Page-Waves.png" class="subpagewaves" alt="Vista Patio Doors">';
				echo '</div>'; // End of page-mast container
			}
	?>

<?php while ( have_posts() ) : the_post(); ?>

		<div id="fullWidth">
        <?php the_content(); ?>
    </div>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
