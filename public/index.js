// 부모에게 active 클래스 추가하는 함수 시작
function sideBarToggle(e) {
    var $this = $(this);
    var $parent = $this.closest('.side-bar');
    var $shadow = $('.side-shadow');

    if ($parent.hasClass('active')) {
        $parent.removeClass('active');
        $parent.addClass('close-ani');
        $parent.removeClass('open-ani');
        $shadow.removeClass('active');
        $shadow.addClass('close-ani');
        $shadow.removeClass('open-ani');
        // console.log("remove");
    } else {
        $parent.addClass('active');
        $parent.addClass('open-ani');
        $parent.removeClass('close-ani');
        $shadow.addClass('active');
        $shadow.addClass('open-ani');
        $shadow.removeClass('close-ani');
        // console.log("add");
    }
}
// 부모에게 active 클래스 추가하는 함수 끝


// 라인 애니메이션 딜레이 시작
function lineAni__init() {
    var line = $('.intro > .title > div');
    var arrLine = [line.eq(0), line.eq(1), line.eq(2)];
    var delayTime = 700;
    var setIndex = 0;
    for (var i = 0; i < 3; i++) {
        setTimeout(function () {
            arrLine[setIndex].addClass('active');
            setIndex++;
        }, delayTime);
        delayTime += 800;
    }
}
// 라인 애니메이션 딜레이 끝



// 탭박스 함수 시작
function tabBox__init() {
    $('[data-tab-head-item-name]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName = $this.attr('data-tab-head-item-name');

        $('[data-tab-name="' + tabName + '"]').removeClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');

        if (tabName == "box-2") {
            if (itemName == 1) {
                $('[data-tab-name="' + tabName + '"][data-tab-body-item-name]').addClass('active');
            }
        }

        if (tabName == "box-1") {
            if ($this.index() == 1) {
                numIncrease__init();
                progressAni__init();
            }
        }
    });
}
// 탭박스 함수 끝



// 숫자 증가 함수 시작
function numIncrease__init() {
    $(".info-num").each(function () {
        var $this = $(this);
        var maxNum = parseInt($this.attr("data-max-num"));
        $({
            number: 0
        }).animate({
            number: maxNum
        }, {
            duration: 800,
            step: function () {
                var num = parseInt(this.number);
                $this.text(num);
            },
            complete: function () {
                var num = parseInt(this.number);
                $this.text(num);
            }
        });
    });
}
// 숫자 증가 함수 끝


// 프로그레스 바 애니메이션 시작
function progressAni__init() {
    $('.progress-bar > .bar').each(function () {
        var $this = $(this);
        var maxWidth = $this.attr('data-width');
        $this.css('width', 0);

        $this.animate({
            width: maxWidth
        }, {
            duration: 1000,
            step: function (now) {
                $this.css('width', now);
            },
            complete: function (now) {
                $this.css('width', now);
            }
        });
    });
}
// 프로그레스 바 애니메이션 끝



// 발견 하는 함수 시작

// 발견 요소의 offset 설정
function ActiveOnVisible__initOffset() {
    $(".active-on-visible, .actived-on-visible").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        var offsetBottom = offsetTop + $node.outerHeight();
        $node.attr("data-active-on-visible-offsetTop", offsetTop);
        $node.attr("data-active-on-visible-offsetBottom", offsetBottom);

        if (!$node.attr("data-active-on-visible-diff-y")) {
            $node.attr("data-active-on-visible-diff-y", "0");
        }

        if (!$node.attr("data-active-on-visible-delay")) {
            $node.attr("data-active-on-visible-delay", "0");
        }
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
    // 발견하면 클래스 추가하기
    $(".active-on-visible, .actived-on-visible").each(function (index, node) {
        var $node = $(node);
        var $actived;
        var HalfHeight = $(window).outerHeight() / 2 - 58.5;
        if ($node.hasClass('actived-on-visible')){
            $actived = $(node);
        }

        var offsetTop = parseInt($node.attr("data-active-on-visible-offsetTop"));
        var offsetBottom = parseInt(
            $node.attr("data-active-on-visible-offsetBottom")
        );
        var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));


        if ($(window).scrollTop() + diffY > offsetBottom == false) {
            if ($(window).scrollTop() + diffY >= offsetTop) {
                setTimeout(function () {
                    $node.addClass("active");
                    if ( $node.hasClass('section-page') ){
                        $('.pagenation > ul > li').removeClass('active');
                        $('.pagenation > ul > li').eq($node.attr('data-page-index')).addClass('active');
                    }

                    if ( $actived.hasClass('actived') == false ) {
                        $actived.addClass('actived');
                        // 함수 실행
                        if( $actived.hasClass('profile2') ){
                            progressAni__init();
                            numIncrease__init();
                        }
                    }
                }, delay);
            }
        }

        // 페이지 네비게이션 컬러 이벤트 용
        if ($node.hasClass('section-page') && $(window).scrollTop() >= offsetTop && $(window).scrollTop() <= offsetBottom) {
            if ($(window).scrollTop() < offsetBottom - HalfHeight) {
                $('body').attr('data-dot-page-index', parseInt($node.attr('data-page-index')));
            }
            if ($(window).scrollTop() > offsetBottom - HalfHeight) {
                $('body').attr('data-dot-page-index', parseInt($node.attr('data-page-index')) + 1);
            }
        }
    });

    // 벗어나면 클래스 제거
    $(".active-on-visible.active").each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.attr("data-active-on-visible-offsetTop");
        var offsetBottom = $node.attr("data-active-on-visible-offsetBottom");
        var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
        var delay = parseInt($node.attr("data-active-on-visible-delay"));
        
        if (
            $(window).scrollTop() + $(window).height() < offsetTop ||
            $(window).scrollTop() > offsetBottom
        ) {
            setTimeout(function () {
                $node.removeClass("active");
            }, delay);
        }
    });
}

