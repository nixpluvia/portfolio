function setting__init() {
    $('a').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    })
}

function scroll__init(){
    function ScrollAct(){
        var $global = $('.global');
        var $goTop = $('.go-top');
        var $news = $('.cont-news');
        var scrollT = $(window).scrollTop();
        
        if (scrollT > 0) {
            $global.addClass('on');
            $goTop.addClass('on');
            $news.addClass('on');
        }
        if ( scrollT <= 0 ) {
            $global.removeClass('on');
            $goTop.removeClass('on');
        }
    }
    ScrollAct();
    $(window).scroll(_.throttle(ScrollAct, 70));
}

function goTopBtn__init(){
    $('.go-top').click(function(){
        $('html,body').animate({
            scrollTop : 0
        }, 600)
    })
}


// 발견 요소의 offset 설정
function ActiveOnVisible__initOffset() {
    $(".section-nav-on, .actived-on-visible").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        var offsetBottom = offsetTop + $node.outerHeight();
        $node.attr("data-AOV-offsetTop", offsetTop);
        $node.attr("data-AOV-offsetBottom", offsetBottom);

        if (!$node.attr("data-AOV-diff-y")) {
            $node.attr("data-AOV-diff-y", "0");
        }

        if (!$node.attr("data-AOV-delay")) {
            $node.attr("data-AOV-delay", "0");
        }
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
    // 발견하면 클래스 추가하기
    $(".actived-on-visible:not(.actived)").each(function (index, node) {
        var $node = $(node);

        var winSt = $(window).scrollTop();

        var offsetTop = parseInt($node.attr("data-AOV-offsetTop"));
        var offsetBottom = parseInt($node.attr("data-AOV-offsetBottom"));
        var diffY = parseInt($node.attr("data-AOV-diff-y"));
        var delay = parseInt($node.attr("data-AOV-delay"));

        if (winSt + diffY >= offsetTop) {
            $node.addClass("actived");
        }
    });

    $('.section-nav-on').each(function(index, node){
        var $node = $(node);
        var index = $node.index();

        var winSt = $(window).scrollTop();

        var offsetTop = parseInt($node.attr("data-AOV-offsetTop"));
        var offsetBottom = parseInt($node.attr("data-AOV-offsetBottom"));
        var diffY = 68;
        
        if(winSt + diffY >= offsetTop && winSt + diffY < offsetBottom){
            // console.log(index);    
            $('.section-nav-btn > ul > li').eq(index).addClass('current');
        }
        else {
            $('.section-nav-btn > ul > li').eq(index).removeClass('current');
        }
    })
}


function dotsNav__init(){
    $('.section-nav-btn > .dots > .dot').click(function(){
        var $this = $(this);
        var dotIndex = $this.index();
        var $section = $('.container > .section');
        var sectionSt = $section.eq(dotIndex).attr('data-AOV-offsetTop');

        $section.removeClass('current');
        $section.eq(dotIndex).addClass('current');

        $('html,body').stop().animate({
            scrollTop : sectionSt + 'px'
        }, 700)
    })
}

function gsap__init() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".research > .bg", {
        scrollTrigger: {
            trigger: ".research",
            start: "center bottom",
            end: "bottom bottom",
            scrub: true,
            toggleActions: "reverse"
        },
        y: 239
    })
    gsap.to(".solution > .bg", {
        scrollTrigger: {
            trigger: ".solution",
            start: "center bottom",
            end: "765 bottom",
            scrub: true,
            toggleActions: "reverse"
        },
        y: 271
    })
}




// 지연함수
$(function () {
    setting__init();

    scroll__init();

    goTopBtn__init();

    ActiveOnVisible__initOffset();
    ActiveOnVisible__checkAndActive();
    $(window).resize(_.throttle(ActiveOnVisible__initOffset, 70));
    $(window).scroll(_.throttle(ActiveOnVisible__checkAndActive, 70));

    dotsNav__init();
    gsap__init();
})