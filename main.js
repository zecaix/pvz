let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.add('active');
}

document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');

    if(window.scrollY > 0){
    document.querySelector('.header').classList.add('active')
}else{
    document.querySelector('.header').classList.add('active');
}
};

window.onload = ()=>{
    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active')
    }else{
        document.querySelector('.header').classList.add('active');
    }   
};



window.onload = () =>{
    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active')
    }else{
        document.querySelector('.header').classList.add('active');
    }   
};

var swiper = new Swiper(".home-slider",{
    loop:true,
    grabCursor:true,
    navigation: {
    nextE1: ".swiper-button-next",
    prevE1: ".swiper-button-prev",
    },
    });

    var swiper = new Swiper(".product-slider",{
        loop:true,
        grabCursor:true,
        spaceBetween: 20,
        navigation: {
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev",
        },
        breackpoints:{
            0:{
                slidesPerView:1,
            },
            640:{
                slidesPerView:2,
            },
            768:{
                slidesPerView:3,
            },
            1024:{
                slidesPerView:4,
            },
        },
    });