// 발견 함수 실행함수
function ActiveOnVisible__init() {
    // 최초실행
    setTimeout(function(){
        ActiveOnVisible__initOffset();
    }, 1000);
    ActiveOnVisible__checkAndActive();
    

    $(window).resize(ActiveOnVisible__initOffset);
    $(window).scroll(ActiveOnVisible__checkAndActive);
}

// 발견 하는 함수 끝

function pagenation(){
    var $this = $(this);
    var dotIndex = $this.index();
    var $section = $('#wrap > .section-page').eq(dotIndex);
    var sectionOffset = parseFloat($section.attr("data-active-on-visible-offsetTop"));

    // console.log($this.index());
    // var diffy = 1;

    // if( dotIndex == 1 ) {
    //     diffy = 200;
    // }
    $('html,body').stop().animate({
        scrollTop : sectionOffset + 'px'
    }, 1000);
}

// pagenation 함수 시작
function pagenation__init(){
    $('.pagenation > ul > li').click(pagenation);

    $('.side-bar .side-bar-menu > ul > li').click(pagenation);
    $('.side-bar .side-bar-menu > ul > li').click(sideBarToggle);
}


// pagenation 함수 끝



// slick 슬라이드 시작
function slickSlide_init() {
    $('.slick-slider1').slick({
        dots:false,
        infinite: false,
        slidesToShow: 1,
        arrows: true,
        appendArrows: $('.design .design-slide-arrows'),
        prevArrow : '<div class="prev"><img src="./resource/arrow-left.svg"></div>',
        nextArrow : '<div class="next"><img src="./resource/arrow-right.svg"></div>'
    });

    // $('.pf-slide').slick({
    //     infinite: false,
    //     dots:false,
    //     arrows: false,
    //     rtl: true,
    //     slidesToShow: 3,
    //     variableWidth: true,
    //     swipe: true,
    //     swipeToSlide: true,
    //     responsive: [
    //         {
    //             breakpoint: 1024,
    //             settings: {
    //             slidesToShow: 2
    //             }
    //         },
    //         {
    //             breakpoint: 900,
    //             settings: {
    //                 slidesToShow: 1
    //             }
    //         }
    //     ]
    // })
    
    // $('.btn-all').on('click', function () {
    //     $('.pf-slide').slick('slickUnfilter');
    // });
    // $('.btn-redesign').on('click', function () {
    //     $('.pf-slide').slick('slickUnfilter');
    //     $('.pf-slide').slick('slickFilter', '[data-item-tab=1]');
    // });
    // $('.btn-copy').on('click', function () {
    //     $('.pf-slide').slick('slickUnfilter');
    //     $('.pf-slide').slick('slickFilter', '[data-item-tab=2]');
    // });
}
// slick 슬라이드 끝


