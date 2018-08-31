let owlSettings = {
  center: false,
  items: 2,
  loop: true,
  margin: 30,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  nav: true,
  navContainer: '#slider-articles',
  navText: '',
  dots: false,
  autoplayHoverPause: true,
  responsive: {
    // breakpoint from ... up
    650: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
}

$('#slider-articles').owlCarousel(owlSettings);

$(window).on('resize', () => {
  if (window.innerWidth <= 500) {
    $('#slider-articles').trigger('remove.owl.carousel')
  } else {
    $('#slider-articles').trigger('refresh.owl.carousel')
  }
})