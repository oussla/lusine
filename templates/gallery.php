<?php
/**
Template Name: Gallery
 *
 * @package lusine
 */

get_header(); ?>

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

                                    <?php

                                    /*
                                        Displaying images infos.
                                        Only if a real title has been provided.
                                     */

                                    if(isset($image['title']) && $image['title'] !== $image['name']):
                                    ?>

                                    <div class="image-infos">
                                        <span class="title"><?php echo $image['title']; ?></span>
                                        <?php 
                                        
                                        if(isset($image['caption']) && $image['caption'] != ''):
                                        ?>
                                        <span class="caption">
                                        <?php echo $image['caption']; ?>
                                        </span>
                                        <?php
                                        endif;

                                        if(isset($image['description']) && $image['description'] != ''):
                                        ?>
                                        <span class="description">
                                        <?php echo $image['description']; ?>
                                        </span>
                                        <?php
                                        endif;
                                        ?>

                                    </div>

                                    <?php
                                    endif;
                                    ?>

                                </a>
                            </figure>

                            <?php // print_r($image); ?>

                        <?php endforeach; ?>
                <?php

                endif; 

            ?>
        	
    	</section>

    </main>

    <?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
