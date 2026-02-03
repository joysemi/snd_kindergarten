    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/about/location.css">
    <script src="/snd_kindergarten/js/location_map.js"></script>

    <!-- 네이버 지도 API -->
    <script type="text/javascript" src="https://oapi.map.naver.com/openapi/v3/maps.js?ncpKeyId=zbnujbni5r"></script>

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
            <h2 class="title">오시는 길</h2>

            <div class="location_wrap">
                <h3 class="sub_title">자연과 함께하는 따뜻한 여정</h3>

                <div class="location_container">
                    <!-- 네이버 지도 API -->
                    <div id="map"></div>

                    <div class="address_info">
                        <p><strong>주소</strong> 경기도 고양시 덕양구 권율대로 696-9 신나다 숲유치원</p>
                        <p><strong>버스</strong> ○○번, ○○번, ○○번 → ○○ 정류장 하차, 도보 ○분</p>
                        <p><strong>지하철</strong> ○○선 ○○역 하차 → ○번 출구, 도보 ○분</p>
                        <p><strong>자가용</strong> 주차 가능 <span>(어린이보호구역 내 서행 및 안전운전 부탁드립니다.)</span></p>
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