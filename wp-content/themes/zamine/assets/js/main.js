(function ($) {
  $(document).ready(function () {
    $(".open-menu").on("click", function (e) {
      e.preventDefault();
      $(".header-menu").toggleClass("open");
    });

    $(".page-politics .items--icon a").on("click", function (e) {
      e.preventDefault();

      var target = $($(this).attr("href"));

      if (target.length) {
        $("html, body").animate({
          scrollTop: target.offset().top,
        });
      }
    });

    new Swiper(".swiper-news", {
      // Optional parameters
      loop: true,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    new Swiper(".swiper-brands", {
      // Optional parameters
      loop: true,
      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    new Swiper(".swiper-product-images", {
      // Optional parameters
      loop: true,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    new Swiper(".swiper-home", {
      // Optional parameters
      loop: true,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
})(jQuery);

function contentCardTimelines() {
  var inOver = false;
  var idTimer;
  var avance = 2;
  $(".content-card-timelines__btn--right").on("mouseover", goRight);
  $(".content-card-timelines__btn--right").on("mouseout", salio);
  $(".content-card-timelines__btn--left").on("mouseover", gotLeft);
  $(".content-card-timelines__btn--left").on("mouseout", salio);
  $(".content-card-timelines__btn--right").each(function () {
    console.log("content-card-timelines__btn--right");
  });
  function salio() {
    inOver = false;
  }
  function goRight() {
    inOver = true;
    avance = 2;
    timerScroll();
  }
  function gotLeft() {
    inOver = true;
    avance = -2;
    timerScroll();
    console.log("gotLeft");
  }
  function timerScroll() {
    limpiarInterval();

    
    idTimer = setInterval(function () {
      var px = $(".content-card-timelines__content").scrollLeft();
      $(".content-card-timelines__content").scrollLeft(px + avance);
      var px2 = $(".content-card-timelines__content").scrollLeft();
      console.log('pxxxx', px, px2);

      if(px == 0) {
        $(".content-card-timelines__btn--left").hide();
      } else {
        $(".content-card-timelines__btn--left").show();
      }
      if (!inOver) {
        limpiarInterval();
      }
    }, 20);
  }
  function limpiarInterval() {
    if (idTimer) {
      clearInterval(idTimer);
    }
  }
  function validarFlechas() {

  }
}
new contentCardTimelines();


function accordionService() {
  console.log('accordionService');
  $('#accordionServices').on('shown.bs.collapse', function(event, data) {
    console.log('event', event, data);
    updateDate();
  });
  function updateDate() {
    var info = $('#accordionServices .collapse.show').data('info');
    var header = $('#accordionServices .collapse.show').data('header');
    /*
    $("#accordionServices .remove").hide();
    $("#accordionServices .add").show();
    $('#'+header+' .remove').show();
    $('#'+header+' .add').hide();
    */
    $('.section-services').hide();
    $('#'+info).show();
    console.log('header:', header);
  }
  updateDate();
}
new accordionService();

$(function() {
        
  var documentEl = $(document),
      fadeElem = $('.fade-scroll');
  
  
  documentEl.on('scroll', function() {
      var currScrollPos = documentEl.scrollTop();
      
      fadeElem.each(function() {
          var $this = $(this),
              elemOffsetTop = $this.offset().top;
          if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos-elemOffsetTop)/100);
      }); 
  });
  
});


$(document).ready(function() {
  setTimeout(function() {
      $(".content").fadeOut(1500);
  },3000);

  setTimeout(function() {
      $(".content2").fadeIn(1500);
  },12000);
});



$(function() {
  $(window).scroll(function() {
      if($(window).scrollTop() > $(".b").offset().top+$(".b").height()){
          $(".sticky").show();
      }else{
          $(".sticky").hide();
      }
  });
});