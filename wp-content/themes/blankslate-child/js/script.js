$(function() {
  $(document).on("scroll", function(ev){ 
    return onScroll(ev)
  });

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    $(document).off("scroll");
    
    var target = this.hash;
    $target = $(target);
    
    $('html, body').stop().animate(
      {
        'scrollTop': ($target.offset().top +1 ) - $('.hdr').outerHeight()
      },800, 'swing', function () {
        window.location.hash = target;
        $(document).on("scroll", onScroll);
    });
  });

  $('.section-splash').on('click', function(){
    $('html, body').stop().animate({
      'scrollTop': $('#about').offset().top - $('.hdr').outerHeight()
    }, 800, 'swing');
  });
  
  $('.hdr-hb').on('click', function(){
    $('.hdr-nav').toggleClass('active');
  });

  $('.hdr-nav').on('click', function(){
    $(this).removeClass('active');
  });

  function onScroll(event){
    
    var scrollPosition = $(document).scrollTop();
    
    $('.hdr-nav-link').each(function (i,ele) {
      
      var currentLink = $(ele),
          refElement = $(currentLink.attr("href")),
          refPosTop = refElement.position().top;
      if (
        refPosTop - $('.hdr').outerHeight() <= scrollPosition && 
        refPosTop + refElement.outerHeight() > scrollPosition ) {
          $('.hdr-nav-link').removeClass("active");
          currentLink.addClass("active");
      }
      else{
        currentLink.removeClass("active");
      }
    });
    
   
  }
  
  function toggle(ele,cssCls){ 
      $(ele).toggleClass(cssCls);
  }
  
  $('.pa').on('click',function(){
    var paList = $(this).children('.pa-list'),
        paListTxt = $(this).find('.pa-list-text');
    
    paList.slideToggle(300,'swing', function(){
      paListTxt.fadeToggle(200);
    });
    
    $(paList, paListTxt).toggleClass('hidden');
    
    $(this).find('.chevron').toggleClass('flip');
  });
  
});