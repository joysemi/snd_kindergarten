    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/about/history.css">
</head>

<body>

    <!-- 바로가기메뉴시작 -->
    <ul class="skipmenu_list">
        <li><a href="#mainmenu" class="hidden">메인메뉴바로가기</a></li>    
        <li><a href="#contents_wrap" class="hidden">본문영역바로가기</a></li>
        <li><a href="#footer_wrap" class="hidden">하단영역바로가기</a></li>
    </ul>
    <!-- 바로가기메뉴끝 -->


    <!-- 상단영역 시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/header.html" ?>    
    <!-- 상단영역 끝 -->
    

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
            <h2 class="title">신난다 연혁</h2>

            <div class="history_wrap">
                <h3 class="sub_title">신난다 숲 유치원의 설립부터 지금까지</h3>

                <div class="history_container">
                    <!-- 화살표 -->
                    <div class="history_arrow">
                        <svg width="40" height="1108" viewBox="0 0 40 1108" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="연혁 화살표">
                            <line x1="20" y1="20" x2="20" y2="1098" stroke="#c0c6a5" stroke-width="2" />
                            <circle cx="20" cy="1098" r="6" fill="#c0c6a5" />
                            <polygon points="15,20 25,20 20,5" fill="#c0c6a5" />
                        </svg>
                    </div>
                    
                    <!-- 연혁 각 아이템 -->
                    <div class="history_item_wrap">
                        <div class="history_item">
                            <div class="year">2025년</div>
                            <div class="event">2025.03.04 제4회 입학식</div>
                        </div>

                        <div class="history_item">
                            <div class="year">2024년</div>
                            <div class="event">2024.03.02 제3회 입학식</div>
                        </div>

                        <div class="history_item second">
                            <div class="event">2024.01.20 교실 1개 증설 및 인가인원 변경</div>
                        </div>

                        <div class="history_item">
                            <div class="year">2023년</div>
                            <div class="event">2023.03.02 제2회 입학식</div>
                        </div>

                        <div class="history_item">
                            <div class="year">2022년</div>
                            <div class="event">2022.05.27 제1회 입학식</div>
                        </div>

                        <div class="history_item second">
                            <div class="event">2022.03.01 우희순 원장 취임</div>
                        </div>

                        <div class="history_item">
                            <div class="year">2021년</div>
                            <div class="event">2021.10.15 신나다숲유치원 5학급 인가</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>              
    <!-- 컨텐츠영역끝 -->


    <!-- 하단영역 시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/footer.html" ?>
    <!-- 하단영역 끝 -->

</body>
</html>