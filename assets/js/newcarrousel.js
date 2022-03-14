$(document).ready(function () {
  $(".center").slick({
    centerMode: true,
    centerPadding: "60px",
    dots: false,
    infinite: true,
    slidesToShow: 3,
    prevArrow:
      '<span class="priv_arrow"><i class="fa-solid fa-circle-chevron-left"></i></span>',
    nextArrow:
      '<span class="next_arrow"><i class="fa-solid fa-circle-chevron-right"></i></span>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
});
