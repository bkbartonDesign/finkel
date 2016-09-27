/*global $,jQuery*/

// cache the section top positions



(function($) { 

  $(function() {
  
  
  
  //var bottom = $el.position().top + $el.offset().top + $el.outerHeight(t‌​rue);
  
    var links = $('header .menu-item  a'),
        header = $('.site-header'),
        //sectionPadding = parseInt( $('.section-contents').css('paddingTop').slice(0,-2) ),
        pageMargin = parseInt( $("#page").css("margin").slice(0,-2) ),
        sectionPos = [],
        hdr = $(header).outerHeight(),
        hdr2 = $(header).position().top + $(header).offset().top + $(header).outerHeight(true),
        hdr3 = $(header).offset().top + $(header).outerHeight(true),
        hdr4 = $(header).offset().top - pageMargin;
        hdr5 = $(header).position().top + $(header).outerHeight(true);
        
    $('.site-header').css({top:pageMargin});
    var h  = 0;
    
    console.log("From top:"+ $(header).position().top, "header height:"+$(header).outerHeight(true) , "How far away from top:"+$(header).offset().top);
    console.log(hdr, hdr2, hdr3, hdr4);
    
    
    function sectPos(){
      h = $(header).offset().top + $(header).outerHeight(true); 
      console.log(h);
      return h;
    }
    
    function makeLinkActive( activeLInk ){
      $(links).removeClass('active');
      $(activeLInk).addClass('active');
    }       

    // cache sectionPos ... need to reinit if screensize changes.
    $.each(links, function(i,link){
      var key = $(link).attr('href'),
          val = $(key).offset().top - hdr - pageMargin;
          sectionPos[key] = val;
    });

  
    $(document).on("scroll", onScroll);

    if (window.location.hash) {
      $('.primary-menu > .menu-item a[href="'+window.location.hash+'"]').addClass('active');
      //console.log(window.location.hash);
    }
  
    var target = '';  
  
    $(links).on('click', function (e) {
      
      e.preventDefault();
      
      var s = $(".full-page");
      console.log("!!");
      $(document).off("scroll");
      
      var hash = this.hash;
      
      //if(target === $(_hash)){alert("hh");}
      
      //if( target !== hash ){

        
        makeLinkActive($(this));
        target = hash;

        console.log(target, hash, target != hash);
        console.log($(target).offset().top+"-"+hdr+" = "+ ($(target).offset().top - hdr ));

        
        $(s).animate(
          {opacity:0},
          100,
          'swing',
          function(){
            $.when(window.location.hash = target).done(
              function(x){
                $('html, body').scrollTop($(target).offset().top -  hdr)
                console.log("::");
              }
            );
            //$('html, body').scrollTop(target.offset().top - ($(header).offset().top + $(header).outerHeight(true)));
            $(s).animate(
              {opacity:1},
              300,
              'swing',
              function(){
                $(z).html($(header).offset().top - hdr+" | "+ $(header).offset().top);
                console.log("cool");
                $(document).on("scroll", onScroll);
              }
            )
          }
        );
      //}
      // $(s).toggle('fast',function(){
        
      // })
    
      // $('html, body').stop().animate(
      //   {
      //     'scrollTop': $target.offset().top - hdr4 - sectionPadding
      //     // 'scrollTop': $target.offset().top - hdr - sectionPadding 
      //   }, 800, 'swing', function () {
      //     window.location.hash = _hash;
      //     $(document).on("scroll", onScroll);
      // });
    });
  
  
    $('.header-image > a').on('click', function(e){
      e.preventDefault();
      
      $('html, body')
        .stop()
        .animate(
          {
            'scrollTop': $('#intro').offset().top - hdr3
          },
          800, 'swing'
        );
    });
  
    $('#demoform').on('submit', function(e){
      e.preventDefault();
      $('.form-messages').text('Message sent successfully. We will get back to you shortly.');
      $('#msg, #name, #mail').val('');
    });
    

  

    var z = $("#zzz");  
    function onScroll(event){
      
      
      //var scrollPosition = $(document).scrollTop(); // 1 => 5100
      var scrollPosition =  $(header).offset().top;
      $(z).html($(header).offset().top);
      
      $.each(links, function (i,link) {
      
        var linkHref = $(link).attr('href'), //["#intro","#about",...];
            sectionByID = $(linkHref); // $("#intro");
         
        if (
            scrollPosition >= ( sectionByID.offset().top - hdr) && // if scrolled past the top of section - header height
            scrollPosition < ( sectionByID.offset().top + sectionByID.outerHeight() ) // if scrollPosition is less than the bottom height of section...
          ){
            $(z).html(scrollPosition +" | "+ (sectionByID.offset().top - hdr)) ;
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