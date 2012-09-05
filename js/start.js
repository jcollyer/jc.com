	
		$('header').children().css("opacity", "0");
		$('header').animate({opacity: "1"},500);
		$('#header_icon').children().css("opacity", "0");
		$('header').children(":first-child").css("opacity", "1");
		$('#header_show_image').animate({opacity: "1", marginRight: "30%"}, 2000, function(){
			$('#header_show_slogen').animate({opacity: "1"}, 500);
		});
	
	
		$('#navigation').animate({opacity: "1"}, 2500, function(){
			$('#fancy').animate({marginLeft: "0"}, 500, function(){
				$('#left_inner').animate({opacity: "1"}, 300, function(){
					$('#right_inner').animate({opacity: "1"}, 300, function(){
					//	$('#section_header').children(":first-child").css("position", "static");
						$('#section_header > p').animate({opacity: "1"}, 300);
						$('#header_article').animate({opacity: "1"}, 300, function(){
							$('#click').animate({opacity: "1"}, 300, function() {
								$('#html5_logo').animate({opacity: "1"}, 300);
							});
						});
					});
				});
			});
		});
