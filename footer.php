<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resi
 */

?>

	   </div><!-- #content -->

  </div><!-- .site-wrapper -->

	<footer id="colophon" class="site-footer" role="contentinfo">

      <div class="site-info">
      
        <address class="address">10b rue saint léonard 4000 liege</address>

        <?php 

          wp_nav_menu(array(  
              'theme_location' => 'footer_menu', 
              'menu_id' => 'footer-menu',
              'menu_class' => 'footer-menu',
              'depth' => 1
          ));

        ?>

          
      </div><!-- .site-info -->

	</footer><!-- #colophon -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
