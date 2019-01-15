//FixedMenu
$(document).ready(function(){
 
    var $menu = $("#main_menu");
    var $about = $("#about-us");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > 95 && $menu.hasClass("navbar") ){
            $menu.removeClass("navbar").addClass("fixed").addClass("fadeInDown");
        } else if($(this).scrollTop() <= 95 && $menu.hasClass("fixed")) {
            $menu.removeClass("fixed").removeClass("fadeInDown").addClass("navbar");
        }
    });//scroll

    $(window).scroll(function(){
    	if ($(this).scrollTop() > 100 && $about.hasClass("animated") ){
    		$about.addClass("zoomIn");
    	} else{

    	}


    });
});

/*$(document).ready(function(){

	var $div = $("#slidingDiv");
	var $div1 = $("#slidingDiv1");
	var $div2 = $("#slidingDiv2");
	var $div3 = $("#slidingDiv3");
	var $div4 = $("#slidingDiv4");

	$(".show_hide").click(function(){
		$div.toggleClass("openClass");
	});
	$(".show_hide_one").click(function(){
		$div1.toggleClass("openClass");
	});
	$(".show_hide_two").click(function(){
		$div2.toggleClass("openClass");
	});
	$(".show_hide_free").click(function(){
		$div3.toggleClass("openClass");
	});
	$(".show_hide_four").click(function(){
		$div4.toggleClass("openClass");
	});
   
});
*/
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