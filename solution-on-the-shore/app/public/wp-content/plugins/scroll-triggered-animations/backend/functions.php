<?php function get_toast_sta_premium_advert(){ ?>
 <a class="toast-metabox premium-advert" href="https://www.toastplugins.co.uk/plugins/scroll-triggered-animations/" target="_blank">
<h3>Massive <span class="rainbow">sale</span> now on!</h3>
	<p>Go premium and <span class="rainbow">save</span> upto <span class="rainbow">50%</span> now!</p>
<div class="get-premium">Get premium now!</div>
</a>

<?php } ?>
<?php function toast_sta_advert(){ ?>

<?php if(!isset($_COOKIE['toast-sta-popup'])): ?>
<div class="toast-sta-popup-background">
</div>

<div class="toast-sta-popup">
<i class="dashicons-no-alt close"></i>

<h3>Massive <span class="rainbow">sale</span> now on!</h3>
	<p>Go premium and <span class="rainbow">save</span> upto <span class="rainbow">50%</span> now!</p>
<a href="https://www.toastplugins.co.uk/plugins/scroll-triggered-animations/" target="_blank" class="get-premium">Get premium now!</a>
</div>

<script>
jQuery(window).ready(function(){

//ACTIVATE CHRISTMAS POPUP
setTimeout(function(){

document.cookie = 'toast-sta-popup=1';
jQuery('.toast-sta-popup-background, .toast-sta-popup').addClass('active');

}, 5000)

//CLOSE POPUP
jQuery('.toast-sta-popup .close, .toast-sta-christmas-advert-background').on('click', function(){

jQuery('.toast-sta-popup, .toast-sta-popup-background').remove();

})

})
</script>
<?php endif; ?>

<?php } ?>