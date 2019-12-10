$(document).ready(function() {
  $("#owlcarousel").owlCarousel({
      autoPlay: 4000, //Set AutoPlay duration
	  scrollPerPage: true, // scroll screen of thumbs not just one at a time
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,2],
	  itemsTablet : [768,1],
	  itemsMobile : [479,1]
  });
});