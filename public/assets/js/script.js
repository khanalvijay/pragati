
// wow amimate

new WOW().init(); 




// Sticky navbar

            $(document).ready(function () {
                // Custom function which toggles between sticky class (is-sticky)
                var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() >= stickyTop) {
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else {
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };

                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function () {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');

                    // Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });

                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });
            });



function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function() {
  $('#close-btn').click(function() {
    $('#search-overlay').fadeOut();
    $('#search-btn').show();
  });
  $('#search-btn').click(function() {
    $(this).hide();
    $('#search-overlay').fadeIn();
  });
});


(function($){
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	  if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	  }
	  var $subMenu = $(this).next(".dropdown-menu");
	  $subMenu.toggleClass('show');

	  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass("show");
	  });

	  return false;
	});
})(jQuery)



$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});


$(document).ready(function(){
  $("#about").on("click",function(){
    $("#about").css("right","0");
    $("#blog").css("right","-230px");
    $("#projects").css("right","-230px");
    $("#contact").css("right","-230px");
    $("a").css("right","0");
  });//End of about click
 
  $("#blog").on("click",function(){
    $("#blog").css("right","0");
    $("#about").css("right","-230px");
    $("#projects").css("right","-230px");
    $("#contact").css("right","-230px");
  });//End of blog click
  
  $("#projects").on("click",function(){
    $("#projects").css("right","0");
    $("#about").css("right","-230px");
    $("#blog").css("right","-230px");
    $("#contact").css("right","-230px");
  });//End of projects click
  
  $("#contact").on("click",function(){
    $("#contact").css("right","0");
    $("#about").css("right","-230px");
    $("#blog").css("right","-230px");
    $("#projects").css("right","-230px");
  });//End of contact click
  
});//End of document ready
  





