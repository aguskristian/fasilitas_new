// JavaScript Document

$(document).ready(function(){ 

	
	$("li.navigationone").click( function(){ $
		(".navswitch").removeClass("navigation2 , navigation3 , navigation4 , navigation5").addClass("navigation1");
	});
	
	$("li.navigationtwo").click( function(){ $
		(".navswitch").removeClass("navigation1 , navigation3 , navigation4 , navigation5").addClass("navigation2");
	});
	
	$("li.navigationthree").click( function(){ $
		(".navswitch").removeClass("navigation1 , navigation2 , navigation4 , navigation5").addClass("navigation3");
	}); 
	
	$("li.navigationfour").click( function(){ $
		(".navswitch").removeClass("navigation1 , navigation2 , navigation3 , navigation5").addClass("navigation4");
	}); 
	
	$("li.navigationfive").click( function(){ $
		(".navswitch").removeClass("navigation1 , navigation2 , navigation3 , navigation4").addClass("navigation5");
	}); 
});