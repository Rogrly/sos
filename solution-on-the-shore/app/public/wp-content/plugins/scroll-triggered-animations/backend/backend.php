<?php function toast_sta_options_page(  ) { ?>
<?php toast_sta_advert(); ?>

	<div class="wrap">
	
	<form action='options.php' method='post'>
	<div class="toast-wrap">
	<div class="toast-main-content">
	
	<div class="toast-metabox above-tabs">
	<div class="header-left">
	<h2>Scroll Triggered Animations <span class="toast-version-number">Version 2.4.3</span></h2>
	</div>
	<div class="header-right">
	<a href="https://www.toastplugins.co.uk/" target="_blank"><img src="/wp-content/plugins/scroll-triggered-animations/assets/logo.png">	</a>
	</div>
	</div>
	
	<div class="toast-sta-tabs">
	
	<div class="tab active change-purple" data-tab="default-classes">
	<h3>Default Animations</h3>
	</div>
	
	<div class="tab change-blue" data-tab="advanced">
	<h3>Advanced Animations</h3>
	</div>
		
	<div class="tab change-pink" data-tab="standard">
	<h3>Settings</h3>
	</div>
	
	</div>
	
	
	<div class="toast-metabox tab-content" data-tab="standard">
	<div class="tab-description">
	<h3>Settings</h3>
	Use the settings below to gain greater control over your animations. 
 	</div>
		<?php
		settings_fields( 'toast_sta_options' );
		do_settings_sections( 'toast_sta_options' );
		submit_button();
		?>
	</div>
	
	<div class="toast-metabox tab-content active" data-tab="default-classes">
	<div class="tab-description">
	<h3>Default Animations</h3>
	Below is a list of default animations which you can use on any element on your site. Hover over any animation to see a preview. Simply add the CSS class to any element on your site and watch the magic happen.
 	</div>
 
  	<div class="example-list">
  	
  	<div class="default-animations">
    <div class="standard-animations">
    <h3 class="paragraph-title">Available for all users</h3>
	<ul class="class-list">
	<li id="move-in"><div class="text"><span id="up" class="eg-b">move-in-<strong>up</strong></span>, <span id="left" class="eg-b"><strong>left</strong></span>, <span id="right" class="eg-b"><strong>right</strong></span>, <span id="down" class="eg-b"><strong>down</strong></span></div></li>
    <li id="fade-in"><div class="text"><span id="up" class="eg-b">fade-in-<strong>up</strong></span>, <span id="left" class="eg-b"><strong>left</strong></span>, <span id="right" class="eg-b"><strong>right</strong></span>, <span id="down" class="eg-b"><strong>down</strong></span> - Just use '<span class="eg-b">fade-in</span>' if you'd like a static fade</div></li>
    <li id="flip"><div class="text"><span id="up" class="eg-b">flip-<strong>up</strong></span>, <span id="left" class="eg-b"><strong>left</strong></span>, <span id="right" class="eg-b"><strong>right</strong></span>, <span id="down" class="eg-b"><strong>down</strong></span></div></li>
    <li id="bounce-in"><div class="text"><span id="up" class="eg-b">bounce-in-<strong>up</strong></span>, <span id="left" class="eg-b"><strong>left</strong></span>, <span id="right" class="eg-b"><strong>right</strong></span>, <span id="down" class="eg-b"><strong>down</strong></span></div></li>
    </ul>
    </div>
    
    <div class="premium-animations">
    <h3 class="paragraph-title">Only Available with premium</h3>
    <ul class="class-list">
    <li id="swing-forward" class="premium"><div class="text"><span class="eg-b">swing-forward</span></div></li>
    <li id="swing-side" class="premium"><div class="text"><span class="eg-b">swing-side</span></div></li>
    <li id="zoom-in" class="premium"><div class="text"><span class="eg-b">zoom-in</span></div></li>
    <li id="shake" class="premium"><div class="text"><span class="eg-b">shake</span></div></li>
    <li id="grow" class="premium"><div class="text"><span id="up" class="eg-b">grow-<strong>up</strong></span>, <span id="left" class="eg-b"><strong>left</strong></span>, <span id="right" class="eg-b"><strong>right</strong></span>, <span id="down" class="eg-b"><strong>down</strong></span></div></li>
    <li id="skew-in" class="premium"><div class="text"><span id="left" class="eg-b">skew-in-<strong>left</strong></span>, <span id="right" class="eg-b"><strong>right</strong></span></div></li>
    <li id="blur-in" class="premium"><div class="text"><span class="eg-b">blur-in</span></div></li>
    <li id="colour-gain" class="premium"><div class="text"><span class="eg-b">colour-gain</span></div></li>
    <li id="rubber-band" class="premium"><div class="text"><span class="eg-b">rubber-band</span></div></li>
    </ul>
    </div>
    </div>
    
	</div>
	
	<div class="example-area">
	<img src="<?php echo plugins_url().'/scroll-triggered-animations-premium/assets/STA-logo.png'; ?>" id="example-block">
	</div>
	
	<div class="premium-controls">
    <h3 class="paragraph-title">Speed and delays (Only Available with premium)</h3>
    <h4>Use these classes either alone or in multiples along with a default animation class to gain greater control over your animation.</h4>
    
   <ul class="class-list"> 
    <li class="premium"><div class="text">speed-<strong>xxx</strong> - Control the speed of your animations and get the timing just right. Replace '<strong>xxx</strong>' with your chosen speed in milliseconds.</div></li>
    <li class="premium"><div class="text">delay-<strong>xxx</strong> - Control the delay of your animations and get the timing just right. Replace '<strong>xxx</strong>' with your chosen delay in milliseconds.</div></li>
   </ul>
    </div>
	
	</div>
	
	<div class="toast-metabox tab-content" data-tab="advanced">
	<div class="tab-description">
	<h3>Advanced Animations</h3>
     <strong>Tailor your animations to your site!</strong> 
    <br>
    <div>
   	Activate the element you wish to animate. Activate by either the Class, ID, Tag or any other CSS Selector.
	</div>
	</div>
     
    <?php $option = get_option( 'toast_sta_settings' ); ?>
	<?php if($option['toast_sta_advanced_animations']): ?>
    <?php $advanced_animations = explode(',', $option['toast_sta_advanced_animations']); ?>
    <?php else: ?>
    <?php $advanced_animations = array(); ?>
	<?php endif; ?>
	<div class="active-advanced-animations">
     <div class="advanced-animations-input">
    
    <div class="description">
	<h4>Activate an element</h4>
    </div>
    
     <div class="right-side">
     <input type="text" class="add-to-advanced-animations" placeholder="#my-element-id">
     <a class="button button-primary add-to-advanced-animations-button">Activate Element</a>
     </div>
     </div>
     
	</div>	
	<ul class="advanced-animations">
	<?php if($advanced_animations): ?>
	<?php foreach($advanced_animations as $advanced_animation): ?>
	<li name="<?php echo $advanced_animation; ?>"><?php echo $advanced_animation; ?> <div class="remove-advanced-animation"></div></li>
	<br>
	<?php endforeach; ?>
	<?php endif; ?>
	</ul> 
     
    <h3 class="paragraph-title">Creating your animations</h3>
    <h4 class="paragraph-title">Once your element(s) have been activated using the setting above. You'll need to create the animation effect using CSS.</h4> 
    <div>Activating an element simply tells the script to add the class 'scroll-triggered' when it is due to animate. Meaning you can target the element before and after it has been triggered. Your CSS could look like this:</div>
     
    <code class="demo-css">
    .button { opacity:0 ; transition: all 1s }<br>
    .button.scroll-triggered { opacity: 1 ; }
    </code>
    
    <div>
    <div>Apply the CSS using your own theme CSS file or by using the textarea below!</div>
    <strong>Just remember to use the transition property to decide how long you would like the animation to last for.</strong>
	</div>
     
     
	<?php
		settings_fields( 'toast_sta_advanced_options' );
		do_settings_sections( 'toast_sta_advanced_options' ); ?>
		<?php submit_button(); ?>
	</div>
		
</form>
</div>
	
	
	<div class="toast-sidebar">
        
		<div class="toast-metabox">
		<h3>Ratings & Reviews</h3>
		<p>If you like this plugin please consider leaving a ★★★★★ rating.
        A huge thanks in advance!</p>
        <a href="https://en-gb.wordpress.org/plugins/scroll-triggered-animations/#reviews" target="_blank" class="button button-primary colour-changing-background">Leave us a rating</a>
        </div>
        
        <div class="toast-metabox">
		<h3>About the plugin</h3>
	    <div class="meta-info"><strong>Developed by:</strong> <a href="https://www.toastplugins.co.uk/" target="_blank" class="colour-changing">Toast Plugins</a></div>
		<div class="meta-info"><strong>Report a bug:</strong><br> 
		Please report any bugs you find <a href="https://wordpress.org/support/plugin/scroll-triggered-animations/" target="_blank" class="colour-changing">here</a></div>
		<div class="meta-info"><strong>Need some support?</strong> 
		<br><a href="https://wordpress.org/support/plugin/scroll-triggered-animations/" target="_blank" class="colour-changing">Contact the developers via the Support Forum</a></div>
        <a href="https://wordpress.org/support/plugin/scroll-triggered-animations/" target="_blank" class="button button-primary colour-changing-background">Contact us</a>
   		</div>
		<?php get_toast_sta_premium_advert(); ?>
</div>
</div>
<?php } ?>
<?php function toast_sta_section_callback(){} ?>