$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 5,
  //   pagination: true,
  //   autoplay: true,
  stagePadding: 100,
  autoPlayTimepout: 500,
  responsive: {
    0: {
      items: 1,
      stagePadding: 0,
    },
    600: {
      items: 2,
      stagePadding: 0,
    },
    1000: {
      items: 2,
      margin: 10,
    },
  },
});

