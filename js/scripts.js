(function ($) {

  "use strict";

  $(window).on('load', function () {

    // Preloader
    $('.loader').fadeOut();
    $('.loader-mask').delay(350).fadeOut('slow');
    initOwlCarousel();

    $(window).trigger("resize");
  });


  // Init
  heroContainerHeight();

  $(window).resize(function () {

    megaMenu();
    megaMenuWide();
    heroContainerHeight();

    var windowWidth = $(window).width();
    if (windowWidth <= 974) {
      $('.navigation').removeClass('sticky');
    }
    if (windowWidth > 974) {
      $('.dropdown').removeClass('open');
    }

  });


  /* Sticky Navigation
  -------------------------------------------------------*/
  $(window).scroll(function () {

    scrollToTop();
    var windowWidth = $(window).width();
    var $stickyNav = $('#sticky-nav');
    var $navbarFixedTop = $('.navbar-fixed-top');

    if ($(window).scrollTop() > 190 & windowWidth > 974) {

      $stickyNav.addClass("sticky");
      $stickyNav.find(".logo-wrap").addClass("shrink");
    } else {
      $stickyNav.removeClass("sticky");
      $stickyNav.find(".logo-wrap").removeClass("shrink");
    }

    if ($(window).scrollTop() > 200 & windowWidth > 974) {
      $stickyNav.addClass("offset");
    } else {
      $stickyNav.removeClass("offset");
    }

    if ($(window).scrollTop() > 500 & windowWidth > 974) {
      $stickyNav.addClass("scrolling");
    } else {
      $stickyNav.removeClass("scrolling");
    }

  });


  /* Dropdown Navigation
  -------------------------------------------------------*/
  var $dropdownTrigger = $('.dropdown-trigger');
  $dropdownTrigger.on('click', function () {

    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    }

    else {
      $(this).addClass("active");
    }
  });



  /* Search
  -------------------------------------------------------*/
  var $searchWrap = $('.search-wrap');
  var $navSearch = $('.nav-search');
  var $searchClose = $('#search-close');

  $('.search-trigger').on('click', function (e) {
    e.preventDefault();
    $searchWrap.animate({ opacity: 'toggle' }, 500);
    $navSearch.add($searchClose).addClass("open");
  });

  $('.search-close').on('click', function (e) {
    e.preventDefault();
    $searchWrap.animate({ opacity: 'toggle' }, 500);
    $navSearch.add($searchClose).removeClass("open");
  });

  function closeSearch() {
    $searchWrap.fadeOut(200);
    $navSearch.add($searchClose).removeClass("open");
  }

  $(document.body).on('click', function (e) {
    closeSearch();
  });

  $(".search-trigger, .main-search-input").on('click', function (e) {
    e.stopPropagation();
  });


  /* Mobile Detect
  -------------------------------------------------------*/
  if (/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i.test(navigator.userAgent || navigator.vendor || window.opera)) {
    $("html").addClass("mobile");
    $('.dropdown-toggle').attr('data-toggle', 'dropdown');
  }
  else {
    $("html").removeClass("mobile");
  }

  /* IE Detect
  -------------------------------------------------------*/
  if (Function('/*@cc_on return document.documentMode===10@*/')()) { $("html").addClass("ie"); }


  /* Mega Menu
  -------------------------------------------------------*/
  function megaMenu() {
    $('.megamenu').each(function () {
      $(this).css('width', $('.container').width());
      var offset = $(this).closest('.dropdown').offset();
      offset = offset.left;
      var containerOffset = $(window).width() - $('.container').outerWidth();
      containerOffset = containerOffset / 2;
      offset = offset - containerOffset - 15;
      $(this).css('left', -offset);
    });
  }

  function megaMenuWide() {
    $('.megamenu-wide').each(function () {
      $(this).css('width', $(window).outerWidth());
      var offset = $(this).closest('.dropdown').offset();
      offset = offset.left;
      var containerOffset = $(window).width() - $(window).outerWidth();
      containerOffset = containerOffset / 2;
      offset = offset - containerOffset - 0;
      $(this).css('left', -offset);
    });
  }

  /* Full-screen Hero Height
  -------------------------------------------------------*/
  function heroContainerHeight() {
    $('#fs-container').height($(window).height() - $('.nav-type-1').height());
  }


  /* Owl Carousel
  -------------------------------------------------------*/

  function initOwlCarousel() {
    (function ($) {
      "use strict";

      /* Hero Slider
      -------------------------------------------------------*/
      $("#owl-hero").owlCarousel({
        autoPlay: 3000,
        navigation: true,
        navigationText: ["<i class='ui-left-arrow'></i>", "<i class='ui-right-arrow'></i>"],
        slideSpeed: 300,
        pagination: true,
        paginationSpeed: 400,
        singleItem: true,
        stopOnHover: true,
        addClassActive: true
      })


      /* Testimonials
      -------------------------------------------------------*/
      $("#owl-testimonials").owlCarousel({
        navigation: false,
        navigationText: ["<i class='icon-Left-2'></i>", "<i class='icon-Right-2'></i>"],
        autoHeight: true,
        slideSpeed: 300,
        pagination: true,
        paginationSpeed: 400,
        singleItem: true,
        stopOnHover: true
      })


      /* Partners Logo
      -------------------------------------------------------*/
      $("#owl-partners").owlCarousel({
        autoPlay: 3000,
        pagination: false,
        itemsCustom: [
          [0, 2],
          [370, 3],
          [550, 4],
          [700, 5],
          [1000, 6]
        ],
      })


      /* 3 Items
      -------------------------------------------------------*/
      $("#owl-3-items").owlCarousel({
        // autoPlay: 3000,
        pagination: true,
        navigation: false,
        navigationText: ["<i class='icon-Left-2'></i>", "<i class='icon-Right-2'></i>"],
        itemsCustom: [
          [0, 1],
          [370, 1],
          [550, 2],
          [700, 3],
          [1000, 3]
        ],
      })


      /* Shop Items Slider
      -------------------------------------------------------*/
      $("#owl-shop-items-slider-1").owlCarousel({
        // autoPlay: 2500,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='ui-left-arrow'></i>", "<i class='ui-right-arrow'></i>"],
        itemsCustom: [
          [0, 1],
          [370, 2],
          [550, 3],
          [700, 4],
          [1000, 5]
        ],
      })

      $("#owl-shop-items-slider-2").owlCarousel({
        // autoPlay: 2500,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='ui-left-arrow'></i>", "<i class='ui-right-arrow'></i>"],
        itemsCustom: [
          [0, 1],
          [370, 2],
          [550, 3],
          [700, 4],
          [1000, 5]
        ],
      })

      $("#owl-shop-items-slider-3").owlCarousel({
        // autoPlay: 2500,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='ui-left-arrow'></i>", "<i class='ui-right-arrow'></i>"],
        itemsCustom: [
          [0, 1],
          [370, 2],
          [550, 3],
          [700, 4],
          [1000, 5]
        ],
      })


      /* Related products
      -------------------------------------------------------*/
      $("#owl-related-items").owlCarousel({
        autoPlay: 2500,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='ui-left-arrow'></i>", "<i class='ui-right-arrow'></i>"],
        itemsCustom: [
          [0, 1],
          [370, 2],
          [550, 3],
          [700, 4],
          [1000, 4]
        ],
      })


      /* Single Image
      -------------------------------------------------------*/
      $("#owl-single").owlCarousel({
        navigation: false,
        pagination: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ["<i class='ui-left-arrow'></i>", "<i class='ui-right-arrow'></i>"]
      })

    })(jQuery);
  };


  /* Blog Masonry / FlexSlider
  -------------------------------------------------------*/

  $('#flexslider').flexslider({
    animation: "slide",
    controlNav: true,
    directionNav: false,
    touch: true,
    slideshow: false,
    prevText: ["<i class='icon-Left-2'></i>"],
    nextText: ["<i class='icon-Right-2'></i>"],
    start: function () {
      var $container = $('.masonry');
      $container.imagesLoaded(function () {
        $container.isotope({
          itemSelector: '.masonry-item',
          layoutMode: 'masonry'
        });
      });
    }
  });


  /* Flickity Slider
  -------------------------------------------------------*/
  var $flickitySliderWrap = $('.flickity-slider-wrap');

  if ($flickitySliderWrap.data('autoplay')) {
    var dataAutoPlay = true;
  } else {
    var dataAutoPlay = false;
  }

  if ($flickitySliderWrap.data('arrows')) {
    var dataArrows = true;
  } else {
    var dataArrows = false;
  }

  if ($flickitySliderWrap.data('slidedots')) {
    var dataSlideDots = true;
  } else {
    var dataSlideDots = false;
  }



  // main large image (shop product)
  var $gallery = $('#gallery-main').flickity({
    cellAlign: 'center',
    contain: true,
    wrapAround: true,
    autoPlay: false,
    prevNextButtons: true,
    percentPosition: true,
    imagesLoaded: true,
    lazyLoad: 1,
    pageDots: false,
    selectedAttraction: 0.1,
    friction: 0.6,
    rightToLeft: false,
    arrowShape: 'M 25,50 L 65,90 L 70,90 L 30,50  L 70,10 L 65,10 Z'
  });

  // thumbs
  $('.gallery-thumbs').flickity({
    asNavFor: '#gallery-main',
    contain: true,
    cellAlign: 'left',
    wrapAround: false,
    autoPlay: false,
    prevNextButtons: false,
    percentPosition: true,
    imagesLoaded: true,
    pageDots: false,
    selectedAttraction: 0.1,
    friction: 0.6,
    rightToLeft: false
  });

  // Single item
  $('#slider-single').flickity({
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    autoPlay: dataAutoPlay,
    prevNextButtons: dataArrows,
    percentPosition: true,
    imagesLoaded: true,
    lazyLoad: 1,
    pageDots: dataSlideDots,
    selectedAttraction: 0.1,
    friction: 0.6,
    rightToLeft: false,
    arrowShape: 'M 10,50 L 60,100 L 65,100 L 15,50  L 65,0 L 60,0 Z'
  });

  var $gallery = $('.mfp-hover');

  $gallery.on('dragStart.flickity', function (event, pointer) {
    $(this).addClass('is-dragging');
  })

  $gallery.on('dragEnd.flickity', function (event, pointer) {
    $(this).removeClass('is-dragging');
  })

  $gallery.magnificPopup({
    delegate: '.lightbox-img, .lightbox-video',
    callbacks: {
      elementParse: function (item) {
        if (item.el.context.className == 'lightbox-video') {
          item.type = 'iframe';
        } else {
          item.type = 'image';
        }
      }
    },
    type: 'image',
    closeBtnInside: false,
    gallery: {
      enabled: true
    }
  });


  /* Lightbox popup
  -------------------------------------------------------*/
  $('.lightbox-img, .lightbox-video').magnificPopup({
    callbacks: {
      elementParse: function (item) {
        if (item.el.context.className == 'lightbox-video') {
          item.type = 'iframe';
        } else {
          item.type = 'image';
        }
      }
    },
    type: 'image',
    closeBtnInside: false,
    gallery: {
      enabled: true
    },
    image: {
      titleSrc: 'title',
      verticalFit: true
    }
  });

  // Single video lightbox
  $('.single-video-lightbox').magnificPopup({
    type: 'iframe',
    closeBtnInside: false,
    tLoading: 'Loading image #%curr%...'
  });


  /* Accordion
  -------------------------------------------------------*/
  function toggleChevron(e) {
    $(e.target)
      .prev('.panel-heading')
      .find("a")
      .toggleClass('plus minus');
  }
  $('#accordion').on('hide.bs.collapse', toggleChevron);
  $('#accordion').on('show.bs.collapse', toggleChevron);


  /* Toggle
  -------------------------------------------------------*/
  var allToggles = $(".toggle > .panel-content").hide();

  $(".toggle").on('click', '> .acc-panel > a', function () {

    if ($(this).hasClass("active")) {
      $(this).parent().next().slideUp("easeOutExpo");
      $(this).removeClass("active");
    }

    else {
      $(this).parent().next(".panel-content");
      $(this).addClass("active");
      $(this).parent().next().slideDown("easeOutExpo");
    }

    return false;
  });


  /* Tooltip
  -------------------------------------------------------*/
  $(function () {
    $('[data-toggle="tooltip"]').tooltip({ container: 'body' });
  })



  /* Products Grid (Demo 3)
  -------------------------------------------------------*/
  var $isotopeGrid = $('#products-grid');
  $isotopeGrid.imagesLoaded(function () {
    $isotopeGrid.isotope({
      isOriginLeft: true,
      stagger: 30
    });
    $isotopeGrid.isotope();
  });


  /* Grid/list Switch
  -------------------------------------------------------*/
  function get_grid() {
    $('.list').removeClass('list-active');
    $('.grid').addClass('grid-active');
    $('.product-item').animate({ opacity: 0 }, function () {
      $('.shop-catalogue').removeClass('list-view').addClass('grid-view');
      $('.product').addClass('product-grid').removeClass('product-list');
      $('.product-item').stop().animate({ opacity: 1 });
    });
  }

  function get_list() {
    $('.grid').removeClass('grid-active');
    $('.list').addClass('list-active');
    $('.product-item').animate({ opacity: 0 }, function () {
      $('.shop-catalogue').removeClass('grid-view').addClass('list-view');
      $('.product').addClass('product-list').removeClass('product-grid');
      $('.product-item').stop().animate({ opacity: 1 });
    });
  }

  $('#list').on('click', function (e) {
    e.preventDefault();
    get_list();
  });

  $('#grid').on('click', function (e) {
    e.preventDefault();
    get_grid();
  });


  /* Payment Method Accordion
  -------------------------------------------------------*/
  var Methods = $(".payment_methods > li > .payment_box").hide();
  Methods.first().slideDown("easeOutExpo");

  $(".payment_methods > li > input").change(function () {
    var current = $(this).parent().children(".payment_box");
    Methods.not(current).slideUp("easeInExpo");
    $(this).parent().children(".payment_box").slideDown("easeOutExpo");

    return false;
  });

  /* Quantity
  -------------------------------------------------------*/
  $(function () {

    // Increase
    jQuery(document).on('click', '.plus', function (e) {
      e.preventDefault();
      var quantityInput = jQuery(this).parents('.quantity').find('input.qty'),
        newValue = parseInt(quantityInput.val(), 10) + 1,
        maxValue = parseInt(quantityInput.attr('max'), 10);

      if (!maxValue) {
        maxValue = 9999999999;
      }

      if (newValue <= maxValue) {
        quantityInput.val(newValue);
        quantityInput.change();
      }
    });

    // Decrease
    jQuery(document).on('click', '.minus', function (e) {
      e.preventDefault();
      var quantityInput = jQuery(this).parents('.quantity').find('input.qty'),
        newValue = parseInt(quantityInput.val(), 10) - 1,
        minValue = parseInt(quantityInput.attr('min'), 10);

      if (!minValue) {
        minValue = 1;
      }

      if (newValue >= minValue) {
        quantityInput.val(newValue);
        quantityInput.change();
      }
    });

  });


  /* Price Slider
  -------------------------------------------------------*/

  $(function () {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 1500,
      values: [160, 800],
      slide: function (event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));
  });


  /* FitVIds
  -------------------------------------------------------*/
  $(".video-wrap").fitVids();


  /* Contact Form
  -------------------------------------------------------*/

  var submitContact = $('#submit-message'),
    message = $('#msg');

  submitContact.on('click', function (e) {
    e.preventDefault();

    var $this = $(this);

    $.ajax({
      type: "POST",
      url: 'contact.php',
      dataType: 'json',
      cache: false,
      data: $('#contact-form').serialize(),
      success: function (data) {

        if (data.info !== 'error') {
          $this.parents('form').find('input[type=text],input[type=email],textarea,select').filter(':visible').val('');
          message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
        } else {
          message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
        }
      }
    });
  });


  /* Scroll to Top
  -------------------------------------------------------*/
  (function () {
    var docElem = document.documentElement,
      didScroll = false;
    document.querySelector('#back-to-top');
    function init() {
      window.addEventListener('scroll', function () {
        if (!didScroll) {
          didScroll = true;
          setTimeout(scrollPage, 50);
        }
      }, false);
    }
  });

  function scrollToTop() {
    var scroll = $(window).scrollTop();
    var $backToTop = $("#back-to-top");
    if (scroll >= 50) {
      $backToTop.addClass("show");
    } else {
      $backToTop.removeClass("show");
    }
  }

  $('a[href="#top"]').on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, 1350, "easeInOutQuint");
    return false;
  });


})(jQuery);