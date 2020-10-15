<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="./index.css">
    <script src="./index.js"></script>
    <title>LeeHoyeon Portfolio</title>
</head>

<body class="relative" data-dot-page-index="0">
    <!-- 사이드 바 -->
    <div class="side-shadow"></div>
    <div class="side-bar">
        <h1 id="logo">
            <div class="sound-only">이호연 포트폴리오</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182.34 17.68">
                <style>
                    .logo {
                        fill: #b3b3b3;
                    }
                </style>
                <path class="logo"
                    d="M69.68,13v2.08c0,.59,0,1,0,1.29q3.76,0,6.77-.1l0,.84H68.78c0-2,.08-4.4.08-7,0-1.24,0-2.39,0-3.45s0-2-.07-2.88h1q-.17,2.31-.17,6.33C69.66,10.8,69.66,11.78,69.68,13Z" />
                <path class="logo"
                    d="M78.88,17.08,79,14.94c.09-2.07.13-3.7.13-4.89s0-2.59-.1-4-.09-2.21-.1-2.3h7.27l0,.84c-1.51-.06-3.61-.08-6.31-.08,0,1.51,0,3.25,0,5.21,2.15,0,3.83,0,5-.13v.93c-1.63-.07-3.31-.11-5-.11v2.27q0,2.2.06,3.69,3.78,0,6.9-.16l0,.9Z" />
                <path class="logo"
                    d="M89.49,17.08l.07-2.14q.12-3.11.12-4.89c0-1.25,0-2.59-.09-4s-.09-2.21-.1-2.3h7.27l0,.84c-1.51-.06-3.61-.08-6.31-.08,0,1.51,0,3.25,0,5.21,2.15,0,3.83,0,5-.13v.93c-1.63-.07-3.31-.11-5-.11v2.27c0,1.47,0,2.7,0,3.69q3.8,0,6.91-.16l0,.9Z" />
                <path class="logo"
                    d="M112.47,17.08c.07-2.73.1-5,.1-6.7H105.4c0,2,0,4.29.12,6.7h-1.08c.12-3,.17-5.39.17-7,0-1.91,0-4-.17-6.33h1.08q-.12,2.44-.12,6h7.17q0-3-.12-6h1.06c-.1,2.17-.16,4.28-.16,6.33,0,2.35.06,4.7.16,7Z" />
                <path class="logo"
                    d="M118.62,15.72a6.87,6.87,0,0,1-1.81-5.13,7.19,7.19,0,0,1,1.85-5.15A5.77,5.77,0,0,1,123,3.49a5.59,5.59,0,0,1,4.18,1.83,6.8,6.8,0,0,1,1.76,4.91,7.45,7.45,0,0,1-1.84,5.32,5.8,5.8,0,0,1-4.35,1.95A5.68,5.68,0,0,1,118.62,15.72Zm1.54-10.66a5.46,5.46,0,0,0-1.83,2.31,8,8,0,0,0-.64,3.22,6.24,6.24,0,0,0,1.6,4.61,5.11,5.11,0,0,0,3.76,1.6A4.55,4.55,0,0,0,126.51,15,6.81,6.81,0,0,0,128,10.42a6.38,6.38,0,0,0-1.56-4.64,5.11,5.11,0,0,0-3.79-1.59A4.26,4.26,0,0,0,120.16,5.06Z" />
                <path class="logo"
                    d="M140.45,17.08h-1.07v-.25c.08-2.07.11-3.39.11-4a7,7,0,0,0-1.23-3.64q-1.23-2-2.44-3.63a10.45,10.45,0,0,1-1.22-1.86h1.13a19.2,19.2,0,0,0,2,3.15A12.82,12.82,0,0,1,140,11.49h.08a4.46,4.46,0,0,1,.61-1.86,23,23,0,0,1,1.44-2.4l1.59-2.33a7.33,7.33,0,0,0,.73-1.18h1a10.27,10.27,0,0,1-1.55,2.38q-1.54,2.09-2.55,3.73a6,6,0,0,0-1,3.05Q140.36,14.85,140.45,17.08Z" />
                <path class="logo"
                    d="M147.9,17.08l.07-2.14q.12-3.11.12-4.89c0-1.25,0-2.59-.09-4s-.1-2.21-.1-2.3h7.27l0,.84c-1.52-.06-3.62-.08-6.31-.08,0,1.51,0,3.25,0,5.21,2.15,0,3.83,0,5-.13v.93c-1.63-.07-3.31-.11-5-.11v2.27c0,1.47,0,2.7,0,3.69q3.78,0,6.9-.16l0,.9Z" />
                <path class="logo"
                    d="M159.22,15.72a6.91,6.91,0,0,1-1.8-5.13,7.19,7.19,0,0,1,1.84-5.15,5.79,5.79,0,0,1,4.33-1.95,5.6,5.6,0,0,1,4.18,1.83,6.8,6.8,0,0,1,1.76,4.91,7.5,7.5,0,0,1-1.84,5.32,5.8,5.8,0,0,1-4.36,1.95A5.69,5.69,0,0,1,159.22,15.72Zm1.55-10.66a5.56,5.56,0,0,0-1.84,2.31,8,8,0,0,0-.63,3.22,6.28,6.28,0,0,0,1.59,4.61,5.14,5.14,0,0,0,3.76,1.6A4.52,4.52,0,0,0,167.11,15a6.82,6.82,0,0,0,1.54-4.62,6.38,6.38,0,0,0-1.56-4.64,5.13,5.13,0,0,0-3.8-1.59A4.23,4.23,0,0,0,160.77,5.06Z" />
                <path class="logo"
                    d="M174.71,5.09q4.14,5.92,5.47,8c.88,1.4,1.34,2.16,1.38,2.29h0c-.07-1.53-.1-3-.1-4.51V8.11c0-1.86,0-3.33-.06-4.39h.9c-.08,1.56-.12,3.81-.12,6.73,0,1.31,0,2.48,0,3.5s0,2.06.1,3.13h-.59s-.47-.71-1.39-2.14-1.73-2.67-2.45-3.72L175.56,7.8l-.77-1.13L174,5.53c-.17-.26-.3-.46-.37-.59h0c.06,1.62.09,3.1.09,4.43,0,.62,0,1.51,0,2.65v2.32c0,1.12,0,2,.05,2.74h-.91q.18-4,.18-7c0-2.08-.06-4.18-.18-6.33h1a4,4,0,0,0,.38.56Z" />
                <path class="logo"
                    d="M15.74,8.38a2,2,0,0,1,1.09.33h0a.6.6,0,0,0,.39.08c.29,0,.45-.42.45-.42V3.88h-5s-.39-.16-.42-.45A.6.6,0,0,1,12.33,3h0A1.95,1.95,0,1,0,9.13,3h0a.54.54,0,0,1,.08.39c0,.29-.42.45-.42.45H3.88v4.5s-.16.39-.45.42A.6.6,0,0,1,3,8.72H3a1.94,1.94,0,1,0,0,3.22H3a.6.6,0,0,1,.39-.08c.29,0,.45.42.45.42v5.42H8.79s.4-.16.42-.45a.54.54,0,0,0-.08-.39h0a1.94,1.94,0,1,1,3.21,0h0a.6.6,0,0,0-.08.39c0,.29.42.45.42.45h5V12.26s-.16-.4-.45-.42a.6.6,0,0,0-.39.08h0a1.94,1.94,0,1,1-1.09-3.55Z" />
                <path class="logo"
                    d="M21.89,3.88h.6v13.8h-.6Zm1.2,0h.6v13.8h-.6Zm1.2,0h.6v13.8h-.6Zm1.2,0h.6v10.8h4.8v.6h-4.8v.6h4.8v.6h-4.8v.6h4.8v.6h-5.4Z" />
                <path class="logo"
                    d="M32.22,3.88h.6v13.8h-.6Zm1.2,0H34v13.8h-.6Zm1.2,0h.6v13.8h-.6Zm7.2,0h.6v13.8h-.6V12.27h-5.4v5.41h-.6V3.88h.6V9.27h5.4Zm0,6.59v-.6h-5.4v.6Zm0,1.2v-.6h-5.4v.6ZM43,3.88h.6v13.8H43Zm1.2,0h.6v13.8h-.6Zm1.2,0H46v13.8h-.6Z" />
                <path class="logo"
                    d="M51.76,12.4l4-8.52h.6L52.06,13v4.65h-.6V13L47.12,3.88h.6Zm.46-1.66-.3.66-3.6-7.52h.6Zm.6-1.32-.31.66-3-6.2h.6Zm.6-1.31-.3.66-2.4-4.89h.6ZM52.66,13,57,3.88h.6L53.26,13v4.65h-.6Zm1.2,0L58.2,3.88h.6L54.46,13v4.65h-.6Zm1.2,0L59.4,3.88H60L55.66,13v4.65h-.6Z" />
            </svg>
        </h1>
        <button class="btn-side-bar">
            <div></div>
            <div></div>
            <div></div>
        </button>
        <nav class="side-bar-menu">
            <ul class="font-Fredericka">
                <li>
                    <span>Intro</span>
                </li>
                <li>
                    <span>About Me</span>
                </li>
                <li>
                    <span>Portfolio</span>
                </li>
                <li>
                    <span>Design</span>
                </li>
                <li>
                    <span>Contact</span>
                </li>
            </ul>
        </nav>
        <div class="site-info">
            이 사이트는 포트폴리오를 위해 제작되었습니다.
        </div>
    </div>

    <!-- 페이지 버튼 -->
    <div class="pagenation">
        <ul>
            <li class="active"><button></button></li>
            <li><button></button></li>
            <li><button></button></li>
            <li><button></button></li>
            <li><button></button></li>
        </ul>
    </div>

    <!-- 디자인 팝업 -->
    <div class="popup-bg"></div>
    <div class="design-popup popup-box">
        <button class="btn-close"></button>
        <div class="popup-button">
            <button class="left"></button>
            <button class="right"></button>
        </div>
        <ul class="popup-items">
            <li class="popup-item item1">
                <div class="popup-img img-ver popup-prevent">
                    <img src="./resource/design-kyobo.png" alt="교보문고 리디자인">
                </div>
            </li>
            <li class="popup-item  item2">
                <div class="popup-img img-ver popup-prevent">
                    <img src="./resource/site-coca-img.png" alt="코카콜라 리디자인">
                </div>
            </li>
        </ul>
    </div>

    <!-- 본문 섹션 -->
    <div id="wrap">
        <!-- 인트로 페이지 -->
        <header class="intro puzzle-bg-v1 section-page actived-on-visible" data-page-index="0">
            <div class="con flex">
                <h2 class="title flex-column line-height-0">
                    <span class="sound-only">WEB PUBLISHER/DESIGNER</span>
                    <div class="ti1 font-Fredericka">
                        <span>PUBLISHER</span>
                        <i class="title-line t-line1"></i>
                        <i class="title-line t-line3"></i>
                    </div>
                    <div class="ti2 font-Fredericka">
                        <span>Designer</span>
                        <i class="title-line t-line1"></i>
                        <i class="title-line t-line2"></i>
                        <i class="title-line t-line3"></i>
                    </div>
                </h2>
                <div class="intro-img">
                    <div class="white-bg-img line-height-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 295.5 295.5">
                            <path class="cls-1"
                                d="M264.75,147.75A29.32,29.32,0,0,1,282,153a9.38,9.38,0,0,0,7.22,1.77c4.59-.93,6.28-7.06,6.28-7.06V61.5H209.25s-6.13-1.69-7.06-6.28A9.38,9.38,0,0,1,204,48a29.32,29.32,0,0,0,5.29-17.25,30.75,30.75,0,0,0-61.5,0A29.32,29.32,0,0,0,153,48a9.38,9.38,0,0,1,1.77,7.22c-.93,4.59-7.06,6.28-7.06,6.28H61.5v86.25s-1.69,6.13-6.28,7.06A9.38,9.38,0,0,1,48,153a29.32,29.32,0,0,0-17.25-5.29,30.75,30.75,0,0,0,0,61.5A29.32,29.32,0,0,0,48,204a9.38,9.38,0,0,1,7.22-1.77c4.59.93,6.28,7.06,6.28,7.06V295.5h86.25s6.13-1.69,7.06-6.28A9.38,9.38,0,0,0,153,282a29.32,29.32,0,0,1-5.29-17.25,30.75,30.75,0,0,1,61.5,0A29.32,29.32,0,0,1,204,282a9.38,9.38,0,0,0-1.77,7.22c.93,4.59,7.06,6.28,7.06,6.28H295.5V209.25s-1.69-6.13-6.28-7.06A9.38,9.38,0,0,0,282,204a29.32,29.32,0,0,1-17.25,5.29,30.75,30.75,0,0,1,0-61.5Z" />
                        </svg>
                    </div>
                    <div class="main-puzzle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 295.5 295.5">
                            <title>퍼즐 조각</title>
                            <g id="레이어_2" data-name="레이어 2">
                                <g id="메인ver1">
                                    <path class="puzzle-main"
                                        d="M264.75,147.75A29.32,29.32,0,0,1,282,153a9.38,9.38,0,0,0,7.22,1.77c4.59-.93,6.28-7.06,6.28-7.06V61.5H209.25s-6.13-1.69-7.06-6.28A9.38,9.38,0,0,1,204,48a29.32,29.32,0,0,0,5.29-17.25,30.75,30.75,0,0,0-61.5,0A29.32,29.32,0,0,0,153,48a9.38,9.38,0,0,1,1.77,7.22c-.93,4.59-7.06,6.28-7.06,6.28H61.5v86.25s-1.69,6.13-6.28,7.06A9.38,9.38,0,0,1,48,153a29.32,29.32,0,0,0-17.25-5.29,30.75,30.75,0,0,0,0,61.5A29.32,29.32,0,0,0,48,204a9.38,9.38,0,0,1,7.22-1.77c4.59.93,6.28,7.06,6.28,7.06V295.5h86.25s6.13-1.69,7.06-6.28A9.38,9.38,0,0,0,153,282a29.32,29.32,0,0,1-5.29-17.25,30.75,30.75,0,0,1,61.5,0A29.32,29.32,0,0,1,204,282a9.38,9.38,0,0,0-1.77,7.22c.93,4.59,7.06,6.28,7.06,6.28H295.5V209.25s-1.69-6.13-6.28-7.06A9.38,9.38,0,0,0,282,204a29.32,29.32,0,0,1-17.25,5.29,30.75,30.75,0,0,1,0-61.5Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="puzzle-line-img img-box">
                        <img src="./resource/puzzle-line.png" alt="">
                    </div>
                    <div class="puzzle-line">
                        <svg version="1.1" id="레이어_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 306.1 305.9"
                            style="enable-background:new 0 0 306.1 305.9;" xml:space="preserve">
                            <path class="puzzle-line" d="M269.9,154.3c6.4,0,12.4,1.8,17.2,5.3c2.3,1.5,4.6,2.3,7.2,1.8c4.6-0.9,6.3-7.1,6.3-7.1V68h-86.3
                            c0,0-6.1-1.7-7.1-6.3c-0.5-2.6,0.3-4.9,1.8-7.2c3.5-4.9,5.3-10.9,5.3-17.2c0-17-13.8-30.8-30.8-30.8c-17,0-30.8,13.8-30.8,30.8
                            c0,6.4,1.8,12.4,5.3,17.2c1.5,2.3,2.3,4.6,1.8,7.2c-0.9,4.6-7.1,6.3-7.1,6.3H66.7v86.3c0,0-1.7,6.1-6.3,7.1
                            c-2.6,0.5-4.9-0.3-7.2-1.8c-4.9-3.5-10.9-5.3-17.2-5.3c-17,0-30.8,13.8-30.8,30.8s13.8,30.8,30.8,30.8c6.4,0,12.4-1.8,17.2-5.3
                            c2.3-1.5,4.6-2.3,7.2-1.8c4.6,0.9,6.3,7.1,6.3,7.1V302h86.3c0,0,6.1-1.7,7.1-6.3c0.5-2.6-0.3-4.9-1.8-7.2
                            c-3.5-4.9-5.3-10.9-5.3-17.2c0-17,13.8-30.8,30.8-30.8c17,0,30.8,13.8,30.8,30.8c0,6.4-1.8,12.4-5.3,17.2c-1.5,2.3-2.3,4.6-1.8,7.2
                            c0.9,4.6,7.1,6.3,7.1,6.3h86.3v-86.3c0,0-1.7-6.1-6.3-7.1c-2.6-0.5-4.9,0.3-7.2,1.8c-4.9,3.5-10.9,5.3-17.2,5.3
                            c-17,0-30.8-13.8-30.8-30.8S252.9,154.3,269.9,154.3z" />
                        </svg>
                    </div>
                </div>
                <div class="icon-scroll">
                    <svg version="1.1" id="layer" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 54"
                        style="enable-background:new 0 0 30 54;" xml:space="preserve">
                        <polygon class="icon-scroll-path" points="27,36 15,48 3,36 0,39 15,54 30,39 " />
                        <polygon class="icon-scroll-path" points="27,18 15,30 3,18 0,21 15,36 30,21 " />
                        <polygon class="icon-scroll-path" points="27,0 15,12 3,0 0,3 15,18 30,3 " />
                    </svg>
                </div>
            </div>

        </header>

        <!-- 소개 페이지 -->
        <section class="about section-page actived-on-visible" data-page-index="1">
            <div class="bg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1419 969">
                    <style>
                        .bg-about-puzzle {
                            fill: #e8e8e8;
                        }
                    </style>
                    <path class="bg-about-puzzle"
                        d="M1281,665.73c-28.69,0-55.45,8-77.4,23.74-10.22,6.72-20.77,10.33-32.43,8-20.59-4.18-28.17-31.7-28.17-31.7V306.55s-7.58-27.51-28.17-31.7c-11.66-2.37-22.21,1.24-32.43,8-22,15.76-48.71,23.74-77.4,23.74a138,138,0,0,1,0-276c28.69,0,55.45,8,77.4,23.74,10.22,6.73,20.77,10.34,32.43,8,20.59-4.19,28.17-31.71,28.17-31.71V0H0V969H1143V941.73s7.58-27.52,28.17-31.7c11.66-2.37,22.21,1.24,32.43,8,22,15.76,48.71,23.74,77.4,23.74a138,138,0,0,0,0-276Z" />
                </svg>
            </div>
            <div class="about-wrap con">
                <h2 class="title font-Fredericka fs-title2">
                    <div class="inline-block relative">
                        <span class="txt-front inline-block">AboutMe</span>
                        <i class="page-title-line t-line1"></i>
                        <i class="page-title-line t-line2"></i>
                        <i class="page-title-line t-line3"></i>
                    </div>
                </h2>
                <div class="content-box flex-ai-st">
                    <div class="photo flex-shrink-0">
                        <img src="./resource/dummy-photo.png" alt="이호연 프로필사진">
                    </div>
                    <div class="content flex-grow-1">
                        <div class="profile1 profile flex">
                            <div class="profile-box1">
                                <div class="tag-title-bar">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.75 33.31">
                                        <path class="tag-icon"
                                            d="M135.34,19.56V9a9,9,0,0,0-9-9H9A9,9,0,0,0,0,9V33.31H158.75C136.92,33.31,135.34,19.56,135.34,19.56Z" />
                                    </svg>
                                    <div class="tag-title font-noto">PROFILE</div>
                                </div>
                                <ul class="profile-list">
                                    <li>
                                        <span class="list-head font-mont">Name</span>
                                        <span class="list-body font-noto">이호연</span>
                                    </li>
                                    <li>
                                        <span class="list-head font-mont">Birth</span>
                                        <span class="list-body font-noto">1993.08.14</span>
                                    </li>
                                    <li>
                                        <span class="list-head font-mont">Num</span>
                                        <span class="list-body font-noto">010-9553-3855</span>
                                    </li>
                                    <li>
                                        <span class="list-head font-mont">Email</span>
                                        <span class="list-body font-noto">whbear12@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="profile-box2">
                                <div class="tag-title-bar">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.75 33.31">
                                        <path class="tag-icon"
                                            d="M135.34,19.56V9a9,9,0,0,0-9-9H9A9,9,0,0,0,0,9V33.31H158.75C136.92,33.31,135.34,19.56,135.34,19.56Z" />
                                    </svg>
                                    <div class="tag-title font-noto">EDUCATION</div>
                                </div>
                                <ul class="edu-list">
                                    <li>
                                        <span class="list-head font-mont">2020.10</span>
                                        <span class="list-body font-noto">SBS아카데미컴퓨터아트학원 교육과정 수료</span>
                                    </li>
                                    <li>
                                        <span class="list-head font-mont">2018.08</span>
                                        <span class="list-body font-noto">우송대학교 미디어디자인 학과 졸업</span>
                                    </li>
                                    <li>
                                        <span class="list-head font-mont">2012.03</span>
                                        <span class="list-body font-noto">명석고등학교 졸업</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="profile2 profile flex actived-on-visible" data-active-on-visible-diff-y="600">
                            <div class="profile-box1">
                                <div class="tag-title-bar">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.75 33.31">
                                        <path class="tag-icon"
                                            d="M135.34,19.56V9a9,9,0,0,0-9-9H9A9,9,0,0,0,0,9V33.31H158.75C136.92,33.31,135.34,19.56,135.34,19.56Z" />
                                    </svg>
                                    <div class="tag-title font-noto">SKILL</div>
                                </div>
                                <div class="skills-box">
                                    <div class="skill">
                                        <div class="skill-name flex-jc-between font-noto fs-txt1">
                                            <span>HTML</span>
                                            <span class="info-num font-noto" data-max-num="80"></span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="bar" data-width="80%"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-name flex-jc-between font-noto fs-txt1-1">
                                            <span>CSS</span>
                                            <span class="info-num font-noto" data-max-num="82"></span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="bar" data-width="82%"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-name flex-jc-between font-noto fs-txt1-1">
                                            <span>JavaScript / JQuery</span>
                                            <span class="info-num font-noto" data-max-num="65"></span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="bar" data-width="65%"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-name flex-jc-between font-noto fs-txt1-1">
                                            <span>PHP</span>
                                            <span class="info-num font-noto" data-max-num="40"></span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="bar" data-width="40%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-box2">
                                <div class="tag-title-bar">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.75 33.31">
                                        <path class="tag-icon"
                                            d="M135.34,19.56V9a9,9,0,0,0-9-9H9A9,9,0,0,0,0,9V33.31H158.75C136.92,33.31,135.34,19.56,135.34,19.56Z" />
                                    </svg>
                                    <div class="tag-title font-noto">TOOLS</div>
                                </div>
                                <ul class="tools flex flex-wrap">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <style>
                                                .a {
                                                    fill: #fff;
                                                }
                                            </style>
                                            <rect class="a" x="0" y="0" width="100%" height="100%" />
                                            <path d="M0,0v512h512V0H0z M482,482H30V30h452V482z"/>
                                            <path d="M213.102,181.6h-72.24V352h33.12v-57.12h40.32c29.531,0,53.04-25.713,53.04-56.64
                                                C267.342,212,246.166,181.6,213.102,181.6z M212.382,265.84h-38.4v-55.2h36.96c14.057,0,22.8,13.2,22.8,27.6
                                                C233.742,255,224,265.84,212.382,265.84z"/>
                                            <path d="M336.939,276.64c-4.642-1.118-24.72-4.39-24.72-15.84c0-9.175,7.531-14.16,19.2-14.16c15.831,0,30.079,9.12,36.48,13.92
                                            l12.96-19.44c-6.881-6.079-21.609-17.28-49.2-17.28c-26.284,0-49.44,14.91-49.44,41.52c0,27.64,36.72,32.801,44.88,35.04
                                            c9.757,2.723,27.6,6.225,27.6,17.04c0,8.81-8.449,13.92-20.64,13.92c-18.809,0-36.48-11.119-44.16-16.56l-12,20.16
                                            c7.2,6.24,27.851,19.44,56.88,19.44c15.679,0,50.88-4.9,50.88-39.84C385.659,285,345.579,278.882,336.939,276.64z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <style>
                                                .a {
                                                    fill: #fff;
                                                }
                                            </style>
                                            <rect class="a" x="0" y="0" width="100%" height="100%" />
                                            <path
                                                d="M241.8,181.6h-29.3l-65,170.4h34.1l15.6-42.5h59.5l15.8,42.5h34.1L241.8,181.6z M202.7,286.2l24.5-67l23.5,67H202.7z" />
                                            <rect x="322.2" y="226.2" width="32.2" height="125.8" />
                                            <rect x="322.2" y="176.8" width="32.2" height="31.9" />
                                            <path d="M0,0v512h512V0H0z M482,482H30V30h452V482z" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <style>
                                                .a {
                                                    fill: #fff;
                                                }
                                            </style>
                                            <rect class="a" x="0" y="0" width="100%" height="100%" />
                                            <path d="M0,0v512h512V0H0z M482,482H30V30h452V482z" />
                                            <path
                                                d="M202.2,181.6h-29.3l-65,170.4h34.1l15.6-42.5h59.5l15.8,42.5H267L202.2,181.6z M163.1,286.2l24.5-67l23.5,67H163.1z" />
                                            <path
                                                d="M403.3,288.6c0-43.4-33.6-64.6-65.5-64.6c-44.8,0-66.5,34.5-66.5,65.8c0,34.8,26.1,64.6,66.2,64.6
                                                c38.2,0,53.9-23.3,58.6-32.9l-27.6-7.7c-2.1,5.1-11.9,17-29.8,17c-27.6,0-32.9-26.5-33.4-31.4h97.2
                                                C402.9,298.2,403.3,290.7,403.3,288.6z M304.9,278.6c1.5-18.4,15.5-31.2,32.4-31.2c16.4,0,30.9,11.1,32.9,31.2H304.9z" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <style>
                                                .a {
                                                    fill: #fff;
                                                }
                                            </style>
                                            <rect class="a" x="0" y="0" width="100%" height="100%" />
                                            <path d="M0,0v512h512V0H0z M482,482H30V30h452V482z"/>
                                            <path d="M229.18,181.6h-72.24V352h33.12v-57.12h40.32c29.531,0,53.04-25.713,53.04-56.64C283.42,212,262.244,181.6,229.18,181.6z
                                                    M228.461,265.84h-38.4v-55.2h36.96c14.057,0,22.8,13.2,22.8,27.6C249.821,255,240.079,265.84,228.461,265.84z"/>
                                            <path d="M378.217,254.08V224.8c-29.04-3.05-43.121,24-45.36,28.32v-26.88h-29.52V352h32.16v-76.08
                                                C338.857,268.72,349.927,254.08,378.217,254.08L378.217,254.08z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                            <style>
                                                .a {
                                                    fill: #fff;
                                                }
                                            </style>
                                            <rect class="a" x="0" y="0" width="100%" height="100%" />
                                            <path d="M0,0V72H72V0ZM67.78,67.78H4.22V4.22H67.78Z" />
                                            <path
                                                d="M29.15,38.56a5.44,5.44,0,0,1-1.83,3.91A6.47,6.47,0,0,1,23,43.89a5.75,5.75,0,0,1-4.64-2,8.13,8.13,0,0,1-1.69-5.46V35.5a9.24,9.24,0,0,1,.78-3.9A5.85,5.85,0,0,1,19.65,29a6.24,6.24,0,0,1,3.37-.9,6.3,6.3,0,0,1,4.28,1.42,5.88,5.88,0,0,1,1.88,4H26a3.16,3.16,0,0,0-.83-2.15A3,3,0,0,0,23,30.71a2.67,2.67,0,0,0-2.37,1.13,6.37,6.37,0,0,0-.81,3.52v1.16a6.74,6.74,0,0,0,.76,3.64A2.64,2.64,0,0,0,23,41.31a3.15,3.15,0,0,0,2.19-.67A3,3,0,0,0,26,38.56Z" />
                                            <path d="M39.92,37.9h1.74v2.46H39.92v3.32H36.87V40.36H30.58l-.14-1.92,6.4-10.12h3.08Zm-6.44,0h3.39V32.48l-.2.35Z" />
                                            <path
                                                d="M43.63,43.68V28.32h4.72a7.23,7.23,0,0,1,3.62.91,6.39,6.39,0,0,1,2.5,2.6,8,8,0,0,1,.89,3.82v.71a8,8,0,0,1-.88,3.81A6.23,6.23,0,0,1,52,42.75a7.3,7.3,0,0,1-3.62.93Zm3.16-12.8V41.14h1.53a3.45,3.45,0,0,0,2.84-1.22,5.53,5.53,0,0,0,1-3.47v-.81a5.62,5.62,0,0,0-1-3.55,3.46,3.46,0,0,0-2.84-1.21Z" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                            <style>
                                                .a {
                                                    fill: #fff;
                                                }
                                            </style>
                                            <rect class="a" x="0" y="0" width="100%" height="100%" />
                                            <path d="M0,0V72H72V0ZM67.78,67.78H4.22V4.22H67.78Z" />
                                            <path
                                                d="M17.84,28.57l3.82,10.79,3.8-10.79h4V43.45H26.41V39.38l.3-7-4,11.09H20.59l-4-11.08.31,7v4.07H13.83V28.57Z" />
                                            <path d="M40.74,40.38H35.37l-1,3.07H31.09l5.53-14.88h2.84L45,43.45H41.77ZM36.19,37.9h3.72L38,32.33Z" />
                                            <path d="M51.74,33.7l2.79-5.13h3.53L53.73,36l4.44,7.5H54.6l-2.86-5.21-2.86,5.21H45.32L49.76,36l-4.33-7.38H49Z" />
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 웹사이트 포트폴리오 -->
        <section class="portfolio section-page actived-on-visible puzzle-bg-v2" data-page-index="2">
            <div class="wrap flex con">
                <div class="content-box relative flex-grow-1">
                    <!-- 포트폴리오 타이틀 -->
                    <h2 class="title font-Fredericka fs-title2">
                        <div class="inline-block relative">
                            <span class="txt-front inline-block">Portfolio</span>
                            <i class="page-title-line t-line1"></i>
                            <i class="page-title-line t-line2"></i>
                            <i class="page-title-line t-line3"></i>
                        </div>
                    </h2>
                    <!-- 포트폴리오 아이템 텍스트 박스 -->
                    <div class="pf-content">
                        <ul class="pf-items">
                            <li class="pf-item active">
                                <div class="pf-item-title-bar flex">
                                    <h3 class="pf-item-title">COCACOLA</h3>
                                    <div class="device-icon flex-ai-c">
                                        <div class="icon-computer">
                                            <img src="./resource/icon-desktop.svg" alt="">
                                        </div>
                                        <!-- <div class="icon-mobile">
                                            <img src="./resource/icon-mobile.svg" alt="">
                                        </div> -->
                                    </div>
                                </div>
                                <div class="pf-item-bar flex">
                                    <div class="tag">
                                        <img src="./resource/icon-redesign.svg" alt="">
                                    </div>
                                    <ul class="color-list flex-ai-c">
                                        <li class="item-color" style="background-color: #000000;"></li>
                                        <li class="item-color" style="background-color: #F40009;"></li>
                                        <li class="item-color" style="background-color: #ffffff;"></li>
                                    </ul>
                                </div>
                                <div class="pf-item-body">
                                    <p>
                                        기존의 cocacola company 사이트의 불편한 사이트의 구성과 요소들을 제거하고
                                        코카콜라의 아이덴티티를 살린 디자인을 컨셉으로 잡고 진행 했습니다.
                                        코카콜라의 색상을 포인트로 화면을 구성하고 페이지에 맞는 모양의 디자인을 사용해서
                                        단조로움을 피하는 디자인을 진행 했습니다.
                                    </p>
                                </div>
                            </li>
                            <li class="pf-item">
                                <div class="pf-item-title-bar flex">
                                    <h3 class="pf-item-title">ARTFIVE</h3>
                                    <div class="device-icon flex-ai-c">
                                        <div class="icon-computer">
                                            <img src="./resource/icon-desktop.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item-bar flex">
                                    <div class="tag">
                                        <img src="./resource/icon-copy.svg" alt="">
                                    </div>
                                    <ul class="color-list flex-ai-c">
                                        <li class="item-color" style="background-color: #000000;"></li>
                                        <li class="item-color" style="background-color: #ADADAD;"></li>
                                        <li class="item-color" style="background-color: #ffffff;"></li>
                                    </ul>
                                </div>
                                <div class="pf-item-body">
                                    <p>
                                        원페이지 스크롤 방식을 직접 구현해보기 위해서 홈페이지를 선정하였습니다.
                                        숫자 증가 기능과 2개의 슬라이드 방식을 시험해 볼 수 있었습니다.
                                    </p>
                                </div>
                            </li>
                            <li class="pf-item">
                                <div class="pf-item-title-bar flex">
                                    <h3 class="pf-item-title">DESIGNPIXEL</h3>
                                    <div class="device-icon flex-ai-c">
                                        <div class="icon-computer">
                                            <img src="./resource/icon-desktop.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item-bar flex">
                                    <div class="tag">
                                        <img src="./resource/icon-copy.svg" alt="">
                                    </div>
                                    <ul class="color-list flex-ai-c">
                                        <li class="item-color" style="background-color: #000000;"></li>
                                        <li class="item-color" style="background-color: #F9253B;"></li>
                                        <li class="item-color" style="background-color: #ffffff;"></li>
                                    </ul>
                                </div>
                                <div class="pf-item-body">
                                    <p>
                                        DESIGN PIXEL 사이트의 슬라이드 방식과 애니메이션 등을 구현해보기 위해 선정하여 사이트를 구현했습니다.
                                        세로 방식의 정렬과 다양한 애니메이션들을 구사해 볼 수 있었습니다.
                                    </p>
                                </div>
                            </li>
                            <li class="pf-item">
                                <div class="pf-item-title-bar flex">
                                    <h3 class="pf-item-title">HEIMISH</h3>
                                    <div class="device-icon flex-ai-c">
                                        <div class="icon-computer">
                                            <img src="./resource/icon-desktop.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item-bar flex">
                                    <div class="tag">
                                        <img src="./resource/icon-copy.svg" alt="">
                                    </div>
                                    <ul class="color-list flex-ai-c">
                                        <li class="item-color" style="background-color: #000000;"></li>
                                        <li class="item-color" style="background-color: #5E5F61;"></li>
                                        <li class="item-color" style="background-color: #E4C1BE;"></li>
                                        <li class="item-color" style="background-color: #FFFFFF;"></li>
                                    </ul>
                                </div>
                                <div class="pf-item-body">
                                    <p>
                                        원페이지 스크롤 방식을 직접 구현하고 탭박스 형식의 슬라이드를 구현하기 위해서 선정하였습니다.
                                        첫 원페이지 방식의 구현이라 완벽하지 않지만 다양한 기능을 배울 수 있었습니다.
                                    </p>
                                </div>
                            </li>
                            <li class="pf-item">
                                <div class="pf-item-title-bar flex">
                                    <h3 class="pf-item-title">CLEADERM</h3>
                                    <div class="device-icon flex-ai-c">
                                        <div class="icon-computer">
                                            <img src="./resource/icon-desktop.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item-bar flex">
                                    <div class="tag">
                                        <img src="./resource/icon-copy.svg" alt="">
                                    </div>
                                    <ul class="color-list flex-ai-c">
                                        <li class="item-color" style="background-color: #000000;"></li>
                                        <li class="item-color" style="background-color: #FE9554;"></li>
                                        <li class="item-color" style="background-color: #4AC3CB;"></li>
                                        <li class="item-color" style="background-color: #ffffff;"></li>
                                    </ul>
                                </div>
                                <div class="pf-item-body">
                                    <p>
                                        첫 카피 사이트로 opacity방식의 슬라이드와 구현했습니다.
                                        요소 발견 애니메이션도 구현해 볼 수 있었습니다.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- 포트폴리오 슬라이드 박스 -->
                    <div class="pf-slide-box">
                        <div class="pf-tab-bar flex-jc-end flex-ai-c font-noto">
                            <div class="btn-bg-bar">
                                <div class="left">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.41 39.51">
                                        <path class="icon-left" d="M32.41,0a9,9,0,0,0-9,9V25.75S21.83,39.51,0,39.51H32.41Z" />
                                    </svg>
                                </div>
                                <div class="right">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.41 39.51">
                                        <path class="icon-right" d="M9,25.75V9A9,9,0,0,0,0,0V39.51H32.41C10.58,39.51,9,25.75,9,25.75Z" />
                                    </svg>
                                </div>
                            </div>
                            <button class="pf-tab-btn btn-all">ALL</button>
                            <button class="pf-tab-btn btn-redesign">REDESIGN</button>
                            <button class="pf-tab-btn btn-copy">COPY</button>
                        </div>
                        <div class="pf-slide" dir="rtl">
                            <div class="item item1 active" data-item-tab="1" data-slide-index="01"></div>
                            <div class="item item2" data-item-tab="2" data-slide-index="02"></div>
                            <div class="item item3" data-item-tab="2" data-slide-index="03"></div>
                            <div class="item item4" data-item-tab="2" data-slide-index="04"></div>
                            <div class="item item5" data-item-tab="2" data-slide-index="05"></div>
                        </div>
                    </div>
                </div>
                <!-- 포트폴리오 아이템 이미지 박스 -->
                <div class="portfolio-img-box">
                    <ul class="pf-img-list">
                        <li class="pf-img active" style="background-image:url(./resource/site-coca-img.png)">
                            <a href="/pf/cocacola/index.php" target="_blank"></a>
                            <div class="btn-box flex">
                                <button class="btn-origin">
                                    <a class="font-noto" href="https://www.coca-colacompany.com/" target="_blank">ORIGINAL</a>
                                </button>
                                <button class="btn-demo">
                                    <a class="font-noto" href="/pf/cocacola/index.php" target="_blank">DEMO</a>
                                </button>
                            </div>
                        </li>
                        <li class="pf-img" style="background-image:url(./resource/site-artfive-img.png)">
                            <a href="/pf/artfive/index.php" target="_blank"></a>
                            <div class="btn-box flex">
                                <button class="btn-origin">
                                    <a class="font-noto" href="http://www.artfive.co.kr/" target="_blank">ORIGINAL</a>
                                </button>
                                <button class="btn-demo">
                                    <a class="font-noto" href="/pf/artfive/index.php" target="_blank">DEMO</a>
                                </button>
                            </div>
                        </li>
                        <li class="pf-img" style="background-image:url(./resource/site-designpixel-img.png)">
                            <a href="/pf/designpixel/index.php" target="_blank"></a>
                            <div class="btn-box flex">
                                <button class="btn-origin">
                                    <a class="font-noto" href="https://designpixel.co.kr/" target="_blank">ORIGINAL</a>
                                </button>
                                <button class="btn-demo">
                                    <a class="font-noto" href="/pf/designpixel/index.php" target="_blank">DEMO</a>
                                </button>
                            </div>
                        </li>
                        <li class="pf-img" style="background-image:url(./resource/site-heimish-img.png)">
                            <a href="/pf/heimish/index.php" target="_blank"></a>
                            <div class="btn-box flex">
                                <button class="btn-origin">
                                    <a class="font-noto" href="http://www.eheimish.com/" target="_blank">ORIGINAL</a>
                                </button>
                                <button class="btn-demo">
                                    <a class="font-noto" href="/pf/heimish/index.php" target="_blank">DEMO</a>
                                </button>
                            </div>
                        </li>
                        <li class="pf-img" style="background-image:url(./resource/site-cleaderm-img.png)">
                            <a href="/pf/cleaderm/index.php" target="_blank"></a>
                            <div class="btn-box flex">
                                <button class="btn-origin">
                                    <a class="font-noto" href="https://cleaderm.co.kr/" target="_blank">ORIGINAL</a>
                                </button>
                                <button class="btn-demo">
                                    <a class="font-noto" href="/pf/cleaderm/index.php" target="_blank">DEMO</a>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slide-index">
            </div>
        </section>

        <!-- 디자인 포트폴리오 -->
        <section class="design section-page actived-on-visible puzzle-bg-v3" data-page-index="3">
            <div class="wrap flex">
                <div class="content-info">
                    <h2 class="title font-Fredericka fs-title2">
                        <div class="inline-block relative">
                            <span class="txt-front inline-block">Design</span>
                            <i class="page-title-line t-line1"></i>
                            <i class="page-title-line t-line2"></i>
                            <i class="page-title-line t-line3"></i>
                        </div>
                    </h2>
                    <div class="design-slide-arrows flex">
                    </div>
                </div>
                <!-- 디자인 슬라이드 -->
                <div class="slider slick-slider1">
                    <div class="slick-item">
                        <div class="flex">
                            <div class="img flex-shrink-0 btn-popup-item" data-popup-index="0"></div>
                            <div class="item-content">
                                <ul class="txt">
                                    <li class="title font-noto fs-subtitle2">교보문고 리디자인</li>
                                    <li class="tag flex">
                                        <div class="tag-icon">
                                            <img src="https://nixpluvia.github.io/img1/pf/portfolio/icon-redesign.svg" alt="">
                                        </div>
                                        <ul class="color-list flex-ai-c">
                                            <li class="item-color" style="background-color: #231815;"></li>
                                            <li class="item-color" style="background-color: #32B432;"></li>
                                            <li class="item-color" style="background-color: #F7F2ED;"></li>
                                            <li class="item-color" style="background-color: #FFFFFF;"></li>
                                        </ul>
                                    </li>
                                    <li class="txt-body font-noto">
                                        <p>
                                            기존의 교보문고 e-book 디자인의 문제점으로 너무 많은 내용을 담고 있고 내용의 중복으로
                                            사이트의 이용의 피로를 느끼게 되어있었습니다. ebook 사이트의 주요 이용자가 20~30대 학생과 
                                            직장인이고 생활에 지친 직장인과 학생들을 타겟으로 최대한의 불필요한 정보를 배제하고 간편하게
                                            즐길 수 있도록 컨셉을 잡았습니다. 이런 컨셉과 디자인에 부합하는 브로앤팁스 사이트의 디자인을 
                                            참고해서 리디자인을 진행 했습니다.
                                        </p>
                                    </li>
                                    <li class="source font-noto">
                                        <span class="fs-txt2">디자인 출처 : </span>
                                        <span class="fs-txt2"><a href="https://brontips.com/">브로앤팁스</a></span>
                                    </li>
                                </ul>
                                <div class="bg-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 119.74 161.35">
                                        <path class="bg-design-puzzle"
                                            d="M101.93,0c-.18.05-4.52,1.28-5.21,4.7A6.94,6.94,0,0,0,98,10.07a19.65,19.65,0,0,1,3.54,11.57,20.64,20.64,0,1,1-41.27,0,19.64,19.64,0,0,1,3.55-11.58,6.86,6.86,0,0,0,1.29-5.34c-.69-3.42-5-4.65-5.21-4.7L0,0V59.79l0,.13c.05.18,1.28,4.52,4.69,5.21a6.87,6.87,0,0,0,5.36-1.3,19.65,19.65,0,0,1,11.57-3.54,20.64,20.64,0,0,1,0,41.27A19.64,19.64,0,0,1,10.06,98a6.88,6.88,0,0,0-5.35-1.29c-3.41.69-4.64,5-4.69,5.21l0,59.42H119.74V0H102.06Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-item">
                        <div class="flex">
                            <div class="img flex-shrink-0 btn-popup-item" data-popup-index="1"></div>
                            <div class="item-content">
                                <ul class="txt">
                                    <li class="title font-noto fs-subtitle2">코카콜라 리디자인</li>
                                    <li class="tag flex">
                                        <div class="tag-icon">
                                            <img src="https://nixpluvia.github.io/img1/pf/portfolio/icon-redesign.svg" alt="">
                                        </div>
                                        <ul class="color-list flex-ai-c">
                                            <li class="item-color" style="background-color: #000000;"></li>
                                            <li class="item-color" style="background-color: #F40009;"></li>
                                            <li class="item-color" style="background-color: #ffffff;"></li>
                                        </ul>
                                    </li>
                                    <li class="txt-body font-noto">
                                        <p>
                                            기존의 cocacola company 사이트의 불편한 사이트의 구성과 요소들을 제거하고
                                            코카콜라의 아이덴티티를 살린 디자인을 컨셉으로 잡고 진행 했습니다.
                                            코카콜라의 색상을 포인트로 화면을 구성하고 페이지에 맞는 모양의 디자인을 사용해서
                                            단조로움을 피하는 디자인을 진행 했습니다.
                                        </p>
                                    </li>
                                    <li class="source font-noto">
                                        <span class="fs-txt2">디자인 출처 : </span>
                                        <span class="fs-txt2">창작</span>
                                    </li>
                                </ul>
                                <div class="bg-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 119.74 161.35">
                                        <path class="bg-design-puzzle"
                                            d="M101.93,0c-.18.05-4.52,1.28-5.21,4.7A6.94,6.94,0,0,0,98,10.07a19.65,19.65,0,0,1,3.54,11.57,20.64,20.64,0,1,1-41.27,0,19.64,19.64,0,0,1,3.55-11.58,6.86,6.86,0,0,0,1.29-5.34c-.69-3.42-5-4.65-5.21-4.7L0,0V59.79l0,.13c.05.18,1.28,4.52,4.69,5.21a6.87,6.87,0,0,0,5.36-1.3,19.65,19.65,0,0,1,11.57-3.54,20.64,20.64,0,0,1,0,41.27A19.64,19.64,0,0,1,10.06,98a6.88,6.88,0,0,0-5.35-1.29c-3.41.69-4.64,5-4.69,5.21l0,59.42H119.74V0H102.06Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 문의 페이지 -->
        <section class="contact section-page con actived-on-visible puzzle-bg-v2" data-page-index="4">
            <h2 class="title font-Fredericka fs-title2">
                <div class="inline-block relative">
                    <span class="txt-front inline-block">Contact</span>
                    <i class="page-title-line t-line1"></i>
                    <i class="page-title-line t-line2"></i>
                    <i class="page-title-line t-line3"></i>
                </div>
            </h2>
            <div class="content flex">
                <div class="send-mail">
                    <form action onsubmit="sendEmailFormSubmit(this); return false;" name="sendEmailForm">
                        <input type="hidden" name="receiverName" value="이호연">
                        <input type="hidden" name="receiverEmail" value="whbear12@gmail.com">
                        <div class="type1"><input type="text" name="senderName" placeholder="Name"></div>
                        <div class="type1"><input type="email" name="senderEmail" placeholder="Email"></div>
                        <div class="type1">
                            <textarea name="body" placeholder="Message"></textarea>
                        </div>
                        <div class="btn-send">
                            <input type="submit" value="SEND MESSAGE">
                        </div>
                    </form>
                </div>
                <div class="info-box">
                    <div class="info-wrap flex">
                        <div class="sub-title">
                            <div class="txt-wrap">
                                <div class="flex-jc-st font-Fredericka">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 25.3 19.4" style="enable-background:new 0 0 25.3 19.4;"
                                        xml:space="preserve">
                                        <g>
                                            <path class="quotes" d="M12.6,13.4c0.1,0.3,0.1,0.6,0,1c-0.1,0.4-0.4,0.7-0.8,0.8c-0.2,0.7-0.4,1.2-0.5,1.7c-0.2,0.5-0.4,1-0.6,1.4
                                                c-0.4,0.1-0.7,0.3-1,0.5c-0.3,0.2-0.6,0.4-0.9,0.5c-0.9,0.3-1.7,0.2-2.4-0.3c-0.8-0.5-1.4-1-2-1.5c-0.9-0.9-1.6-1.8-2.4-2.8
                                                s-1.2-2-1.5-3c-0.1-0.2-0.1-0.3,0-0.4c0-0.1,0.1-0.3,0.1-0.5c-0.3-0.3-0.5-0.5-0.5-0.7c0-0.2-0.1-0.4-0.2-0.6
                                                c0.4-0.4,0.7-0.9,0.9-1.4c0.3-0.5,0.5-1,0.8-1.5c0.3-0.5,0.5-1,0.8-1.4C2.8,4.7,3.2,4.3,3.6,4c0.1-0.4,0.3-0.7,0.5-0.9
                                                c0.2-0.2,0.4-0.4,0.5-0.6c0.6-0.4,1.1-0.8,1.5-1.2c0.5-0.5,1-0.8,1.7-1.1c0.4,0,0.8-0.1,1.3-0.2c0.5,0,0.8,0.1,1.1,0.5
                                                c0,0.3-0.1,0.5-0.2,0.6C10.1,1.3,10,1.5,9.9,1.7C9.2,1.8,8.5,2,7.8,2.2C7,2.4,6.6,2.8,6.3,3.5c-0.2,0-0.3,0-0.4,0.2S5.8,3.9,5.6,4
                                                C5.5,4.4,5.3,4.8,5.2,5.3C5.1,5.7,5,6.1,4.7,6.4c0,0.4,0.1,0.8,0,1.2c0,0.4-0.1,0.7-0.3,1C4.6,8.7,4.7,8.8,4.6,9
                                                C4.6,9.1,4.5,9.3,4.5,9.5c0,0.3,0.2,0.4,0.3,0.6c0.2,0.1,0.3,0.3,0.4,0.5c0.4-0.4,0.8-0.6,1.3-0.7c0.5,0,1-0.1,1.4-0.2
                                                c0.5,0.3,1.2,0.6,2,1c0.8,0.4,1.4,0.8,1.7,1.2c0.2,0.5,0.4,0.8,0.6,1C12.5,12.9,12.6,13.2,12.6,13.4z M3,9.5
                                                c-0.3-0.1-0.4,0-0.6,0.1C2.3,9.6,2.1,9.7,2,9.8c0,0.3,0,0.5-0.1,0.6c-0.1,0.2-0.1,0.4,0,0.6C2.2,10.6,2.6,10.1,3,9.5z M3.1,7.2
                                                c-0.2,0-0.4,0.1-0.6,0.3C2.4,7.7,2.2,7.9,2.2,8.1c-0.1,0.2-0.1,0.4,0,0.6C2.2,8.9,2.5,9,2.8,9C2.9,8.7,3,8.4,3,8.2
                                                C3.1,7.9,3.1,7.6,3.1,7.2z M3.6,11.4c-0.4,0-0.6,0.1-0.7,0.2c-0.1,0.2-0.3,0.3-0.5,0.4c0.4,0.4,0.6,0.4,0.8,0.2
                                                C3.4,11.9,3.5,11.6,3.6,11.4z M5.2,12.9C5,12.9,4.7,13,4.4,13.2c-0.3,0.2-0.5,0.3-0.7,0.5c-0.2,0.2-0.3,0.4-0.3,0.6
                                                c0,0.2,0.2,0.4,0.6,0.6c0-0.5,0.3-0.8,0.6-1C5,13.6,5.2,13.3,5.2,12.9z M8.8,13.9c-0.5-0.3-0.9-0.4-1.1-0.2
                                                c-0.3,0.2-0.6,0.3-0.9,0.4c-0.6,0.3-1,0.5-1.3,0.7C5.3,15,4.9,15.1,4.4,15c0.2,0.4,0.4,0.6,0.6,0.9c0.3,0.2,0.4,0.5,0.5,1
                                                c0.8-0.5,1.4-1,1.8-1.6C7.8,14.7,8.3,14.3,8.8,13.9z M11.3,14.5c0-0.4,0-0.7-0.2-1c-0.2-0.3-0.3-0.5-0.4-0.8
                                                c-0.6-0.2-1-0.5-1.3-0.8c-0.3-0.3-0.7-0.6-1.1-0.9c-0.5,0.1-0.8,0.1-1.1,0.1c-0.3,0-0.4,0.1-0.5,0.3c0.3,0.1,0.5,0,0.6,0
                                                s0.3-0.1,0.5-0.2c0.1,0.7-0.1,1.2-0.6,1.4c-0.5,0.2-0.9,0.6-1.1,1.1c0.6-0.1,1.1-0.3,1.5-0.6c0.4-0.3,0.9-0.4,1.6-0.3
                                                c0.3,0.3,0.3,0.6,0.3,0.9C9.3,14,9.2,14.3,9,14.5c-0.2,0.2-0.4,0.4-0.7,0.6c-0.3,0.2-0.5,0.3-0.6,0.4c-0.1,0.4-0.1,0.7-0.2,0.8
                                                c-0.1,0.2-0.2,0.3-0.4,0.5c0.2,0.6,0.2,1,0.2,1.1c0.3,0,0.5,0,0.7,0.1c0.2,0.1,0.5,0,0.8-0.1c0.2,0,0.5-0.2,0.8-0.5
                                                c0.3-0.3,0.6-0.6,0.8-1c0.3-0.4,0.5-0.7,0.6-1.1C11.2,14.9,11.3,14.6,11.3,14.5z M25.2,11.7c0.2,1.3,0,2.2-0.3,2.9
                                                c-0.4,0.7-0.8,1.4-1.4,2.2c-0.5,0.2-0.8,0.3-0.8,0.5c-0.1,0.2-0.2,0.3-0.3,0.3c-0.5,0.3-1,0.5-1.6,0.6c-0.6,0.1-1.2,0.2-1.8,0.1
                                                c-0.6,0-1.2-0.2-1.8-0.5c-0.6-0.3-0.9-0.6-1.1-1c-0.3,0.1-0.4,0-0.5,0c-0.1-0.1-0.2-0.1-0.4-0.2c0-0.5-0.3-0.8-0.8-0.8
                                                c0-0.5,0-0.8-0.2-0.9c-0.2-0.1-0.3-0.2-0.4-0.4c0.2-0.2,0.2-0.4,0.1-0.6c-0.1-0.2-0.1-0.4,0-0.6c-0.1-0.2-0.2-0.3-0.3-0.4
                                                c-0.1,0-0.2-0.1-0.3-0.2c-0.2-0.4-0.1-0.6,0.2-0.8c0.3-0.2,0.4-0.5,0.3-0.9c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.4-0.1-0.6-0.2
                                                c0.1-0.2,0.1-0.3,0-0.5c-0.1-0.2-0.2-0.3-0.3-0.4c0.1-0.4,0.2-0.6,0.3-0.7c0.1-0.1,0.2-0.2,0.2-0.4c1.1-1.2,1.9-2.3,2.6-3.2
                                                c0.7-0.9,1.5-1.8,2.3-2.7c0.5-0.3,1-0.5,1.4-0.6c0.4-0.1,0.8-0.3,1-0.6c0.7,0,1.4-0.2,2.1-0.4c0.7-0.2,1.4-0.1,1.9,0.4
                                                c0,0.3-0.2,0.4-0.6,0.6c-0.4,0.1-0.7,0.1-0.8-0.2c-0.2,0.4-0.4,0.6-0.6,0.6c-0.2,0.1-0.3,0.2-0.3,0.3c-1.6,0.4-2.8,1.2-3.7,2.5
                                                c-0.8,1.3-0.9,2.8-0.4,4.5c0.4,0.2,0.8,0.1,1.1-0.1c0.3-0.2,0.6-0.3,1-0.3c0.7,0.2,1.1,0.2,1.4,0.1c0.3-0.1,0.4,0,0.5,0.2
                                                c0.5-0.1,0.8,0,1.1,0.2c0.3,0.2,0.6,0.4,0.9,0.5c0.6,0.4,0.9,0.6,1,0.9C24.8,11.5,25,11.6,25.2,11.7z M16.5,11.3
                                                c-0.5-0.4-0.8-0.5-1-0.3c-0.2,0.2-0.4,0.3-0.6,0.4c0.5,0.3,0.8,0.4,1,0.3C16,11.5,16.2,11.4,16.5,11.3z M16,9.2
                                                c-0.3-0.4-0.5-0.5-0.5-0.4c-0.1,0.1-0.2,0.2-0.4,0.2c0.3,0.4,0.5,0.6,0.6,0.5C15.8,9.3,15.9,9.3,16,9.2z M17,11.9
                                                c-0.5-0.1-0.8,0-1.2,0.3c-0.3,0.3-0.5,0.6-0.5,0.8c0.3-0.1,0.6-0.3,0.9-0.5C16.4,12.4,16.7,12.1,17,11.9z M20.3,12.7
                                                c-0.2,0-0.4,0-0.5,0.1c-0.1,0.1-0.3,0.1-0.6,0c-0.4,0.6-0.9,0.9-1.6,1.1C17,14,16.4,14.3,16,14.7c0.9,0.2,1.6,0.1,2.1-0.5
                                                c0.6-0.5,1.2-0.8,1.9-0.9L20.3,12.7z M21.5,11.1c-0.6-0.3-1-0.2-1.3,0.1c-0.3,0.3-0.8,0.5-1.3,0.5c-0.4,0.3-0.8,0.6-1.3,0.8
                                                c-0.5,0.3-1,0.5-1.5,0.8c0.2,0.4,0.3,0.6,0.4,0.5s0.2-0.1,0.3,0c0.2-0.4,0.4-0.7,0.8-0.8c0.4-0.2,0.9-0.3,1.4-0.3
                                                c0.1-0.4,0.5-0.7,1.1-0.8C20.8,11.8,21.3,11.5,21.5,11.1z M23.7,12.1c-0.5-0.2-0.8-0.2-0.8-0.1c-0.1,0.1-0.1,0.1-0.2,0.2
                                                c-0.5,0.2-0.9,0.4-1.2,0.6c-0.3,0.3-0.5,0.4-0.8,0.5c-0.1,0.2-0.3,0.4-0.6,0.5c-0.4,0.1-0.7,0.2-1.1,0.3c0.5,0.4,1,0.5,1.3,0.2
                                                c0.4-0.3,0.7-0.5,1-0.5c-0.1,0.2-0.2,0.3-0.4,0.4s-0.3,0.2-0.4,0.3c-0.4-0.2-0.6-0.1-0.8,0.2c-0.2,0.3-0.4,0.4-0.8,0.4
                                                c-0.6-0.3-1-0.3-1.1,0.1c0.1,0.1,0.2,0.1,0.3-0.1c0.1-0.2,0.3-0.2,0.5-0.2c-0.2,0.3-0.4,0.6-0.5,0.8c-0.1,0.2-0.3,0.3-0.6,0.4
                                                c0.3,0.6,0.7,0.9,1.2,0.9c0.6,0,1.2,0.1,1.9,0.2c0.4-0.3,0.8-0.6,1.3-0.9c0.5-0.3,0.9-0.7,1.2-1.1c0.3-0.4,0.6-0.9,0.7-1.4
                                                C24.1,13.4,24,12.8,23.7,12.1z M21.7,14.9c0.1,0.3,0,0.5-0.2,0.6c-0.2,0.2-0.4,0.4-0.5,0.6c0.2-0.4,0.2-0.6,0.3-0.8
                                                c0-0.2,0-0.3-0.1-0.4L21.7,14.9z M22.4,13.7c-0.5,0.2-0.7,0.2-0.8,0.1c0.3-0.2,0.5-0.2,0.7-0.3c0.2,0,0.2-0.2,0.2-0.4V13.7z
                                                M23.4,13.3c0,0.3-0.1,0.5-0.3,0.6c-0.2,0.1-0.3,0.3-0.4,0.5c-0.6,0.3-0.9,0.3-0.9,0.1c0.3-0.5,0.6-0.8,0.8-0.9S23,13.3,23,13
                                                L23.4,13.3z" />
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="font-Gyeonggi">작아도 없으면 안 되는 퍼즐 한 조각 같이</h2>
                                <div class="flex-jc-end font-Fredericka">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 25.3 19.4" style="enable-background:new 0 0 25.3 19.4;"
                                        xml:space="preserve">
                                        <g>
                                            <path class="quotes"
                                                d="M0.1,7.7C-0.1,6.4,0,5.5,0.4,4.8c0.4-0.7,0.8-1.4,1.4-2.2c0.5-0.2,0.7-0.3,0.8-0.5c0-0.2,0.2-0.3,0.3-0.3
                                                c0.5-0.3,1-0.5,1.6-0.6S5.7,1,6.3,1.1C7,1.1,7.5,1.3,8.1,1.5c0.5,0.3,0.9,0.6,1.1,1c0.3-0.1,0.4,0,0.6,0c0.1,0.1,0.3,0.1,0.4,0.2
                                                c0,0.5,0.3,0.7,0.8,0.7c-0.1,0.6,0,0.9,0.2,1c0.2,0.1,0.3,0.2,0.4,0.4c-0.2,0.2-0.2,0.4-0.1,0.6c0.1,0.2,0.1,0.4,0,0.6
                                                c0.1,0.2,0.2,0.3,0.3,0.3c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.4,0,0.7-0.2,0.9c-0.2,0.2-0.3,0.5-0.3,0.9c0.1,0.1,0.3,0.2,0.5,0.2
                                                c0.2,0.1,0.4,0.1,0.5,0.2c-0.1,0.2-0.1,0.3,0,0.4c0.1,0.1,0.3,0.2,0.4,0.3c-0.1,0.4-0.2,0.7-0.3,0.8c-0.1,0.1-0.2,0.2-0.2,0.4
                                                c-1,1.2-1.9,2.2-2.6,3.2c-0.7,1-1.5,1.9-2.3,2.7c-0.5,0.3-1,0.5-1.4,0.6c-0.4,0.1-0.8,0.3-1,0.6c-0.4,0-0.7,0.1-1.1,0.2
                                                c-0.4,0.1-0.7,0.2-1,0.2c-0.3,0.1-0.7,0.1-1,0c-0.3,0-0.6-0.2-1-0.4c0-0.3,0.2-0.4,0.6-0.6c0.4-0.1,0.7-0.1,0.8,0.2
                                                c0.2-0.4,0.4-0.6,0.6-0.6c0.2,0,0.3-0.2,0.4-0.4c1.6-0.3,2.8-1.1,3.7-2.5c0.8-1.3,0.9-2.9,0.4-4.5c-0.4-0.1-0.8,0-1.1,0.2
                                                C6.2,9.9,5.9,9.9,5.6,9.9c-0.7-0.2-1.1-0.2-1.4,0C4,10,3.8,9.9,3.7,9.6C3.2,9.7,2.8,9.6,2.6,9.5C2.4,9.3,2.1,9.2,1.7,9.1
                                                c-0.6-0.4-0.9-0.6-1-0.9C0.6,7.9,0.4,7.8,0.1,7.7z M1.6,7.3c0.5,0.2,0.8,0.2,0.8,0.1c0-0.1,0.1-0.1,0.2-0.2
                                                c0.5-0.2,0.9-0.4,1.2-0.6c0.3-0.3,0.6-0.4,0.8-0.5c0.1-0.2,0.3-0.4,0.6-0.5C5.7,5.5,6,5.4,6.4,5.3C5.9,4.9,5.5,4.9,5.1,5.2
                                                c-0.4,0.3-0.7,0.5-1,0.5c0.1-0.2,0.2-0.3,0.4-0.4C4.6,5.1,4.7,5,4.8,4.9C5.2,5,5.4,5,5.6,4.7C5.8,4.4,6,4.3,6.4,4.3
                                                c0.6,0.4,1,0.3,1.1-0.1C7.4,4.1,7.3,4.1,7.2,4.3C7,4.4,6.9,4.5,6.7,4.4C6.9,4.1,7,3.8,7.2,3.6c0.1-0.2,0.3-0.4,0.6-0.4
                                                C7.5,2.6,7.1,2.4,6.5,2.4C6,2.4,5.3,2.3,4.6,2.2C4.2,2.5,3.8,2.8,3.3,3.1C2.9,3.4,2.5,3.8,2.1,4.2C1.7,4.6,1.5,5,1.4,5.6
                                                C1.3,6.1,1.3,6.6,1.6,7.3z M2,6.1C2,5.8,2,5.6,2.2,5.5c0.2-0.1,0.3-0.3,0.3-0.5c0.7-0.3,1-0.3,1-0.1C3.2,5.3,2.9,5.6,2.7,5.8
                                                C2.5,5.9,2.4,6.1,2.3,6.4L2,6.1z M2.9,5.7c0.5-0.2,0.8-0.2,0.9-0.1C3.5,5.8,3.2,5.9,3.1,5.9C2.9,5.9,2.9,6,2.9,6.2V5.7z M3.6,4.5
                                                C3.5,4.2,3.6,4,3.8,3.8C4,3.7,4.2,3.5,4.3,3.2C4.2,3.6,4.1,3.9,4,4c0,0.2,0,0.3,0.1,0.4L3.6,4.5z M3.9,8.3
                                                c0.3,0.2,0.5,0.2,0.7,0.2c0.2,0,0.4-0.1,0.6-0.3c0.2-0.1,0.4-0.2,0.6-0.3C6,7.7,6.2,7.7,6.4,7.7c0.8-0.6,1.7-1.1,2.8-1.6
                                                C9.1,5.7,9,5.5,8.9,5.6s-0.2,0.1-0.3,0C8.4,6,8.1,6.2,7.7,6.4C7.3,6.5,6.8,6.6,6.2,6.6C6.1,7.1,5.8,7.4,5.1,7.5
                                                C4.5,7.6,4.1,7.9,3.9,8.3z M5.1,6.7c0.2,0.1,0.4,0,0.5-0.1c0.1-0.1,0.3-0.1,0.5,0c0.4-0.5,0.9-0.8,1.6-1c0.7-0.2,1.3-0.4,1.7-0.8
                                                C8.5,4.5,7.8,4.7,7.3,5.2C6.7,5.7,6.1,6,5.4,6.1L5.1,6.7z M8.4,7.5c0.4,0.1,0.8,0,1.1-0.3c0.4-0.3,0.5-0.6,0.5-0.9
                                                C9.7,6.4,9.4,6.6,9.2,6.8C8.9,7,8.7,7.3,8.4,7.5z M8.9,8.1c0.4,0.4,0.7,0.5,0.9,0.3c0.2-0.2,0.4-0.3,0.7-0.4
                                                C9.9,7.8,9.6,7.7,9.4,7.8C9.2,7.9,9.1,8,8.9,8.1z M9.3,10.3c0.4,0.4,0.6,0.5,0.6,0.4c0-0.1,0.2-0.2,0.4-0.2C10,10,9.7,9.9,9.6,10
                                                S9.4,10.2,9.3,10.3z M12.7,6c-0.1-0.3-0.1-0.6,0-1c0.1-0.4,0.4-0.7,0.8-0.8C13.7,3.6,13.9,3,14,2.5c0.2-0.5,0.4-0.9,0.6-1.4
                                                c0.4-0.1,0.7-0.3,1-0.5c0.3-0.2,0.6-0.4,0.9-0.5C17.4-0.1,18.2,0,19,0.5c0.8,0.5,1.4,1,2,1.6c0.8,0.9,1.6,1.8,2.3,2.8
                                                c0.7,1,1.3,2,1.6,3c0,0.2,0,0.3,0,0.4c-0.1,0.1-0.1,0.3-0.1,0.5c0.3,0.3,0.4,0.5,0.4,0.7c0,0.2,0,0.4,0.1,0.5
                                                c-0.4,0.4-0.7,0.9-0.9,1.4c-0.3,0.5-0.5,1.1-0.7,1.6c-0.2,0.5-0.5,1-0.8,1.4c-0.3,0.5-0.7,0.8-1.1,1.1c-0.1,0.4-0.3,0.6-0.5,0.8
                                                c-0.2,0.2-0.4,0.4-0.5,0.7c-0.6,0.4-1.1,0.7-1.6,1.2c-0.5,0.4-1.1,0.8-1.7,1c-0.4,0.1-0.8,0.1-1.3,0.2c-0.5,0.1-0.8-0.1-1.1-0.4
                                                c0-0.3,0-0.5,0.2-0.6s0.2-0.4,0.3-0.6c0.7-0.1,1.4-0.3,2.1-0.5c0.7-0.2,1.2-0.7,1.4-1.3c0.2,0.1,0.3,0,0.4-0.1
                                                c0-0.1,0.2-0.2,0.4-0.3c0.2-0.4,0.3-0.8,0.4-1.3c0.1-0.5,0.3-0.9,0.5-1.2c-0.1-0.4-0.1-0.8,0-1.1c0-0.4,0.1-0.7,0.3-1
                                                c-0.2,0-0.3-0.2-0.2-0.3c0-0.2,0.1-0.4,0.2-0.6c-0.1-0.3-0.2-0.4-0.3-0.5c-0.2-0.1-0.3-0.3-0.4-0.5c-0.4,0.4-0.8,0.6-1.3,0.6
                                                c-0.5,0.1-1,0.1-1.4,0.2c-0.5-0.3-1.2-0.6-2-0.9c-0.8-0.4-1.4-0.7-1.7-1.1c-0.2-0.5-0.4-0.8-0.6-1C12.8,6.5,12.7,6.3,12.7,6z
                                                M14,4.9c-0.1,0.4,0,0.7,0.2,1c0.2,0.3,0.3,0.5,0.4,0.8c0.5,0.3,0.9,0.5,1.3,0.9c0.4,0.3,0.7,0.6,1.1,0.9c0.5,0,0.8-0.1,1.1-0.1
                                                c0.3,0,0.4-0.1,0.5-0.3c-0.3,0-0.5,0-0.6,0s-0.3,0.1-0.5,0.2c-0.1-0.7,0.1-1.2,0.6-1.4c0.5-0.3,0.8-0.6,1.1-1.1
                                                c-0.6,0.1-1,0.3-1.4,0.5c-0.4,0.3-1,0.3-1.7,0.2c-0.3-0.3-0.3-0.6-0.3-0.9c0.1-0.3,0.2-0.5,0.5-0.8c0.2-0.2,0.5-0.4,0.7-0.6
                                                c0.3-0.2,0.5-0.3,0.6-0.4c0-0.5,0.1-0.8,0.2-0.9s0.2-0.3,0.4-0.4c-0.2-0.6-0.2-1-0.2-1.1c-0.3,0-0.5,0-0.7-0.1
                                                c-0.2,0-0.5,0-0.8,0.1c-0.3,0.1-0.5,0.2-0.8,0.5c-0.3,0.3-0.5,0.6-0.8,1c-0.3,0.4-0.5,0.7-0.6,1.1C14.1,4.6,14,4.8,14,4.9z
                                                M16.5,5.6c0.5,0.3,0.9,0.4,1.1,0.2c0.3-0.2,0.6-0.3,0.9-0.4c0.6-0.3,1-0.5,1.2-0.7c0.3-0.2,0.6-0.3,1.1-0.2
                                                c-0.2-0.4-0.4-0.7-0.6-0.9c-0.3-0.3-0.4-0.6-0.5-0.9C19,3,18.4,3.6,18,4.1C17.6,4.7,17.1,5.1,16.5,5.6z M20.1,6.5
                                                c0.2,0,0.5-0.1,0.8-0.3c0.3-0.1,0.6-0.3,0.8-0.5c0.2-0.2,0.3-0.4,0.3-0.6c0-0.2-0.2-0.4-0.5-0.6c-0.1,0.5-0.3,0.8-0.6,1
                                                C20.4,5.8,20.2,6.1,20.1,6.5z M21.7,8.1c0.3,0,0.5-0.1,0.6-0.2c0.1-0.2,0.3-0.3,0.6-0.4c-0.4-0.4-0.7-0.4-0.8-0.2
                                                C21.9,7.6,21.8,7.8,21.7,8.1z M22.2,12.2c0.2,0,0.4-0.1,0.6-0.3c0.2-0.2,0.3-0.4,0.4-0.6c0.1-0.2,0.1-0.4,0-0.6
                                                c-0.1-0.2-0.3-0.3-0.7-0.3c-0.1,0.3-0.2,0.6-0.2,0.8S22.2,11.8,22.2,12.2z M22.3,9.9c0.3,0.1,0.5,0,0.6-0.1
                                                c0.1-0.1,0.3-0.2,0.4-0.2c-0.1-0.2,0-0.4,0.1-0.5c0.1-0.2,0.1-0.4,0-0.6c-0.3,0.3-0.5,0.5-0.7,0.7C22.7,9.4,22.5,9.6,22.3,9.9z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="myself-info">
                            <ul>
                                <li class="info-blog">
                                    <span class="font-noto">Site</span>
                                    <span class="font-noto"><a href="https://blog.nixpluvia.com">blog.nixpluvia.com</a></span>
                                </li>
                                <li class="info-email">
                                    <span class="font-noto">E-Mail</span>
                                    <span class="font-noto">whbear12@gmail.com</span>
                                </li>
                                <li class="info-number">
                                    <span class="font-noto">Number</span>
                                    <span class="font-noto">010-9553-3855</span>
                                </li>
                            </ul>
                        </div>
                        <div class="sns-bar">
                            <ul class="flex">
                                <li class="sns-icon icon-youtube">
                                    <a href="https://www.youtube.com/channel/UCaCKvCIvrW3xMmYvhCGJZZA?view_as=subscriber"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.78 35">
                                            <g>
                                                <path class="sns-icon-path"
                                                    d="M48.74,5.48a6.23,6.23,0,0,0-4.4-4.43C40.45,0,24.89,0,24.89,0S9.32,0,5.44,1.05A6.23,6.23,0,0,0,1,5.48C0,9.38,0,17.54,0,17.54s0,8.15,1,12.05A6.14,6.14,0,0,0,5.44,34c3.88,1,19.45,1,19.45,1s15.56,0,19.45-1a6.14,6.14,0,0,0,4.4-4.36c1-3.9,1-12,1-12S49.78,9.38,48.74,5.48ZM19.8,24.94V10.13l13,7.41-13,7.4Z" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="sns-icon icon-github">
                                    <a href="https://github.com/nixpluvia" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.9 35">
                                            <g id="contact">
                                                <path class="sns-icon-path"
                                                    d="M12,28.18c0,.15-.17.26-.38.26s-.4-.09-.4-.26.16-.26.37-.26S12,28,12,28.18Zm-2.25-.32c0,.14.09.31.31.35a.35.35,0,0,0,.45-.14c0-.15-.1-.32-.32-.38a.36.36,0,0,0-.44.17ZM13,27.73c-.21.05-.35.19-.33.36s.21.24.43.19.35-.19.33-.34S13.16,27.71,13,27.73ZM17.72,0A17.36,17.36,0,0,0,0,17.66,18.14,18.14,0,0,0,12.27,35c.92.17,1.25-.4,1.25-.88s0-2.92,0-4.44c0,0-5.07,1.09-6.13-2.16,0,0-.83-2.1-2-2.64,0,0-1.66-1.14.11-1.12A3.83,3.83,0,0,1,8.26,25.6a3.83,3.83,0,0,0,5.28,1.51,4.05,4.05,0,0,1,1.16-2.44c-4-.45-8.13-1-8.13-8a5.48,5.48,0,0,1,1.71-4.26A6.83,6.83,0,0,1,8.47,7.5c1.51-.47,5,1.95,5,1.95a17.24,17.24,0,0,1,9.09,0S26,7,27.55,7.5a6.8,6.8,0,0,1,.18,4.91,5.62,5.62,0,0,1,1.87,4.26c0,7-4.26,7.55-8.31,8A4.27,4.27,0,0,1,22.52,28c0,2.44,0,5.46,0,6s.33,1,1.25.88A18,18,0,0,0,35.9,17.66C35.9,7.62,27.75,0,17.72,0ZM7,25c-.09.07-.07.24.06.38s.28.16.37.07.07-.24,0-.38A.29.29,0,0,0,7,25Zm-.78-.58c0,.09,0,.21.17.28a.22.22,0,0,0,.31-.05c0-.1,0-.21-.17-.29S6.3,24.3,6.25,24.38ZM8.6,27c-.12.1-.07.31.09.45s.38.19.47.07.05-.31-.09-.45S8.69,26.84,8.6,27Zm-.83-1.06c-.11.07-.11.26,0,.42s.31.24.41.17a.34.34,0,0,0,0-.45c-.1-.16-.29-.24-.41-.14Z" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="sns-icon icon-tstory">
                                    <a href="https://nixpluvia.tistory.com/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                            <g>
                                                <circle class="sns-icon-path" cx="4.39" cy="4.39" r="4.39" />
                                                <circle class="sns-icon-path" cx="17.5" cy="4.39" r="4.39" />
                                                <circle class="sns-icon-path" cx="30.61" cy="4.39" r="4.39" />
                                                <circle class="sns-icon-path" cx="17.5" cy="17.5" r="4.39" />
                                                <circle class="sns-icon-path" cx="17.5" cy="30.61" r="4.39" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- footer 바 -->
    <footer>
        <h2 class="sound-only">본 사이트는 상업적 목적이 아닌 개인 포트폴리오 사이트로 제작되었습니다.</h2>
    </footer>
</body>

</html>