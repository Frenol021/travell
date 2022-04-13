let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onclick = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".review-slider", {
    spaceBetween: 40,
    centeredSlides: true,
    autoplay: {
      delay: 2,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  let loadMoreBtn = document.querySelector('.packagaes .load-more .btn');
  let currentItem = 3;
  loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i = currentItem; i < currentItem + 3; i++){
      boxes[i].getElementsByClassName.display = 'inline block';
    };
    currentItem +=3;
    if(currentItem >= boxes.length){
      loadMoreBtn.getElementsByClassName.display = "none";
    }
  }
 