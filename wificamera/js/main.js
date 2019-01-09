$(window).scroll(function(){
	/*var st = $(this).scrollTop();
	
	$(".parallax img").css({
		"transform": "translate(0%, -"+ st  +"%"
	});*/
});


//PlaginScroll
$(document).ready(function(){
	$('.go_to1').on("click", "a", function(event){
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();
		var go = $(this).attr('href'), // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
		top = $(go).offset().top;
		$('body,html').animate({scrollTop: top - 200}, 1500);
	    return false; // выключаем стандартное действие

	});
});
//FixedMenu
$(document).ready(function(){
 
        var $menu = $("#main_menu");
 
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("main_menu") ){
                $menu.removeClass("main_menu").addClass("fixed");
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("main_menu");
            }
        });//scroll
    });
//ModalWindow
$(document).ready(function(){
	$( ".vizov_buy" ).click(function() {
 		$(".ModalWindow").removeClass("active");
 		$(".buy").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('lol'); 
	});
	$( ".vizov" ).click(function() {
 		$(".OPEN").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('0'); 
	});
	$( ".vizov1" ).click(function() {
 		$(".OPEN1").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('1'); 
	});
	$( ".vizov2" ).click(function() {
 		$(".OPEN2").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('2'); 
	});
	$( ".vizov3" ).click(function() {
 		$(".OPEN3").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('3'); 
	});
	$( ".vizov4" ).click(function() {
 		$(".OPEN4").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('4'); 
	});
	$( ".vizov5" ).click(function() {
 		$(".OPEN5").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('5'); 
	});
	$( ".vizov6" ).click(function() {
 		$(".OPEN6").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('6'); 
	});
	$( ".vizov7" ).click(function() {
 		$(".OPEN7").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('7'); 
	});
	$( ".vizov8" ).click(function() {
 		$(".OPEN8").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('8'); 
	});
	$( ".vizov9" ).click(function() {
 		$(".OPEN9").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('9'); 
	});
	$( ".vizov10" ).click(function() {
 		$(".OPEN10").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('10'); 
	});
	$( ".vizov11" ).click(function() {
 		$(".OPEN11").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('11'); 
	});
	$( ".vizov12" ).click(function() {
 		$(".OPEN12").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('12'); 
	});
	$( ".vizov13" ).click(function() {
 		$(".OPEN13").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('13'); 
	});
	$( ".vizov14" ).click(function() {
 		$(".OPEN14").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('14'); 
	});
	$( ".vizov15" ).click(function() {
 		$(".OPEN15").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('15'); 
	});
	$( ".vizov16" ).click(function() {
 		$(".OPEN16").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('16'); 
	});
	$( ".vizov17" ).click(function() {
 		$(".OPEN17").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('17'); 
	});
	$( ".vizov18" ).click(function() {
 		$(".OPEN18").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('18'); 
	});
	$( ".vizov19" ).click(function() {
 		$(".OPEN19").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('19'); 
	});
	$( ".vizov_reviews" ).click(function() {
 		$(".reviews_modal").addClass("active");
 		var maskHeight = $(document).height();
		    var maskWidth = $(window).width();
		    $('#mask').css({'width':maskWidth,'height':maskHeight});
		    $('#mask').fadeIn(1000); 
    		$('#mask').fadeTo("slow",0.8);
 		console.log('reviews_modal'); 
	});
});


//slideShow
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


//Close
$(document).ready(function(){
	$( ".close, #mask" ).click(function() {
 		$(".ModalWindow").removeClass("active");
 		$('#mask').hide();
 		console.log('redy'); 
	});
});