<?php
/**
Template Name: Gallery
 *
 * @package lusine
 */

get_header('cover'); ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <main id="main gallery" class="site-main" role="main">

        <section class="gallery">
                    
            <?php get_template_part( 'template-parts/content', 'page' ); ?>        

        </section>

        
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

    </main>

    <?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
