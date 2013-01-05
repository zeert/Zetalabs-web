// JavaScript Document
$(document).ready(function() {
    // Smooth animation when page scrolls
	$("a.scroll-page").scrollToSection()
	
	/* Initialise Carausel */
	$('.carousel').carousel();
	
	/* Initialise Tooltip */
	$('[rel="tooltip"]').tooltip();	



// Plugin para el Slide del contenido

/* BEGIN: Slide Content Plugin */
(function(e,t){var n=0;e.fn.getPercentage=function(){var e=this.attr("style").match(/margin\-left:(.*[0-9])/i)&&parseInt(RegExp.$1);return e};e.fn.adjRounding=function(t){var n=e(this),r=n.find(t),i=n.parent().width()-r.eq(0).width();if(i!==0){r.css("position","relative");for(var s=0;s<r.length;s++){r.eq(s).css("left",i*s+"px")}}return this};e.fn.carousel=function(r){if(this.data("carousel-initialized")){return}this.data("carousel-initialized",true);var i={slider:".slider",slide:".slide",prevSlide:null,nextSlide:null,slideHed:null,addPagination:false,addNav:r!=t&&(r.prevSlide||r.nextSlide)?false:true,namespace:"carousel",speed:300},s=e.extend(i,r),o=this,u=document.body||document.documentElement,a=function(){u.setAttribute("style","transition:top 1s ease;-webkit-transition:top 1s ease;-moz-transition:top 1s ease;");var e=!!(u.style.transition||u.style.webkitTransition||u.style.msTransition||u.style.OTransition||u.style.MozTransition);return e},f={init:function(){n++;o.each(function(t){var r=e(this),i=r.find(s.slider),o=r.find(s.slide),u=o.length,a="margin-left "+s.speed/1e3+"s ease",l="carousel-"+n+"-"+t;if(o.length<=1){return}r.css({overflow:"hidden",width:"100%"}).attr("role","application");i.attr("id",i[0].id||"carousel-"+n+"-"+t).css({marginLeft:"0px","float":"left",width:100*u+"%","-webkit-transition":a,"-moz-transition":a,"-ms-transition":a,"-o-transition":a,transition:a}).bind("carouselmove",f.move).bind("nextprev",f.nextPrev).bind("navstate",f.navState);o.css({"float":"left",width:100/u+"%"}).each(function(t){var n=e(this);n.attr({role:"tabpanel document",id:l+"-slide"+t});if(s.addPagination){n.attr("aria-labelledby",l+"-tab"+t)}});s.addPagination&&f.addPagination();s.addNav&&f.addNav();i.trigger("navstate",{current:0})})},addNav:function(){o.each(function(t){var n=e(this),r=n.find(s.slider),i=r[0].id,o=['<ul class="slidecontrols" role="navigation">','	<li role="presentation"><a href="#'+i+'" class="'+s.namespace+'-next">Next</a></li>','	<li role="presentation"><a href="#'+i+'" class="'+s.namespace+'-prev">Prev</a></li>',"</ul>"].join(""),u={nextSlide:"."+s.namespace+"-next",prevSlide:"."+s.namespace+"-prev"};s=e.extend(s,u);n.prepend(o)})},addPagination:function(){o.each(function(t){var r=e(this),i=e('<ol class="'+s.namespace+'-tabs" role="tablist navigation" />'),o=r.find(s.slider),u=r.find(s.slide);slideNum=u.length,associated="carousel-"+n+"-"+t;while(slideNum--){var a=u.eq(slideNum).find(s.slideHed).text()||"Page "+(slideNum+1),f=['<li role="presentation">','<a href="#'+associated+"-slide"+slideNum+'"',' aria-controls="'+associated+"-slide"+slideNum+'"',' id="'+associated+"-tab"+slideNum+'" role="tab">'+a+"</a>","</li>"].join("");i.prepend(f)}i.appendTo(r).find("li").keydown(function(t){var n=e(this),r=n.prev().find("a"),i=n.next().find("a");switch(t.which){case 37:case 38:r.length&&r.trigger("click").focus();t.preventDefault();break;case 39:case 40:i.length&&i.trigger("click").focus();t.preventDefault();break}}).find("a").click(function(t){var n=e(this);if(n.attr("aria-selected")=="false"){var i=n.parent().index(),o=-(100*i),u=r.find(s.slider);u.trigger("carouselmove",{moveTo:o})}t.preventDefault()})})},roundDown:function(e){var t=parseInt(e,10);return Math.ceil((t-t%100)/100)*100},navState:function(t,n){var r=e(this),i=r.find(s.slide),o=-(n.current/100),u=i.eq(o);r.attr("aria-activedescendant",u[0].id);u.addClass(s.namespace+"-active-slide").attr("aria-hidden",false).siblings().removeClass(s.namespace+"-active-slide").attr("aria-hidden",true);if(!!s.prevSlide||!!s.nextSlide){var a=e('[href*="#'+this.id+'"]');a.removeClass(s.namespace+"-disabled");if(o==0){a.filter(s.prevSlide).addClass(s.namespace+"-disabled")}else if(o==i.length-1){a.filter(s.nextSlide).addClass(s.namespace+"-disabled")}}if(!!s.addPagination){var f=u.attr("aria-labelledby"),l=e("#"+f);l.parent().addClass(s.namespace+"-active-tab").siblings().removeClass(s.namespace+"-active-tab").find("a").attr({"aria-selected":false,tabindex:-1});l.attr({"aria-selected":true,tabindex:0})}},move:function(t,n){var r=e(this);r.trigger(s.namespace+"-beforemove").trigger("navstate",{current:n.moveTo});if(a()){r.adjRounding(s.slide).css("marginLeft",n.moveTo+"%").one("transitionend webkitTransitionEnd OTransitionEnd",function(){e(this).trigger(s.namespace+"-aftermove")})}else{r.adjRounding(s.slide).animate({marginLeft:n.moveTo+"%"},{duration:s.speed,queue:false},function(){e(this).trigger(s.namespace+"-aftermove")})}},nextPrev:function(t,n){var r=e(this),i=r?r.getPercentage():0,o=r.find(s.slide),u=n.dir==="prev"?i!=0:-i<(o.length-1)*100,a=e('[href="#'+this.id+'"]');if(!r.is(":animated")&&u){if(n.dir==="prev"){i=i%100!=0?f.roundDown(i):i+100}else{i=i%100!=0?f.roundDown(i)-100:i-100}r.trigger("carouselmove",{moveTo:i});a.removeClass(s.namespace+"-disabled").removeAttr("aria-disabled");switch(i){case-(o.length-1)*100:a.filter(s.nextSlide).addClass(s.namespace+"-disabled").attr("aria-disabled",true);break;case 0:a.filter(s.prevSlide).addClass(s.namespace+"-disabled").attr("aria-disabled",true);break}}else{var l=f.roundDown(i);r.trigger("carouselmove",{moveTo:l})}}};f.init(this);e(s.nextSlide+","+s.prevSlide).bind("click",function(t){var n=e(this),r=this.hash,i=n.is(s.prevSlide)?"prev":"next",o=e(r);if(n.is("."+s.namespace+"-disabled")){return false}o.trigger("nextprev",{dir:i});t.preventDefault()}).bind("keydown",function(t){var n=e(this),r=this.hash;switch(t.which){case 37:case 38:e("#"+r).trigger("nextprev",{dir:"next"});t.preventDefault();break;case 39:case 40:e("#"+r).trigger("nextprev",{dir:"prev"});t.preventDefault();break}});var l={wrap:this,slider:s.slider};o.bind("dragSnap",l,function(t,n){var r=e(this).find(s.slider),i=n.direction==="left"?"next":"prev";r.trigger("nextprev",{dir:i})});o.filter("[data-autorotate]").each(function(){var t,n=e(this),r=n.attr("data-autorotate"),i=n.find(s.slide).length,o=function(){var u=n.find(s.slider),a=-(e(s.slider).getPercentage()/100)+1;switch(a){case i:clearInterval(t);t=setInterval(function(){o();u.trigger("nextprev",{dir:"prev"})},r);break;case 1:clearInterval(t);t=setInterval(function(){o();u.trigger("nextprev",{dir:"next"})},r);break}};t=setInterval(o,r);n.attr("aria-live","polite").bind("mouseenter click touchstart",function(){clearInterval(t)})});return this};e.event.special.dragSnap={setup:function(n){var r=e(this),i=function(e,t){var n=.3,r=t?"margin-left "+n+"s ease":"none";e.css({"-webkit-transition":r,"-moz-transition":r,"-ms-transition":r,"-o-transition":r,transition:r})},s=function(e){var e=parseInt(e,10);return Math.ceil((e-e%100)/100)*100},o=function(e,n){var r=n.target,o=r.attr("style")!=t?r.getPercentage():0,u=n.left===false?s(o)-100:s(o),a=document.body,f=function(){a.setAttribute("style","transition:top 1s ease;-webkit-transition:top 1s ease;-moz-transition:top 1s ease;");var e=!!(a.style.transition||a.style.webkitTransition||a.style.MozTransition);return e};i(r,true);if(f()){r.css("marginLeft",u+"%")}else{r.animate({marginLeft:u+"%"},opt.speed)}};r.bind("snapback",o).bind("touchstart",function(s){function h(e){var t=e.originalEvent.touches?e.originalEvent.touches[0]:e;f={time:+(new Date),coords:[t.pageX,t.pageY]},deltaX=Math.abs(a.coords[0]-t.pageX),deltaY=Math.abs(a.coords[1]-t.pageY);if(!a||deltaX<deltaY||deltaX<55){return}if(deltaX>=55){a.interacting=true;l.css({"margin-left":c+(f.coords[0]-a.coords[0])/a.origin.width()*100+"%"});e.preventDefault()}else{return}}var o=s.originalEvent.touches?s.originalEvent.touches[0]:s,u=e(s.target),a={time:+(new Date),coords:[o.pageX,o.pageY],origin:u.closest(n.wrap),interacting:false},f,l=u.closest(n.slider),c=l.attr("style")!=t?l.getPercentage():0;i(l,false);r.bind("gesturestart",function(e){r.unbind("touchmove",h).unbind("touchend",h)}).bind("touchmove",h).one("touchend",function(e){r.unbind("touchmove",h);i(l,true);if(a&&f){var n=Math.abs(a.coords[0]-f.coords[0]),s=Math.abs(a.coords[1]-f.coords[1]),o=a.coords[0]>f.coords[0],u;if(n>20&&n>s){e.preventDefault()}else{if(a.interacting){r.trigger("snapback",{target:l,left:o})}return}u=a.origin.width()/4;if(-n>u||n>u){a.origin.trigger("dragSnap",{direction:o?"left":"right"})}else{r.trigger("snapback",{target:l,left:o})}}a=f=t})})}}})(jQuery)
/* END: Slide Content Plugin */
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

$(document).ready(function() {
			$('.slidewrap').carousel({
				slider: '.slider',
				slide: '.slide',
				nextSlide : '.next',
				prevSlide : '.prev',
				
				addNav : false
			});
		});
