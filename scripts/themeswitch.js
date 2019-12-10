	jQuery(document).ready(function($){ 
	
		//windows8 palette
		var lime='#A4C400', green='#60A917', emerald='#008A00', teal='#00aba9', 
		cyan='#1ba1e2', cobalt='#0050ef', indigo='#6a00ff', violet='#aa00ff',
		pink='#f472d0', magenta='#d80073', crimson='#a20025', red='#e51400',
		orange='#fa6800', amber='#f0a30a', yellow='#e3c800', brown='#825a2c',
		olive='#6d8764', steel='#647687', mauve='#76608a', taupe='#87794e',
		std="#376376", white='#fff', black='#000';	
			
		// get date
		var day = new Date();
		//var today = day.getDay(); // day of week
		var dd = day.getDate(); // day in month
		var mm = day.getMonth();

        //var dd = 25; // alert(dd);	//test
		//var mm = 11; // alert(mm);	//test	 	

		// select holiday theme
		var theme;		
		var message;
		if (dd == 31 && mm == 11) {theme = 9; message="Happy New Year!";} // it's new years eve
		else if(dd <= 5 && mm == 0) {theme = 9; message="Happy New Year!";} // it's new years day
		else if(dd == 14 && mm == 1) {theme = 7; message = "Happy Valentine's Day";} // it's valentines day
		else if(dd >= 15 && dd <= 17 && mm == 3) {theme = 8; message = "Happy Easter!";} // it's easter
		else if(dd == 5 && mm == 10) {theme = 9; message="It's Bonfire Night!";} // it's bonfirenight 
		else if(dd == 31 && mm == 9) {theme = 10; message ="Happy Halloween";} // it's halloween
		else if(dd >= 19 && dd <= 24 && mm == 11) {theme = 11; message="We wish you a Merry Christmas!";		
									//$.fn.snow({ maxSize: 30, newOn: 250}); snow not working in IE arrgh!
									} // it's nearly xmas!
		else if(dd >= 25 && dd <= 30 && mm == 11) {theme = 12; message="Happy Christmas!";		
									//$.fn.snow({ maxSize: 30, newOn: 100 });
									} // it's xmas day
									
		//else wintheme(); //calls win8 random colour theme if not a holiday
		else {theme = 13;}// or apply the default theme
		
		//alert(theme);
		//theme = 7; // test
			
		// select the theme 
		
		/* apply holiday theme */		
		switch (theme) 
		{
		case 7: $('body').addClass( "valentinesday" ); break
		case 8: $('body').addClass( "easter" ); break			
		case 9: $('body').addClass( "bonfirenight" ); break
		case 10: $('body').addClass( "halloween" ); break
		case 11: $('body').addClass( "xmas" ); break			
		case 12: $('body').addClass( "xmasday" );  break
		
		// default theme - go back to default theme
		case 13: $('body').addClass( "default" ); 
		};
		
		$('#homepagecontent h1').text(message);		// adds holiday message to the home page
			
		// win8 random colour transition theme 
		function wintheme() {	
				var bgColour = new Array(teal,cyan,cobalt,indigo,violet,pink,magenta,crimson,red,orange,amber,yellow);	
				// random colours
				var randNum = Math.random();
				var i = Math.round(randNum * 12);
					// animate colours over 2 seconds	
					$('.hero, .subpagesvces, .footerlinks').animate({
					  backgroundColor: bgColour[i+1]
					},2000);	
					$('body').animate({
					  backgroundColor: bgColour[i]
					},2000);	
				setTimeout(wintheme,15000)	// retart function every 15 seconds	
				};	
		
	});	
