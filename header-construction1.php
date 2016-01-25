<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */
?>
<?php global $chairman_opt; 
if(is_ssl()){
	$chairman_opt['logo_main']['url'] = str_replace('http:', 'https:', $chairman_opt['logo_main']['url']);
}
?>
	<div class="header-container  construction1"> 
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="box-left">
							<div class="top-message"><?php echo esc_html($chairman_opt['welcome_message']); ?></div>
							<?php if((isset($chairman_opt['blog_header']) && $chairman_opt['blog_header']!=''))
							{ ?>
								<div class="blog-header"> 
									<?php echo wp_kses($chairman_opt['blog_header'], array(
										'a' => array(
											'href' => array(),
											'title' => array()
										),
										'img' => array(
											'src' => array(),
											'alt' => array()
										),
										'ul' => array(),
										'li' => array(
											'class' => array()
										),
										'label' => array(),
										'i' => array(
											'class' => array()
										),
										'br' => array(),
										'em' => array(),
										'strong' => array(),
										'p' => array(),
									)); ?>
								</div>
							<?php } ?>

						</div> 
					</div>	
					<div class="col-xs-12 col-md-6">
						<?php if(class_exists('WC_Widget_Product_Search') ) { ?>

							<?php the_widget('WC_Widget_Product_Search', array('title' => 'Search')); ?>

						<?php } ?>
					</div>
				</div>
			</div>
		</div> 
		<div class="header">
			<div class="<?php if(isset($chairman_opt['sticky_header']) && $chairman_opt['sticky_header']) {echo 'header-sticky';} ?> <?php if ( is_admin_bar_showing() ) {echo 'with-admin-bar';} ?>">
				<div class="container header-inner">
					<div class="row">
						<div class="col-xs-12 col-md-3 logo-wrap">
							<div class="global-table">
								<div class="global-row">
									<div class="global-cell">
										<?php if( isset($chairman_opt['logo_main']['url']) ){ ?>
											<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($chairman_opt['logo_main']['url']); ?>" alt="" /></a></div>
										<?php
										} else { ?>
											<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php
										} ?>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-9 menu-wrap">	
							<div class="horizontal-menu">
								<div class="visible-large">
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'primary-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
								</div>
								<div class="visible-small mobile-menu">
									<div class="nav-container">
										<div class="mbmenu-toggler"><?php echo esc_html($chairman_opt['mobile_menu_label']);?><span class="mbmenu-icon"><i class="fa fa-bars"></i></span></div>
										<?php wp_nav_menu( array( 'theme_location' => 'mobilemenu', 'container_class' => 'mobile-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
									</div>
								</div>
							</div>
						</div>
						
					</div>	
				</div>
			</div>
		</div><!-- .header -->
		<div class="clearfix"></div>
	</div>