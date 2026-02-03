document.addEventListener('DOMContentLoaded',()=>{
    const sideMenu=document.querySelectorAll('.sidemenu li');
    const imgBox=document.querySelector('.env_container');


    let selectedMenu=sideMenu[0];

    showContainer(0);


    sideMenu.forEach((item, index)=>{
        item.addEventListener('click', ()=>{
            //alert(index)
            activateSideMenu(index);
            showContainer(index);
        })

    })

    function activateSideMenu(index){
        if(selectedMenu!=sideMenu[index]){
            selectedMenu.classList.remove('active')
            selectedMenu=sideMenu[index]
            selectedMenu.classList.add('active')
        }
    }

    function showContainer(index){
        axios.get(`/snd_kindergarten/data/sub_environment/env_${index}.html`).then((res)=>{
            imgBox.innerHTML=res.data;
            
            const mainImg=imgBox.querySelector('.env_image img');
            const galleryImgs=imgBox.querySelectorAll('.env_gallery img');
            const btnPrev=imgBox.querySelector('.btn_prev');
            const btnNext=imgBox.querySelector('.btn_next');

            if(!mainImg || !galleryImgs || galleryImgs.length === 0 || !btnPrev || !btnNext) {
                return;
            }

            let currentIndex = 0; 
            

            // 메인 이미지 업데이트 함수
            function updateMainImage(i){
                currentIndex = i;
                mainImg.src = galleryImgs[i].src;

                //썸네일 활성화
                galleryImgs.forEach((t,idx)=>{
                    if(idx===i){
                        t.classList.add('active');
                    }else{
                        t.classList.remove('active')
                    }

                })
            }

            //메인 이미지 활성화
            if(galleryImgs.length > 0){
                updateMainImage(0);
            };

            // 썸네일 클릭하면 메인 이미지 변경 
            galleryImgs.forEach((item, i)=>{
                item.addEventListener('click', ()=>{
                    updateMainImage(i);
                });
            });

            //  다음 버튼 
            btnNext.addEventListener('click', ()=>{
                if(currentIndex < galleryImgs.length - 1){
                    currentIndex++;
                    updateMainImage(currentIndex);
                }
            });

            // 이전 버튼 
            btnPrev.addEventListener('click', ()=>{
                if(currentIndex > 0){
                    currentIndex--;
                    updateMainImage(currentIndex);
                }
            });
        })
        .catch((err)=>{
            console.error("환경 HTML 요청 오류:", err);
            imgBox.innerHTML='네트워크 연결이 원활하지 않습니다.';
        });

    }

})




