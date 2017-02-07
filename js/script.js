
$(document).ready(function(){
 $("#nadpis").fadeOut(0);
 $("#nadpis").fadeIn(1500);

/*  document.write(document.documentElement.clientWidth); //šířka okna prohlížeče*/
jQuery('.toggle-nav').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.menu ul').toggleClass('active');
        e.preventDefault();
    });
$(window).resize(function(){                  //fix bug zmenšení při scrollu na mobilní verzi
  if($(window).width()<860){
    if ($(document).scrollTop() > 50) {
      $(".fix-menu").addClass("menu");
      $(".fix-menuitem").addClass("menuitem");
      $("nav ul").removeClass("fix-navul");
      $(".logo").removeClass("fix-logo");
      $(".menuitem").removeClass("fix-menuitem");
      $(".menu").removeClass("fix-menu");
      $(".fix-aktivni").addClass("aktivni");
      $(".aktivni").removeClass("fix-aktivni");
      $(".logo").removeClass("fix-logo");   
    }
  }
});
    var offset=$("#uparrow").offset();
$(window).scroll(function() {
  if($(window).width()>860){
        $("#uparrow").fadeOut(0);
    if ($(document).scrollTop() > 50) {
      $(".menu").addClass("fix-menu");
      $("nav ul").addClass(" fix-navul ");
      $(".logo").addClass("fix-logo");
      $(".menuitem").addClass("fix-menuitem");
      $(".aktivni").addClass("fix-aktivni");
      $(".logo").addClass("fix-logo");
      $(".fix-menu").removeClass("menu");
      $(".menuitem").removeClass("menuitem");
      $(".fix-aktivni").removeClass("aktivni");
    } else {
      $(".fix-menu").addClass("menu");
      $(".fix-menuitem").addClass("menuitem");
      $("nav ul").removeClass("fix-navul");
      $(".logo").removeClass("fix-logo");
      $(".menuitem").removeClass("fix-menuitem");
      $(".menu").removeClass("fix-menu");
      $(".fix-aktivni").addClass("aktivni");
      $(".aktivni").removeClass("fix-aktivni");
      $(".logo").removeClass("fix-logo");
    }
  }else{ 
    var posun=offset.top-$(document).scrollTop();
    var scrollview=$(document).scrollTop()+$(window).height()+10;
    var scrollBottom=$(document).height()-$(document).scrollTop();
      if (scrollview<=offset.top && $(document).scrollTop()>100) {
      /*  console.log("static!!");
        console.log(" offset top: " + offset.top);
        console.log("scroll+view: "+ scrollview);*/
        $("#uparrow").fadeIn(1000);
        $(".uparrow").addClass("uparrow-active");
       $(".uparrow-active").removeClass("uparrow"); 
      }else{

        $(".uparrow-active").addClass("uparrow"); 
        $(".uparrow").removeClass("uparrow-active");
      }
    //menší šířka než 860           
  }
});
$("#uparrow a").on("click",function(e){
  var odkaz = $(this).attr("href"),
      menu = $('#nav'),
      rychlost =  1000,
      efekt = "easeInOutExpo";

      $("html, body").stop().animate(
        {scrollTop: $("#top").offset().top - menu.height()}, 
          rychlost);
      e.preventDefault();
});
 $("#uparrow img").hover(function(){ 
    $(this).attr('src', '/graphics/up-arrow.png');      //hover efekt 
    }, function() {
    $(this).attr('src', '/graphics/up-arrow.png');
    });


});