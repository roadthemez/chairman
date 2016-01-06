<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */
?>
<?php global $chairman_opt; ?>

	<div class="footer layout7">
		<?php if(isset($chairman_opt)) { ?>
		<div class="footer-top">	
			<div class="container">
					<?php if(isset($chairman_opt['corporate_about']) && $chairman_opt['corporate_about']!=''){ ?>
						<div class="widget widget_corporate_about">
						<?php echo wp_kses($chairman_opt['corporate_about'], array(
								'a' => array(
									'href' => array(),
									'title' => array()
								),
								'div' => array(
									'class' => array(),
								),
								'img' => array(
									'src' => array(),
									'alt' => array()
								),
								'h3' => array(
									'class' => array(),
								),
								'ul' => array(),
								'li' => array(),
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
		<?php } ?>

		<?php if(isset($chairman_opt)) { ?>
		<div class="footer-middle">
			<div class="container">
				<div class="footer-middle-inner">
					<div class="row">

						<?php if(isset($chairman_opt['about_us8']) && $chairman_opt['about_us8']!=''){ ?>
							<div class="col-xs-12 col-md-3 col-sm-6">
								<div class="widget widget_about_us">
								<?php echo wp_kses($chairman_opt['about_us8'], array(
										'a' => array(
									'href' => array(),
									'title' => array()
									),
									'div' => array(
										'class' => array(),
									),
									'img' => array(
										'src' => array(),
										'alt' => array()
									),
									'h3' => array(
										'class' => array(),
									),
									'ul' => array(),
									'li' => array(),
									'i' => array(
										'class' => array()
									),
									'br' => array(),
									'em' => array(),
									'strong' => array(),
									'p' => array(),
									)); ?>
								</div>
							</div>
						<?php } ?>

					
						<?php
						if( isset($chairman_opt['footer_menu1']) && $chairman_opt['footer_menu1']!='' ) {
							$menu1_object = wp_get_nav_menu_object( $chairman_opt['footer_menu1'] );
							$menu1_args = array(
								'menu_class'      => 'nav_menu',
								'menu'         => $chairman_opt['footer_menu1'],
							); ?>
							<div class="col-sm-6  col-md-3">
								<div class="widget widget_menu">
									<h3 class="widget-title"><?php echo esc_html($menu1_object->name); ?></h3>
									<?php wp_nav_menu( $menu1_args ); ?>
								</div>
							</div>
						<?php }
						if( isset($chairman_opt['footer_menu2']) && $chairman_opt['footer_menu2']!='' ) {
							$menu2_object = wp_get_nav_menu_object( $chairman_opt['footer_menu2'] );
							$menu2_args = array(
								'menu_class'      => 'nav_menu',
								'menu'         => $chairman_opt['footer_menu2'],
							); ?>
							<div class="col-sm-6  col-md-2">
								<div class="widget widget_menu">
									<h3 class="widget-title"><?php echo esc_html($menu2_object->name); ?></h3>
									<?php wp_nav_menu( $menu2_args ); ?>
								</div>
							</div>
						<?php }?>

						<div class="col-sm-6 col-md-4">
							<?php
							if ( isset($chairman_opt['newsletter_form']) ) {
								if(class_exists( 'WYSIJA_NL_Widget' )){
									the_widget('WYSIJA_NL_Widget', array(
										'title' => esc_html($chairman_opt['newsletter_title']),
										'form' => (int)$chairman_opt['newsletter_form'],
										'id_form' => 'newsletter1',
										'success' => '',
									));
								}
							}
							?>
							<div class="widget widget-social">
								<h3 class="widget-title"><?php echo esc_html($chairman_opt['social_title']);?></h3>
								<?php

								if(isset($chairman_opt['social_icons'])) {
									echo '<ul class="social-icons">';
									foreach($chairman_opt['social_icons'] as $key=>$value ) {
										if($value!=''){
											if($key=='vimeo'){
												echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
											} else {
												echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									}
									echo '</ul>';
								}
								?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-inner">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="widget-copyright">
								<?php 
								if( isset($chairman_opt['copyright']) && $chairman_opt['copyright']!='' ) {
									echo wp_kses($chairman_opt['copyright'], array(
										'a' => array(
											'href' => array(),
											'title' => array()
										),
										'br' => array(),
										'em' => array(),
										'strong' => array(),
									));
								} else {
									echo 'Copyright <a href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo('name').'</a> '.date('Y').'. All Rights Reserved';
								}
								?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="widget-payment">
								<?php if(isset($chairman_opt['payment_icons2']) && $chairman_opt['payment_icons2']!='' ) {
									echo wp_kses($chairman_opt['payment_icons2'], array(
										'a' => array(
											'href' => array(),
											'title' => array()
										),
										'img' => array(
											'src' => array(),
											'alt' => array()
										),
									)); 
								} ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	