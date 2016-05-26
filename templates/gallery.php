<?php
/**
Template Name: Gallery
 *
 * @package lusine
 */

get_header('cover'); ?>

    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <section id="gallery-container" class="fullwidth-gallery">

        
        <?php
            
            /**
             * TODO : 
             * pick the right thumbnail size, not the square one. 
             */
            

            $gallery = get_field('gallery');

            if( $gallery ): ?>
                    <?php foreach( $gallery as $image ): ?>
                        <figure class="gallery-image">
                            <a href="<?php echo $image['url']; ?>" class="gallery-link">
                                 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        </figure>
                    <?php endforeach; ?>
            <?php

             endif; 

        ?>
    	
	</section>


<?php get_footer(); ?>
