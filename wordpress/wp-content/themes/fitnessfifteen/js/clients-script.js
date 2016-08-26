$(document).ready(function() {
	$('.client-image-delim').hover(function() {
	  $(this).children().first().show();
	  $(this).children().first().next().show();
	  $(this).css('background', 'black');
	  $(this).children().first().next().next().css('opacity', '0.6');
	});

	$('.client-image-delim').mouseleave(function() {
	  $(this).children().first().hide();
	  $(this).children().first().next().hide();
	  $(this).css('background', 'none');
	  $(this).children().first().next().next().css('opacity', '1');
	});

	$('.large-img-cover').hover(function() {
	  $(this).children().first().show();
	  $(this).children().first().next().show();
	  $(this).css('background', 'black');
	  $(this).children().first().next().next().css('opacity', '0.6');
	});

	$('.large-img-cover').mouseleave(function() {
	  $(this).children().first().hide();
	  $(this).children().first().next().hide();
	  $(this).css('background', 'none');
	  $(this).children().first().next().next().css('opacity', '1');
	});
});
