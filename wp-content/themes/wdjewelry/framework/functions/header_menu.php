<?php 
add_action("wdjewelry_header_menu","wdjewelry_menu_mobile",1);

add_action("wdjewelry_header_menu","wdjewelry_menu_main",2);
// Menu Mobile 
function wdjewelry_menu_mobile(){?>
		<div class= "wd-header-mobile visible-xs">
			<div class="mobile-menu">
				<?php if(!get_theme_mod('ubermenu',true)): ?>
					<a href="javascript:void(0)" class="icon-mobile-menu"><i class="fa fa-bars"></i></a>
				<?php endif; ?>
					<?php   
					if(has_nav_menu('mobile')):
						wp_nav_menu( array(
									'theme_location'=>'mobile',
									'menu' => 'mobile_menu',
									'container_class' => 'wd-mobile-menu',
									) );
					else:    
						wp_nav_menu( array(
									'menu' => 'mobile_menu',
									'container_class' => 'wd-mobile-menu',
									) );
					endif;
				?>
			
				<div  class="mobile-cart">
					<?php echo wdjewelry_mini_cart();?>
					<a href="javascript:void(0)"><span class="show-login"><i class="fa fa-cog fa-lg "></i></span></a>
				</div>
			</div>
			<div class="mobile-login">
				<?php echo wdjewelry_wd_tini_wishlist(); ?>
				<?php echo wdjewelry_link_login(); ?> 
			</div>

			<div class="mobile-logo" >    
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
					<img src="<?php echo wdjewelry_get_logo_url();?>" alt='<?php echo esc_html__("logo","wdjewelry");?>'>
				</a>
			</div>
<!-- 
			<div class="mobile-seach">
				<?php get_search_form(); ?>
			</div> -->
		</div>
<?php } 
function wdjewelry_menu_main(){ ?>
	<div class="site-header hidden-xs" >
		<div class="site-header-top">
			<div class="container">
				<div class="row">
					<div class="header-top-content">
						<?php 
							if(is_active_sidebar("header-2" ) ):
								dynamic_sidebar("header-2" );
							endif;
								
						?>
						
							<div class="header-main-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
								<img src="<?php echo wdjewelry_get_logo_url();?>" alt='<?php echo esc_html__("logo","wdjewelry");?>'>
							</div>
						<div class="">

							<?php if(get_theme_mod('show_wishlist',true)): ?>
							<div class='header-top-right-wishlist'></div>
							<?php endif; ?>

							<?php if(get_theme_mod('show_cart',true)): ?>
							<div class='header-top-right-account'><?php echo wdjewelry_mini_cart();?></div>
							<?php endif; ?>

							<?php if(get_theme_mod('show_account',true)): ?>
							<div class='header-top-right-account'><?php echo wdjewelry_woo_account();?></div>
							<?php endif; ?>











							<?php if(get_theme_mod('show_seach',true)): ?>

							<div class='seach' style="float: right !important;">
								<span class='seach__icon'  style="float: right !important;"></span>
								<?php get_search_form(); ?>
							</div>
							
							<?php endif; ?>

						
						</div>
						
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"> </div>

		<div class='site-header-main'>
					<div class="container">
						<div class="row">
							<div class='header-main-content'>
								
								<div class='header-main-menu col-md-18 col-sm-offset-4'>
									<div class='header-main-menu__custom'>
									<?php 
										if (has_nav_menu('primary')):
										wp_nav_menu(array("theme_location" => "primary",'menu_class' => 'primary nav-menu',
											"container" => "div" ));
										else: 
										$args = array(
											'menu_class' => 'primary nav-menu',
											"container" => "div", 
										);
										wp_nav_menu( $args );
										endif;  
									?>
									</div>
								</div>
							</div>
							
							<div class='clear'></div>

						</div>
					</div>
		</div>




		
	</div>

<?php }