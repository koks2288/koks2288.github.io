(function ($) {
    $.fn.showHide = function (options) {
 
    //default vars for the plugin
        var defaults = {
            speed: 1000,
            easing: '',
            changeText: 0,
           
 
        };
        var options = $.extend(defaults, options);
 
        $(this).click(function () {
             // this var stores which button you've clicked
             var toggleClick = $(this);
             // this reads the rel attribute of the button to determine which div id to toggle
             var toggleDiv = $(this).attr('rel');
             // here we toggle show/hide the correct div at the right speed and using which easing effect
             $(toggleDiv).slideToggle(options.speed, options.easing, function() {
             // this only fires once the animation is completed
             if(options.changeText==1){
             $(toggleDiv).is(":visible") ? toggleClick.text(options.hideText) : toggleClick.text(options.showText);
             }
              });
 
          return false;
 
        });
 
    };
})(jQuery);
$(document).ready(function(){
 
   $('.show_hide').showHide({
        speed: 1000,  // скорость открывания
        easing: '',  // Эффект анимации
        changeText: 1,
        
    });
 
});

/*$(document).ready(function() {
  
  $(".swing").animated("swing");
});*/
