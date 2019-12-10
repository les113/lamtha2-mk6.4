/* mobile nav menu */
	jQuery(document).ready(function($){
		checkwindowsize();  //calls window size check on page load to determine which nav menu to show		
		$(window).resize(function() { //calls window size check on page resize
			checkwindowsize();
		});	
		function checkwindowsize(){	// hides appropriate menu dep on initial window size
			if($(window).width()< 768){
			$('.mainmenu').hide();
			$('.services, .subpageservices').css('background-color', '#376376'); //sets colour of services bg
			$('.services a, .subpageservices a').css('color', '#fff');  // services icons
			$('body').css('background-color', '#fff');
			};
			if($(window).width()> 768){
			$('.mainmenu').show();
			$('.services, .subpageservices').css('background-color', '#fff'); //resets colour of services bg
			$('.services a').css('color', '#ff9900'); // services icons
			$('.subpageservices a').css('color', '#fff'); // services icons
			};
		};			
		$('.mobmenubutton').click(function(){   //	toggles mob menu visibility when mobmenubutton clicked
			$('.mainmenu').slideToggle(function(){
				});
		});			
	});	