const mySwiper = new Swiper('.swiper.mySwiper', {

    loop: true,
    loopedSlides: 1,
    slidesPerView: 3,
    spaceBetween: 32,
    speed: 4000,
    slideToClickedSlide: true,
    width: 1150,
    
    autoplay: {
        "delay": 3000,
    },

    breakpoints: {
        
        1202: {
            slidesPerView: 2,
            width: 850,
        },
    }

})

// const empreeSwiper = new Swiper('.empreeSwiper', {
//     // loop: true,
//     // slidesPerView: 1,
//     // spaceBetween: 24,
//     // createElements: true,
    

//     // // navigation: {
//     // //     nextEl: '.swiper-button-next',
//     // //     prevEl: '.swiper-button-prev',
//     // // },
// })