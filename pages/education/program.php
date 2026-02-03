    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/education/program.css">
    <script src="/snd_kindergarten/js/program_gallery.js"></script> 
</head>
<body>

    <!-- 바로가기메뉴시작 -->
    <ul class="skipmenu_list">
        <li><a href="#mainmenu" class="hidden">메인메뉴바로가기</a></li>    
        <li><a href="#contents_wrap" class="hidden">본문영역바로가기</a></li>
        <li><a href="#footer_wrap" class="hidden">하단영역바로가기</a></li>
    </ul>
    <!-- 바로가기메뉴끝 -->


    <!-- 상단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/header.html" ?>
    <!-- 상단영역끝 -->
    
    
    <!-- 서브비쥬얼영역 시작 -->
    <section id="sub_visual">
        <h2 class="sub_visual_title">교육 안내</h2>
        <video id="subVideo" preload="auto" autoplay muted loop>
            <source src="/snd_kindergarten/images/sub_images/subVideo.mp4" type="video/mp4">
        </video>
    </section>
    <!-- 서브비쥬얼영역 끝 -->


    <!-- 컨텐츠영역시작 -->
    <main id="contents_wrap">
        
        <!-- 패밀리 데이: 소개 -->
        <div id="family_pro_intro_wrap">
            <section id="family_pro_intro">
                <h2 class="title">꿀 잼있는 패밀리 데이</h2>
                <p class="family_pro_text"> 
                    곰돌이 푸가 전하는 모험, 배움, 그리고 사랑의 이야기.<br>
                    신난다 숲에서 가족 모두가 오감으로 느끼며 함께하는 따뜻한 하루가 펼쳐집니다.<br>
                    아이들의 친구 '곰돌이 푸의 숲속 모험'을 모티브로,<br>
                    온 가족이 자연과 교감하며 배우고 성장하는 특별한 숲 체험 프로그램에 여러분을 초대합니다.
                </p>    
                <button>참가신청하기</button>
            </section>
        </div>

        <div id="pro_background"> </div>
        <!-- 패밀리 데이: 소개 -->

        <!-- 패밀리 데이: 활동 -->
        <div id="family_pro_item_wrap">
            <section id="family_pro_item">
                <h3 class="family_pro_item_title">가족과 함께하는 숲속 하루</h3>
                <div class="pro_item_container">

                    <!-- 탐험/Adventure -->
                    <div class="pro_item_box">
                        <h4>
                            <span lang="ko">탐험</span>
                            <span lang="en">Adventure</span>
                        </h4>
                        <ul class="pro_item_list">
                            <li class="adventure_list">
                                <img src="/snd_kindergarten/images/sub_images/adventure_00.png" alt="꿀 항아리를 찾아라 활동">
                                <h5>꿀 항아리를 찾아라!</h5>
                                <p>
                                    지도와 힌트를 들고 숲 곳곳에 숨겨진 푸의 꿀항아리를 가족과 함께 찾아 나서요.<br> 협동하며 모험을 즐기고, 자연 속에서 보물을 발견하는 기쁨을 만끽해요.
                                </p>
                            </li>
                            <li class="adventure_list">
                                <img src="/snd_kindergarten/images/sub_images/adventure_01.png" alt="협동 숲길 레이스 활동">
                                <h5>협동 숲길 레이스</h5>
                                <p>
                                    울퉁불퉁한 숲길을 장애물과 미션을 넘으며 완주하는 협동 경주예요.<br> 함께 웃고 도전하며 하나가 되는 시간이 펼쳐집니다.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- 탐험/Adventure -->

                    <!-- 만들기/Creative -->
                    <div class="pro_item_box">
                        <h4>
                            <span lang="ko">만들기</span>
                            <span lang="en">Creative</span>
                        </h4>
                        <ul class="pro_item_list">
                            <li class="creative_list">
                                <img src="/snd_kindergarten/images/sub_images/creative_00.png" alt="숲속공작소 활동">
                                <h5>숲속 공작소</h5>
                                <p>
                                    자연에서 모은 나뭇잎, 솔방울, 도토리 등으로 창의적인 미술 작품을 만들어요.<br>아이들의 상상력과 손재주가 숲과 어우러져 멋진 결과물을 만들어냅니다.
                                </p>
                            </li>
                            <li class="creative_list">
                                <img src="/snd_kindergarten/images/sub_images/creative_01.png" alt="숲속 음악회 활동">
                                <h5>숲속 음악회</h5>
                                <p>
                                    자연재료로 악기를 만들고 자연이 주는 아름다운 소리와 감성을 들어보아요.<br> 가족과 함께 연주하며 숲속 음악회를 열어요. 
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- 만들기/Creative -->

                    <!-- 배움/Learning -->
                    <div class="pro_item_box">
                        <h4>
                            <span lang="ko">배움</span>
                            <span lang="en">Learning</span>
                        </h4>
                        <ul class="pro_item_list">
                            <li class="learning_list">
                                <img src="/snd_kindergarten/images/sub_images/learning_00.png" alt="숲속 친구를 찾아라 활동">
                                <h5>숲속 친구를 찾아라 </h5>
                                <p>
                                    돋보기와 관찰도구를 들고 숲속의 곤충 친구들을 찾아보는 탐험 놀이예요.<br> 아이들은 작은 생명과 만나며 생태 감수성과 호기심을 키웁니다.
                                </p>
                            </li>
                            <li class="learning_list">
                                <img src="/snd_kindergarten/images/sub_images/learning_01.png" alt="숲 일기 기록하기 활동">
                                <h5>숲 일기 기록하기</h5>
                                <p>
                                    오늘 느낀 숲의 소리, 냄새, 만진 촉감을 돌아보며 가족과 함께 느낀 감정과 추억을<br> 그림이나 글로 표현해요. 자연과의 교감, 가족 간의 마음을 기록해요. 
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- 배움/Learning -->

                    <!-- 휴식/Healing -->
                    <div class="pro_item_box">
                        <h4>
                            <span lang="ko">휴식</span>
                            <span lang="en">Healing</span>
                        </h4>
                        <ul class="pro_item_list">
                            <li class="healing_list">
                                <img src="/snd_kindergarten/images/sub_images/healing_00.png" alt="별빛 캠핑 활동">
                                <h5>별빛 캠핑</h5>
                                <p>
                                    자숲 속에 텐트를 치고 별빛 아래 가족과 함께 만드는 특별한 하룻밤을 보내요.<br> 도란도란 이야기를 나누며 반딧불이처럼 반짝이는 추억을 만드는 밤이 됩니다.
                                </p>
                            </li>
                            <li class="healing_list">
                                <img src="/snd_kindergarten/images/sub_images/healing_01.png" alt="오두막 영화관 활동">
                                <h5>오두막 영화관</h5>
                                <p>
                                    가족과 함께 자연 다큐, 애니메이션 영화를 보며  아늑한 숲 속 영화관을 즐겨요.<br> 바람 소리, 벌레 소리와 함께하는 낭만이 특별한 하루를 마무리합니다.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- 휴식/Healing -->
                </div>
                </section>
            </div>
            <!-- 패밀리 데이: 활동 -->

            <!-- 패밀리 데이: 안내 -->
            <div id="family_day_info_wrap">
            <section id="family_day_info">
                <div class="info_imgbox">
                    <img src="/snd_kindergarten/images/sub_images/family_day_img.png" alt="신난다 놀이터 전경">
                </div>
                <div class="info_txtbox">
                    <h3>꿀 잼있는 패밀리 데이 안내</h3>
                    <ul class="info_list">
                        <li><span>일시:</span> 매주 둘째주, 넷째주 토요일 오전 10시</li>
                        <li><span>장소:</span> 신난다 숲 체험장</li>
                        <li><span>준비물:</span> 편안한 복장, 모자, 개인물통</li>
                    </ul>
                    <div class="family_day_notice">
                        <h4>꼭 기억해주세요 !</h4>
                        <ul>
                            <li>- 야외활동이므로 썬크림, 모기기피제 지참해주세요.</li>
                            <li>- 아이들은 반드시 보호자와 동행해요.</li>
                            <li>- 환경을 위해 쓰레기는 집으로 가져가요.</li>
                            <li>- 프로그램마다 소요시간이 달라질 수 있습니다.</li>
                            <li>- 기상 예보에 따라 날짜변경 및 취소될 수 있는 점 양해부탁드립니다.</li>
                        </ul>
                    </div>
                </div>
            </section>
            </div>
            <!-- 패밀리 데이: 안내 -->

            <!-- 신난다 숲 가족 갤러리 : 슬라이드 스와이퍼-->
            <div id="family_pro_gallery_wrap">
                <section id="family_pro_gallery">
                    <h3 class="family_pro_gallery_title">신난다 숲 가족 갤러리</h3>
                    <div class="swiper family_gallery_swiper gallery_slide_container">
                        <div class="swiper-wrapper gallery_slide_list">
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/sub_images/family_pro_gallery_00.png" alt="꿀잼있는 패밀리데이 활동01">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/sub_images/family_pro_gallery_01.png" alt="꿀잼있는 패밀리데이 활동02">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/sub_images/family_pro_gallery_02.png" alt="꿀잼있는 패밀리데이 활동03">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/sub_images/family_pro_gallery_03.png" alt="꿀잼있는 패밀리데이 활동04">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/sub_images/family_pro_gallery_04.png" alt="꿀잼있는 패밀리데이 활동05">
                            </div>
                            <div class="swiper-slide">
                                <img src="/snd_kindergarten/images/sub_images/family_pro_gallery_05.png" alt="꿀잼있는 패밀리데이 활동06">
                            </div>
                        </div>

                        <!-- 좌우 버튼 -->
                        <div class="swiper-button-prev" id="slide_prev_btn"></div>
                        <div class="swiper-button-next" id="slide_next_btn"></div>
                    </div>
                </section>
            </div>

    </main>
    <!-- 컨텐츠영역끝 -->


    <!-- 하단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/footer.html" ?>
    <!-- 하단영역 끝 -->

</body>
</html>

                        