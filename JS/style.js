

(function($) {
	"use script";

  $(document).ready(function () {
     $.ajax({
        method : "GET",
        url : "../PHP/comment_fetch.php",
     }).done(function( data ){
        var result = $.parseJSON(data);
        var i = 0;
        $.each( result, function(key, value) {
            i = i + 1;

            var img_id = value['column_name_for_image_source'];
            var name = value['user_name'];
            var comment = value['comment'];
            var img_attr = document.getElementById('dynamic_img1');
            if(i == 1) {
                img_attr.src = img_id;
                $(#dynamic_user1).html(name);
                $(#dynamic_comment1).html(comment);
            }
        })
     })
  });

	//Smooth scrolling using jQuery easing
	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      		var target = $(this.hash);
      		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      		if (target.length) {
        		$('html, body').animate({
          			scrollTop: (target.offset().top - 54)
        		}, 1000, "easeInOutExpo");
        	return false;
      		}
    	}
	});

	// Closes responsive menu when a scroll trigger link is clicked
  	$('.js-scroll-trigger').click(function() {
    	$('.navbar-collapse').collapse('hide');
  	});

  	 // Activate scrollspy to add active class to navbar items on scroll
  	$('body').scrollspy({
    	target: '#mainNav',
    	offset: 54
  	});

  	// Collapse Navbar
  	var navbarCollapse = function() {
    	if ($("#mainNav").offset().top > 100) {
      		$("#mainNav").addClass("navbar-shrink");
    	} else {
      		$("#mainNav").removeClass("navbar-shrink");
   		}
  	};
  	// Collapse now if page is not at top
  	navbarCollapse();
  	// Collapse the navbar when page is scrolled
  	$(window).scroll(navbarCollapse);

  	// Hide navbar when modals trigger. show.bs.modal - Occurs when the modal is about to be shown.
  	$('.pouplar_picks-modal').on('show.bs.modal', function(e) {
    	$(".navbar").addClass("d-none");
  	})
  	$('.popular_picks-modal').on('hidden.bs.modal', function(e) {
    	$(".navbar").removeClass("d-none");
  	})

})(jQuery); //End of use strict.