<?php
require('../system/config.php');
require('../system/header.php');
if(isset($user)){
	echo '<div class="well">
    	<div class="text-center"><img src="'.home.'/images/invalid.png" alt="*" /> Вы уже зарегистрированы</div></div>';
	require('../system/footer.php');
	exit();
}else{
	echo '<div class="well">
    	<div class="text-center">';
		if(isset($_REQUEST['ok']))
		{
			$login = save($_POST['login']);
			$pass = save($_POST['pass']);
			$r_pass = save($_POST['r_pass']);
			$dbsql = $sql->query("SELECT `login` FROM `user` WHERE `login` = '".$login."' LIMIT 1");
			$sql_log = $dbsql->fetch_array();
			echo '<div class="well">
    	<div class="text-center">';
		if(empty($login) or empty($pass) or empty($r_pass)){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Введите логин и пароль</font color>';
		}
		elseif(mb_strlen($login) < 3 or mb_strlen($login) > 20){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Короткий или длинный логин</font color>';
		}elseif(mb_strlen($pass) < 3 or mb_strlen($pass) > 30){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Короткий или длинный пароль</font color>';
		}elseif($pass !== $r_pass){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Пароли не совпадают</font color>';
		}elseif (!preg_match('|^[a-z0-9\-]+$|i', $login)){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Кириллица запрещена в логине</font color>';
		}elseif (!preg_match('|^[a-z0-9\-]+$|i', $pass)){
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Кириллица запрещена в пароле</font color>';
		}elseif(!empty($login) && $sql_log >= 1) {
			echo '<img src="'.home.'/images/invalid.png" alt="*" /><font color="red"> Такой логин уже используется</font color>';
		}else{
			$sql->query('INSERT INTO `user` SET `login`="'.$login.'", `pass`="'.$pass.'"');
			echo '<img src="'.home.'/images/valid.png" alt="*" /><font color="green"> Вы успешно зарегистрированы</font color>';
			setcookie('uslog', $login, time()+86400*365, '/');
			setcookie('uspass', $pass, time()+86400*365, '/');
			header('location: '.home.'/modules/forum.php');
			exit();
		}
			echo '</div></div>';
			
		
		
		
		}
		echo " <form  method='POST' class='form-horizontal' role='form'>
            	<div class='form-group'>
                	<label for='contact-name' class='col-lg-2 control-label'>Логин </label>
                    
                    <div class='col-lg-10'>
                    	<input type='text' class='form-control' required name='login'  placeholder='Введите логин со всем уважением'>
                    </div>   
                  </div>
                  
                  	<div class='form-group'>
                	<label for='contact-email' class='col-lg-2 control-label'>Пароль</label>
                    
                    <div class='col-lg-10'>
                    	<input type='password' class='form-control' required name='pass'  placeholder='Введите пароль'>
                    </div>   
                  </div>
				  
				  <div class='form-group'>
                	<label for='contact-email' class='col-lg-2 control-label'>Повторить пароль</label>
                    
                    <div class='col-lg-10'>
                    	<input type='password' class='form-control' required name='r_pass'  placeholder='Повторите пароль'>
                    </div>   
                  </div>
                  
                   
                 
                  
                  <div class='form-group'>
                  	<div class='col-lg-10 col-lg-offset-2'>
                    	<button type='submit' name='ok' class='btn btn-primary' data-toggle='modal' data-target='#modal-1'>Регистрация</button>

                    </div>    
                  </div>
                </form>  "; 
		echo 'Уже есть аккаунт? <a href="'.home.'/modules/forum.php">Авторизация</a>';
		echo '</div></div>';
}
require('../system/footer.php');

?>