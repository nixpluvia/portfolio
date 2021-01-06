// click prevent
function prevent__init(){
    $('a').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        return false;
    });
}

// slide function start
function slide(){
    var $this = $(this);
    var $thisLeft = $this.index() == 0;
    var $parentSlide = $this.closest('.top-bn-slider');
    var $slideActive = $parentSlide.find('.slides > .active');
    var $dotActive = $parentSlide.find('.btn-slide-dots > .active');
    var $slidePost = $slideActive.next();
    var $dotPost = $dotActive.next();

    if ( $thisLeft ) {
        $slidePost = $slideActive.prev();
        $dotPost = $dotActive.prev();
        if ($slidePost.length == 0) {
            $slidePost = $parentSlide.find('.slides > :last-child');
            $dotPost = $parentSlide.find('.btn-slide-dots > :last-child');
        }
    }
    else {
        if ($slidePost.length == 0) {
            $slidePost = $parentSlide.find('.slides > :first-child');
            $dotPost = $parentSlide.find('.btn-slide-dots > :first-child');
        }
    }

    $slideActive.removeClass('active');
    $dotActive.removeClass('active');
    $slidePost.addClass('active');
    $dotPost.addClass('active');
}

function slideDots() {
    var $this = $(this);
    var $thisIndex = $this.index();
    var $parentBtn = $this.closest('.top-bn-slider');
    var $slideIndex = $parentBtn.find('.slides > .slide').eq($thisIndex);
    var $slideActive = $parentBtn.find('.slides > .active');
    var $dotActive = $parentBtn.find('.btn-slide-dots > .active');

    $slideActive.removeClass('active');
    $dotActive.removeClass('active');
    $slideIndex.addClass('active');
    $this.addClass('active');
}


/* slide auto play */
function slideInterval(){
    setInterval(function(){
        $('.top-bn-slider > .slide-button > span:last-child').click();
    }, 5000);
};

function slide__init(){
    $('.top-bn-slider > .slide-button > span').click(slide);
    $('.top-bn-slider > .btn-slide-dots > li').click(slideDots);
}
// slide function end

//search box start
function searchClick(){
    var $this = $(this);
    if ($this.hasClass('active')) {
        $this.removeClass('active');
    }
    else {
        $this.addClass('active');
    }
}

function searchClick__init(){
    $('.search-icon-box').click(searchClick);
}
//search box start


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
}

function AOV__init(){
    ActiveOnVisible__initOffset();
    ActiveOnVisible__checkAndActive();
    $(window).resize(ActiveOnVisible__initOffset);
    $(window).scroll(ActiveOnVisible__checkAndActive);
}

/* 실행 */
$(function(){
    slide__init();
    slideInterval();
    searchClick__init();
    // windowScroll();
    AOV__init();
});