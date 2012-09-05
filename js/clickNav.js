	
			$('nav ul li a').click(function(){
					if($('header').height() < 240){
						$("header").animate({height: "17em"}, 1500, function(){
							$('#fancy').animate({top: "345px"}, 500, function(){
								$('#html5_logo').animate({top: "345px"}, 500, function(){
									$('#section_header').children().animate({opacity: "0"}, 500);
								});
							});
						});
					}
					$("#header_article").animate({opacity: "0"}, 500);
					var thisLink = $(this).parent().attr("id").match(/[\d]+$/);
			//		var thisSlogen = $('section_header > p');
			//		console.log(thisSlogen);
					var thisLinkT = "t" + thisLink;
		//			console.log(thisLink);
					$('nav ul li a').removeClass('current');
					
					$(this).addClass('current');
					var currentTab = $(this).attr('href');
				//	console.log(currentTab);
				//	var currentDiv = $('header').children().find('" + current +"');
				//	console.log(currentDiv);
					$('header').children().animate({opacity: "0"}, 500, function(){
						$(this).css("position", "absolute");
						$("#" + thisLinkT).css("position", "static");
					});
					
					//$("header").children().contains(currentTab);
					$(currentTab).animate({opacity: "1"}, 3000, function(){
				//	$('#section_header').animate({opacity: "0"}, 500);
					});
					
				return false;
			});
			
