<?php
require('system/config.php');
if(isset($user)){
	setcookie('uslog', '', time() - 86400*31);
    setcookie('uspass', '', time() - 86400*31);
	header('Location: '.home.'/modules/forum.php');
}else{
require('../system/header.php');
echo '<div class="well">
    	<div class="text-center"><img src="'.home.'/images/invalid.png" alt="*" /> Вы не являетесь пользователем</div></div>';
	require('system/footer.php');
	exit();	
}
?>