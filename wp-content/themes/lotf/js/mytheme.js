$(document).ready(function() {
	setInputFieldFunctions();
	$('#ns_widget_mailchimp-2 .widget-title').before('<div class="signup-title">subscribe to our <span>newsletter</span></div>');
	$('#ns_widget_mailchimp-2 label').remove();
	//$('#ns_widget_mailchimp-2 input[type="text"]').attr('placeholder', 'email address');
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

