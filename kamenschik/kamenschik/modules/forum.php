<?php
require('../system/config.php');
require('../system/header.php');
switch($_GET['act']){
	default:
if(isset($user)){
	echo '<div class="well">
    	<div class="text-center">';
		
	echo '<div class="well">
    	<div class="text-center">';
		
		echo '<h4><b>Форум</b></h4>';

	echo '</div></div>';	
	
		
	$select = $sql->query('SELECT * FROM `forum` ORDER BY `time` DESC');
	while($row = $select->fetch_array()){
		echo '<div class="well">
    	<div class="text-center">';
		echo '<b>Название темы:</b>  <a href="'.home.'/forum/thema'.$row['id'].'">'.$row['name'].'</a>';
		echo '</div></div>';
	}
		if($user['level'] == 5)echo '<a href="'.home.'/modules/forum.php?act=addthems">Создать тему</a>';
	echo '</div></div>';

	}else{
	echo '<div class="well">
    	<div class="text-center">';
		if(isset($_REQUEST['ok']))
		{
			$login = save($_POST['login']);
			$pass = save($_POST['pass']);
			$dbsql = $sql->query("SELECT `login`,`pass` FROM `user` WHERE `login` = '".$login."' and `pass`='".$pass."' LIMIT 1");
			$sql_log = $dbsql->fetch_array();
			echo '<div class="well">
    	<div class="text-center">';
		if(empty($login) or empty($pass)){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Введите логин и пароль</font color>';
		}
		elseif(mb_strlen($login) < 3 or mb_strlen($login) > 20){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Короткий или длинный логин</font color>';
		}elseif(mb_strlen($pass) < 3 or mb_strlen($pass) > 30){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Короткий или длинный пароль</font color>';
		}elseif (!preg_match('|^[a-z0-9\-]+$|i', $login)){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Кириллица запрещена в логине</font color>';
		}elseif (!preg_match('|^[a-z0-9\-]+$|i', $pass)){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Кириллица запрещена в пароле</font color>';
		}elseif($sql_log == 0) {
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Неверный логин или пароль</font color>';
		}else{
			setcookie('uslog', $login, time()+86400*365, '/');
			setcookie('uspass', $pass, time()+86400*365, '/');
			header('location: '.home.'/modules/forum.php');
			exit();
		}
			echo '</div></div>';
			
		
		
		
		}
		echo " <form  method='POST' class='form-horizontal' role='form'>
            	<div class='form-group'>
                	<label for='contact-name' class='col-lg-2 control-label'>Логин</label>
                    
                    <div class='col-lg-10'>
                    	<input type='text' class='form-control' required name='login'  placeholder='Введите логин'>
                    </div>   
                  </div>
                  
                  	<div class='form-group'>
                	<label for='contact-email' class='col-lg-2 control-label'>Пароль</label>
                    
                    <div class='col-lg-10'>
                    	<input type='password' class='form-control' required name='pass'  placeholder='Введите пароль'>
                    </div>   
                  </div>
                  
                   
                 
                  
                  <div class='form-group'>
                  	<div class='col-lg-10 col-lg-offset-2'>
                    	<button type='submit' name='ok' class='btn btn-primary' data-toggle='modal' data-target='#modal-1'>Войти</button>

                    </div>    
                  </div>
                </form>  "; 
		echo 'Еще не зарегистрированы? <a href="'.home.'/modules/reg.php">Регистрация</a>';
		echo '</div></div>';
}
break;

case 'addthems':
$us = $sql->query('SELECT `level` FROM `user` WHERE `id` = "'.$user['id'].'"');
$userinho = $us->fetch_array();
if($userinho['level'] == 5){
	echo '<div class="well">
    	<div class="text-center">';
		
		
		
		if(isset($_REQUEST['ok'])){
			echo '<div class="well">
    	<div class="text-center">';
			$name = save($_POST['name']);
			$text = save($_POST['text']);
			if(empty($name) or empty($text)){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Введите название темы и сообщение</font color>';
		}elseif(mb_strlen($name) < 3 or mb_strlen($text) < 3){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Короткий текст</font color>';
		}else{
			$sql->query('INSERT INTO `forum` SET `name` ="'.$name.'", `text` = "'.$text.'", `author` = "'.$user['id'].'", `time` = "'.time().'"');
			header('Location: '.home.'/modules/forum.php');
			exit();
		}
			echo '</div></div>';
		}
		
		echo " <form  method='POST' class='form-horizontal' role='form'>
            	<div class='form-group'>
                	<label for='contact-name' class='col-lg-2 control-label'>Название темы</label>
                    
                    <div class='col-lg-10'>
                    	<input type='text' class='form-control'  name='name'  placeholder='Введите название'>
                    </div>   
                  </div>
                  
                    <div class='form-group'>
                	<label for='contact-message' class='col-lg-2 control-label'>Ваше сообщение</label>
                    
                    <div class='col-lg-10'>
                    	<textarea  name='text' class='form-control'  cols=30 rows=10 placeholder='Сообщение'></textarea>
                    </div>   
                  </div>
                  
                   
                 
                  
                  <div class='form-group'>
                  	<div class='col-lg-10 col-lg-offset-2'>
                    	<button type='submit' name='ok' class='btn btn-primary' data-toggle='modal' data-target='#modal-1'>Создать</button>

                    </div>    
                  </div>
                </form>  "; 
		
		echo '</div></div>';
}else{
	echo '<div class="well">
    	<div class="text-center">';
	echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Ошибка доступа</font color>';
	echo '</div></div>';
}
break;

case 'thema':
$id = abs(intval($_GET['id']));
$st = $sql->query('SELECT * FROM `forum` WHERE `id` = "'.$id.'"');
$tt = $st->fetch_array();
if($tt['id'] !=0 and isset($tt['id'] )){

echo '<div class="well">
    	<div class="text-center">';
echo 'Автор: '.user($tt['author']).'</br>('.vremja($tt['time']).')</br>Сообщение: '.$tt['text'];
echo '</div></div>';
$mes = $sql->query('SELECT * FROM `forum_them` WHERE `thema` = "'.$id.'" ORDER BY `time` ');
while($m = $mes->fetch_array()){
	echo '<div class="well">
    	<div class="text-center">'.user($m['author']).'</br>('.vremja($m['time']).')</br>'.$m['text'].'</div></div>';
}
echo '<div class="well">
    	<div class="text-center">';
		if(isset($_REQUEST['ok'])){
		$text = save($_POST['text']);
		
		if(empty($text) or mb_strlen($text) < 2){
			echo '<div class="well">
    	<div class="text-center">';
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Ошибка ввода</font color>';
		echo '</div></div>';
		}else{
			$sql->query('INSERT INTO `forum_them` SET `text` = "'.$text.'", `author` = "'.$user['id'].'", `time` = "'.time().'",`thema` = "'.$id.'"');
			header('Location: '.home.'/forum/thema'.$id);
		}
		}
	
		
		
		echo " <form  method='POST' class='form-horizontal' role='form'>
            	<div class='form-group'>
                	<label for='contact-message' class='col-lg-2 control-label'>Ваше сообщение</label>
                    
                    <div class='col-lg-10'>
                    	<textarea  name='text' class='form-control' required  cols=30 rows=10 placeholder='Сообщение'></textarea>
                    </div>   
                  </div>
                  
                   
                 
                  
                  <div class='form-group'>
                  	<div class='col-lg-10 col-lg-offset-2'>
                    	<button type='submit' name='ok' class='btn btn-primary' data-toggle='modal' data-target='#modal-1'>Отправить</button>

                    </div>    
                  </div>
                </form>  "; 
		echo '</div></div>';
		
}else{
		echo '<div class="well">
    	<div class="text-center">';
	echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Ошибка доступа</font color>';
	echo '</div></div>';
}
break;
}
require('../system/footer.php');
?>