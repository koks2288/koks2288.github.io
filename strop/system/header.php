<!DOCTYPE html>
<html>
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<titleСтропмаркет.РФ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bower_components/fancybox/fancybox.css">
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
<section>
<div class="container-fluid fon1">
	<div class="row">
		<div class="container-fluid header navbar navbar-fixed-top">
			<div class="row">
				<div class="col-lg-3 logo"><a href="">Стропмаркет.РФ</a></div>
				<div class="col-lg-6 nav   navbar-collapse">
					<ul>
						<li><a class="go" href="#strop"><p>Стропы</p></a></li>
						<li><a class="go" href="#kanat"><p>Канаты</p></a></li>
						<li><a class="go" href="#takelag"><p>Такелажи</p></a></li>
						<li><a class="go" href="#stag"><p>Стяжки</p></a></li>
						<li><a class="go" href="#verevka"><p>Веревки </p></a></li>
						<li><a class="go" href="#zah"><p>Захваты</p></a></li>
						<li><a class="go" href="#trav"><p>Траверсы</p></a></li>
					</ul>
					
				</div>
				<div class="col-lg-3 nomber">
					<a onclick="yaCounter35667852.reachGoal('Zakaz_zvonka'); return true;"  href="tel:89189070305">8(918)9070305</a>

					<!--<a onclick="yaCounter35667852.reachGoal('Zakaz_zvonka'); return true;" href="#openModal"><span class="glyphicon glyphicon-earphone"></span></a>-->
					<!--<a onclick="yaCounter35667852.reachGoal('Zakaz_zvonka'); return true;"  href="tel:8-800-987-54">8-800-987-54</a>-->			
				</div>
			</div>
		</div>
		<div class="container page-scrol" id="form" >
			<div class="row">
				<div class="col-xs-6 animater baner">
					<h2>Грузоподъемное оборудование от производителя согласно РД и ГОСТ</h2>
					<hr class="primary">
					<p>Скидка 5% до конца недели</p>
					<a href="#openModal"><h3><b>Успей заказать!</b></h3></a>
				</div>
				<div class="col-xs-6 animater1 forma">
					<h2>Отправьте заявку</h2>
					<p>и мы свяжемся с вами</p>
					<?
						if (isset ($_POST['messageFF'])) {
						  mail ("	
2892684@mail.ru, portosdark@yandex.ru",
						        "stropmarket.rf",
						        "\nNomber: ".$_POST['messageFF']);
						  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
						}
					?>

					<form  method="POST">
						<input type="text" name="messageFF" required placeholder="Оставьте телефон" x-autocompletetype="name"></input>
						<input onsubmit="yaCounter35667852.reachGoal('form'); return true;" type="submit" name="zakq"  value="Отправить" >

        
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
						<input onsubmit="yaCounter35667852.reachGoal('form'); return true;" type="submit" name="zakq"  value="Отправить" >
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

</section>
<?php
		    	require('body.php')

		    ?>


		    <!--Оставьте нам ваш емаил и мы бесплатно вышлем ам схему страховки груза)ВАШИ ДАННЫЕ В БЕЗОПАСНОСТИ
				<div class="input-1 ico-phone one-from"><input type="text" name="phone" placeholder="Ваш телефон"></div>
		    -->