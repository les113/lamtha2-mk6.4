/* colorbox settings */
		jQuery(document).ready(function($) {
			$('.colorbox').colorbox(); //for image lightbox
			$('.tandc').colorbox({width:600, height:800});  // for terms
			$('.cookiepolicy').colorbox({width:600, height:600}); // for cookie policy
			$('.map').colorbox({width:1000, height:600}); // for google map
		});
		// touch not working!
		jQuery('.colorbox').touchwipe( {
            wipeLeft:function($) {
               $('.portfolioimg').colorbox("prev");
            },
            wipeRight:function($) {
               $('.portfolioimg').colorbox("next");
            },
        });

/* disables lightbox on small screens */		
	jQuery(document).ready(function($) {
		if (window.matchMedia) {
			widthCheck = window.matchMedia ("(max-width:700px)"); 
			if (widthCheck.matches){
				$("a.colorbox").contents().unwrap();
			}
		}
	});