
<footer id="colophon" class="site-footer">
  <div class="footer-content-top">
    <div id="widget-newsletter">
      <div class="container">
        <div class="newletter">
          <?php if (is_active_sidebar('newletter')): ?>
            <?php// dynamic_sidebar('newletter'); ?>

             <?php echo do_shortcode( '[mc4wp_form id="4279"]' ) ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<!--   <div class="footer-content-main clearfix">
  	<div class="container">
    	<div class ='footer-content-main__area1 col-md-6 col-xs-24'>
    	   <?php if(is_active_sidebar("footer-1")){dynamic_sidebar("footer-1" );}?>
      </div>
      <div class ='footer-content-main__area2 col-md-6 col-xs-24'>
        <?php if(is_active_sidebar("footer-2")){dynamic_sidebar("footer-2" );}?>
      </div>
    	<div class ='footer-content-main__area3 col-md-6 col-xs-24'>
        <?php if(is_active_sidebar("footer-3")){dynamic_sidebar("footer-3" );}?>
      </div>
      <div class ='footer-content-main__area4 col-md-6 col-xs-24'>
        <?php if(is_active_sidebar("footer-4")){dynamic_sidebar("footer-4" );}?>
      </div>
  	</div>
  </div> -->

	<div class="footer-content-bottom clearfix">
		<div class="container">
  		<div class="row">
          <div class="container">
            <div class ='footer-content-main__area1 col-md-6 col-xs-24'>
               <?php if(is_active_sidebar("footer-1")){dynamic_sidebar("footer-1" );}?>
            </div>
            <div class ='footer-content-main__area2 col-md-6 col-xs-24'>
              <?php if(is_active_sidebar("footer-2")){dynamic_sidebar("footer-2" );}?>
            </div>
            <div class ='footer-content-main__area3 col-md-6 col-xs-24'>
              <?php if(is_active_sidebar("footer-3")){dynamic_sidebar("footer-3" );}?>
            </div>
            <div class ='footer-content-main__area4 col-md-6 col-xs-24'>
              <?php if(is_active_sidebar("footer-4")){dynamic_sidebar("footer-4" );}?>
            </div>
          </div>
      </div>
      <div class="row">
          <div class ='copyright col-md-12 col-xs-12'>
          <?php if(get_theme_mod('layout_copyright_footer')){?>
            <p><?php echo get_theme_mod('layout_copyright_footer');  ?></p>
          <?php }else{ ?>
            <p><?php echo('C. Gondim '.date('Y').'. Desenvolvido por <a href="https://www.facebook.com/gti.ufc/">GTi Engenharia Jr.</a>'); ?></p>
          <?php } ?>
        </div>

         <div class ='widget-payment col-md-12 col-xs-12'>
          <?php 
            if(is_active_sidebar( "widget-payment" )):
               dynamic_sidebar("widget-payment" );
            endif;
          ?>
        </div> 
      </div>
		</div>
	</div><!-- .footer-content-bottom -->
</footer><!-- .site-footer -->