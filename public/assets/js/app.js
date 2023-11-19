$(document).ready(function() {
    // Mengatur offset scrolling halus
    $(".scroll-smooth").on("click", function(event) {
      event.preventDefault();
      var target = $(this).attr("href");
      var offset = $(target).offset().top;
      $("html, body").animate({ scrollTop: offset }, 1200); // Durasi animasi scroll (dalam milidetik)
    });
  });

















// let text = new SplitType('#text');
// let characters = document.querySelectorAll('.char');

// for (i=0; i<characters.length; i++){
//     characters[i].classList.add('translate-y-full');
// }

// gsap.to('.char',{
//     y:0,
//     stagger:0.05,
//     delay:0.02,
//     duration:0.5
// });
