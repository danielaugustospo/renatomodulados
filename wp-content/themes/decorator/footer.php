<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Decorator
 */
?>
</div><!-- main-container -->

<div class="copyright-wrapper">
        	<div class="container">
                <div class="copyright top-center">
					<p>Formas de pagamento:</p>
						<img style="width: 45%; background-color: navajowhite;" src="miniaturas/paymentBanner.png">
					<br>
                    	<p><?php esc_attr(bloginfo( 'name' )); ?>  
                      <a href="http://danieltecnologia.com" target="_blank"><p>Desenvolvido por DanielTECH</p></a>
               
                    	
                </div>
				<!-- copyright --><div class="clear"></div>           
            </div><!-- container -->
        </div>
    </div>
        
<?php wp_footer(); ?>

</body>
</html>