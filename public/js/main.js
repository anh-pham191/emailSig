var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});

$(window).scroll(function(){
	if($('.navbar').offset().top > 50){
		$('.navbar-fixed-top').addClass('top-nav-collapse');
		$('.navbar-left').fadeOut();
	}else{
		$('.navbar-fixed-top').removeClass('top-nav-collapse');
		$('.navbar-left').fadeIn();
	}
});

$("navbar-custom").hover(function(){
	$(this).addClass('top-nav-collapse');
	$('.navbar-left').fadeOut();
}), function(){
	$(this).removeClass('top-nav-collapse');
	$('.navbar-left').fadeIn();
}

$(function(){
	$('.page-scroll a').bind('click', function(){
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	})
})

jQuery.easing['jswing']=jQuery.easing['swing'];
jQuery.extend(jQuery.easing,{
	easeOutBounce:function(x,t,b,c,d){
		if((t/=d)<(1/2.75)){
			return c*(7.5625*t*t)+b
		}else if(t<(2/2.75)){
			return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b
		}else if(t<(2.5/2.75)){
			return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b
		}else{
			return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b
		}
	}
});

$('.social-hover').hover(function() {
    $(this).stop().animate({
        top: -10
    }, 900, "easeOutBounce");
}, function() {
    $(this).stop().animate({
        top: 0
    }, 900, "easeOutBounce");
});