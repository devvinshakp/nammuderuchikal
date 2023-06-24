$(function(){
// IPad/IPhone
  var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
  ua = navigator.userAgent,

  gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";},

  scaleFix = function () {
    if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
      viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
      document.addEventListener("gesturestart", gestureStart, false);
    }
  };
  
  scaleFix();
  // Menu Android
  if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')

var currentYear = (new Date).getFullYear();
  $(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
  jQuery(".grid_4.b1").hover(function(){	
	$(this).find('.title').fadeIn(500);
	},function(){		
	$(this).find('.title').fadeOut(300);	
	});	
  jQuery(".grid_4.wow.SlideInDown.g1").hover(function(){	
	$(this).find('.box_l_hover').fadeIn(200);
	},function(){		
	$(this).find('.box_l_hover').fadeOut(100);	
	});	
  jQuery(".grid_4.g2").hover(function(){	
	$(this).find('.box_l_hover').fadeIn(200);
	},function(){		
	$(this).find('.box_l_hover').fadeOut(100);	
	});
  new WOW().init();
  });

  