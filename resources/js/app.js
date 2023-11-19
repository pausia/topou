require('./bootstrap');

$(document).ready(function() {
    // Mengatur offset scrolling halus
    $(".scroll-smooth").on("click", function(event) {
      event.preventDefault();
      var target = $(this).attr("href");
      var offset = $(target).offset().top;
      $("html, body").animate({ scrollTop: offset }, 1200); // Durasi animasi scroll (dalam milidetik)
    });
  });


