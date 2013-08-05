$(document).ready(function(){

/*-----------------------------------------------------------------------------------*/
/* Twitter
/*-----------------------------------------------------------------------------------*/	

$(".tweet").tweet({
        username: "envato",
        avatar_size: 24,
        count: 3,
        loading_text: "loading tweets..."
      });

/*-----------------------------------------------------------------------------------*/
/* jCarousel
/*-----------------------------------------------------------------------------------*/	

jQuery('#mycarousel').jcarousel({
		wrap: 'circular',
		animation: 1500,
		scroll: 1,
		auto: 0,
		buttonPrevHTML: null
	});
	
	jQuery('#mycarousel2').jcarousel({
        wrap: 'circular',
		animation: 1500,
		scroll: 1,
		auto: 0,
		buttonPrevHTML: null
    });
	

/*-----------------------------------------------------------------------------------*/
/* Fancybox
/*-----------------------------------------------------------------------------------*/	
			$("a.fancy").fancybox({
				'overlayOpacity':	0.7,
				'overlayColor' :	'#000',
				'titlePosition'	:	'over',
				'onComplete'	:	function() {
					$("#fancybox-wrap").hover(function() {
					$("#fancybox-title").show();
					}, function() {
					$("#fancybox-title").hide();
					});
					}
			});
		
/*-----------------------------------------------------------------------------------*/
/* --
/*-----------------------------------------------------------------------------------*/	


}); // end document.ready


		

	
	


