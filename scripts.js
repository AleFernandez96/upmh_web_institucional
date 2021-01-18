(($)=> {

  new WOW().init();

  // Scroll navs
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }
  // http://www.cristalab.com/tutoriales/utilizando-el-hash-con-javascript-y-ajax-c70657l/
  // $(document).ready(function(){
  //  var jash = window.location.hash;
  //  if(jash.length > 1){
  //     var href = $("a[@href="+jash+"]").attr("title");
  //     $("#show").load(href);
  //  }
   
  //    $("#nav a").click(function(){
  //       var href = $(this).attr("title");
  //       $("#show").load(href);
  //    });
  // });

  // Scroll navs 
  $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      // (#)
      let target = $(this.hash);
      if (target.length) {

        let top_space = 0;
        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 40;
          }
        }
        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Scroll navs mobiles
  let nav_sections = $('section');
  let main_nav = $('.main-nav, .mobile-nav');
  let main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    let cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      let top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
        main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
      }
    });
  });

  // Botón ir arriba
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

})(jQuery);

  // Preloader
  $(window).on('load', ()=> {
    $("#preloader").delay(800).fadeOut();
  });

  // Carrucel (número de divs, responsive)
  $(".students-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    lazyLoad: true,
    loop: true,
    responsive: { 0: { items: 2 }, 768: { items: 2 }, 900: { items: 4 }
    }
  });

  // Cerrar mensaje emergente accesibilidad (con botón)
  let cerraranuncio = anuncio => {
    document.getElementById(anuncio).style.display = "none";
  }
  // Cerrar mensaje emergente accesibilidad (despues de cierto tiempo)
  $(document).ready(function() {
    setTimeout(function() {
        $("#mensaje").fadeOut(1500);
    },30000);
  });
  
  // Aumentar y disminuir fuentes
  let fontSize = 0.9;
  // funcion para aumentar la fuente
  function zoomIn() {
    fontSize += 0.1 ;
    document.body.style.fontSize = fontSize + "em";
  }
  // funcion para disminuir la fuente
  function zoomOut() {
    fontSize = 1;
    document.body.style.fontSize = fontSize + "em";
  }

  var newsfont = 16; 
  function changeFont(id) { 

  if (document.getElementById) { 
          document.getElementById(id).style.fontSize = newsfont+"px"; 
      } else { 
          if (document.layers) { 
              document.layers[id].fontSize = newsfont+"px"; 
          } else { 
              if (document.all) { 
                  eval("document.all." + id + ".style.fontSize = \"" + newsfont + "px \""); 
              } 
          } 
      }  
      setCookie(); 
  } 
  function larger() { 
      if (newsfont < 20) { 
          newsfont= newsfont +1; 
          changeFont('body'); 
      } 
  } 
  function smaller() { 
      if (newsfont > 16) { 
      newsfont= newsfont -1; 
      changeFont('body'); 
      } 
  }




  // Messenger chat
  // var div = document.createElement('div');
  //     div.className = 'fb-customerchat';
  //     div.setAttribute('page_id', '112326863481385');
  //     div.setAttribute('ref', 'b64:YWNjZXNpYmlsaWRhZA==');
  //     document.body.appendChild(div);
  //     window.fbMessengerPlugins = window.fbMessengerPlugins || {
  //       init: function () {
  //         FB.init({
  //           appId            : '1678638095724206',
  //           autoLogAppEvents : true,
  //           xfbml            : true,
  //           version          : 'v3.3'
  //         });
  //       }, callable: []
  //     };
  //     window.fbAsyncInit = window.fbAsyncInit || function () {
  //       window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
  //       window.fbMessengerPlugins.init();
  //     };
  //     setTimeout(function () {
  //       (function (d, s, id) {
  //         var js, fjs = d.getElementsByTagName(s)[0];
  //         if (d.getElementById(id)) { return; }
  //         js = d.createElement(s);
  //         js.id = id;
  //         js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
  //         fjs.parentNode.insertBefore(js, fjs);
  //       }(document, 'script', 'facebook-jssdk'));
  //     }, 0);