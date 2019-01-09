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
