    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/education/parking.css">
</head>

<body>
    
    <!-- 바로가기메뉴시작 -->
    <ul class="skipmenu_list">
        <li><a href="#mainmenu" class="hidden">메인메뉴바로가기</a></li>    
        <li><a href="#access_wrap" class="hidden">본문영역바로가기</a></li>
        <li><a href="#footer_wrap" class="hidden">하단영역바로가기</a></li>
    </ul>
    <!-- 바로가기메뉴끝 -->


    <!-- 상단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/header.html" ?>
    <!-- 상단영역끝 -->


    <!-- 서브비쥬얼영역 시작 -->
    <section id="sub_visual">
        <h2 class="sub_visual_title">
            <?php
            $menu = isset($_GET['menu']) ? $_GET['menu'] : 'education';
            $titles = array(
                'story' => '신난다 이야기',
                'news' => '유치원 소식',
                'admission' => '입학 안내',
                'education' => '교육 안내'
            );
            echo isset($titles[$menu]) ? $titles[$menu] : '교육 안내';
            ?>
        </h2>
        <video id="subVideo" preload="auto" autoplay muted loop>
            <source src="/snd_kindergarten/images/sub_images/subVideo.mp4" type="video/mp4">
        </video>
    </section>
    <!-- 서브비쥬얼영역 끝 -->


    <!-- 컨텐츠영역시작 -->
    <div id="access_wrap">
        <div class="access">
            <div class="icon_box">!</div>
            <div class="access_title">
                현재 <span> 페이지 준비중 </span> 입니다.
            </div>
            <div class="access_text">
               가능한 빠른 시일 내에 업데이트하겠습니다.
            </div>
            <div class="btn_box">
                <a href="/snd_kindergarten/index.php" class="btn">홈으로 이동</a>
                <a href="#;" class="btn">로그인하기</a>
            </div>
        </div>
    </div>
    <!-- 컨텐츠영역끝 -->


    <!-- 하단영역 시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/footer.html" ?>
    <!-- 하단영역 끝 -->


</body>
</html>