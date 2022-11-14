jQuery(window).scroll(function () {
    var scroll_top =     jQuery(this).scrollTop();
    if (scroll_top >= 350) {
        jQuery(".headstrip").addClass("fixed");
        console.log('Fixed added');
    } else {
        jQuery(".headstrip").removeClass("fixed");
        console.log('Fixed removed');
    }
});

jQuery('.menuopen').click(function() {
   jQuery('header').toggleClass('show');
  // jQuery('.advert').toggleClass('show'); 
});
jQuery('.menuclose').click(function() {
   jQuery('header').toggleClass('show'); 
   //s   jQuery('.advert').toggleClass('show');
});