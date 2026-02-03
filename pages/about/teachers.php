    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/start.html" ?>
    <link rel="stylesheet" href="/snd_kindergarten/css/pages/about/teachers.css">
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
            <h2 class="title">교직원 소개</h2>

            <div class="teachers_wrap">
                <h3 class="sub_title">신난다의 선생님을 소개합니다.</h3>

                <!-- grid: 3열 3행 -->
                <div class="teachers_container">
                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 이사장">
                        <p class="teacher_name">000 이사장</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 원장">
                        <p class="teacher_name">000 원장</p>
                    </div>
                    
                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 부원장">
                        <p class="teacher_name">000 부원장</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 새싹반 담임 (5세)">
                        <p class="teacher_name">000 새싹반 담임 (5세)</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 꽃잎반 담임 (6세)">
                        <p class="teacher_name">000 꽃잎반 담임 (6세)</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 산들반 담임 (7세)">
                        <p class="teacher_name">000 산들반 담임 (7세)</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 새싹반 부담임">
                        <p class="teacher_name">000 새싹반 부담임</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 꽃잎반 부담임">
                        <p class="teacher_name">000 꽃잎반 부담임</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 산들반 부담임">
                        <p class="teacher_name">000 산들반 부담임</p>
                    </div>
                </div>
                <!-- grid: 3열 3행 -->

                <!-- grid(마지막줄) 1열 4행 -->
                <div class="teachers_container last_row">
                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 별하늘반 교사">
                        <p class="teacher_name">000 별하늘반 교사</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 행정실장">
                        <p class="teacher_name">000 행정실장</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 조리사">
                        <p class="teacher_name">000 조리사</p>
                    </div>

                    <div class="teacher_item">
                        <img src="/snd_kindergarten/images/sub_images/teacher_face_img.png" alt="000 차량기사">
                        <p class="teacher_name">000 차량기사</p>
                    </div>
                </div>
                <!-- grid(마지막줄) 1열 4행 -->
                 
            </div>
        </section>
    </main>              
    <!-- 컨텐츠영역끝 -->


    <!-- 하단영역 시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/snd_kindergarten/inc/footer.html" ?>
    <!-- 하단영역 끝 -->

</body>
</html>