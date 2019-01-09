<?php
if(isset($_POST['send2']))
{
$to = "vs.kurson@gmail.com";
$from = 'ukrvideo.com.ua';
$subject = "Связаться с тобой!";
$message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <ukrvideo.com.ua>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo  ("Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи");
    } 
    else{
        echo ("Cообщение не отправленно. Пожалуйста, попрбуйте еще раз");
    }
}
/*else {
echo ("Обязательные поля не заполнены. Введите Телефон");
}*/
?>
<?php
if(isset($_POST['send'])) 
{
$to = "vs.kurson@gmail.com";
$from = 'ukrvideo.com.ua';
$subject = "Покупка товара на ukrvideo.com.ua";
$message = 'Имя: '.$_POST['name'].'; Email: '.$_POST['mail'].'; Телефон: '.$_POST['telephone'].'; Предложеная цена: '.$_POST['kod'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <ukrvideo.com.ua>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo  ("Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи");
    } 
    else{
        echo ("Cообщение не отправленно. Пожалуйста, попрбуйте еще раз");
    }
}
/*else {
echo ("Обязательные поля не заполнены. Введите Телефон");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="/style/style.css">
	<link rel="stylesheet" href="/style/styleModalWindow.css">
	<!-- <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">
	 --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" href="/bower_components/fancybox-master/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid header" id="header">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a  href="/index.php"><img src="/images/vigio.png" alt=""></a>
			</div>
			<div class="col-xs-6 col-md-6" >
				<h2 style="text-transform: uppercase;">Готовые комплекты видеонаблюдения</h2>
			</div>
			<div class="col-xs-6 col-md-3">
				<h2><b>Пн. -Сб.: с 9:00 до 18:00</b></h2>
			</div>
		</div>
	</div> 