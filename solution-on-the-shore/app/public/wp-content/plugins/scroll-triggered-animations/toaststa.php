<?php
   /*
   Plugin Name: Scroll Triggered Animations
   Plugin URI:
   description: An great animation interface that helps you animate anything on your site.
   Version: 2.4.3
   Author: Toast Plugins
   Author URI: https://www.toastplugins.co.uk/
   */
?>
<?php include dirname(__FILE__) . '/backend/backend.php'; ?>
<?php include dirname(__FILE__) . '/backend/backend-options.php'; ?>
<?php include dirname(__FILE__) . '/backend/functions.php'; ?>
<?php include dirname(__FILE__) . '/frontend/outputted_js.php'; ?>
<?php add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'toast_sta_settings_link');
function toast_sta_settings_link( $links ) {
	$links[] = '<a href="' .
		admin_url( 'admin.php?page=toast_sta_items' ) .
		'">' . __('Settings') . '</a>';
	return $links;
} ?>
<?php function toast_sta_enqueue_backend_scripts($hook){

if($hook == 'toplevel_page_toast_sta_items') {
wp_enqueue_script( 'toast_sta_backend_scripts', plugin_dir_url( __FILE__ ) . 'backend/scripts.js', array('jquery'), 'null', false );
wp_enqueue_style( 'toast_sta_backend_css', plugin_dir_url( __FILE__ ) . 'backend/style.css', array(), 'null', false );
wp_enqueue_style( 'toast_sta_default_animations', plugin_dir_url( __FILE__ ) . 'frontend/default_animations.css', array(), 'null', false );
}

}
add_action( 'admin_enqueue_scripts', 'toast_sta_enqueue_backend_scripts' ); ?>
<?php function toast_sta_enqueue_scripts(){
wp_enqueue_style( 'toast_sta_default_animations', plugin_dir_url( __FILE__ ) . 'frontend/default_animations.css', array(), 'null', false );
}
add_action( 'wp_enqueue_scripts', 'toast_sta_enqueue_scripts' ); ?>
<?php function toast_sta_apply_advanced_animation_css(){ ?>
<style>
<?php $option = get_option( 'toast_sta_settings' ); ?>
<?php echo $option['toast_sta_animations_css']; ?>
</style>
<?php }
add_action('wp_head', 'toast_sta_apply_advanced_animation_css');