function prevSlider__init() {
    // 미리보기 슬릭 슬라이더
    $(".preview-slider").slick({
        rtl: true,
        dots: false,
        arrows: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 2,
        variableWidth: true,
        // 반응형
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    // 슬라이드 아이템 클릭 이벤트
    $(".preview-slider .item").click(function () {
        var $this = $(this);
        var $sliderItems = $this.parent().find("> .item");
        var itemIndex = $this.index();

        var $contentBox = $(".ps-content-box");
        var $contents = $contentBox.find(" > ul > li");
        var $actContent = $contents.eq(itemIndex);

        var $imgBox = $(".ps-img-box");
        var $imgs = $imgBox.find(" > ul > li");
        var $actImg = $imgs.eq(itemIndex);

        $sliderItems.removeClass("active");
        $contents.removeClass("active");
        $imgs.removeClass("active");

        $this.addClass("active");
        $actContent.addClass("active");
        $actImg.addClass("active");
    });

    // 슬라이드 탭 버튼
    $(".slider-tab-head .tab-head").click(function () {
        var $this = $(this);

        var thisWidth = $this.outerWidth();
        var leftPosition = $this.position().left;
        var ParentWidth = $this.closest('.pf-tab-bar').outerWidth();
        var rightPostion = ParentWidth - leftPosition - thisWidth - 65;
        var $btnBg = $('.portfolio .btn-bg-bar');
        


        var btnIndex = $this.attr('data-tab-head');
        var $btnTabs = $this.parent().find(' > button');


        $btnTabs.removeClass('active');
        $this.addClass('active');
        $btnBg.css('width', thisWidth + 30 +'px');
        $btnBg.css('right', rightPostion + 'px');


        if (btnIndex < 1) {
            $('.preview-slider').slick('slickUnfilter');
        } else {
            $('.preview-slider').slick('slickUnfilter');
            $('.preview-slider').slick("slickFilter", "[data-slide-tab=" + btnIndex + "]");
        }
    });



    $('.portfolio .btn-all').click();
}
// // 포트폴리오 클릭 함수 시작
// function portfolioSlideClick(){
//     var $this = $(this);
//     var $itemList = $this.parent().find(' > .item');
//     var itemIndex = $this.attr('data-slick-index');
//     var $pfImg = $('.portfolio .pf-img-list > li');
//     var $pfContent = $('.portfolio .pf-items > li');

//     $itemList.removeClass('active');
//     $pfImg.removeClass('active');
//     $pfContent.removeClass('active');

//     $this.addClass('active');
//     $pfImg.eq(itemIndex).addClass('active');
//     $pfContent.eq(itemIndex).addClass('active');
// }

// // 포트폴리오 탭 클릭
// function portfolioTabClick(){
//     var $this = $(this);
//     var thisWidth = $this.outerWidth();
//     var leftPosition = $this.position().left;
//     var ParentWidth = $this.closest('.pf-tab-bar').outerWidth();
//     var rightPostion = ParentWidth - leftPosition - thisWidth - 65;
//     var $btnBg = $('.portfolio .btn-bg-bar');

//     $this.parent().find('> .pf-tab-btn').removeClass('active');
//     $this.addClass('active');
//     $btnBg.css('width', thisWidth + 30 +'px');
//     $btnBg.css('right', rightPostion + 'px');
// }



// function portfolioClick__init(){
//     $('.pf-slide .item').click(portfolioSlideClick);

//     $('.portfolio .pf-tab-btn').click(portfolioTabClick);
//     $('.portfolio .btn-all').click();
// }






// 포트폴리오 클릭 함수 끝

// 팝업 함수
function popupOpen() {
    var $this = $(this);
    var itemIndex = $this.attr('data-popup-index');
    var $popupBox = $('.popup-box');
    var $popupBg = $('.popup-bg');
    var $popupItem = $popupBox.find('.popup-items > .popup-item');

    $('html').data('data-Wheel-prevent', true);

    $popupBg.addClass('active');
    $popupBox.addClass('active');
    $popupItem.eq(itemIndex).addClass('active');
}

function popupClose() {
    var $popupBox = $('.popup-box');
    var $popupBg = $('.popup-bg');
    var $popupItem = $popupBox.find('.popup-items > .popup-item');

    $('html').data('data-Wheel-prevent', false);

    $popupBox.removeClass('active');
    $popupBg.removeClass('active');
    $popupItem.removeClass('active');
}

function popupArrow() {
    var $this = $(this);
    var $popupBox = $this.closest('.popup-box');
    var $popupItem = $popupBox.find('.popup-items > .popup-item.active');
    var post;
    if ($this.index() == 0) {
        post = $popupItem.prev();
    } else {
        post = $popupItem.next();
    }

    if (post.length == 0) {
        if ($this.index() == 0) {
            post = $popupBox.find('.popup-items > .popup-item:last-child');
        } else {
            post = $popupBox.find('.popup-items > .popup-item:first-child');
        }
    }

    $popupItem.removeClass('active');
    post.addClass('active');
}


// 클릭 이벤트 모음
function click__init(){
    // 사이드 바 클릭 이벤트
    $('.btn-side-bar').click(sideBarToggle);
    // 탭박스 클릭 이벤트
    $('[data-tab-name="box-2"][data-tab-head-item-name="1"]').click();
    $('.portfolio > .content-box > .head > button').click(ActiveOnVisible__initOffset);

    // 팝업 클릭 이벤트
    $('.btn-popup-item').click(popupOpen);
    $('.popup-bg, .btn-close').click(popupClose);
    $('.popup-button > button').click(popupArrow);
}

function scroll_init(){
    // 스크롤 이벤트 버블링 방지
    $('#wrap, .side-bar, .side-shadow, .popup-bg, .popup-box .btn-close, .popup-box .popup-button').on('mousewheel DOMMouseScroll',function(e){
        if ( $('html').data('data-Wheel-prevent') == true ) {
            e.stopPropagation();
            e.preventDefault();
            return ;
        }
    })
    // 팝업 이미지 스크롤 방지 이벤트
    $('.popup-prevent').on('mousewheel DOMMouseScroll',function(e){
        var $this = $(this);
        var thisHeight = $this.outerHeight();
        var boxScrollTop = $this.scrollTop();
        var boxScrollHeight = boxScrollTop + thisHeight;
        var imgHeight = $this.children().outerHeight();
        var delta = e.originalEvent.deltaY;

        // 스크롤의 최상단 일 경우
        if ( boxScrollTop == 0 ) {
            if ( delta < 0 ){
                e.stopPropagation();
                e.preventDefault();
                return ;
            }
        }

        // 스크롤의 최하단 일 경우
        if ( boxScrollHeight >= imgHeight ) {
            if ( delta > 0 ){
                e.stopPropagation();
                e.preventDefault();
                return ;
            }
        }
    })
}



$(function () {
    // 라인 애니메이션
    lineAni__init();
    // 탭박스 함수
    tabBox__init();

    // 슬라이드
    slickSlide_init();

    // portfolioClick__init();

    // 인트로 페이지 함수
    // introAni__init();

    // 발견 함수
    ActiveOnVisible__init();

    // 클릭 이벤트 모음
    click__init();

    pagenation__init();

    scroll_init();

    prevSlider__init();
});

// // 시작 위치 초기화
// setTimeout(function () {
//     $(window).scrollTop(0);
// }, 150)

//웹페이지 닫기, 새로고침, 다른 URL 이동시 문서 최상단으로
// 자바스크립트 버전
// window.onbeforeunload = function() {window.scrollTo(0,0);}

// 제이쿼리
$(window).on('beforeunload', function(){
    $(window).scrollTop(0);
});




// 이메일 보내는 기능
function sendEmailFormSubmit(form) {
    if ( form.receiverName.value.length == 0 ) {
        alert('폼안에 receiverName 의 value 를 입력해주세요.');
        return false;
    }

    if ( form.receiverEmail.value.length == 0 ) {
        alert('폼안에 receiverEmail 의 value 를 입력해주세요.');
        return false;
    }

    form.senderName.value = form.senderName.value.trim();

    if ( form.senderName.value.length == 0 ) {
        alert('당신의 이름을 입력해주세요.');
        form.senderName.focus();
        return false;
    }

    form.senderEmail.value = form.senderEmail.value.trim();

    if ( form.senderEmail.value.length == 0 ) {
        alert('당신의 이메일을 입력해주세요.');
        form.senderEmail.focus();
        return false;
    }

    form.body.value = form.body.value.trim();

    if ( form.body.value.length == 0 ) {
        alert('내용을 입력해주세요.');
        form.body.focus();
        return false;
    }

    var senderName = form.senderName.value;
    var senderEmail = form.senderEmail.value;
    var title = '[이력서 보고 연락 드립니다]';
    var body = nl2br(form.body.value);
    var receiverName = form.receiverName.value;
    var receiverEmail = form.receiverEmail.value;

    var url = 'https://email.oa.gg/doSendEmail2.php?senderName=' + senderName + '&senderEmail=' + senderEmail + '&receiverName=' + receiverName + '&receiverEmail=' + receiverEmail + '&title=' + title + '&body=' + body;

    //console.log("URL : " + url);

    var head= document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;
    head.appendChild(script);
}

function nl2br(str){  
    return str.replace(/\n/g, "<br />");  
}

function Email__callback(data) {
    if ( data.resultCode.substr(0, 2) == 'S-' ) {
        document.sendEmailForm.reset();
    }

    alert(data.msg);
}