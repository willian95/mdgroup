$(document).ready(function () {
  $(function () {
    'use strict'

    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open')
    })
  })


  $(".hamburger").on("click", function () {
    if (!$(this).hasClass("is-active")) {
      $(this).addClass("is-active")

    } else {
      $(this).removeClass("is-active")
    }
  });

  $('.slider-banner').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
   autoplay: true,
    infinite: true,
   // adaptiveHeight: true,
 autoplaySpeed: 3000,
    fade: true,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.slider-logo').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
   autoplay: true,
    infinite: true,
   // adaptiveHeight: true,
 autoplaySpeed: 3000,
    fade: true,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.slider-promise').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
   autoplay: true,
    infinite: true,
   // adaptiveHeight: true,
 autoplaySpeed: 3000,
    fade: true,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

});
