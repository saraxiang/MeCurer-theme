jQuery( document ).ready(function( $ ) {
	$(".button-collapse").sideNav();

	//add logo to side nav
	$('#slide-out-nav').prepend('<a href="#" class="brand-logo" id="logo"> MeCurer</a>')

	$('.menu-item-has-children').addClass('no-padding');
	$('.sub-menu').wrap('<div class="collapsible-body"></div>');
	//wrap a tag and div with class collapsible-body in ul, li tags
	$('.collapsible-body').each(
    function(){
        $(this).prev().addBack().wrapAll('<ul class="collapsible collapsible-accordion"><li></li></ul>');
    });
	$('.collapsible').children('li').children('a').addClass('collapsible-header');
	$('.collapsible').collapsible();

});
