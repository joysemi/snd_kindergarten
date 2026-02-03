window.addEventListener('load',()=>{
    
    forestTabMenu()
    familyTabMenu()
    noticeTabMenu()

})


//숲 공간 탭메뉴 활성화
function forestTabMenu(){
    const tabMenu=document.querySelectorAll('.forest_space_menu_list>li')
    const imgList=document.querySelectorAll('.forest_space_img_box>div')

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
        if(selectedMenu!=tabMenu[index]){
            selectedMenu.classList.remove('selected')
        }
        if(selectedMenu!=tabMenu[index]){
            selectedMenu=tabMenu[index]
            selectedMenu.classList.add('selected')
        }
    }

    function showImgList(index){
        imgList.forEach((slide, i)=>{
            if(i==index){
                gsap.set(slide, {display:'flex'})
            }else{
                gsap.set(slide, {display:'none'})
            }
        })

    }
    
}

//꿀잼있는 패밀리 데이 
function familyTabMenu(){
    const tabMenu=document.querySelectorAll('.family_pro_category_list>li')
    const imgList=document.querySelectorAll('.family_pro_item_list')

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
        if(selectedMenu!=tabMenu[index]){
            selectedMenu.classList.remove('selected')
        }
        if(selectedMenu!=tabMenu[index]){
            selectedMenu=tabMenu[index]
            selectedMenu.classList.add('selected')
        }
    }

    function showImgList(index){
        imgList.forEach((slide, i)=>{
            if(i==index){
                gsap.set(slide, {display:'flex'})
            }else{
                gsap.set(slide, {display:'none'})
            }
        })

    }
    
}

//공지사항&가정통신문
function noticeTabMenu(){
    const tabMenu=document.querySelectorAll('.notice_menu_list>li')
    const noticeList=document.querySelectorAll('.notice_info_list')

    let selectedMenu=tabMenu[0];

    activateTabMenu(0)
    showNoticeList(0)

    tabMenu.forEach((item, index)=>{
        item.addEventListener('click', ()=>{
            //alert(index)
            activateTabMenu(index)
            showNoticeList(index)
        })
    })

    function activateTabMenu(index){
        if(selectedMenu!=tabMenu[index]){
            selectedMenu.classList.remove('selected')
        }
        if(selectedMenu!=tabMenu[index]){
            selectedMenu=tabMenu[index]
            selectedMenu.classList.add('selected')
        }
    }

    function  showNoticeList(index){
        noticeList.forEach((slide, i)=>{
            if(i==index){
                gsap.set(slide, {display:'flex'})
            }else{
                gsap.set(slide, {display:'none'})
            }
        })
    }
    
}

