    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/mobile/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/mobile/css/main.css">
    <script src="/snd_kindergarten/mobile/js/contents.js"></script>
    

    <script>

        //비주얼 슬라이드
        document.addEventListener('DOMContentLoaded',()=>{

            var visualSwiper = new Swiper(".visualSwiper", {
            pagination: {
                el: ".visual-swiper-pagination",
            },
            });
        })

    </script>

    <script>
        
        //숲공간 슬라이드
        document.addEventListener('DOMContentLoaded',()=>{
            var contentSwiper = new Swiper(".contentSwiper", {
            slidesPerView: "auto",
            spaceBetween: 10,
            });

        })

        
    </script>

    <style>

        /* 비쥬얼 슬라이드 */
        .visualSwiper {
            width: 100%;
            height: 100%;
        }
        .visualSwiper .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .visualSwiper .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .visualSwiper .swiper-pagination-bullet-active {
            background-color: orange;
        }

        /* 컨텐츠 슬라이드 */
        .contentSwiper {
            width: 100%;
            height: 100%;
            overflow: hidden; 
        }
        .contentSwiper .swiper-slide {
            width: 45%;
            height: 100%;
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
        .contentSwiper .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }
  </style>

  
</head>
<body>
    <!-- 상단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/mobile/inc/header.html" ?>
    <!-- 상단영역끝 -->

    <main>
        <!-- 비쥬얼영역 -->
        <section id="visual">
            <h2 class="hidden">비쥬얼영역</h2>
            <div class="swiper visualSwiper">
                <ul id="visual_list" class="swiper-wrapper">
                    <li class="swiper-slide">
                        <h3 class="visual_title">
                        자연과 함께 쑥쑥 자라나는 <br> 신난다 숲 유치원
                        </h3>
                    </li>
                    <li class="swiper-slide">
                        <h3 class="visual_title">
                            자연과 함께 쑥쑥 자라나는 <br> 신난다 숲 유치원
                        </h3>
                    </li>
                    <li class="swiper-slide">
                        <h3 class="visual_title">
                            자연과 함께 쑥쑥 자라나는 <br> 신난다 숲 유치원
                        </h3>
                    </li>
                    <li class="swiper-slide">
                        <h3 class="visual_title">
                            자연과 함께 쑥쑥 자라나는 <br> 신난다 숲 유치원
                        </h3>
                    </li>
                </ul>
                <div class="swiper-pagination visual-swiper-pagination"></div>
            </div>
        </section>

        <!-- 원형메뉴 -->
        <section id="circle_menu">
            <h2 class="hidden">원형 퀵 메뉴</h2>
                <ul class="circle_menu_list">
                    <li>
                        <a href="#" title="신난다 하루 바로가기">
                            신난다 하루                              
                        </a>
                    </li>
                    <li>
                        <a href="#" title="신난다 환경 바로가기">
                            신난다 환경                              
                        </a>
                    </li>
                    <li>
                        <a href="#" title="특색 프로그램 바로가기">
                            특색 프로그램                              
                        </a>
                    </li>
                    <li>
                        <a href="#" title="입학 안내 바로가기">
                            입학 안내                             
                        </a>
                    </li>
                </ul>
        </section>
        
        <!-- 숲공간 -->
        <section id="forest_space">
            <h2 class="hidden">신난다 숲 공간 소개</h2>
            <div class="forest_space_info">
                <h3 class="forest_space_title">신난다 숲은요?</h3>
                <p class="forest_space_des">
                    아이들이 자연에서 자유롭게 뛰어 놀며<br> 스스로 배우고 놀이하는 공간입니다.     
                </p>
                <button class="btn_view_more">자세히보기</button>
            </div>
            <div class="forest_space_gallery">
                <div class="forest_space_menu">
                    <h3 class="hidden">숲환경 메뉴</h3>
                    <ul class="forest_space_menu_list">
                        <li class="selected"><a href="#;">옹기종기터</a></li>
                        <li><a href="#;">나무 놀이터</a></li>
                        <li><a href="#;">밧줄 놀이터</a></li>
                        <li><a href="#;">창작 놀이터</a></li>
                    </ul>
                </div>
                <div class="forest_space_img_box">
                    <h3 class="hidden">숲환경 사진</h3>
                    <div id='slide1' class="swiper contentSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/옹기종기1.png" alt="옹기종기터1">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/옹기종기2.png" alt="옹기종기터2">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/옹기종기3.png" alt="옹기종기터3">
                            </div>                                
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/옹기종기4.png" alt="옹기종기터4">
                            </div>                     
                        </div>
                    </div>
                    <div id='slide2' class="swiper contentSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/나무놀이1.png" alt="나무놀이터1">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/나무놀이2.png" alt="나무놀이터2">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/나무놀이3.png" alt="나무놀이터3">
                            </div>                                
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/나무놀이4.png" alt="나무놀이터4">
                            </div>                                
                        </div>
                    </div>
                    <div id='slide3' class="swiper contentSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/밧줄놀이1.png" alt="밧줄놀이터1">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/밧줄놀이2.png" alt="밧줄놀이터2">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/밧줄놀이3.png" alt="밧줄놀이터3">
                            </div>                                      
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/밧줄놀이4.png" alt="밧줄놀이터4">
                            </div>                                
                        </div>
                    </div>
                    <div id='slide4' class="swiper contentSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/창작놀이1.png" alt="창작놀이터1">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/창작놀이2.png" alt="창작놀이터2">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/창작놀이3.png" alt="창작놀이터3">
                            </div>                                
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/창작놀이4.png" alt="창작놀이터4">
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 패밀리프로그램 -->
        <section id="family_program">
            <h2 class="hidden">꿀 잼있는 패밀리 데이</h2>
            <div id="family_pro_intro">
                <div class="family_pro_info">
                    <h3 class="family_pro_title">꿀 잼있는 패밀리 데이</h3>
                    <p class="family_pro_des">
                        온 가족이 함께 배우고 성장하는<br> 신난다의 특별한 숲 체험 프로그램
                    </p>
                    <button class="btn_join">참가 신청하기</button>
                    <div class="intro_img"> </div>
                </div>    
            </div>
            <div id="family_pro_gallery">
                <div class="family_pro_category">
                    <h3 class="hidden">꿀 잼있는 패밀리데이 프로그램 메뉴</h3>
                    <ul class="family_pro_category_list">
                        <li class="selected"><a href="#;">탐험</a></li>
                        <li><a href="#;">만들기</a></li>
                        <li><a href="#;">배움</a></li>
                        <li><a href="#;">휴식</a></li>
                    </ul>
                </div>
                <div class="family_pro_container">
                    <h3 class="hidden">프로그램 활동 사진</h3>
                    <ul class="family_pro_item_list">
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/adventure_00.png" alt="꿀 항아리를 찾아라">
                            <h4>꿀 항아리를 찾아라!</h4>
                            <p>숲 곳곳에 숨겨진 미션 해결하기</p>
                        </li>
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/adventure_01.png" alt="협동 숲길 레이스">
                            <h4>협동 숲길 레이스</h4>
                            <p>울퉁불퉁한 숲길을 함께 완주하자 !</p>
                        </li>
                    </ul>
                    <ul class="family_pro_item_list">
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/creative_00.png" alt="숲 속 공작소">
                            <h4>숲속 공작소</h4>
                            <p>자연물로 나만의 작품 만들기</p>
                        </li>
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/creative_01.png" alt="숲속 음악회">
                            <h4>숲속 음악회</h4>
                            <p>자연의 아름다운 소리 경험하기</p>
                        </li>
                    </ul>
                    <ul class="family_pro_item_list">
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/learning_00.png" alt="숲속 친구를 찾아라">
                            <h4>숲속 친구를 찾아라 !</h4>
                            <p>곤충들과 함께하는 탐험 놀이</p>
                        </li>
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/learning_01.png" alt="숲 일기 기록하기">
                            <h4>숲 일기 기록하기</h4>
                            <p>자연과의 교감을 기록하기</p>
                        </li>
                    </ul>
                    <ul class="family_pro_item_list">
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/healing_00.png" alt="별빛 캠핑">
                            <h4>별빛 캠핑</h4>
                            <p>별빛 아래 특별한 하룻밤 보내기</p>
                        </li>
                        <li class="family_pro_item">
                            <img src="/snd_kindergarten/mobile/images/healing_01.png" alt="오두막 영화관">
                            <h4>오두막 영화관</h4>
                            <p>아늑한 숲 속 영화관 즐기기</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- 프뢰벨이미지 -->
        <div id="froebel_img_wrap">
            <p class="froebel_text">
                " 자연이 교실이 되고, 놀이가 배움이 되는 곳”<br> - Friedrich Froebel
            </p>
        </div> 

        <!-- 공지사항 -->
        <section id="notice">
            <div class="notice_menu">
                <h3 class="hidden">공지사항 및 가정통신문 메뉴</h3>
                <ul class="notice_menu_list">
                    <li class="selected"><a href="#;">공지사항</a></li>
                    <li><a href="#;">가정통신문</a></li>
                </ul>
            </div>
            <div class="notice_info_box">
                <h3 class="hidden">공지사항 및 가정통신문</h3>
                <ul class="notice_info_list">
                    <li class="notice_info">
                        <a href="#;">
                            <h4>2025년 여름철 교육시설 안전점검 결과</h4>
                            <p>2025.07.02</p>
                        </a>
                    </li>
                    <li class="notice_info">
                        <a href="#;">
                            <h4>10월 급식 식자재 점검 결과</h4>
                            <p>2025.07.02</p>
                        </a>
                    </li>
                    <li class="notice_info">
                        <a href="#;">
                            <h4>소방시설 안내 및 안전교육</h4>
                            <p>2025.07.02</p>
                        </a>
                    </li>
                </ul>
                <ul class="notice_info_list">
                    <li class="notice_info">
                        <a href="#;">
                            <h4>7월 2주 가정통신문</h4>
                            <p>2025.06.30</p>
                        </a>
                    </li>
                    <li class="notice_info">
                        <a href="#;">
                            <h4>7월 1주 가정통신문</h4>
                            <p>2025.06.30</p>
                        </a>
                    </li>
                    <li class="notice_info">
                        <a href="#;">
                            <h4>6월 5주 가정통신문 - 별지 참조</h4>
                            <p>2025.06.23</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>   

        <!-- 행사일정 -->
        <section id="event">
            <div class="event_title">
                <h2>행사일정</h2>
                <button class="btn_view_more"></button>
            </div>
            <div class="event_box">
                <div class="event_plan_nav">
                    <button class="event_nav_btn">&lt;</button>
                    <span>2025. 07</span>
                    <button class="event_nav_btn">&gt;</button>
                </div>

                <ul class="event_plan_list">
                    <li>
                        <p class="event_date">7</p>
                        <p>소방대피 안전훈련</p>
                    </li>
                    <li>
                        <p class="event_date">12</p>
                        <p>꿀 잼있는 패밀리데이 - 오두막 영화관</p>
                    </li>
                    <li>
                        <p class="event_date">25</p>
                        <p>여름방학식</p>
                    </li>
                </ul>
            </div>
        </section>     

        <!-- 식단 -->
        <section id="meal">
            <div class="meal_title">
                <h2>오늘의 식단</h2>
                <button class="btn_view_more"></button>
            </div>
            <div class="meal_box">
                <div class="meal_plan_nav">
                    <button class="meal_nav_btn">&lt;</button>
                    <span>2025. 07. 24. 목 </span>
                    <button class="meal_nav_btn">&gt;</button>
                </div>
                <div class="meal_img_box">
                    <div>
                        <img src="/snd_kindergarten/mobile/images/lunch.png" alt="점심 사진">
                        <p>점심</p>
                    </div>
                    <div>
                        <img src="/snd_kindergarten/mobile/images/snack.png" alt="오후간식 사진">
                        <p>오후간식</p>
                    </div>
                </div>
            </div>
        </section>     
    </main>
    <!-- 컨텐츠영역끝 -->

    <!-- 하단영역 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/mobile/inc/footer.html" ?> 
    <!-- 하단영역끝 -->
    
</body>
</html>