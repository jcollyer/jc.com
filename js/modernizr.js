			$(document).ready(function() {
					$('ul#topnav > li').each(function(){
						$(this).hoverIntent({
							timeout: 50,
							over: function() {
								var theLink = $(this).find('a');
								//console.log(theLink);
								theLink.animate({ color: '#c1b0d1'}, 200, function(){
									theLink.css("text-shadow", "1px 1px 1px #893ad2");
								});
							},
							out: function(){
									var theLink = $(this).find('a');
								//	console.log('out');
									theLink.animate({color: '#f0f0f0'}, 200, function(){
										theLink.css("text-shadow", "0 0 0")
									});
							}
						});
					
					});
				});