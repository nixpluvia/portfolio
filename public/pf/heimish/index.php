<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./index.css">
    <script src="./index.js"></script>
    <title>헤이미쉬 공식 온라인몰 모작</title>
</head>
<body>
    <div class="top-bar flex">
      <div class="logo flex-ai-c">
        <a href="#">
          <img src="./resource/logo_wh.png" alt="">
        </a>
        <a href="#">
          <img src="./resource/logo_gr.png" alt="">
        </a>
      </div>
      <nav class="menu-box-1 flex">
        <ul class="flex">
          <li class="flex-ai-c">
            <a href="#" class="flex-ai-c">Brand</a>
          </li>
          <li class="flex-ai-c">
            <a href="#" class="">Make up</a>
          </li>
          <li class="flex-ai-c">
            <a href="#" class="">Skincare</a>
          </li>
          <li class="flex-ai-c">
            <a href="#" class="">Shop</a>
          </li>
          <li class="flex-ai-c">
            <a href="#" class="">Review</a>
          </li>
          <li class="flex-ai-c">
            <a href="#" class="">Service</a>
          </li>
        </ul>
      </nav>
      <div class="member-menu flex-jc-end">
        <ul class="flex">
          <li class="language-box flex-ai-c">
            <div class="language flex-ai-c">KR</div>
            <div class="caret"></div>
            <div class="language-select">
              <a href="#" class="block">
                <div>KR</div>
                <div>원화 / 국내배송</div>
              </a>
              <a href="#" class="block">
                <div>EN</div>
                <div>USD / Worldwide</div>
              </a>
              <a href="#" class="block">
                <div>CN</div>
                <div>CNY / China</div>
              </a>
              <a href="#" class="block">
                <div>JP</div>
                <div>JPY / Japan</div>
              </a>
            </div>
          </li>
          <li class="login-icon-box flex-ai-c">
            <a href="#" class="flex-ai-c"></a>
          </li>
          <li class="search-icon-box flex-ai-c">
            <a href="#" class="flex-ai-c"></a>
          </li>
          <li class="basket-icon-box flex-ai-c">
            <a href="#" class="flex-ai-c"></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="search-popup">
      <div class="search-popup-content">
        <div class="btn-close-box">
          <div class="btn-close-icon"></div>
        </div>
        <h2 class="title con">Search</h2>
        <div class="textbox con">
          <input type="text" placeholder="검색하실 상품명을 입력해주세요" />
          <div class="textbox-search-icon"></div>
        </div>
        <div class="hashtag-text con">
          <a href="#"><strong>#광채쿠션</strong> 이유비 Pick</a>
          <a href="#">재구매율 1위<strong>#올인원클렌징</strong></a>
          <a href="#">고발색 초밀착<strong>#아이섀도우</strong></a>
        </div>
      </div>
    </div>

    <ul class="scroll-dots">
      <li class="dot1 active"><div class="sm-dot"></div></li>
      <li class="dot2"><div class="sm-dot"></div></li>
      <li class="dot3"><div class="sm-dot"></div></li>
      <li class="dot4"><div class="sm-dot"></div></li>
      <li class="dot5"><div class="sm-dot"></div></li>
      <li class="dot6"><div class="sm-dot"></div></li>
    </ul>

    <div class="scroll-box">

      <div class="top-bn-box page">
          <div class="bn-title-box">
              <h2>Make Up</h2>
              <div>누구나 공감할 수 있는 아름다움</div>
          </div>
      </div>

      <div class="prod-slide-section page">
        <div class="prod-content">
          <div class="head">
              <ul class="flex">
                  <li class="active" data-tab-head="1" data-tab-name="1"><a>BEST</a></li>
                  <li data-tab-head="2" data-tab-name="1"><a>NEW</a></li>
              </ul>
          </div>
          <div class="tab-content active" data-tab-body="1" data-tab-name="1">
              <h2 class="title">Best Seller</h2>
              <div class="sub-title">가장 많은 사랑을 받고 있는 헤이미쉬의 베스트셀러</div>
              <div class="btn-slide flex-ai-c">
                  <div class="flex-ai-c">
                      <img src="./resource/main_slider_l.png" alt="">
                  </div>
                  <span class="slideIndex">
                    <span class="slideIndex-text">1</span><span> / 4</span>
                  </span>
                  <div class="flex-ai-c">
                      <img src="./resource/main_slider_r.png" alt="">
                  </div>
              </div>
              <ul class="slide-text">
                  <li class="active">
                    <a href="#">
                      [다산다라쿠션] 벨벳 커버 쿠션 + 쿨메쉬 마스크 증정
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      [베리굿 조현 PICK]
                      <br>
                      테이핑 섀도우 피치코랄
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      [베리굿 조현 PICK]
                      <br>
                      데일리즘 스머지 스탑 마스카라
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      벨벳 파우더 팩트
                    </a>
                  </li>
              </ul>
          </div>
          <div class="tab-content" data-tab-body="2" data-tab-name="1">
              <h2 class="title">New Product</h2>
              <div class="sub-title">헤이미쉬의 신상품을 가장 먼저 만나 보세요.</div>
              <div class="btn-slide flex-ai-c">
                  <div class="flex-ai-c">
                      <img src="./resource/main_slider_l.png" alt="">
                  </div>
                  <span class="slideIndex">
                    <span class="slideIndex-text">1</span><span> / 4</span>
                  </span>
                  <div class="flex-ai-c">
                      <img src="./resource/main_slider_r.png" alt="">
                  </div>
              </div>
              <ul class="slide-text">
                  <li class="active">
                    <a href="#">
                      벨벳 파우더 팩트
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      글로우 치크 앤티크 베리
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      아트리스 블로우 베이스SPF50+
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      [다산다라쿠션] 벨벳 커버 쿠션 + 쿨메쉬 마스크 증정
                    </a>
                  </li>
              </ul>
          </div>
        </div>

        <div class="slider active" data-tab-body="1" data-tab-name="1">
          <ul class="slides flex">
            <li class="active flex-jc-end">
              <a href="#">
                <img src="./resource/008000000013.jpg" alt="">
              </a>
            </li>
            <li class="right-set flex-jc-end">
              <a href="#">
                <img src="./resource/008000000010.jpg" alt="">
              </a>
            </li>
            <li class="flex-jc-end">
              <a href="#">
                <img src="./resource/001004000003.jpg" alt="">
              </a>
            </li>
            <li class="left-set flex-jc-end">
              <a href="#">
                <img src="./resource/008000000007.jpg" alt="">
              </a>
            </li>
          </ul>
        </div>
        <div class="slider" data-tab-body="2" data-tab-name="1">
          <ul class="slides flex">
            <li class="active flex-jc-end">
              <a href="#">
                <img src="./resource/008000000007.jpg" alt="">
              </a>
            </li>
            <li class="right-set flex-jc-end">
              <a href="#">
                <img src="./resource/008000000010.jpg" alt="">
              </a>
            </li>
            <li class="flex-jc-end">
              <a href="#">
                <img src="./resource/008000000001.jpg" alt="">
              </a>
            </li>
            <li class="left-set flex-jc-end">
              <a href="#">
                <img src="./resource/008000000013.jpg" alt="">
              </a>
            </li>
          </ul>
        </div>

      </div>

      <div class="main-prod-section mpds1 page">
        <div class="bg-img"></div>
        <div class="section-title">
          <div class="section-title-wrap">
            <div class="title">Velvet Cover Cushion</div>
            <div class="sub-title">하루 종일 자신있는 무결점 피부 초밀착 커버 쿠션</div>
          </div>
        </div>
      </div>

      <div class="main-prod-section mpds2 page">
        <div class="bg-img"></div>
        <div class="section-title">
          <div class="section-title-wrap">
            <div class="title">Dailism Smudge Stop Mascara</div>
            <div class="sub-title">뭉침없이 아찔하게 올려주고 번짐없이 깔끔하게</div>
          </div>
        </div>
      </div>

      <div class="main-prod-section mpds3 page">
        <div class="bg-img"></div>
        <div class="section-title">
          <div class="section-title-wrap">
            <div class="title">
              Taping Shadow
              <br>
              Peach Coral
            </div>
            <div class="sub-title">피치코랄과 은은하게 빛나는 골드펄로 영롱한 눈매 연출</div>
          </div>
        </div>
      </div>

      <div class="main-prod-section mpds4 page">
        <div class="bg-img"></div>
        <div class="section-title">
          <div class="section-title-wrap">
            <div class="title">VELVET Powder Pact</div>
            <div class="sub-title">번들거리는 유분잡고 다크닝 없는 메이크업 피니쉬</div>
          </div>
        </div>
      </div>

      <div class="footer page ">
        <div class="footer-wrap flex">
          <div class="footer-section1 fs">
            <div class="footer-title">
              <a href="#">ABOUT</a>
              <a href="#">TERMS OF USE</a>
              <a href="#">HELP</a>
              <a href="#">PRIVACY POLICY</a>
            </div>
            <ul class="footer-body">
              <li>주식회사 원앤드 / 대표 : 채호병 / 사업자등록번호 : 152-81-00033 / 경기도 성남시 분당구 판교로228번길 15, 3동 7층</li>
              <li>(삼평동, 판교세븐벤처밸리1)</li>
              <li>개인정보관리책임자 : 조병규(sy@oneand.co.kr) 통신판매 번호 : 2015-경기성남-1399</li>
              <li class="sns-bar flex">
                <a href="#"><img src="./resource/footer_i.png" alt=""></a>
                <a href="#"><img src="./resource/footer_f.png" alt=""></a>
                <a href="#"><img src="./resource/footer_y.png" alt=""></a>
              </li>
              <li class="copyright">2019 WONAND Ltd. All rights reserved.</li>
            </ul>
          </div>
          <div class="footer-section2 fs">
            <div class="footer-title">
              CUSTOMER CENTER
            </div>
            <ul class="footer-body">
              <li class="company-num">080 130 0808</li>
              <li>10:00 ~ 17:00 (Lunch time 12:30 ~ 13:30)</li>
              <li>토,일 및 공휴일 휴무</li>
            </ul>
          </div>
          <div class="footer-section3 fs">
            <div class="footer-title">
              PARTNERSHIP
            </div>
            <ul class="footer-body">
              <li>도매 / 해외수출문의 (B2B & Export)</li>
              <li>heimish@oneand.co.kr</li>
            </ul>
            <div class="footer-title">
              DELIVERY
            </div>
            <ul class="footer-body">
              <li>배송조회 바로가기 ></li>
              <li>한진택배 (1588-0011)</li>
            </ul>
          </div>
          <div class="footer-section4 fs">
            <div class="footer-title">
              SERVICE
            </div>
            <ul class="footer-body">
              <li><a href="#">자주찾는질문</a></li>
              <li><a href="#">문의하기</a></li>
              <li><a href="#">이벤트</a></li>
            </ul>
          </div>
          <div class="footer-section5 fs">
            <div class="footer-title">
              MY ACCOUNT
            </div>
            <ul class="footer-body">
              <li><a href="#">마이페이지</a></li>
              <li><a href="#">주문내역</a></li>
              <li><a href="#">회원등급 및 혜택</a></li>
              <li><a href="#">로그인</a></li>
              <li><a href="#">회원가입</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>