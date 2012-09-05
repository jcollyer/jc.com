
				$('#social_box').children().each(function(){
					$(this).hoverIntent({
						timeout: 50,
						over: function() {
							var socialBox = $(this);	
							socialBox.animate({marginTop:"-18px"}, 800);
								var imageSocialBox = socialBox.find('img');
								imageSocialBox.animate({opacity: "0"}, 800);

						},
						out: function() {
							var socialBox = $(this);	
							socialBox.animate({marginTop:"0px"}, 300);
								var imageSocialBox = socialBox.find('img');
								imageSocialBox.animate({opacity: "1"}, 300)
						}
					});
				});
