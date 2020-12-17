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
        var scrollT = $(window).scrollTop();
        
        if (scrollT > 0) {
            $global.addClass('on');
            $goTop.addClass('on');
        }
        if ( scrollT <= 0 ) {
            $global.removeClass('on');
            $goTop.removeClass('on');
        }
    }
    ScrollAct();
    $(window).scroll(_.throttle(ScrollAct, 70));
}


// 발견 요소의 offset 설정
function ActiveOnVisible__initOffset() {
    $(".active-on-visible, .actived-on-visible").each(function (index, node) {
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
    $(".active-on-visible, .actived-on-visible:not(.actived)").each(function (index, node) {
        var $node = $(node);
        var $actived;
        if ($node.hasClass("actived-on-visible")) {
            $actived = $(node);
        }

        var winSt = $(window).scrollTop();

        var offsetTop = parseInt($node.attr("data-AOV-offsetTop"));
        var offsetBottom = parseInt($node.attr("data-AOV-offsetBottom"));
        var diffY = parseInt($node.attr("data-AOV-diff-y"));
        var delay = parseInt($node.attr("data-AOV-delay"));

        if (winSt + diffY > offsetBottom == false && winSt + diffY >= offsetTop) {
            setTimeout(function () {
                if ($actived == undefined) {
                    $node.addClass("active");
                } else {
                    $actived.addClass("actived");
                }
            }, delay);
        }
    });

    // 벗어나면 클래스 제거
    $(".active-on-visible.active").each(function (index, node) {
        var $node = $(node);

        var winSt = $(window).scrollTop();
        var winHeight = $(window).height();

        var offsetTop = $node.attr("data-AOV-offsetTop");
        var offsetBottom = $node.attr("data-AOV-offsetBottom");
        var diffY = parseInt($node.attr("data-AOV-diff-y"));
        var delay = parseInt($node.attr("data-AOV-delay"));

        if (winSt + winHeight < offsetTop || winSt > offsetBottom) {
            setTimeout(function () {
                $node.removeClass("active");
            }, delay);
        }
    });
}








// 지연함수
$(function () {
    setting__init();

    scroll__init();

    ActiveOnVisible__initOffset();
    ActiveOnVisible__checkAndActive();
    $(window).resize(_.throttle(ActiveOnVisible__initOffset, 70));
    $(window).scroll(_.throttle(ActiveOnVisible__checkAndActive, 70));
})