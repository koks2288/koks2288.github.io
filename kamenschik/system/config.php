<?php
//$sql = new mysqli('localhost','db1432423617','kamkam','db1432423617'); это раскоментировать надо
if(mysqli_connect_errno()){
	printf('Ошибка подключения.Причина '.mysqli_connect_error());
	exit();
}
//$sql->query('SET NAMES utf8'); это раскоментировать надо
session_start();
ob_start();



define('home','http://'.$_SERVER['HTTP_HOST']);


foreach ($_GET as $links) {
if (!is_string($links) || !preg_match('#^(?:[a-z0-9_\-/]+|\.+(?!/))*$#i', $links)) {
header ('Location: '.home);
exit;
} 
} 
unset($links);


if (isset($_COOKIE['uslog']) and isset($_COOKIE['uspass'])) {
$uslog = htmlspecialchars($_COOKIE['uslog']);
$uspass = htmlspecialchars($_COOKIE['uspass']);
$dbs = $sql->query("SELECT * FROM `user` WHERE `login` = '".$uslog."' and `pass` = '".$uspass."' LIMIT 1");
$user = $dbs->fetch_array();
if (isset($user['id'])) {
if ($user['login'] != $uslog or $user['pass'] != $uspass) {
setcookie('uslog', '', time() - 86400*31);
setcookie('uspass', '', time() - 86400*31);
}
}
        
}

function vremja($time = NULL) {
if(!$time) $time = time();
$data = date('j.n.y', $time);
if($data == date('j.n.y')) $res = 'Сегодня в '. date('G:i', $time);
elseif($data == date('j.n.y', time() - 86400)) $res = 'Вчера в '. date('G:i', $time);

else {
$m = array('0',
'Янв', 'Фев', 
'Мар', 'Апр', 'Май', 
'Июн', 'Июл', 'Авг', 
'Сен', 'Окт', 'Ноя', 
'Дек');
$res = date('j '. $m[date('n', $time)] .' Y в G:i', $time);
}
return $res;
}

function user($id){
global $sql;
	$ss = $sql->query('SELECT * FROM `user` WHERE `id` = "'.$id.'" LIMIT 1');
	$tt = $ss->fetch_array();
	if($tt['level'] == 5){
		$admin = '<font color="green">[Администратор]</font color>';
	}else{
		$admin = '<font color="blue">[Пользователь]</font color>';
	}
	return '<b>'.$tt['login'].'</b> '.$admin;
}
?>