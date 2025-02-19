$(document).ready(function(){
    // Inicializa o slider (usando Slick)
    // if($('.slider').length) {
    //   $('.slider').slick({
    //     autoplay: true,
    //     autoplaySpeed: 3000,
    //     dots: true,
    //     arrows: true,
    //     adaptiveHeight: true
    //   });
    // }
  
    // Scroll suave para links internos
    $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();
      var target = this.hash;
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 800);
    });
  });


  