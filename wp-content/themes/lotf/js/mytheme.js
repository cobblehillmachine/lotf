$(document).ready(function() {
	$('#header, #main-wrap, #footer').fadeIn('slow');
	setInputFieldFunctions();
	$('#mailchimpsf_widget-2 .widget-title').before('<div class="signup-title">subscribe to our <span>newsletter</span></div>');
	$('#mailchimpsf_widget-2 label').remove();
	thumbHover();
	showSlides();
	
});

$(window).resize(function() {

});



function setInputFieldFunctions(){
	$('input, textarea').each(function(){
	    var $this = $(this);
	    $this.data('placeholder', $this.attr('placeholder'))
	         .focus(function(){$this.removeAttr('placeholder');})
	         .blur(function(){$this.attr('placeholder', $this.data('placeholder'));});
	});
}

function showSlides() {
		
	$('#thumb-cont .slide2').on({
			click: function(){
				$('#slide2').fadeIn(); 
				$('#slide1, #slide3, #slide4').hide(); 
				$('.slide1 .overlay, .slide3 .overlay, .slide4 .overlay').hide(); 
				$('.slide1 img, .slide3 img, .slide4 img').css({'border-color':'#3b3837'}); 
				$('#thumb-cont .slide2 .overlay').show(); 
				$('#thumb-cont .slide2 img').css({'border-color':'#cd5e28'});
			}	
	});
	
	$('#thumb-cont .slide3').on({
			click: function(){
				$('#slide3').fadeIn(); 
				$('#slide1, #slide2, #slide4').hide(); 
				$('.slide1 .overlay, .slide2 .overlay, .slide4 .overlay').hide(); 
				$('.slide1 img, .slide2 img, .slide4 img').css({'border-color':'#3b3837'}); 
				$('#thumb-cont .slide3 .overlay').show(); 
				$('#thumb-cont .slide3 img').css({'border-color':'#cd5e28'});
			}
						
	});
	
	$('#thumb-cont .slide4').on({
			click: function(){
				$('#slide4').fadeIn(); 
				$('#slide1, #slide2, #slide3').hide(); 
				$('.slide1 .overlay, .slide2 .overlay, .slide3 .overlay').hide(); 
				$('.slide1 img, .slide2 img, .slide3 img').css({'border-color':'#3b3837'}); 
				$('#thumb-cont .slide4 .overlay').show(); 
				$('#thumb-cont .slide4 img').css({'border-color':'#cd5e28'});
			}
						
	});
	
	$('#thumb-cont .slide1').on({
			click: function(){
				$('#slide1').fadeIn(); 
				$('#slide4, #slide2, #slide3').hide(); 
				$('.slide4 .overlay, .slide2 .overlay, .slide3 .overlay').hide(); 
				$('.slide4 img, .slide2 img, .slide3 img').css({'border-color':'#3b3837'}); 
				$('#thumb-cont .slide1 .overlay').show(); 
				$('#thumb-cont .slide1 img').css({'border-color':'#cd5e28'});
			}
						
	});
}

function thumbHover() {
	$('.slide-thumb').each(function() {
		$(this).on({
			mouseenter: function() {$(this).children('.overlay').show(); $(this).children('.title').show(); $(this).children('img').css({'border-color':'#cd5e28'});},
			mouseleave: function() {$(this).children('.overlay').hide(); $(this).children('.title').hide(); $(this).children('img').css({'border-color':'#3b3837'});}
		});
	});
}