<?php
echo '<div class="container-fluid footcontent">
<div class="container">
<footer>
<div class="row text-center">

<div class="col-xs-4"></div>
<div class="col-xs-4">';
if(isset($user))echo '<a href="'.home.'/exit.php">Выйти  с сайта</a>';
echo '<p>Pазработано группой разработчиков Global IT</p> <p>2015</p></div>
<div class="col-xs-4"></div>
</div>
</footer>

</div>



</div>';
echo "<script src='".home."/js/jquery-1.9.1.js'></script>
<script src='".home."/js/bootstrap.js'></script>
<script src='".home."/js/waypoints.min.js'></script>
<script src='".home."/js/animate-css.js'></script>
<script src='".home."/js/plugins-scroll.js'></script>
<script>
$(document).ready(function() {
  
  $('.animater').animated('bounceInLeft', 'zoomOutDown');
  $('.animatere').animated('bounceInRight', 'zoomOutDown');
  $('.animaterer').animated('bounceInUp', 'zoomOutDown');
  $('.animater7').animated('zoomIn', 'zoomOutDown');
  $('.animater1').animated('fadeInLeft', 'zoomOutDown');
});
</script>";
?>