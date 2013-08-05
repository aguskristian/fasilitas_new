$(function(){
	$('.selecter').mobilyselect({
		collection: 'all',
		animation: 'fade',
		duration: 500,
		listClass: 'selecterContent',
		btnsClass: 'selecterBtns',
		btnActiveClass: 'active',
		elements: 'li',
		onChange: function(){},
		onComplete: function(){}
		
	});
});
