window.addEventListener('load',()=>{
        const header=document.querySelector('header')
        const mobileMenu=document.querySelector('#mobilemenu')
        const menuBtn=document.querySelector('.mobilemenu_icon')
        const closeBtn=document.querySelector('.mobileclose_btn')
        const grayLayer=document.createElement('div')
        grayLayer.id='mobile_graylayer'
        const mainMenu=document.querySelectorAll('#mobilemenu_list>li')

        let selectedMenu=null;
        let closeHeight=50;

        menuBtn.addEventListener('click', mobileMenuOpen)
        closeBtn.addEventListener('click', mobileMenuClose)

        for(item of mainMenu){
            item.addEventListener('click', showSubMenu)
        }

        function mobileMenuOpen(){
            header.append(grayLayer)
            gsap.set(grayLayer, {display:'block'})
            gsap.set('body,html', {overflow:'hidden'})
            gsap.set(mobileMenu, {display:'block'})
            gsap.to(mobileMenu,{right:0, duration:0.5, ease:'power1.out'})
        }

        function mobileMenuClose(){
            gsap.set(grayLayer, {display:'none'})
            gsap.to(mobileMenu, {right:-80+'vw', duration:0.5, ease:'power1.out', onComplete:()=>{
                gsap.set(mobileMenu,{display:'none'})
                gsap.set('body,html', {overflow:'visible'})
            }})

            if(selectedMenu!=null&&selectedMenu!=this){
                gsap.set(selectedMenu,{height:closeHeight})
                selectedMenu.classList.remove('selected')
                selectedMenu=null;
            }
        }

        function showSubMenu(){
            if(selectedMenu!=null&&selectedMenu!=this){
                gsap.to(selectedMenu,{height:closeHeight})
                selectedMenu.classList.remove('selected')
            }

            if(selectedMenu==this){
                gsap.to(this, {height:closeHeight, duration:0.3, ease:'power1.out'})
                this.classList.remove('selected')
                selectedMenu=null;
            }else{
                selectedMenu=this;
                gsap.to(selectedMenu, {height:selectedMenu.scrollHeight, duration:0.3, ease: 'power1.out'})
                selectedMenu.classList.add('selected')
            }
        }

    })


    