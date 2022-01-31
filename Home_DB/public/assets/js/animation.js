AOS.init({

	 offset: 10,
	 easing: 'ease',
	 duration: 1000,
	 // startEvent: 'DOMContentLoaded', 
});

$(window).scroll(function(){
	$('nav').toggleClass('scrolled',$(this).scrollTop()>50);
})