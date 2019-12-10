/* cycle slideshow settings */	
jQuery(document).ready(function($) {
		$('.slideshow').cycle({
			fx: 'scrollHorz', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			prev:   '#prevBtn',     
			next:   '#nextBtn',	
			pager:  '#pager',
			slideResize: 0,  // for responsive layout, refreshes slideshow on browser resize		
			timeout: 7000			
		});
		// touch
		$('.slideshow').touchwipe({
			wipeLeft: function() {
            $('.slideshow').cycle("next");
			},
			wipeRight: function() {
            $('.slideshow').cycle("prev");
			}
		});
	});