// Slideshow Animation
let slides = document.querySelectorAll('.slide');
let index = 0;

function nextSlide() {
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}
setInterval(nextSlide, 4000); // Change slide every 4 seconds
// Slideshow Animation End

const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

// document.querySelectorAll('#nav-links a').forEach(link =>{
// link.addEventListener("click", (e) => {
//   setTimeout(() =>{
//   navLinks.classList.remove("open");
//   menuBtnIcon.setAttribute("class", "ri-menu-line");
//   },200);//delay 200ms
// });
// });
navLinks.addEventListener("click", (e) => {
 navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".about__container .section__header", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".about__container .section__description", {
  ...scrollRevealOption,
  delay: 500,
  interval: 500,
});
ScrollReveal().reveal(".about__container img", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".service__container .section__header", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".service__container .section__description", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".service__card", {
  duration: 1000,
  delay: 1000,
  interval: 500,
});

var swiper = new Swiper(".myswiper2", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay:3000,
  },
});

var swiper = new Swiper(".myswiper",{
  effect:"coverflow",
  grabCursor:true,
  centeredSlides:true,
  initialSlide:2,
  speed:600,
  preventClicks:true,
  slidesPerView:"auto",
  coverflowEffect:{
      rotate:0,
      stretch:80,
      depth:350,
      modifier:1,
      slideShows:true,
  },
  on: {
      click(event){
       swiper.slideTo(this.clickedIndex);
      },
  },
  pagination: {
    el:".swiper-pagination",
  }
});


ScrollReveal().reveal(".blog__content .section__header", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".blog__content h4", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".blog__content p", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".blog__content .blog__btn", {
  ...scrollRevealOption,
  delay: 1500,
});

const instagram = document.querySelector(".instagram__flex");

Array.from(instagram.children).forEach((item) => {
  const duplicateNode = item.cloneNode(true);
  duplicateNode.setAttribute("aria-hidden", true);
  instagram.appendChild(duplicateNode);
});





//contact page//
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("connect.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      alert(data);
      document.getElementById("contactForm").reset();
    })
    .catch(error => {
      console.error("Error:", error);
      alert("Form submission failed.");
    });
  });
});