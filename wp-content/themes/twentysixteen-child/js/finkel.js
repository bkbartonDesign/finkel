/*global $,jQuery*/



(function($) { 

  $(function() {
  
    var links = $('header .menu-item  a'),
        header = $('.site-header'),
        hdr = $(header).outerHeight(),
        sectionPadding = parseInt( $('.section-contents').css('paddingTop').slice(0,-2) ),
        pageMargin = parseInt( $("#page").css("margin").slice(0,-2) );
  
    if (window.location.hash) {
      $('.primary-menu > .menu-item a[href="'+window.location.hash+'"]').addClass('active');
      console.log(window.location.hash);
    }
  
    $(document).on("scroll", onScroll);

    function makeLinkActive( activeLInk ){
      $(links).removeClass('active');
      $(activeLInk).addClass('active');
    }

  
    $(links).on('click', function (e) {
      
      e.preventDefault();
      $(document).off("scroll");

      makeLinkActive($(this));
      var _hash = this.hash;
      $target = $(_hash);

    
      $('html, body').stop().animate(
        {
          'scrollTop': $target.offset().top - hdr - sectionPadding - pageMargin
        }, 800, 'swing', function () {
          window.location.hash = _hash;
          $(document).on("scroll", onScroll);
      });
    });
  
  
    $('.header-image > a').on('click', function(e){
      e.preventDefault();
      
      $('html, body')
        .stop()
        .animate(
          {
            'scrollTop': $('#intro').offset().top - parseInt(hdr) - parseInt(sectionPadding)
          },
          800, 'swing'
        );
    });
  
    $('#demoform').on('submit', function(e){
      e.preventDefault();
      $('.form-messages').text('Message sent successfully. We will get back to you shortly.');
      $('#msg, #name, #mail').val('');
    });
    


    function onScroll(event){
      
      var scrollPosition = $(document).scrollTop(); // 1 => 5100
      
      $.each(links, function (i,link) {
      
        var linkHref = $(link).attr('href'), //["#intro","#about",...];
            sectionByID = $(linkHref); // $("#intro");
         
        if (
            scrollPosition >= ( sectionByID.offset().top - hdr - pageMargin) && // if scrolled past the top of section - header height
            scrollPosition < ( sectionByID.offset().top + sectionByID.outerHeight() ) // if scrollPosition is less than the bottom height of section...
          ){
            makeLinkActive($(link));
            // $(links).removeClass("active");
            // $(link).addClass("active");
            //console.log(link,scrollPosition,sectionByID.position().top - hdr);
        }
        else{
          $(link).removeClass("active");
        }
        
      });
    }

  })
})(jQuery);