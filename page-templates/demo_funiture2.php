<?php
$_SESSION["preset"] = 2;
/**
 * Template Name: Demo Furniture 2
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php global $chairman_opt; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
if(isset($chairman_opt['opt-favicon']) && $chairman_opt['opt-favicon']!="") { 
	if(is_ssl()){
		$chairman_opt['opt-favicon'] = str_replace('http', 'https', $chairman_opt['opt-favicon']);
	}
?>
	<link rel="icon" type="image/png" href="<?php echo esc_url($chairman_opt['opt-favicon']['url']);?>">
<?php } ?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">
var chairman_brandnumber = <?php if(isset($chairman_opt['brandnumber'])) { echo esc_js($chairman_opt['brandnumber']); } else { echo '6'; } ?>,
	chairman_brandscroll = <?php echo esc_js($chairman_opt['brandscroll'])==1 ? 'true': 'false'; ?>,
	chairman_brandscrollnumber = <?php if(isset($chairman_opt['brandscrollnumber'])) { echo esc_js($chairman_opt['brandscrollnumber']); } else { echo '2';} ?>,
	chairman_brandpause = <?php if(isset($chairman_opt['brandpause'])) { echo esc_js($chairman_opt['brandpause']); } else { echo '3000'; } ?>,
	chairman_brandanimate = <?php if(isset($chairman_opt['brandanimate'])) { echo esc_js($chairman_opt['brandanimate']); } else { echo '700';} ?>;
var chairman_blogscroll = <?php echo esc_js($chairman_opt['blogscroll'])==1 ? 'true': 'false'; ?>,
	chairman_blogpause = <?php if(isset($chairman_opt['blogpause'])) { echo esc_js($chairman_opt['blogpause']); } else { echo '3000'; } ?>,
	chairman_bloganimate = <?php if(isset($chairman_opt['bloganimate'])) { echo esc_js($chairman_opt['bloganimate']); } else { echo '700'; } ?>;
var chairman_testiscroll = <?php echo esc_js($chairman_opt['testiscroll'])==1 ? 'true': 'false'; ?>,
	chairman_testipause = <?php if(isset($chairman_opt['testipause'])) { echo esc_js($chairman_opt['testipause']); } else { echo '3000'; } ?>,
	chairman_testianimate = <?php if(isset($chairman_opt['testianimate'])) { echo esc_js($chairman_opt['testianimate']); } else { echo '700'; } ?>;
var chairman_menu_number = <?php if(isset($chairman_opt['vertical_menu_items'])) { echo esc_js((int)$chairman_opt['vertical_menu_items']+1); } else { echo '9';} ?>;
</script>
<?php wp_head(); ?> 
</head>

<body <?php body_class('home'); ?>>
	<div id="yith-wcwl-popup-message" style="display:none;"><div id="yith-wcwl-message"></div></div>
	<div class="wrapper <?php if($chairman_opt['page_layout']=='box'){echo 'box-layout';}?>">
		<div class="page-wrapper">
			<div class="header-container furniture2">  
				<div class="header">
					<div class="<?php if(isset($chairman_opt['sticky_header']) && $chairman_opt['sticky_header']) {echo 'header-sticky';} ?> <?php if ( is_admin_bar_showing() ) {echo 'with-admin-bar';} ?>">
						<div class="container header-inner">
							<div class="row">
								<div class="col-xs-12 col-md-2 logo-wrap">
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

								<div class="col-xs-12 col-md-8 menu-wrap">	
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

								<div class="col-xs-12 col-md-2">
									<div class="content-header">
										<?php if(class_exists('WC_Widget_Product_Search') ) { ?>
											<div class="header-search">
												<div class="search-icon">
													<?php the_widget('WC_Widget_Product_Search', array('title' => 'Search')); ?>
												</div>
											</div>
										<?php } ?>
										<?php if ( class_exists( 'WC_Widget_Cart' ) ) {
											the_widget('Custom_WC_Widget_Cart'); 
										} ?>
										<div class="vmenu-toggler">
											<div class="vmenu-toggler-button">
												<i class="fa fa-bars"></i>
											</div>
											<div class="vmenu-content">
												<?php wp_nav_menu( array( 'theme_location' => 'topmenu', 'container_class' => 'top-menu-container', 'menu_class' => 'nav-menu' ) ); ?> 
												<div class="switcher">
													<?php do_action('icl_language_selector'); ?>
													<div class="currency"><?php do_action('currency_switcher'); ?></div>
													
												</div> 
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
			<div class="main-container">
				<div class="page-content front-page">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; ?>
					
				</div>
			</div>
			<?php get_footer(); ?>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<!--<div class="chairman_loading"></div>-->
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie8.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>
<?php unset($_SESSION["preset"]); ?>