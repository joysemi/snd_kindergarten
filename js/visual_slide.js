document.addEventListener('DOMContentLoaded',()=>{
    const visualWrap=document.querySelector('#visual_wrap')
    const visualLi=document.querySelectorAll('#visual_list>li')
    const nextBtn=document.querySelector('#next_btn')
    const prevBtn=document.querySelector('#prev_btn')
    const dot=document.querySelectorAll('#slide_btn_list>li')

    let visualWidth=visualWrap.offsetWidth;
    //console.log(visualWidth)
    let currentIndex=0;
    let nextIndex=1;
    let timer=null;
    let selectedDot=dot[0];

    autoPlay()

    //반응형 함수
    function visualReset(){
        visualWidth=visualWrap.offsetWidth;
    }
    
    //초기세팅
    gsap.set(visualLi, {left:visualWidth, opacity:0, scale:1.4})
    gsap.set(visualLi[0], {left:0, opacity:1, scale:1})
    gsap.set(visualLi[0].children[0].children[0], {top:0, opacity:1})
    gsap.set(visualLi[0].children[0].children[1], {top:0, opacity:1})

    //이벤트 함수
    window.addEventListener('resize', visualReset)

    nextBtn.addEventListener('click', clickNextBtn)
    prevBtn.addEventListener('click', clickPrevBtn)

    visualWrap.addEventListener('mouseenter', stopAutoPlay)
    visualWrap.addEventListener('mouseleave', autoPlay)

    dot.forEach((item, index)=>{
        item.addEventListener('mouseenter',()=>{
            if(index === currentIndex) return;
            activateDot(index)
            showSlide(index)
        })
    })

    //자동재생과 멈춤
    function autoPlay(){
        timer=setInterval(clickNextBtn, 4000)
    }

    function stopAutoPlay(){
        clearInterval(timer)
    }


    //다음버튼 슬라이드
    function clickNextBtn(){
        nextIndex=currentIndex+1;
        if(nextIndex>=visualLi.length){
            nextIndex=0; 
        }
        slideVisualNext()
        activateDot(nextIndex)
    }
    //이전버튼 슬라이드
    function clickPrevBtn(){
        nextIndex=currentIndex-1;
        if(nextIndex<0){
            nextIndex=visualLi.length-1; 
        }
        slideVisualPrev()
        activateDot(nextIndex)
    }

    //도트에 마우스 올리면 활성화
    function activateDot(index){
        if (selectedDot!==null && selectedDot!==dot[index]){
            selectedDot.classList.remove('selected')
        }
        selectedDot=dot[index];

        if (selectedDot!==null){
            selectedDot.classList.add('selected')
        } 
    }    

    //도트 슬라이드 보여주기
    function showSlide(index){
        nextIndex=index;
        if(nextIndex === currentIndex) return;

        if(nextIndex>currentIndex){
            slideVisualNext()
        }else if(nextIndex<currentIndex){
            slideVisualPrev()
        }
    }

    //다음슬라이드넘기기(공동함수)
    function slideVisualNext(){
        gsap.to(visualLi[currentIndex], {left:-visualWidth, opacity:0, duration:0.5, ease:'power1.out' })

            gsap.set(visualLi[nextIndex], {left:visualWidth, opacity:1, scale:1.4})
            gsap.set(visualLi[nextIndex].children[0].children[0], {top:100, opacity:0})
            gsap.set(visualLi[nextIndex].children[0].children[1], {top:100, opacity:0})
            gsap.to(visualLi[nextIndex], {left:0, opacity:1, duration:0.5, ease:'power1.out', onComplete:()=>{
                gsap.to(visualLi[nextIndex], {scale:1, duration:0.5, ease:'power1.out', onComplete:()=>{
                    gsap.to(visualLi[nextIndex].children[0].children[0], {top:0, opacity:1, duration:0.5, ease:'power1.out' })
                    gsap.to(visualLi[nextIndex].children[0].children[1], {delay:0.2, top:0, opacity:1, duration:0.5, ease:'power1.out'})
                }})
                
        }}) 

        currentIndex=nextIndex;
    }

    //이전슬라이드넘기기(공동함수)
    function slideVisualPrev(){
        gsap.to(visualLi[currentIndex], {left:visualWidth, opacity:0, duration:0.5, ease:'power1.out' })

            gsap.set(visualLi[nextIndex], {left:-visualWidth, opacity:1, scale:1.4})
            gsap.set(visualLi[nextIndex].children[0].children[0], {top:100, opacity:0})
            gsap.set(visualLi[nextIndex].children[0].children[1], {top:100, opacity:0})
            gsap.to(visualLi[nextIndex], {left:0, opacity:1, duration:0.5, ease:'power1.out', onComplete:()=>{
                gsap.to(visualLi[nextIndex], {scale:1, duration:0.5, ease:'power1.out', onComplete:()=>{
                    gsap.to(visualLi[nextIndex].children[0].children[0], {top:0, opacity:1, duration:0.5, ease:'power1.out' })
                    gsap.to(visualLi[nextIndex].children[0].children[1], {delay:0.2, top:0, opacity:1, duration:0.5, ease:'power1.out'})
                }})               
                
            }})

        currentIndex=nextIndex;
    }

}) 