<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>



<?php
if(isset($_POST['send']))
{
$to = "sgbykaniv@gmail.com";
$from = 'Название сайта';
$subject = "Покупка товара на @Камерах@";
$message = 'Имя: '.$_POST['name'].'; Email: '.$_POST['mail'].'; Телефон: '.$_POST['telephone'].'; От кого пришел: '.$_POST['kod'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <Название сайта>\r\n";
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

</body>
</html>