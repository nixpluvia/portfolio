// 부모에게 active 클래스 추가하는 함수 시작
// parent addClass start
function sideBarToggle(e) {
    if( $('html').data('data-Click-prevent') == true ) {
        e.stopPropagation();
        e.preventDefault();
        return false;
    }
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
// parent addClass end

// 인트로 스크롤, 클릭 방지 시작
// intro scroll prevent start
function introPrevent(){
    $('html').data('data-Wheel-prevent', true);
    $('html').data('data-Click-prevent', true);

    setTimeout(function(){
        $('html').data('data-Wheel-prevent', false);
        $('html').data('data-Click-prevent', false);
    }, 5000)
}
// 인트로 스크롤, 클릭 방지 끝
// intro scroll prevent end


// 라인 애니메이션 딜레이 시작
//line animation delay start
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
//line animation delay end


// 탭박스 함수 시작
// tab box function start
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
// tab box function end



// 숫자 증가 함수 시작
// number increase function start
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
// number increase function end


// 프로그레스 바 애니메이션 시작
// progressBar animation start
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
// progressBar animation end


// 발견 하는 함수 시작
// search scroll function start

// 발견 요소의 offset 설정
// search element offset setting
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
    // search element addClass
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
                        // function execution
                        if( $actived.hasClass('profile2') ){
                            progressAni__init();
                            numIncrease__init();
                        }
                    }
                }, delay);
            }
        }

        // 페이지 네비게이션 컬러 이벤트 용
        // pagenation color event 
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
    // escape removeClass
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
    // first run
    setTimeout(function(){
        ActiveOnVisible__initOffset();
    }, 1000);
    ActiveOnVisible__checkAndActive();
    
    //윈도우 리사이즈 재설정
    //window resize reset
    $(window).resize(ActiveOnVisible__initOffset);
    $(window).scroll(ActiveOnVisible__checkAndActive);
}

// 발견 하는 함수 끝
// search scroll function start


// 페이지 네비게이션 함수 시작
// pagenation function start
function pagenation(e){
    if( $('html').data('data-Click-prevent') == true ) {
        e.stopPropagation();
        e.preventDefault();
        return false;
    }
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


function pagenation__init(){
    $('.pagenation > ul > li').click(pagenation);

    $('.side-bar .side-bar-menu > ul > li').click(pagenation);
    $('.side-bar .side-bar-menu > ul > li').click(sideBarToggle);
}


// 페이지 네비게이션 함수 끝
// pagenation function end


// 슬릭 슬라이드 시작
// slick slide start
function slickSlide_init() {
    $('.slick-slider1').slick({
        dots:false,
        infinite: false,
        slidesToShow: 1,
        arrows: true,
        appendArrows: $('.design .design-slide-arrows'),
        prevArrow : '<div class="prev"><img src="/images/main/arrow-left.svg"></div>',
        nextArrow : '<div class="next"><img src="/images/main/arrow-right.svg"></div>',
        responsive: [
            {
                breakpoint: 769,
                settings: {
                variableWidth: true
                }
            }
        ]
    });
}
// 슬릭 슬라이드 끝
// slick slide end


// 미리보기 슬릭 슬라이더 시작
// preview slick slider start
function prevSlider__init() {
    $(".preview-slider").slick({
        rtl: true,
        dots: false,
        arrows: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 2,
        variableWidth: true,
        // 반응형
        // responsive
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
    // slide item click event
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
    // slide tab button
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
// 미리보기 슬릭 슬라이더 끝
// preview slick slider end



// 팝업 함수 시작
// popup function start

//팝업 열기
// popup open
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

//팝업 닫기
// popup close
function popupClose() {
    var $popupBox = $('.popup-box');
    var $popupBg = $('.popup-bg');
    var $popupItem = $popupBox.find('.popup-items > .popup-item');

    $('html').data('data-Wheel-prevent', false);

    $popupBox.removeClass('active');
    $popupBg.removeClass('active');
    $popupItem.removeClass('active');
}

//팝업 목록 진행 버튼
//popup list arrow button
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
// 팝업 이미지 스크롤 방지 이벤트
function popupScrollPrevnet(){
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
// 팝업 함수 끝
// popup function end


// 클릭 이벤트 모음
// click event collection
function click__init(){
    // 사이드 바 클릭 이벤트
    // side bar click event
    $('.btn-side-bar').click(sideBarToggle);

    // 탭박스 클릭 이벤트
    // tab box click event
    $('[data-tab-name="box-2"][data-tab-head-item-name="1"]').click();
    $('.portfolio > .content-box > .head > button').click(ActiveOnVisible__initOffset);

    // 팝업 클릭 이벤트
    // popup click event
    $('.btn-popup-item').click(popupOpen);
    $('.popup-bg, .btn-close').click(popupClose);
    $('.popup-button > button').click(popupArrow);

    // 스크롤 아이콘 클릭 이벤트
    // scroll icon click event
    $('.icon-scroll').click(function(){
        $('html').data('data-Wheel-prevent', false);
        $('html').data('data-Click-prevent', false);
        $('.pagenation > ul > li:nth-child(2)').click();
    })
}

// 이벤트 방지 시작
// event prevent start
function prevent__init(){
    // 스크롤 이벤트 버블링 방지
    $('#wrap, .side-bar, .side-shadow, .popup-bg, .popup-box .btn-close, .popup-box .popup-button').on('mousewheel DOMMouseScroll',function(e){
        if ( $('html').data('data-Wheel-prevent') == true ) {
            e.stopPropagation();
            e.preventDefault();
            return ;
        }
    })
    $('#wrap, .side-bar, .side-shadow, .popup-bg, .popup-box .btn-close, .popup-box .popup-button').on('touchmove',function(e){
        if ( $('html').data('data-Wheel-prevent') == true ) {
            e.stopPropagation();
            e.preventDefault();
            return ;
        }
    })
}
// 이벤트 방지 끝
// event prevent end






$(function () {
    // 인트로 방지
    introPrevent();
    // 라인 애니메이션
    lineAni__init();
   
    // 클릭 이벤트 모음
    click__init();

    // 페이지 네비게이션
    pagenation__init();

    // 팝업 스크롤 방지
    popupScrollPrevnet();

    // 발견 함수
    ActiveOnVisible__init();

    // 탭박스 함수
    tabBox__init();

    // 슬라이드
    slickSlide_init();

    // 미리보기 슬라이드
    prevSlider__init();

     // 방지 이벤트
     prevent__init();
    
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