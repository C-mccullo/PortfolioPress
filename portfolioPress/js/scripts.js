$(document).ready(function() {
	console.log("It's working");

  $('a[href*="#"]:not([href="#"])').click(function() {
    console.log('is smoothscroll working?');

    if ($('.mobileContainer').hasClass('show')) {
      $('.mobileContainer').toggleClass('show');
      $('.mobileNav i.fa-bars').removeClass('activeHam')
    }

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 60
        }, 1000);
        return false;
      }
    };
  });


    var $colorChange = $('.colorChange');
    var $window = $(window);

    function check_if_in_view() {
      console.log('does this work?')
      var window_height_half = ($window.height()/2);
      var window_height = ($window.height() - window_height_half);
      var window_scroll_position = ($window.scrollTop - window_height_half);
      var window_top_position = ($window.scrollTop());
      var window_bottom_position = (window_top_position + window_height + 100);
      $.each($colorChange, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
     
        //check to see if this current container is within viewport
        if ( element_top_position <= ($window.scrollTop() + 40) ) {
          $element.css('filter', 'grayscale(90%)');
          $element.css('-webkit-filter', 'grayscale(90%)');
          $element.css('color', '#818181');
          $element.find('.viewButton').css('background-color', '#818181');
        }
        else if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
          $element.css('filter', 'grayscale(20%)');
          $element.css('-webkit-filter', 'grayscale(20%)');
          $element.css('color', 'black')
          $element.find('.viewButton').css('background-color', 'black');
          
        } else {
          
          $element.css('-webkit-filter', 'grayscale(90%)');
          $element.css('filter', 'grayscale(90%)');
          $element.css('color', "#818181" );
          $element.find('.viewButton').css('background-color', '#818181');
        }
      });
    };

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

    $('.mobileNav i.fa-bars').on('click', function(){
      $('.mobileContainer').toggleClass('show');
      $('.mobileNav i.fa-bars').toggleClass('activeHam')
    }); 

});
