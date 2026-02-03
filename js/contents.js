window.addEventListener('load',()=>{

    forestTabMenu();
    contentsSlide();
    
})

function contentsSlide(){

    //반응형 함수
    function visualReset(){
        if(typeof ScrollTrigger!=='undefined'){
            ScrollTrigger.refresh();
        }
    }
    window.addEventListener('resize', visualReset)

    // 원형메뉴 애니메이션
    // gsap.set(circleLi, {top:100, opacity:0}) > 초기세팅은 CSS로 설정
    const circleLi=document.querySelectorAll('.circle_menu_list>li')

    circleLi.forEach((item, index)=>{

        gsap.to(item, {top:0, opacity:1, delay:0.2*index, duration:0.5, ease:'power1.out', scrollTrigger:{
            trigger: '.circle_menu_list',
            start: 'top 50%',
        }})
    })
    
    //숲공간 애니메이션
    gsap.to('#forest_space', {y:0, opacity:1, duration:0.8, ease: 'power1.out', scrollTrigger:{
        trigger: '#forest_space',
        start: '0% 70%',
       //markers: true,
    }})

    // 꿀잼있는 패밀리데이 애니메이션
    gsap.to('#intro_box', {y:0, opacity:1, duration:0.8, ease:'power2.out',scrollTrigger:{
        trigger:'#intro_box',
        start:'top 80%',
        //markers:true,
    }})
    gsap.to('.family_pro_item', {y: 0, opacity: 1, duration:0.8, stagger: 0.2, ease: "power2.out", scrollTrigger:{
        trigger: '#family_pro_list_box',
        start: 'top 80%',
    }})

    // 정보영역 애니메이션
    gsap.to('.info_large_box', {scale: 1, opacity: 1, duration:0.8, stagger: 0.2, ease: "power2.out", scrollTrigger:{
        trigger: '#info_wrap',
        start: 'top 40%',
       // markers: true,
    }})
}

//숲 공간 탭메뉴 활성화, swiper 인터렉션
//스와이퍼와 충돌되지 않게 로직 단계별로 천천히 생각하기
function forestTabMenu(){
    const tabMenu=document.querySelectorAll('.forest_space_menu_list>li')
    const imgBox=document.querySelector('.forest_space_img_box');

    let selectedMenu=tabMenu[0];
    
    activateTabMenu(0)
    showImgList(0)

    tabMenu.forEach((item, index)=>{
        item.addEventListener('click', ()=>{
            //alert(index)
            activateTabMenu(index)
            showImgList(index)
        })
    })

    function activateTabMenu(index){
        if(selectedMenu!==tabMenu[index]){
            selectedMenu.classList.remove('selected')
            selectedMenu=tabMenu[index]
            selectedMenu.classList.add('selected')
        }
    }

    function showImgList(index){
        axios.get(`/snd_kindergarten/data/main_forest/main_forest_data${index}.html`).then((res)=>{
            imgBox.innerHTML=res.data
            const imgList=imgBox.querySelectorAll('.swiper');

            if(imgList.length > 0){
                gsap.set(imgList, {display:'flex'})
            } //querySelectorAll은 항상 NodeList를 반환. 비어있어도 falsy가 아니므로 if(imgList)는 항상 true

            //스와이퍼
            imgList.forEach((swiperEl) => {
                new Swiper(swiperEl, {
                loop: false,
                slidesPerView: 1.2,
                spaceBetween: 28,
                navigation: {
                    nextEl: swiperEl.querySelector('.swiper-button-next'),
                    prevEl: swiperEl.querySelector('.swiper-button-prev'),
                },
                speed: 600,
                grabCursor: true,
                effect: 'slide',
                });
            });
        })
        .catch((err)=>{
            console.error("환경 HTML 요청 오류:", err);
            imgBox.innerHTML='네트워크 연결이 원활하지 않습니다.';
        });
    }
}
