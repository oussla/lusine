<?php
/**
Template Name: Gallery
 *
 * @package lusine
 */

get_header('cover'); ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>

        <div class="page-content">
        <?php the_content(); ?>
        </div>
    </header>
    
    <section id="gallery-container" class="fullwidth-gallery">

        
        <?php            

            $gallery = get_field('gallery');

            if( $gallery ): ?>
                    <?php foreach( $gallery as $image ): ?>
                        <figure class="gallery-image">
                            <a href="<?php echo $image['url']; ?>" class="gallery-link">

                                <?php                               
                                echo wp_get_attachment_image($image['id'], 'gallery_medium');
                                ?>

                            </a>
                        </figure>
                    <?php endforeach; ?>
            <?php

            endif; 

        ?>
    	
	</section>

    <?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
