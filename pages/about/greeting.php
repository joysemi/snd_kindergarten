    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/about/greeting.css">
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
            <h2 class="title">인사말</h2>

            <div class="greeting_wrap">
                <h3 class="sub_title">신난다 숲 유치원의 방문을 환영합니다.</h3>

                <div class="greeting_container">             
                    <div class="greeting_text">
                        <p>
                            신난다 숲 유치원은 도시에서 자라는 아이들이 자연 속에서 마음껏 뛰놀며 몸과 마음을 건강하게 키워가기를 바라는 마음으로 시작되었습니다.
                        </p>
                        <p>
                            숲은 아이들에게 가장 자연스러운 놀이터이자, 스스로 자라고 배우는 교실입니다. 
                            <br>
                            저희 유치원은 자연과 어우러지는 다양한 활동을 통해 아이들이 살아가는 힘을 기를 수 있도록 돕습니다. 또한 매일의 생활 속에서 인성과 감성이 자랄 수 있도록 따뜻한 돌봄과 세심한 관찰로 아이 한 명 한 명의 기질과 특성을 이해하고,  그에 맞는 환경을 함께 만들어갑니다. 
                        </p>
                        <p>
                            정서적 안정 위에서 진짜 배움이 시작된다고 믿기에, 우리 교직원 모두는 아이들이 ‘신나게’ 자랄 수 있는 공간을 만들기 위해 진심을 다하고 있습니다. 신난다 숲 유치원은 아이들의 무한한 가능성이 숲 속에서 싹을 틔우고, 그 뿌리를 단단히 내릴 수 있도록 늘 함께 걷겠습니다.
                        </p>
                        <p>
                            감사합니다.
                        </p>
                        <p class="name">
                            신난다 숲 유치원 원장 우회순 올림
                        </p>
                    </div>
                    
                    <div class="face_img"> 
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="원장 사진">
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