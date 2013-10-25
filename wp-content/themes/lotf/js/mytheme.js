$(document).ready(function() {
	$('#header, #main-wrap, #footer').fadeIn('slow');
	setInputFieldFunctions();
	$('#mailchimpsf_widget-2 .widget-title').before('<div class="signup-title">subscribe to our <span>newsletter</span></div>');
	$('#mailchimpsf_widget-2 label').remove();

	
    // Set 'current' and 'current-thumb' classes on page load
    $('.banner').first().addClass('current');
	$('.current').show();
    $('.slide-thumb').first().addClass('current-thumb');

    // Set interval for slides to transition
    var hpSlideInterval;
    hpSlideInterval = setInterval(function() {
        hpSlideNext();
    }, 3000);

    // Set mouseenter and mouseleave functions for hovering
    //this will pause the slideshow on hover and start it back when the mouse leaves
    $('#homepage .banner').mouseenter(function() {
        clearInterval(hpSlideInterval);
    }).mouseleave(function() {
        hpSlideInterval = setInterval(function() {
            hpSlideNext();
        },  3000);
    });

	// Click on thumb transitions to that slide
	// Click on thumb transitions to that slide
	$('.slide-thumb').click(function() {
		clearInterval(hpSlideInterval);
		$('.slide-thumb').removeClass('current-thumb');
		$(this).addClass('current-thumb');
		var ind = parseInt($(this).attr('thumb')),
		currentId = '#slide'+ind;
		$('.banner').each(function() {
			var slideIndex = parseInt($(this).attr('slide'));
			if (slideIndex == ind) {
				$('.banner').removeClass('current');
				$('.banner').fadeOut();
				$(this).addClass('current');
				$('.current').fadeIn(1000);
			}
		});
		hpSlideInterval = setInterval(function() {
			hpSlideNext();
			}, 3000);
	});
	 checkVersion();

});

$(window).resize(function() {

});

$(window).load(function() {
	$('#instafeed a').each(function() {
		$(this).attr('target', '_blank');
	});
});

// Function the interval calls to move the slides
function hpSlideNext() {
    var count = 0;
    $('.banner').each(function() {
        count++;
    });
    var currentSlide = parseInt($('.banner-cont .current').attr('slide')),
        nextSlideIndex = currentSlide + 1,
        currentId = '#slide'+currentSlide;
    if (count == nextSlideIndex) {
        $('.banner-cont .current').removeClass('current');
        $('.banner').first().addClass('current');        
        $('.current').fadeIn(1000);
        $(currentId).fadeOut();
        $('.slide-thumb').removeClass('current-thumb');
        $('.slide-thumb').first().addClass('current-thumb');
    } else {
        $('.banner').each(function() {
            if (parseInt($(this).attr('slide')) == nextSlideIndex) {
                $('.banner-cont .current').removeClass('current');
                $(this).addClass('current');
                $('.current').fadeIn(1000);
                $(currentId).fadeOut();
            }
        })
        $('.slide-thumb').each(function() {
            if (parseInt($(this).attr('thumb')) == nextSlideIndex) {
                $('.slide-thumb').removeClass('current-thumb');
                $(this).addClass('current-thumb');
            }
        });
    }
}

function setInputFieldFunctions(){
	$('input, textarea').each(function(){
	    var $this = $(this);
	    $this.data('placeholder', $this.attr('placeholder'))
	         .focus(function(){$this.removeAttr('placeholder');})
	         .blur(function(){$this.attr('placeholder', $this.data('placeholder'));});
	});
}

function getIEVersion() {
     var rv = -1; // Return value assumes failure.
     if (navigator.appName == 'Microsoft Internet Explorer') {
         var ua = navigator.userAgent;
         var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
         if (re.test(ua) != null)
             rv = parseFloat( RegExp.$1 );
     }
     return rv;
 }


 function checkVersion() {
     var ver = getIEVersion();

     if ( ver != -1 ) {
         if (ver <= 9.0) {
             $('.lotf-post:nth-child(2), .lotf-post:nth-child(3)').css({'background': '#e7e7e7', 'float':'left', 'width':100 +'%'});
			 $('.lotf-post, .paged .lotf-post:nth-child(2), .paged .lotf-post:nth-child(3)').css({'background':'#fff', 'padding-bottom': 40 +'px'});
         }
     }
 }

