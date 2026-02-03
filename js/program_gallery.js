//슬라이드 스와이퍼
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.family_gallery_swiper', {
        slidesPerView: 3,
        spaceBetween: 36,
        navigation: {
            nextEl: '#slide_next_btn',
            prevEl: '#slide_prev_btn',
        },
        breakpoints: {
            980: {
                slidesPerView: 2,
                spaceBetween: 24
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 16
            }
        }
    });
});
