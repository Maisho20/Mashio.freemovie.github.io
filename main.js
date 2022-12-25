//swiper
var swiper = new Swiper(".popular-content", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
      delay: 2250,
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
    breakpoints:{
        280:{
            slidesPerView: 1,
            spaceBetween: 10,
        },
        320:{
            slidesPerView: 2,
            spaceBetween: 10,
        },
        510:{
            slidesPerView: 2,
            spaceBetween: 10,
        },
        758:{
            slidesPerView: 3,
            spaceBetween: 75,
        },
        900:{
            slidesPerView: 4,
            spaceBetween: 20,
        },
    }
});

//show video
let playButton = document.querySelector(".play-movie");
let video = document.querySelector(".video-container");
let myvideo = document.querySelector("#myvideo");
let closebtn = document.querySelector(".close-video");

playButton.onclick = () =>{
    video.classList.add("show-video");
    // auto play ketika di click
    myvideo.play();
}
closebtn.onclick = () =>{
    video.classList.remove("show-video");
    myvideo.pause();
}

//btn
let mybutton = document.getElementById("myBtn")

window.onscroll = function(){
    scrollFunction()
};

function scrollFunction(){
    if(document.body.scrollTop > 25 || document.documentElement.scrollTop > 20){
        mybutton.style.display = "block";
    }else{
        mybutton.style.display = "none";
    }
}

function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function myFunction() {
  var x = document.getElementById("hide");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}