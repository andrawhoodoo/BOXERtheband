$(document).ready(function() {
	$('.js--nav-icon').click(function() {
        var nav = $('.nav-links');
        var icon = $('.js--nav-icon i');
        
        
        if (icon.hasClass('fa-bars')) {
			nav.slideDown(0);
            icon.addClass('fa-times');
            icon.removeClass('fa-bars');
        }
        else if (icon.hasClass('fa-times')) {
			nav.slideUp(0);
            icon.addClass('fa-bars');
            icon.removeClass('fa-times');
        }
    }); 
})