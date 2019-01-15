<?php
require('system/config.php');
require('system/header.php');
if(isset($_REQUEST['ok'])){
$name  = save($_POST['name']);
$text  = save($_POST['text']);
$email  = save($_POST['email']);
if(!empty($name) and !empty($text) and !empty($email)){
$message = $text;
$num = rand(1001,9999);
$message = wordwrap($message, 70);
mail('yasupertaras@yandex.ru', 'Заказ с сайта Kameschik.com.ua'.$num, $message);
echo '<div class="well">
    	<div class="text-center"><h2><img src="'.home.'/images/success.png" width="90" height="90" alt="*" /> Спасибо.Ваше сообщение отправлено!</h2><h3>Мы оперативно ответим на ваш запрос!</h3>Номер вашего заказа № '.$num.'</div></div>';
require('system/footer.php');
exit();
}
}
echo '<div class="container ">

<div class="row jumbotron brickwall">
<div class="col-xs-7 col-xs-offset-3 ">
<h2>Добро пожаловать на строительный сайт "Каменщик".</h2> 

      <p>Наш сайт создан квалифицированными специалистами с многолетним опытом работы, а также людьми занимающихся благоустройством и озеленением территории.</p>

      <p>Посетив его вы имеете возможность ознакомиться со всем спектром надаваемых нами услуг в сфере строительства,увидеть и оценить качество выполненных работ,задать интерисующие вас вопросы и получить на них исчерпывающие ответы</p>
 </div>
 </div>  
</div>';



echo '<div class="container maincontent">
<section>
<div class="row text-center panell">
<div class="col-xs-4"><a href="бригады.html"><img src="images/1.png" width="200px" class="center-block mom"><h2>Бригады</h2></a></div>
<div class="col-xs-4"><a href="partners.html"><img src="images/2.png" width="200px" class="center-block mom"><h2>Партнеры</h2></a></div>
<div class="col-xs-4"><a href="http://google.com"><img src="images/3.png" width="200px" class="center-block mom"><h2>Форум</h2></a></div>
</div>
</section>

 	<section>
             <div class="carousel slide" id="gallery-carousel" data-ride="carousel">
             	<ol class="carousel-indicators">
                	<li data-target="#gallery-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#gallery-carousel" data-slide-to="1"></li>
                    <li data-target="#gallery-carousel" data-slide-to="2"></li>
                 </ol>
                  
              <div class="carousel-inner">
              	<div class="item active">
                	<img src="images/Slide1.jpg" alt="Slider image" width="100%" images="">
                    <div class="carousel-caption">Примеры фото.</div>
                  </div>  
                 <div class="item">
                	<img src="images/Slide3.jpg"					alt="Slider image" width="100%" images="">
                    <div class="carousel-caption">Примеры фото.</div>
                  </div>  
                  <div class="item">
                	<img src="images/Slide2.jpg" alt="Slider image" width="100%" images="">
                    <div class="carousel-caption">Примеры фото.</div>
                  </div>  
                </div> <!--end carousel-inner-->
                <a href="#gallery-carousel" class="left carousel-control" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left"></span>
    			</a>
      		  <a href="#gallery-carousel" class="right carousel-control" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
   			 </a>
             </div> <!--end carousel-->
            </section>  
<section>            
<div class="uslugi text-center">   
<div class="row">
<div class="col-xs-3 animaterer"><a href="b2.html"><img src="images/roadworker.png"></a>
<h3>Фундаменты</h3></div>
<div class="col-xs-3 animaterer"><a href=""><img src="images/wall2.png"></a>
<h3>Стены</h3></div>
<div class="col-xs-3 animaterer"><a href=""><img src="images/spatula.png"></a>
<h3>Заливка армпоясов</h3></div>
<div class="col-xs-3 animaterer"><a href=""><img src="images/chisel.png"></a>
<h3>Заливка стяжек</h3></div>
</div>
<div class="row">
<div class="col-xs-3 animater"><a href=""><img src="images/roof.png"></a>
<h3>Кровельные работы</h3></div>
<div class="col-xs-3 animater"><a href=""><img src="images/building.png"></a>
<h3>Фасадные работы</h3></div>
<div class="col-xs-3 animatere"><a href=""><img src="images/grass.png"></a>
<h3>Благоустройство ландшафтов</h3></div>
<div class="col-xs-3 animatere"><a href=""><img src="images/fence.png"></a>
<h3>Заборы</h3></div>
</div></div>
</section>        
            
            
 <section>           
<div class="row">
<div class="col-xs-8 col-xs-offset-2"> <h2 class="text-center">Bсех желающих людей строительных профессий,заказчиков и работодателей!</h2>

<p class="text-center">Приглашаем  к сотрудничеству,обмену информацией,поиску и предоставлению работы на страницах нашего сайта. Для этого вам нужно оставить свои контактные данные,кто вы и чем занимаетесь, так как мы хотим создать и сплотить в единое общество настоящих профессионалов с безупречной репутацией,для помощи друг другу, в индустрии строительства.</p>
</div>
</div>
</section>
 <section>
 	<div class="well">
    	<div class="text-center">';

		
    		echo " <form  method='POST' class='form-horizontal' role='form'>
            	<div class='form-group'>
                	<label for='contact-name' class='col-lg-2 control-label'>Имя</label>
                    
                    <div class='col-lg-10'>
                    	<input type='text' class='form-control' name='name' required placeholder='Имя'>
                    </div>   
                  </div>
                  
                  	<div class='form-group'>
                	<label for='contact-email' class='col-lg-2 control-label'>Email-адрес</label>
                    
                    <div class='col-lg-10'>
                    	<input type='email' class='form-control' name='email' required placeholder='Email'>
                    </div>   
                  </div>
                  
                   
                    <div class='form-group'>
                	<label for='contact-message' class='col-lg-2 control-label'>Ваше сообщение</label>
                    
                    <div class='col-lg-10'>
                    	<textarea  name='text' class='form-control' required cols=30 rows=10 placeholder='Сообщение'></textarea>
                    </div>   
                  </div>
                  
                  <div class='form-group'>
                  	<div class='col-lg-10 col-lg-offset-2'>
                    	<button type='submit' name='ok' class='btn btn-primary' data-toggle='modal' data-target='#modal-1'>Отправить</button>

                    </div>    
                  </div>
                </form>  ";  
       echo ' </div>
     </div> 
 </section>

</div><!--container-->';

require('system/footer.php');
?>