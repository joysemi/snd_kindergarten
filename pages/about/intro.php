    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/about/intro.css">
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
        <h2 class="sub_visual_title">유치원 소개</h2>
        <video id="subVideo" preload="auto" autoplay muted loop>
            <source src="/snd_kindergarten/images/sub_images/subVideo.mp4" type="video/mp4">
        </video>
    </section>
    <!-- 서브비쥬얼영역 끝 -->


    <!-- 컨텐츠영역시작 --> 
    <main id="contents_wrap">
        <section class="section_inner">
            <h2 class="title">신난다 소개</h2>

            <!-- 원훈 및 교육목표 -->
            <div id="motto_goals">
                <h3 class="intro_content_title">원훈 및 교육목표</h3>
                <p class="motto_title">"잘 놀고 잘 먹고 잘 자고"</p>
                <div id="goals_wrap">
                    <ul class="goals_list">
                        <li>
                            <div class="goal_item_title">
                                <h4>유아상</h4>
                            </div>
                            <div class="goal_item_box">
                                <p>
                                    스스로 탐색하고<br>
                                    자연과 교감하며<br>
                                    함께 자라는 어린이
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="goal_item_title">
                                <h4>교사상</h4>
                            </div>
                            <div class="goal_item_box">
                                <p>
                                    아이가 자라는<br>
                                    속도만큼 천천히<br>
                                    기다려주는 교사 
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="goal_item_title">
                                <h4>부모상</h4>
                            </div>
                            <div class="goal_item_box">
                                <p>
                                    과정의 가치를 믿고<br>
                                    함께 성장하는<br>
                                    따뜻한 부모
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 원훈 및 교육목표 -->

            <!-- 원목 및 원화-->
            <div id="snd_symbol">
                <h3 class="intro_content_title">원목 및 원화</h3>
                <div id="symbol_box_wrap">
                    <div class="symbol_box">
                        <img src="/snd_kindergarten/images/sub_images/symbol_tree.png" alt="원목 소나무 사진">
                        <p>소나무</p>
                        <p>끈기, 건강, 변함없는 사랑</p>
                    </div>
                    <div class="symbol_box">
                        <img src="/snd_kindergarten/images/sub_images/symbol_flower.png" alt="원화 들국화 사진">
                        <p>들국화</p>
                        <p>자연스러움, 꾸밈없는 아름다움</p>
                    </div>
                </div>
            </div>
            <!-- 원목 및 원화-->

            <!-- 로고 -->
            <div id="logo_info">
                <div id="logo_info_box">
                    <h3 class="intro_content_title">로고</h3>
                    <img src="/snd_kindergarten/images/logo_sinnanda.svg" alt="로고 이미지">
                    <p>신난다 숲 유치원의 로고는 웃는 얼굴로 아이, 부모, 교사를 상징하며 서로의 행복한 소통을 표현합니다.<br> 나무는 자연친화적인 교육 철학과 아이들의 신남 가득한 성장을 의미합니다.</p>
                </div>
            </div>
            <!-- 로고 -->

            <!-- 원가 -->
            <div id="snd_song">
                <div id="snd_song_box">
                    <h3 class="intro_content_title">원가</h3>
                    <p>
                    <span>1절</span>
                        숲길 따라 달려가요 햇살이 웃는 아침에 나무 친구 인사하고 새소리에 귀 기울여요<br>
                        신난다 신난다 숲 유치원 함께 웃고 함께 자라요 잘 놀고 잘 먹고 잘 자라요 우리의 하루는 반짝반짝  
                    </p>
                    <p>
                    <span>2절</span>
                        흙길 위에 손을 잡고 옹기종기 모여 앉아 이야기꽃 피어나고 하늘만큼 꿈도 자라요<br>
                        신난다 신난다 숲 유치원 함께 웃고 함께 자라요 잘 놀고 잘 먹고 잘 자라요 우리의 하루는 반짝반짝 
                    </p>
                    <button id="song_download_btn">음원다운로드</button>
                </div>
            </div>
            <!-- 원가 -->

            <div id="bottom_img"> <!-- css background 처리 --> </div>
        </section> 
    </main>
    <!-- 컨텐츠영역끝 -->


    <!-- 하단영역 시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/footer.html" ?>
    <!-- 하단영역 끝 -->

    
</body>
</html>