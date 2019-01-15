<?php
echo '
<div class="schetchik">
<!-- MyCounter v.2.0 -->
<script type="text/javascript"><!--
my_id = 155126;
my_width = 88;
my_height = 41;
my_alt = "MyCounter - счётчик и статистика";
//--></script>
<script type="text/javascript"
  src="https://get.mycounter.ua/counter2.0.js">
</script><noscript>
<a target="_blank" href="http://mycounter.ua/"><img
src="https://get.mycounter.ua/counter.php?id=155126"
title="MyCounter - счётчик и статистика"
alt="MyCounter - счётчик и статистика"
width="88" height="41" border="0" /></a></noscript>
<!--/ MyCounter -->
</div>

<div class="container-fluid footcontent1">
<div class="container">
<footer>
<div class="row text-center">

<div class="col-xs-4"></div>
<div class="col-xs-4">
<p>Разработано группой разработчиков © SG by Kaniv </p>
<a href="http://webkaniv.in.ua">www.WebKaniv.in.ua</a></div>
<div class="col-xs-4"></div>
</div>
</footer>

</div>



</div>';
echo '

<script src="js/jquery-1.9.1.js"></script>
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