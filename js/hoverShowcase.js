 	$(document).ready(function(){
			$('ul.showcase li').each(function(){
				$(this).hoverIntent({
					timeout: 50,
					over: function() {
						var box = $(this).find('img');
						box.animate({top: "182px"}, 800);
					},
					out: function() {
						var box = $(this).find('img');
						box.animate({top: "0"}, 200);
					}
				});
			});
	});