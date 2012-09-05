

		$('ul.showcase li a').click(function(){	
			
			$('header').children().animate({opacity: "0"}, 1000);
			$('#header_show_image').animate({marginRight: "30%"}, 1300);
			$('#header_icon').css("display", "none");
			$('.icon_link').css("display", "none");
			$('.icon_link_button').css("display", "none");
			$('.icon_image_logo').css("display", "none");
			
			$('#header_icon').children().animate({opacity: "0"}, 200);
			$('header').children(":first-child").animate({opacity: "1"}, 1500);
			$('#click').animate({opacity: "0"}, 500);
			if($('header').height() < 240){
				$("header").animate({height: "17em"}, 1500, function(){
					$('#fancy').animate({top: "345px"}, 500, function(){
						$('#html5_logo').animate({top: "345px"}, 500);
	//					$('#header_show_slogen').animate({marginTop: "80px"}, 500);
					});
				});
			}	
			var listIDNumber = $(this).parent().attr('id').match(/[\d]+$/);
			//console.log(listIDNumber);
			var src = $(this).attr('href');
			var alt = $(this).attr('title');
			var info =$(this).text();
			
			$('#header_show > img').animate({opacity: '0'}, 200); 
			    if (src != $('#header_show_image > img').attr('src')) {
			        $('#header_show_image > img').stop().animate({opacity:'0'}, 500, function(){
							//$('.show_first').css('position', 'absolute');
			                	$(this).attr('src',src);
							//this is the icon
							$('#header_show_slogen > h5').stop().animate({opacity:'0'}, 200)//, function(){
						//		$(this).text(alt);
						//	});
							$('#section_header > p').stop().animate({opacity: "0"}, 1000, function(){
								$(this).text(info);
							});
			        }).load(function(){
							$('#header_show_image').animate({marginRight: "18%"}, 1500);
			                $('#header_show_image > img').stop().animate({opacity:'1'}, 2000, function(){
								$('#section_header > p').stop().animate({opacity: '1'}, 2000); 	
								var thisIcon = $("#header_icon > div:contains(" + listIDNumber + ")");
											//	console.log(thisIcon);
											//	thisIcon.animate({marginTop: "0"}, 400);
								$(".icon_link[rel=" + listIDNumber + "]").css("display", "block");		
								$(".icon_image_logo[rel=" + listIDNumber + "]").css("display", "block");
								$(".icon_link_button[rel=" + listIDNumber + "]").css("display", "block");
								
								//console.log(thisIconLogo);
								$('#header_icon').css("display", "block");			
								thisIcon.animate({opacity: "1"}, 1300);
								
							});
						

								
			        })
			    }
								//Slogen appears ONLY for home page
								if($('#header_article').filter(function() {
								    return $(this).css('opacity').length == 0;})){
									$('#header_article').animate({opacity: "1"}, 500);
									$('#section_header > p').animate({opacity: "1"}, 1500);
								};
			   return false; 
		});

