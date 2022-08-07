jQuery(document).ready(function($){
    $(".navbar-toggler").on('click', function(event) {
        $('header nav').fadeToggle();
    });
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 350) {
            $("#to-top").fadeIn();
        } else {
            $("#to-top").fadeOut();
        }
    });
    $('.full-container').each(function(){
        var h = $(this).children().height();
        $(this).height(h);
    })
    $("#to-top").click(function () {
        $('html, body').animate({
            scrollTop: 0
        });
    })
    $('.toggller').click(function () {
        var c = $(this).closest('.faq-box').find('.answer');
        $(this).toggleClass('open');
        $(this).closest('.faq-box').toggleClass('open');
        c.slideToggle();
    });
    $('.menu-item-has-children').mouseover(function () {
        $(this).find('.sub-menu').fadeIn();
    }).mouseleave(function () {
        $(this).find('.sub-menu').fadeOut();
    })
    $("body").on('click', '[href*="#"]', function(e){
        if ($(this.hash).length != 0) {
            e.preventDefault();
            $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top }, 700);
        }
	})
    let toc = $('.wp-block-gutenberg-blocks-toc');
	let position;
	if (toc.length) {
		position = toc.position().top
	}
    $(window).resize(function() {
		if (toc.length) {
			position = toc.position().top
		}
        $('.full-container').each(function(){
            var h = $(this).children().height();
            $(this).height(h);
        })
	})
    $(".searchbtn").click(function(){
      $("#form").fadeToggle();
    });
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ["<span class='prev'></span>","<span class='next'></span>"],
        dots: false
    });
})
