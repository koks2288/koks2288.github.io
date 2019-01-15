<?php
echo '<div class="container-fluid footcontent">
<div class="container">
<footer>
<div class="row text-center">

<div class="col-xs-4"></div>
<div class="col-xs-4">
<a href="http://webkaniv.in.ua"><p>WebKaniv</p></a> <p>Pазработано группой разработчиков</p><p>© SG by Kaniv 2015</p></div>
<div class="col-xs-4"></div>
</div>
</footer>

</div>



</div>



</div>';
echo '<script src="js/jquery-1.9.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/animate-css.js"></script>
<script src="js/plugins-scroll.js"></script>
<script src="js/fancybox.pack.js"></script>
<script>
$(document).ready(function() {
  
  $(".animater").animated("bounceInLeft", "zoomOutDown");
  $(".animatere").animated("bounceInRight", "zoomOutDown");
  $(".animaterer").animated("bounceInUp", "zoomOutDown");
  $(".animater7").animated("zoomIn", "zoomOutDown");
  $(".animater1").animated("fadeInLeft", "zoomOutDown");
});
</script>;

<script>
 $(document).ready(function() { 
    $("a.fancyimage").fancybox(); 
  }); 
</script>
<script>

$(document).ready(function() {
if ($(document).height() <= $(window).height())
  $(".footcontent").addClass("navbar-bottom");
});
</script>

'?>