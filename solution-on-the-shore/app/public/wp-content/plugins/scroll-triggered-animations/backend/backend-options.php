<?php function toast_sta_menu(  ) { 

	add_menu_page('Scroll Triggered Animations', 'Scroll Triggered Animations', 'manage_options', 'toast_sta_items', 'toast_sta_options_page', 'dashicons-lightbulb');

}
add_action( 'admin_menu', 'toast_sta_menu' );

add_action( 'admin_init', 'toast_sta_init' );
function toast_sta_init() { 
	register_setting( 'toast_sta_options', 'toast_sta_settings' );
	register_setting( 'toast_sta_advanced_options', 'toast_sta_settings' );
	register_setting( 'toast_sta_license_options', 'toast_sta_settings' );
	add_settings_section(
		'toast_sta_optionsArea', 
		__( '', 'wordpress' ), 
		'toast_sta_section_callback', 
		'toast_sta_options'
	);
	
	add_settings_section(
		'toast_sta_advanced_optionsArea', 
		__( '', 'wordpress' ), 
		'toast_sta_section_callback', 
		'toast_sta_advanced_options'
	);
	
	add_settings_section(
		'toast_sta_license_optionsArea', 
		__( '', 'wordpress' ), 
		'toast_sta_section_callback', 
		'toast_sta_license_options'
	);
	
	
	add_settings_field( 
		'toast_sta_advanced_animations', 
		__( 'Element(s) to animate', 'wordpress' ), 
		'toast_sta_advanced_animations_render', 
		'toast_sta_advanced_options', 
		'toast_sta_advanced_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_animations_css', 
		__( 'Advanced Animations CSS', 'wordpress' ), 
		'toast_sta_animations_css_render', 
		'toast_sta_advanced_options', 
		'toast_sta_advanced_optionsArea' 
	);
	
	add_settings_field( 
		'toast_animate_on_page_load', 
		__( 'Play animations on page load', 'wordpress' ), 
		'toast_animate_on_page_load_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_disable_on_mobile', 
		__( 'Disable default on mobile', 'wordpress' ), 
		'toast_sta_disable_on_mobile_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_position_start', 
		__( 'Position from bottom of viewport to start animation (px)', 'wordpress' ), 
		'toast_sta_position_start_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_repeat_animations', 
		__( 'Repeat animations', 'wordpress' ), 
		'toast_sta_repeat_animations_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_offset_from_top', 
		__( 'Offset From Top', 'wordpress' ), 
		'toast_sta_offset_from_top_render', 
		'toast_sta_options', 
		'toast_sta_optionsArea' 
	);
	
	add_settings_field( 
		'toast_sta_license_key', 
		__( 'License Key', 'wordpress' ), 
		'toast_sta_license_key_render', 
		'toast_sta_license_options', 
		'toast_sta_license_optionsArea' 
	);
	
}

function toast_sta_advanced_animations_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
	<input type="hidden" name='toast_sta_settings[toast_sta_advanced_animations]' value='<?php echo $option['toast_sta_advanced_animations']; ?>'>
<?php }

function toast_sta_animations_css_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	<textarea name='toast_sta_settings[toast_sta_animations_css]' value="<?php echo $option['toast_sta_animations_css']; ?>" placeholder="Apply your CSS"><?php echo $option['toast_sta_animations_css']; ?></textarea>
<?php }  

function toast_animate_on_page_load_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>

<div class="option">
<input type='checkbox' id="toast_sta_settings[toast_animate_on_page_load]" name='toast_sta_settings[toast_animate_on_page_load]' <?php if (isset($option['toast_animate_on_page_load']) && $option['toast_animate_on_page_load'] == 'on' ) {
    echo 'Checked';
} else {
    echo 'Unchecked';
} ?> value="on">
</div>

	<label for="toast_sta_settings[toast_animate_on_page_load]" class="description">
	<h4>Play animations on page load?</h4>
	<p>Enable this options to play your animations before any scroll movement. Useful if you have animations at the top of a page.</p>
	</label>
	
