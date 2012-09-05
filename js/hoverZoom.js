

	//move the image in pixel
	var move = -15;
	
	//zoom percentage, 1.2 =120%
	var zoom = 1.1;

	//On mouse over those thumbnail
	$('.zitem').hover(function() {
		
		//Set the width and height according to the zoom percentage
		width = $('.zitem').width() * zoom;
		height = $('.zitem').height() * zoom;
		
		//Move and zoom the image
		$(this).find('img').stop(false,true).animate({'width':width, 'height':height, 'top':move, 'left':move}, {duration:200});
		
		//Display the caption
		$(this).find('div.caption').stop(false,true).animate({opacity: "1"},500);
	},
	function() {
		//Reset the image
		$(this).find('img').stop(false,true).animate({'width':$('.zitem').width(), 'height':$('.zitem').height(), 'top':'0', 'left':'0'}, {duration:300});	

		//Hide the caption
		$(this).find('div.caption').stop(false,true).animate({opacity: "0"},500);
	});

