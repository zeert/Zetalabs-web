// JavaScript Document
$(document).ready(function() {
    // Smooth animation when page scrolls
	$("a.scroll-page").scrollToSection()
	
	/* Initialise Carausel */
	$('.carousel').carousel();
	
	/* Initialise Tooltip */
	$('[rel="tooltip"]').tooltip();	

 });
 

jQuery.fn.scrollToSection = function(settings) {

 	settings = jQuery.extend({
		speed : 1000
	}, settings);	
	
	return this.each(function(){
		var caller = this
		$(caller).click(function (event) {	
			event.preventDefault()
			var locationHref = window.location.href
			var elementClick = $(caller).attr("href")
			
			var destination = $(elementClick).offset().top;
			if(elementClick == "#home"){
				destination = 0;
			}
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
				window.location.hash = elementClick;
			});
		  	return false;
		})
	})
}