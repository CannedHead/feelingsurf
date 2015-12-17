$(document).ready(function(){
		
	//NAVBAR     
    var navbar = $('#navbar-main'),
    	distance = navbar.offset().top,
        $window = $(window);

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
          	$("body").css("padding-top", "70px");
        } else {
            navbar.removeClass('navbar-fixed-top');
            $("body").css("padding-top", "0px");
        }
    });

    // Target your .container, .wrapper, .post, etc.
    $("#video-container").fitVids();
	
	$('footer .scroll').click(function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0},500);       
	});
	
});