<?php } 

function toast_sta_position_start_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>

<div class="option">
	<select name='toast_sta_settings[toast_sta_position_start]' value='<?php echo $option['toast_sta_position_start']; ?>'>
	<?php for ($i = 0; $i <= 25; $i++): ?>
	<?php $sta_position_start = $i * 20; ?>
	
	<option value="<?php echo $sta_position_start; ?>" <?php if($option['toast_sta_position_start'] == $sta_position_start): ?>selected<?php endif; ?>><?php echo $sta_position_start; ?>px</option>
	<?php endfor; ?>
	
	</select>
</div>

	<div class="description">
	<h4>Start animations from this distance of the bottom of your viewport</h4>
	<p>Position from the bottom of viewport to start animations. Useful if you have a fixed footer.</p>
	</div>
	
<?php } 


function toast_sta_offset_from_top_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>

<div class="sub-option premium-option">
<div class="option">
	<select name='toast_sta_settings[toast_sta_offset_from_top]' value='<?php echo $option['toast_sta_offset_from_top']; ?>'>
	<?php for ($i = 0; $i <= 25; $i++): ?>
	<?php $sta_position_start = $i * 20; ?>
	
	<option value="<?php echo $sta_position_start; ?>" <?php if($option['toast_sta_offset_from_top'] == $sta_position_start): ?>selected<?php endif; ?>><?php echo $sta_position_start; ?>px</option>
	<?php endfor; ?>
	
	</select>
</div>

	<div class="description premium-option">
	<h4>Start animations from this distance of the top of your viewport</h4>
	<p>Similarly to the option above. Select the position from the top of the viewport to start animations. Useful if you have a fixed header.</p>
	</div>
</div>
<?php } 

function toast_sta_disable_on_mobile_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>

<div class="option">
	<input type="checkbox" id="toast_sta_settings[toast_sta_disable_on_mobile]" name='toast_sta_settings[toast_sta_disable_on_mobile]' <?php if ( isset($option['toast_sta_disable_on_mobile']) && $option['toast_sta_disable_on_mobile'] == 'on' ) {
    echo 'Checked';
} else {
    echo 'Unchecked';
} ?>>
</div>
	
	<label for="toast_sta_settings[toast_sta_disable_on_mobile]" class="description premium-option">
	<h4>Disable default animations on mobile?</h4>
	<p>Disable all <strong>default</strong> animations on mobile devices.</p>
	</label>
	
<?php } 

function toast_sta_repeat_animations_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
<div class="option">
	<input type="checkbox" id="toast_sta_settings[toast_sta_repeat_animations]" name='toast_sta_settings[toast_sta_repeat_animations]' <?php if ( isset($option['toast_sta_repeat_animations']) && $option['toast_sta_repeat_animations'] == 'on' ) {
    echo 'Checked';
} else {
    echo 'Unchecked';
} ?>>
</div>

	<label for="toast_sta_settings[toast_sta_repeat_animations]" class="description premium-option">
	<h4>Repeat after leaving viewport?</h4>
	<p>Remove the class when the items leave the viewport. Animation will repeat for every time you scroll up and down the page and the items enters the viewport</p>
	</label>
	
<?php } 

function toast_sta_license_key_render() { 
	$option = get_option( 'toast_sta_settings' );
	?>
	
	<div class="activate-license">
	<input type="text" placeholder="Insert your license key" name='toast_sta_settings[toast_sta_license_key]' value='<?php echo $option['toast_sta_license_key']; ?>'>
	<small>If you're struggling to validate your license, please <a href="https://www.toastplugins.co.uk/support/" target="_blank" class="white">contact our support team.</a></small>
	<?php if( $option['toast_sta_license_key']): ?>
	<?php if(toast_sta_is_valid_license() == true): ?>
	<div class="activation-message valid">
		License Validated
	</div>
	<?php else: ?>
	<div class="activation-message invalid">
		License Invalid
	</div>
	<?php endif; ?>
	<?php endif; ?>
	
	</div>
	
<?php }