$(document).ready(function(){

  $('#reve li').on("click", function(){
     $("#reve li").removeClass("activeee");
     $(this).addClass("activeee");
      $("#reve").scrollCenter(".activeee", 300);
  });

  jQuery.fn.scrollCenter = function(elem, speed) {
          var active = jQuery(this).find(elem);
          var activeWidth = active.width() / 2;
          var pos = active.position().left + activeWidth;
          var elpos = jQuery(this).scrollLeft();
          var elW = jQuery(this).width();
          pos = pos + elpos - elW / 2;
          jQuery(this).animate({
            scrollLeft: pos
          }, speed == undefined ? 1000 : speed);
          return this;
        };
});



     var product = document.querySelectorAll(".product-container .product");
     for(var i=0;i<product.length;i++){
       product[i].addEventListener("click",function(){
         var current =document.getElementsByClassName("active");
          	current[0].classList.remove("active");
         this.classList.add("active");
       });
     }
