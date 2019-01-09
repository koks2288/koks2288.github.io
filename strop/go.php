<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bower_components/fancybox/fancybox.css">
	<link rel="stylesheet" type="text/css" href="bower_components/mdl/material.css">
	<link rel="stylesheet" type="text/css" href="bower_components/mdl/material.min.css">
	<link rel="stylesheet" type="text/css" href="bower_components/css/animate.css">
	<link rel="stylesheet" type="text/css" href="bower_components/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="bower_components/fonts/MinionPro-Bold.otf">
	<link rel="stylesheet" type="text/css" href="http://mnogoblog.ru/wp-content/uploads/2013/12/zamok2.html">
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="adaptiv.css">
</head>
<body>
	<div class="container-fluid fon1">
	<div class="row">
		<div class="container-fluid header navbar navbar-fixed-top">
			<div class="row">
				<div class="col-lg-3 logo"><a href="">Стропмаркет.РФ</a></div>
				<div class="col-lg-6 nav   navbar-collapse">
					<ul>
						<li><a class="go" onclick="yaCounterST.reachGoal('T35667852'); return true;" href="#strop"><p>Стропы</p></a></li>
						<li><a class="go" onclick="yaCounterST.reachGoal('T35667852'); return true;" href="#kanat"><p>Канаты</p></a></li>
						<li><a class="go" onclick="yaCounterST.reachGoal('T35667852'); return true;" href="#takelag"><p>Такелажи</p></a></li>
						<li><a class="go" onclick="yaCounterST.reachGoal('T35667852'); return true;" href="#stag"><p>Стяжки</p></a></li>
						<li><a class="go" onclick="yaCounterST.reachGoal('T35667852'); return true;" href="#verevka"><p>Веревки </p></a></li>
					</ul>
					
				</div>
				<div class="col-lg-3 nomber">
					<a onclick="yaCounterST.reachGoal('T35667852'); return true;"  href="tel:8-800-022-45">8-800-022-45</a>
					<br>
					<a onclick="yaCounterST.reachGoal('T35667852'); return true;"  href="tel:8-800-987-54">8-800-987-54</a>			
				</div>
			</div>
		</div>
		<div class="container page-scrol" id="form" >
			<div class="row">
				<div class="col-xs-6 animater  baner">
					<h2>Грузоподьёмное оборудование от производителя по ГОСТу</h2>
					<hr class="primary">
					<p>Скидка 5% до конца недели</p>
					<a href="#openModal"><h3>Успей заказать!</h3></a>
				</div>
				<div class="col-xs-6  forma">
					<h2>Отправьте заявку</h2>
					<p>и мы свяжемся с вами</p>
					<?
						if (isset ($_POST['messageFF'])) {
						  mail ("semenihin_d@list.ru",
						        "stropmarket.rf",
						        "\nNomber: ".$_POST['messageFF']);
						  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
						}
					?>

					<form  method="POST">
						<input type="text" name="messageFF" required placeholder="Оставьте телефон" x-autocompletetype="name"></input>
						<input onsubmit="yaCounterST.reachGoal('form'); return true;" type="submit" name="zakq"  value="Отправить" >

        
					</form>
					<br>
					<br>

					<span class="glyphicon glyphicon-lock"></span>
					<p class="m">ВАШИ ДАННЫЕ В БЕЗОПАСНОСТИ</p>
				</div>

<div id="openModal" class="modalDialog">

    <div class="forma1">

        <a href="#close" title="Закрыть" class="close">X</a>

        			<h2>Отправьте заявку</h2>
					<p>и мы свяжемся с вами</p>

					<form  method="POST">
						<input type="text" name="messageFF" required placeholder="Оставьте телефон" x-autocompletetype="name"></input>
						<input onsubmit="yaCounterST.reachGoal('form'); return true;" type="submit" name="zakq"  value="Отправить" >
					<br>
					
					<br>
					<span class="glyphicon glyphicon-lock"></span>
					<p class="m">ВАШИ ДАННЫЕ В БЕЗОПАСНОСТИ</p>
					</form>


    </div>

</div>

			</div>
		</div>
	</div>
</div>


<script src="bower_components/jquery/dist/jquery.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="bower_components/js/animate-css.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
	
	<script src="bower_components/js/waypoints.min.js"></script>
	<script src='bower_components/fancybox/jquery.fancybox.js'></script>
	
	<script src="modules/js/index.js"></script>
	
	<script>
	 $(document).ready(function() { 
	    $("a.fancyimage").fancybox(); 
	  }); 
	</script>
	
	<script>
		$(document).ready(function() {
		  
		  $(".animater").animated("fadeInLeft", "zoomOutDown");


		});
	</script>
	<script>			
			$(document).ready(function(){
				$('.go').click(function(){
					var el = $(this).attr('href');
					$('body').animate({scrollTop:$(el).offset().top}, 1000);
				});
			});
		</script>
</body>
</html>