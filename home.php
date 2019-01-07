    <?php
        get_header();
    ?>
    <div class="mast page-mast">
       <?php
           if( has_post_thumbnail() ) {
               the_post_thumbnail();
           } else {
               echo '<img src="'.get_bloginfo('template_url'). '/img/Banner.jpg" />';
           }
           $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
           $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );
       ?>
       <div class="container mast-overlay">
           <?php
              if( !empty($mast_title) ) {
                  echo '<h1 class="titleText">'.$mast_title.'</h1>';
              }
              else{
                  echo '<h1 class="titleText">News</h1>';
              }
             if( !empty($mast_description) ) {
                 echo wpautop( $mast_description );
             }
           ?>
       </div>
   </div>
   <article class="page-content">
     <div class="container">
       <div class="row">
         <div class="col col-lg-12 col-md-12 col-sm-12 col-xsm-12">

              <?php while ( have_posts() ) : the_post(); ?>

                <div id="Post" class="blogposts">
                  <h2 class="post-title">
                      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <?php the_excerpt(); ?>
                </div>

              <?php endwhile; // End of the loop. ?>

          </div>
        </div>
      </div>
    </article>

    <?php
        get_footer();
