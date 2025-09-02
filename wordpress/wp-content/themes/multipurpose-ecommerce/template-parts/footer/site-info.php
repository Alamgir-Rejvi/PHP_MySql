<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'multipurpose_ecommerce_hide_show_scroll',true) != '' || get_theme_mod( 'multipurpose_ecommerce_enable_disable_scrolltop',true) != '') { ?>
    <?php $multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_footer_options','Right');
        if($multipurpose_ecommerce_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'multipurpose-ecommerce' ); ?></span></a>
        <?php }else if($multipurpose_ecommerce_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'multipurpose-ecommerce' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'multipurpose-ecommerce' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<div class="container">
      <div class="row"> 
		<div class="col-lg-4 col-md-12 col-12 align-self-center"><?php multipurpose_ecommerce_credit(); ?> <?php echo esc_html(get_theme_mod('multipurpose_ecommerce_footer_text',__('By Themescaliber','multipurpose-ecommerce'))); ?> </div>
        <div class="col-lg-4 col-md-12 col-12 align-self-center">
        <?php if (get_theme_mod('multipurpose_ecommerce_show_footer_social_icon', true)){ ?>   
        <div class="socialicons">                               
            <?php if(get_theme_mod('multipurpose_ecommerce_footer_facebook_url') != ''){ ?>
	  	     	<a target="_blank" href="<?php echo esc_url(get_theme_mod('multipurpose_ecommerce_footer_facebook_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_footer_facebook_icon', 'fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'multipurpose-ecommerce'); ?></span></a>
	  		<?php }?>
	  		<?php if(get_theme_mod('multipurpose_ecommerce_footer_twitter_url') != ''){ ?>
	  		    <a target="_blank" href="<?php echo esc_url(get_theme_mod('multipurpose_ecommerce_footer_twitter_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_footer_twitter_icon', 'fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'multipurpose-ecommerce'); ?></span></a>
	  		<?php }?>
            <?php if(get_theme_mod('multipurpose_ecommerce_footer_instagram_url') != ''){ ?>
	  		    <a target="_blank" href="<?php echo esc_url(get_theme_mod('multipurpose_ecommerce_footer_instagram_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_footer_instagram_icon', 'fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'multipurpose-ecommerce'); ?></span></a>
	  		<?php }?>
	  	    <?php if(get_theme_mod('multipurpose_ecommerce_footer_linkedin_url') != ''){ ?>
	  		   <a target="_blank" href="<?php echo esc_url(get_theme_mod('multipurpose_ecommerce_footer_linkedin_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_ecommerce_footer_linkedin_icon', 'fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Linkedin', 'multipurpose-ecommerce'); ?></span></a>
	  		<?php }?>
        </div>		
        <?php }?>
        </div>
        <div class="footer_text col-lg-4 col-md-12 col-12 align-self-center"><?php echo esc_html_e('Powered By WordPress','multipurpose-ecommerce') ?></div>
	  </div>
    </div>  
</div>