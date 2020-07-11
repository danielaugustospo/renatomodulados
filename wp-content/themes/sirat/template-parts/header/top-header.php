<?php
/**
 * The template part for header
 *
 * @package Sirat 
 * @subpackage sirat
 * @since Sirat 1.0
 */
?>

<?php if( get_theme_mod( 'sirat_contact_text') != '' || get_theme_mod( 'sirat_contact_call') != '' || get_theme_mod( 'sirat_header_search') != '' ) { ?>

<?php if( get_theme_mod('sirat_topbar_hide_show',true) != ''){ ?>
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
				    <?php if( get_theme_mod( 'sirat_contact_call') != '') { ?>
	          			<p><i class="<?php echo esc_attr(get_theme_mod('sirat_phone_icon','fas fa-phone')); ?>"></i><?php echo esc_html(get_theme_mod('sirat_contact_call',''));?></p>
	    			<?php } ?>
			    </div>
			    <div class="col-lg-4 col-md-4">
				    <?php if( get_theme_mod( 'sirat_contact_email') != '') { ?>
	          			<p><i class="<?php echo esc_attr(get_theme_mod('sirat_contact_email_icon','far fa-envelope')); ?>"></i><?php echo esc_html(get_theme_mod('sirat_contact_email',''));?></p>
	        		<?php }?>
			    </div>
			    <div class="<?php if(get_theme_mod('sirat_header_search',true)) { ?>col-lg-4 col-md-4" <?php } else { ?>col-lg-5 col-md-5 "<?php } ?> >
				    <?php dynamic_sidebar('social-links'); ?>
			    </div>
			    <?php if( get_theme_mod( 'sirat_header_search',true) != '') { ?>
		        	<div class="col-lg-1 col-md-1">
		          		<div class="search-box">
	            			<button type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></button>
		          		</div>
			        </div>
		      	<?php }?>
			</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog" role="document">
			      <div class="modal-body">
			        <div class="serach_inner">
			          <?php get_search_form(); ?>
			        </div>
			      </div>
			      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    </div>
			</div>
		</div>
	</div>
<?php } ?>

<?php }?>