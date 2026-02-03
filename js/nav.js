document.addEventListener('DOMContentLoaded',()=>{

    const mainMenu=document.querySelectorAll('#mainmenu_list>li>a');
    const subMenu=document.querySelectorAll('.submenu_list');
    const headerWrap=document.querySelector('#header_wrap');

    let selectedMenu=null;
   
    //이벤트 함수
    for(const item of mainMenu){
        item.addEventListener('mouseenter', showSubMenu)
        item.addEventListener('focus', showSubMenu)
    }
    for(const item of subMenu){
        item.addEventListener('mouseenter', showSubMenu)
        item.addEventListener('focus', showSubMenu)
    }
    
    headerWrap.addEventListener('mouseleave', hideSubMenu)


    //서브메뉴 보이기
    function showSubMenu(){

        if(selectedMenu!=null && selectedMenu!=this){
            selectedMenu.parentElement.classList.remove('selected')          

        }
        
        if(selectedMenu!=this){
            selectedMenu=this;  
            selectedMenu.parentElement.classList.add('selected')
        }

        gsap.to(headerWrap, {height:380, duration:0.5, ease:'power1.out'})
        gsap.set(subMenu, {delay:0.2, display:'block'})
        gsap.to(subMenu, {delay:0.2, opacity:1, duration:0.3, ease:'power1.out'})

    }
  
    //서브메뉴 숨기기
    function hideSubMenu(){
        gsap.to(headerWrap, {height:130, duration:0.5, ease:'power1.out'})
        gsap.set(subMenu, {delay:0.2, display:'none'})
        gsap.to(subMenu, {delay:0.2, opacity:0, duration:0.3, ease:'power1.out'})

        if(selectedMenu!=null){
            selectedMenu.parentElement.classList.remove('selected')
            selectedMenu = null;  
        }
    }
})




