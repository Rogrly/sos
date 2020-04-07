jQuery(window).ready(function(){
var confirmChanges = false;
jQuery('.toast-sta-tabs .tab').on('click', function(){

var clicked = jQuery(this);
function changeTab(){
var clickedData = jQuery(clicked).attr('data-tab');
jQuery('.toast-sta-tabs .tab.active').removeClass('active');
jQuery(clicked).addClass('active');

jQuery('.tab-content').removeClass('active');
jQuery('.tab-content[data-tab="'+clickedData+'"]').addClass('active');
if(jQuery(clicked).hasClass('change-blue')){
var color = '#2e8bff';
var secondaryColor = '#0071ff';
}
if(jQuery(clicked).hasClass('change-purple')){
var color = '#8a1fff';
var secondaryColor = '#3f3fff';
}
if(jQuery(clicked).hasClass('change-orange')){
var color = '#ff7700';
var secondaryColor = '#ffbc00';
}
if(jQuery(clicked).hasClass('change-pink')){
var color = '#ff0099';
var secondaryColor = '#e400ff';
}

confirmChanges = false;

jQuery('.colour-changing-background').css({'background': 'linear-gradient(90deg,'+color+', '+secondaryColor+')'});
jQuery('.colour-changing').css({'color': color});
}

if(confirmChanges == true){

var confirmPageLeave = confirm('You haven\'t saved your changes. Are you sure you would like to leave this page?')

if(confirmPageLeave == true){
changeTab();
}

}else{
changeTab();
}

})

//HIDE ANIMATION OPTIONS
jQuery('input[name="toast_sta_settings[toast_sta_advanced_animations]"]').parents('tr').hide();

//ADD ADVANCED ANIMATIONS TO LIST
function addToAnimationList(){
if(jQuery('.advanced-animations li').length < 3){
var toAdd = jQuery('.add-to-advanced-animations').val();

if(toAdd.indexOf('.') < 0){
if(toAdd.indexOf(',') < 0){
if(toAdd != ''){
var addHTML = '<li name="'+toAdd+'">'+toAdd+'<div class="remove-advanced-animation"></li><br>'
jQuery(addHTML).appendTo('.advanced-animations');
jQuery('.add-to-advanced-animations').val('');

var oldClasses = jQuery('input[name="toast_sta_settings[toast_sta_advanced_animations]"]').val();

if(oldClasses){
var newClasses = oldClasses + ',' + toAdd;
}else{
var newClasses = toAdd;
}
jQuery('input[name="toast_sta_settings[toast_sta_advanced_animations]"]').val(newClasses);
confirmChanges = true;
}else
alert('Input cannot be empty. Please add a value.');

}else{
alert('Input can not contain a comma');
}
}else{
alert('Please upgrade to premium to target classes');
}


}else{
alert('3 elements are already activated. Please upgrade to premium to activate more.')
}
}

jQuery('body').on('click','.add-to-advanced-animations-button', function(){
addToAnimationList();
})

jQuery('.add-to-advanced-animations').on('keydown', function(e){
if(e.key === 'Enter'){
e.preventDefault();
addToAnimationList();
}
})

//REMOVE ADVANCED ANIMATION FROM LIST
jQuery('body').on('click', '.remove-advanced-animation', function(){
var toRemove = jQuery(this).parent('li').attr('name');
var remove = confirm('Are you sure you would like to deactivate \''+toRemove+'\'?')
if(remove == true){
jQuery(this).parent('li').next('br').remove();
jQuery(this).parent('li').remove();

var oldClasses = jQuery('input[name="toast_sta_settings[toast_sta_advanced_animations]"]').val();
var oldClassesArray = oldClasses.split(",");
var toRemovePosition = oldClassesArray.indexOf(toRemove);
oldClassesArray.splice(toRemovePosition, 1);

jQuery('input[name="toast_sta_settings[toast_sta_advanced_animations]"]').val(oldClassesArray);

confirmChanges = true;
}//ENDIF

})

//EXAMPLES
jQuery('.eg-b').on('mouseenter', function(){

var exampleAnimation = jQuery(this).parents('li').attr('id');
var exampleControl = jQuery(this).attr('id');
if(exampleControl){
var exampleClass = exampleAnimation + '-' + exampleControl;
}else{
 exampleClass = exampleAnimation
}

jQuery('#example-block').removeAttr('class');
jQuery('#example-block').addClass(exampleClass);

setTimeout(function(){

jQuery('#example-block').addClass('scroll-triggered')

}, 50)

})

//PREMIUM OPTIONS
jQuery('.premium-option').parent('td').addClass('premium-feature');
jQuery('.premium-feature').append('<a href="https://www.toastplugins.co.uk/premium/scroll-triggered-animations-premium/" class="button button-primary premium-upgrade" target="_blank">Premium</a>')

//NOTICES
setTimeout(function(){
jQuery('.notice, .updated').each(function(){
jQuery(this).prependTo('.wrap');
})
}, 20)

})