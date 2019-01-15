<?php
require('../system/config.php');
require('../system/header.php');
switch($_GET['act']){
    default:
echo '
<div class="container">';
        if(isset($_REQUEST['ok']))
        {
            $login = $_POST['login'];
            $pass = $_POST['pass'];
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
if(!isset($user['id'])){echo "<nav class='navbar navbar-inverse' role='navigation'>
    <div class='navbar-collapse collapse text-center'> 
        <form method='POST' class='form-inline navbar-form' role='form'>
                      <input type='text' name = 'login' class='form-control' id='userlogin' placeholder='Логин'>
                      <input type='password' name='pass' class='form-control' id='password' placeholder='Пароль'>      
                          <div class='btn-group'>      
            <input type='submit' name='ok' class='btn btn-primary navbar-btn' value='Вход'>
            <a href='reg.php' class='btn btn-primary navbar-btn'>Регистрация</a>
    </div>     
       </form>          
  
      
 </div> 
</nav>";

}

echo ' <div class="mainheader">
      <h3>Здравствуй <b>'.$user['login'].'</b>! Добро пожаловать на наш форум!</h3>
    </div>';
	
	echo '<div class="table topictable">  
    <div class="tablerow topicrow subheader">
     <div class="cell topicforum1"></div>
      <div class="cell topicforum2">Название темы</div>
      <div class="cell topicforum3">Автор</div>
      
    </div> ';
    
        
    $select = $sql->query('SELECT * FROM `forum` ORDER BY `time` DESC');
    while($row = $select->fetch_array()){
       echo '<div class="tablerow topicrow">
      <div class="cell"></div>
      <div class="cell"><h4><a href="/forum/thema'.$row['id'].'">'.$row['name'].'</a></h4><small>'.vremja($row['time']).'</small></div>
      <div class="cell">'.user($row['author']).'</div>
 
    </div>';
    }
	
	echo '</div>';
     if(isset($user['id'])){   echo '<div class="footheader"><h3>Меню пользовтеля</h3></div>';
	echo ' <div class="table">  
     <div class="tablerow">
<div class="cell forumfooter1"> </div>';}
		 
       if(isset($user['id'])) echo ' <div class="cell forumfooter2"><h3><img src="plus.png" alt="*">  <a href="http://'.$_SERVER['HTTP_HOST'].'/forum/addobject">Создать новую тему</a></h3></p>';
		if(isset($user)) echo '<h3><img src="exit.png" alt="*"> <a href="/exit.php">Покинуть форум</a></h3>';
		 
		echo ' </div>
     </div>     
  </div>';
echo '</div>';



break;

case 'addthems':
$us = $sql->query('SELECT `level` FROM `user` WHERE `id` = "'.$user['id'].'"');
$userinho = $us->fetch_array();
if(isset($user['id'])){
	 echo '<div class="container"><div class="mainheader">
      <h3>Здравствуйте! Создайте новую тему.</b></h3>
    </div>';
    echo '<div class="well">
        <div class="text-center">';
        
        
        
        if(isset($_REQUEST['ok'])){
            echo '<div class="well">
        <div class="text-center">';
            $name = $_POST['name'];
            $text = $_POST['text'];
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
        
        echo '</div></div></div></div>';
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
echo '<div class="container"><div class="mainheader">
      <h3>Название темы: <b>'.$tt['name'].'</b></b></h3>
    </div>';
  echo '<div style="background:white;border-bottom:1px dotted orange;padding:15px;">'.user($tt['author']).'</br>'.$tt['name'];
echo '</div>';
	
$mes = $sql->query('SELECT * FROM `forum_them` WHERE `thema` = "'.$id.'" ORDER BY `time` ');

while($m = $mes->fetch_array()){
    echo '<div style="background:white;border-bottom:1px dotted orange;padding:15px;">'.user($m['author']).'<br>'.$m['text'].'</div>';
}

        if(isset($_REQUEST['ok'])){
        $text = $_POST['text'];
        
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
    
        
        
        if(isset($user['id'])){echo " </br><form  method='POST' class='form-horizontal' role='form'>
                <div class='form-group'>
                    
                    
                    <div class='col-lg-10'>
                        <textarea  name='text' class='form-control' required  cols=30 rows=10 placeholder='Сообщение'></textarea>
                    </div>   
                  </div>
                  
                   
                 
                  
                  <div class='form-group'>
                    <div class='col-lg-10 col-lg-offset-2'>
                        <button type='submit' name='ok' class='btn btn-primary' data-toggle='modal' data-target='#modal-1'>Отправить</button>

                    </div>    
                  </div>
		</form>  "; }
		echo '</div>';
        
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