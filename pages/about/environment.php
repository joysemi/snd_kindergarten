    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/about/environment.css">
    <script src="/snd_kindergarten/js/sub_environment.js"></script>
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
            <h2 class="title">신난다 환경</h2>

            <div class="environment_wrap">
                <h3 class="sub_title">신난다 숲 유치원의 교육환경을 소개합니다.</h3>

                <!-- 신난다 환경 페이지  -->
                <div id="env_contents_wrap">

                    <!-- 왼쪽 메뉴 -->
                    <div class="sidemenu">
                        <ul>
                            <li class="active"><a href="#;">유치원 전경</a></li>
                            <li><a href="#;">출입구/로비</a></li>
                            <li><a href="#;">실내 도서실</a></li>
                            <li><a href="#;">교실/ 화장실</a></li>
                            <li><a href="#;">대강당/ 실내 놀이터</a></li>
                            <li><a href="#;">교사실</a></li>
                            <li><a href="#;">신난다 숲 - 옹기종기터</a></li>
                            <li><a href="#;">신난다 숲 - 나무놀이터</a></li>
                            <li><a href="#;">신난다 숲 - 밧줄놀이터</a></li>
                            <li><a href="#;">신난다 숲 - 창작놀이터</a></li>
                        </ul>
                    </div>

                    <!-- 신난다 환경 본문 영역  -->
                    <div class="env_container">
                        <!-- 메인 이미지 -->
                        <!-- 이미지 갤러리 -->
                        <!-- 이미지 설명 -->
                        <!-- 좌우버튼 -->
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


