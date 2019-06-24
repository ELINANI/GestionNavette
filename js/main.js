$(document).ready(function(){
	$('.icon').click(function(){
		$('.search').toggleClass('active')
		$('.menu1 nav ul li:first-of-type a').toggleClass('clear')
	});
	$('.login').click(function(){
		$('.popup').fadeIn();
	});
	$('.popup').click(function(){
		$(this).fadeOut();
	});
	$('.popup .log').click(function(e){
		e.stopPropagation();
	});
	$(function(){
		$("#target").ripple();
    })
})