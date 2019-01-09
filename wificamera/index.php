<?php
	require 'link/header.php';
?>

	<title>Главная</title>
	<div class="container-fluid main_menu" id="main_menu">
		<div class="row justify-content-md-center go_to1" >
			<ul>
				<a href="#">
					<li>Главная</li>
				</a>
				<a href="#all_catalog">
					<li>Каталог</li>
				</a>
				<a href="#How_to_work">
					<li>Как мы работаем</li>
				</a>
				<a href="#map">
					<li>Контакты</li>
				</a>
				<a href="tel:+380950374122">
					<li>(095) 037-41-22</li>
				</a>
				<a href="tel:+380965084030">
					<li>(096) 508-40-30</li>
				</a>
			</ul>
		</div>
	</div>
	<div class="container-fluid section_first">
		<div class="row">
			<div  class="col-xs-6 col-md-6 col-sm-6">
				<h1 style="font-size: 62px;">Предложи свою цену <br> и покупай</h1>
				<h4 >Видеонаблюдение упрощенной установки</h4>
				<h4 style="text-shadow: 0 0 2px #000;">с техподдержкой от 1-го до 3-х лет</h4>
				<div class="section_first_i">
					<i class="fab fa-android"></i>
					&nbsp;&nbsp;&nbsp;<i class="fas fa-binoculars"></i>
					&nbsp;&nbsp;&nbsp;<i class="fas fa-camera"></i>
					&nbsp;&nbsp;&nbsp;<i class="fas fa-desktop"></i>	
					&nbsp;&nbsp;&nbsp;<i class="fas fa-battery-full"></i>
					&nbsp;&nbsp;&nbsp;<i class="fas fa-american-sign-language-interpreting"></i>
				</div>
				<li class="main_button go_to1"><a  href="#all_catalog">Перейти к каталогу</a></li>
			</div>
			<div class="col-xs-6 col-md-6 col-sm-6">
				<img src="images/main_img.png" alt="">
			</div>
		</div>
	</div>
	<div class="container-fluid call_me">
			<h2>Хотите получить консультацию по телефону?</h2>
			<form method="post" action="" id="formMain" name="formMain" >
				<input id="name" type="text" name="name" placeholder="Ваше имя..." maxlength="30" autocomplete="off" required/>
				<input id="telephone" type="text" name="telephone"  placeholder="Ваш телефон...." maxlength="30" autocomplete="off" required/>
				<input id="button" name="send2" type="submit" value="Заказать звонок"/ >
			</form>
			<ul class="row justify-content-lg-center">
				<li><a href="tel:+380950374122"><i class="phone1 fa fa-phone"></i>380-95-037-41-22</a></li>
				<li><a href="tel:+380965084030"><i class="phone1 fa fa-phone"></i>380-96-508-40-30</a></li>
			</ul>
	</div>
	<div class="container-fluid video_section">
		<div class="row">
			<h2>Как установить? <br> Видео обзор распаковки и настройки видеонаблюдения за 5 минут</h2>
			<div class="video_block">
				<center><iframe src="https://www.youtube.com/embed/J7xZ2pOIAFI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<img src="images/998696236.png" alt="">
				</center>
				
				<p>* Если у Вас вдруг остались еще вопросы, то оставьте свой номер телефона и наш специалист свяжеться с вами в течении 10 минут</p>
			</div>
		</div>
	</div>
	<hr style="width:90%; margin-left: 5%; height: 1px; background-color: #444;">
	<div class="container-fluid all_catalog scrool" id="all_catalog">
		<h2>Каталог</h2>
		<div class="row justify-content-lg-center">
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/1out/_tecsar_1out_4_1.jpg" alt="">
						<p>Модель: Tecsar 1OUT</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 1863 грн</p>
						<a class="vizov">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy" >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/2out/_tecsar_2out_5.jpg" alt="">
						<p>Модель: Tecsar 2OUT</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 2546 грн</p>
						<a class="vizov1">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/2out_LUX_LITE/2out-eco_done.jpg" alt="">
						<p>Модель: Tecsar 2OUT LUX LITE</p>
						<p>Качество изображения: Цветное FullHD (1080p)</p>
						<p style="font-weight:bold;">Цена: 3012 грн</p>
						<a class="vizov2">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block" style="border-right: none;">
						<img class="vizov_buy" src="content/2out_Var/2in-3m-done.jpg" alt="">
						<p>Модель: Tecsar 2OUT Var</p>
						<p>Качество изображения: Цветное HD 1,3 мр (960H)</p>
						<p style="font-weight:bold;">Цена: 3850 грн</p>
						<a class="vizov3">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="row justify-content-lg-center">
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/4out/tecsar_4out.jpg" alt="">
						<p>Модель: Tecsar 4OUT</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 3850 грн</p>
						<a class="vizov4">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/4out_LUX/tecsar_4out.jpg" alt="">
						<p>Модель: Tecsar 4OUT LUX</p>
						<p>Качество изображения: Цветное FullHD (1080p)</p>
						<p style="font-weight:bold;">Цена: 5092 грн</p>
						<a class="vizov5">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/6dom_LUX/6out_dome_lux.jpg" alt="">
						<p>Модель: Tecsar 6dom LUX LITE</p>
						<p>Качество изображения: Цветное FullHD (1080p)</p>
						<p style="font-weight:bold;">Цена: 7918 грн</p>
						<a class="vizov6">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block" style="border-right: none;">
						<img class="vizov_buy" src="content/8mix/tecsar8out-mix-2_2.jpg" alt="">
						<p>Модель: Tecsar 8 MIX</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 6614 грн</p>
						<a class="vizov7">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="row justify-content-lg-center">
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/Dahua_4mix_1pm/02005-1000x1000.jpg" alt="">
						<p>Модель: Dahua 4MIX 1mp HD</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 4620 грн</p>
						<a class="vizov8">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/Dahua_4mix_2mp/02007-1000x1000.jpg" alt="">
						<p>Модель: Dahua 4MIX 2mp HD</p>
						<p>Качество изображения: Цветное FullHD (1080p)</p>
						<p style="font-weight:bold;">Цена: 6132 грн</p>
						<a class="vizov9">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/Dahua_DH-IPC-A15P/a-cam0-1000x1000.jpg" alt="">
						<p>Модель: Dahua DH-IPC-A15P</p>
						<p>Качество изображения: Цветное HD (1,3Мп)</p>
						<p style="font-weight:bold;">Цена: 2856 грн</p>
						<a class="vizov10">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block" style="border-right: none;">
						<img class="vizov_buy" src="content/Dahua_DH-IPC-C15P/DH-IPC-C15P-500x500.jpg" alt="">
						<p>Модель: Dahua DH-IPC-C15P</p>
						<p>Качество изображения: Цветное HD (1,3Мп)</p>
						<p style="font-weight:bold;">Цена: 1820 грн</p>
						<a class="vizov11">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="row justify-content-lg-center">
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/Dahua_DH-IPC-K15P/k-camera-0-1000x1000.jpg" alt="">
						<p>Модель: Dahua DH-IPC-K15P</p>
						<p>Качество изображения: Цветное HD (1,3Мп)</p>
						<p style="font-weight:bold;">Цена: 2027 грн</p>
						<a class="vizov12">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/Dahua_IP_4mix_2mp/02002-1-1000x1000.jpg" alt="">
						<p>Модель: Dahua IP 4MIX 2mp FullHD</p>
						<p>Качество изображения: Цветное FullHD (1080p)</p>
						<p style="font-weight:bold;">Цена: 8120 грн</p>
						<a class="vizov13">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/Dahua_IP_wifi_2out_3mp/kit-ip43-2b-w-1000x1000.png" alt="">
						<p>Модель: Dahua IP WiFi 2OUT 3mp</p>
						<p>Качество изображения: Цветное FullHD (3 mp)</p>
						<p style="font-weight:bold;">Цена: 8708 грн</p>
						<a class="vizov14">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block" style="border-right: none;">
						<img class="vizov_buy" src="content/SEVEN_IP-720/wi-fi_kamera_seven_ip-720_1-800x800.jpg" alt="">
						<p>Модель: SEVEN IP-720</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 948грн</p>
						<a class="vizov15">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="row justify-content-lg-center">
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/4mix 1mp + 4mix 2mp/Mixed_set_AHD-17_br_4x2.0MP_CAM_1xDVR_grande.jpg" alt="">
						<p>Модель: Partizan 4MIX 1mp HD</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 3933 грн</p>
						<a class="vizov16">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/4mix 1mp + 4mix 2mp/Mixed_set_AHD-17_br_4x2.0MP_CAM_1xDVR_grande.jpg" alt="">
						<p>Модель: Partizan 4MIX 2mp FullHD</p>
						<p>Качество изображения: Цветное FullHD (1080p)</p>
						<p style="font-weight:bold;">Цена: 5301 грн</p>
						<a class="vizov17">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block">
						<img class="vizov_buy" src="content/wifi 4mix 1mp + wifi 4mix 2mp/2.jpg" alt="">
						<p>Модель: Partizan WiFi 2Out 1mp HD</p>
						<p>Качество изображения: Цветное HD (720p)</p>
						<p style="font-weight:bold;">Цена: 7213 грн</p>
						<a class="vizov18">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
			<div class="col-lg-3">
					<div class="block" style="border-right: none;">
						<img class="vizov_buy" src="content/wifi 4mix 1mp + wifi 4mix 2mp/2.jpg" alt="">
						<p>Модель: Partizan WiFi 2Out 2mp FullHD</p>
						<p>Качество изображения: Цветное FullHD (1080p)</p>
						<p style="font-weight:bold;">Цена: 9559 грн</p>
						<a class="vizov19">Подробнее</a>
						<center><button class="main_button_all_catalog vizov_buy " >Предложить цену</button></center>
					</div>
			</div>
		</div>
	</div>
	<div class="container-fluid accessories">
		<h2>Комплектующие</h2>
		<div class="row justify-content-lg-center">
			<div class="col-lg-3">
				<a href="accessories/accessories_camera.php">
					<center>
						<div class="block_accessories_main">
							<img  src="images/cupol_camera.jpg" alt="">
							<p>Камеры видеонаблюдения</p>
						</div>
					</center>
				</a>
			</div>
			<!-- <div class="col-lg-3">
				<a href="accessories/accessories_videoregister.php">
					<center>
						<div  style="background: red;" class="block_accessories_main">
							<img  src="images/register.jpg" alt="">
							<p>Видеорегистраторы</p>
						</div>
					</center>
				</a>
			</div> -->
			<div class="col-lg-3">
				<a href="accessories/accessories_pitanie.php">
					<center>
						<div class="block_accessories_main">
							<img  src="images/38715.jpg" alt="">
							<p>Источники питания</p>
						</div>
					</center>
				</a>
			</div>
			<div class=" col-lg-3">
				<a href="accessories/accessories_acsesuars.php">
					<center>
						<div class="block_accessories_main">
							<img  src="images/222.jpg" alt="">
							<p>Аксесуары</p>
						</div>
					</center>
				</a>
			</div>
			<div class="col-lg-3">
				<a href="accessories/accessories_tehnology.php">
					<center>
						<div class="block_accessories_main">
							<img  src="images/jest.jpg" alt="">
							<p>Компьютерная техника</p>
						</div>
					</center>
				</a>
			</div>
			<!-- <div class="col-lg-3"> 
				<a href="">
					<center>
						<div class="block_accessories_main">
							<img  src="images/montag.jpg" alt="">
							<p>Монтажные комплекты</p>
						</div>
					</center>
				</a>
			</div> -->
		</div>
	</div>
	<div class="container-fluid action">
		<!-- <h2 style="text-align: center;">Без подарка камеру не отдадим!</h2> -->
		<div class="row justify-content-center">		
			<div class="action_content">
			<!-- <h2 style="font-size: 25pt; font-weight: 300;">Акция!</h2>	 -->
			<h3>Каждому покупателю подарок:)</h3>
			</div>
			<img style="width: 450px; height:300px;" src="images/korob.jpg" alt="">

		</div>
	</div> 
	<!-- <div class="parallax">
	  	<div class="parallax__layer parallax__layer--back">
	    	<img src="images/dom_leto_dizayn_gorod_ulica_714_1920x1080.jpg" alt="ALT">
	  	</div>
	 	<div class="parallax__layer parallax__layer--base">
	    ...
	  	</div>
	</div> -->
	<div class="container-fluid How_to_work scrool" id="How_to_work">
		<h2>Как мы работаем</h2>
		<div class="row">
			<div class="col-lg-2 offset-lg-1">
				<div class="Work_block">
					<div class="circlet">
						<i style="font-size: 24px; text-align: center; margin-top:30px; color: #fff; " class="fas fa-list-ul"></i>
					</div>
					<p>Вы оставляете заявку</p>
				</div>
			</div>
			<div class="col-lg-2" >
				<div class="Work_block">
					<div class="circlet">
						<i style="font-size: 24px; text-align: center; margin-top:30px; color: #fff; " class="fas fa-phone"></i>
					</div>
					<p>Мы перезванивае в течении 10 минут</p>
				</div>
			</div>
			<div class="col-lg-2" >
				<div class="Work_block">
					<div class="circlet">
						<i style="font-size: 24px; text-align: center; margin-top:30px; color: #fff; " class="fab fa-dropbox"></i>
					</div>
					<p>Согласовываем детали оплаты</p>
				</div>
			</div>
			<div class="col-lg-2" >
				<div class="Work_block">
					<div class="circlet">
						<i style="font-size: 24px; text-align: center; margin-top:30px; color: #fff; " class="fas fa-shopping-basket"></i>
					</div>
					<p>Отправляем ваш заказ</p>
				</div>
			</div>
			<div class="col-lg-2" >
				<div class="Work_block">
					<div class="circlet">
						<i style="font-size: 24px; text-align: center; margin-top:30px; color: #fff; " class="fas fa-heart"></i>
					</div>
					<p>Вы довольны и рекомендуете нас друзьям!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid slide_show">
		  <!-- Full-width images with number text -->
		  <div class="mySlides">
		    <div class="numbertext">1 / 6</div>
		      <img src="images/slideshow/montage-cams.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
		    <div class="numbertext">2 / 6</div>
		      <img src="images/slideshow/7553878_l.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
		    <div class="numbertext">3 / 6</div>
		      <img src="images/slideshow/a3169b09c60a2128000639ffc9eeb752.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
		    <div class="numbertext">4 / 6</div>
		      <img src="images/slideshow/img_4036.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
		    <div class="numbertext">5 / 6</div>
		      <img src="images/slideshow/IMG_9339.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
		    <div class="numbertext">6 / 6</div>
		      <img src="images/slideshow/maxresdefault.jpg" style="width:100%">
		  </div>

		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>

		  <!-- Image text -->
		  <div class="caption-container">
		    <p id="caption"></p>
		  </div>

		  <!-- Thumbnail images -->
		  <div class="row" style="margin: 0;">
		    <div class="column">
		      <img class="demo cursor" src="images/slideshow/montage-cams.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
		    </div>
		    <div class="column"> 
		      <img class="demo cursor" src="images/slideshow/7553878_l.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/slideshow/a3169b09c60a2128000639ffc9eeb752.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/slideshow/img_4036.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/slideshow/IMG_9339.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
		    </div> 
		    <div class="column">
		      <img class="demo cursor" src="images/slideshow/maxresdefault.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
		    </div>
		  </div>
		</div>
	<div class="container-fluid quote">
		<div class="row">
			<h2>"Защити своё будущее уже сегодня!"</h2>
		</div>
	</div>
	<div class="container-fluid reviews">
		<h2>Отзывы покупателей</h2>
		<div class="row">
			<div class="full_block_reviews">
		    	<div class="block_reviews_img">
		    		<img src="content/1out/_tecsar_1out_4_1.jpg" alt="">
		    	</div>
		    	<div class="block_reviews_text">
				    		<p>Андрей</p>
				    		<p>Город: Лубны</p>
				    		<p>Купил комплект на 4 камеры, доставили вовремя, все в целости.</p>
				    		<p>Рекомендую!</p>
				    		<p><b style="color: red; font-size: 18px;">Ответ администратора:</b> Спасибо за рекомендацию.</p>
		    	</div> 
		    	
		    </div>

			
		</div>
		<div class="row">
			<div class="full_block_reviews">
		    	<div class="block_reviews_img">
		    		<img src="content/2out_Var/2in-3m-done.jpg" alt="">
		    	</div>
		    	<div class="block_reviews_text">
				    		<p>Петр</p>
				    		<p>Город: Никоаев</p>
				    		<p>Купил комплект камер, разобрался сам, все легко и просто подключился. Цена качество лучшее что находил.</p>
				      		<p>Рекомендую!</p>
				    		<p><b style="color: red; font-size: 18px;">Ответ администратора:</b> Спасибо за рекомендацию.</p>
		    	</div> 
		    	
		    </div>

			
		</div>
		<div class="row">
			<div class="full_block_reviews">
		    	<div class="block_reviews_img">
		    		<img src="images/02005-1000x1000.jpg" alt="">
		    	</div>
		    	<div class="block_reviews_text">
				    		<p>Влад</p>
				    		<p>Город: Черкассы</p>
				    		<p>Предложил свою цену за комплект, получил желаемую скуидку и на мой взгляд очень качественные камеры</p>
				     		<p>Спасибо!</p>
				    		<p><b style="color: red; font-size: 18px;">Ответ администратора:</b> Спасибо за рекомендацию.</p>
		    	</div> 
		    	
		    </div>

			
		</div>
		<center><button style="font-size: 18px;" class="main_button_all_catalog vizov_reviews"> Оставить отзыв</button></center>
	</div>
	<div class="container-fluid map scrool" id="map">
		<div class="row justify-content-lg-center">
			<div class="map_info_block">
				<p>Контакты</p>
				<p>Тел: +38095-03-74-122</p>
				<p>Тел: +38096-50-84-030</p>
				<p>Г.Киев, пер.Ярославский 7\9</p>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.6159350724747!2d30.505403115914937!3d50.46687619406195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce6c8857d6ed%3A0x783c0f7d05547f20!2z0K_RgNC-0YHQu9Cw0LLRgdC60LjQuSDQv9C10YAuLCA3LzksINCa0LjQtdCyLCDQo9C60YDQsNC40L3QsCwgMDQwNzE!5e0!3m2!1sru!2sde!4v1522931310507" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<div id="mask"></div>
	
<?php
	include 'modalwindow/buy.php';
	include 'modalwindow/reviews.php';
	include 'modalwindow/modalwindow.php';
	include 'modalwindow/modalwindow1.php';
	include 'modalwindow/modalwindow2.php';
	include 'modalwindow/modalwindow3.php';
	include 'modalwindow/modalwindow4.php';
	include 'modalwindow/modalwindow5.php';
	include 'modalwindow/modalwindow6.php';
	include 'modalwindow/modalwindow7.php';
	include 'modalwindow/modalwindow8.php';
	include 'modalwindow/modalwindow9.php';
	include 'modalwindow/modalwindow10.php';
	include 'modalwindow/modalwindow11.php';
	include 'modalwindow/modalwindow12.php';
	include 'modalwindow/modalwindow13.php';
	include 'modalwindow/modalwindow14.php';
	include 'modalwindow/modalwindow15.php';
	include 'modalwindow/modalwindow16.php';
	include 'modalwindow/modalwindow17.php';
	include 'modalwindow/modalwindow18.php';
	include 'modalwindow/modalwindow19.php';

?>
<?php
	require 'link/footer.php';
?>	

