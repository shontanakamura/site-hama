'use strict';


  const humburger = document.querySelector('.humburgerMenu');
  const link = document.querySelector('.link');
  const link_li = document.querySelector('.link li');
  
  humburger.addEventListener('click',()=>{
    link.classList.toggle('open');
  })
  
  var mySwiper = new Swiper('.swiper-container', {
    autoplay: {
      delay: 3000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
      reverseDirection: false
    }
  });

  new Glide('.glide', {
    startAt: 1,
    perView: 1,
    peek: {
      before: 0,
      after: 50
    }
  }).mount();
