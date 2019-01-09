<div class="ModalWindow reviews_modal " id="ModalWindow">
        <a class="close" id="close">X</a>

        <form method="post" action="" id="formMain" name="formMain" >
            <h2>Отправьте нам свой отзыв</h2> 
            
            <input id="telephone" type="number" name="telephone"  placeholder="Ваш телефон...." maxlength="30" autocomplete="off" required/>
            <input id="mail" type="email" name="mail"  placeholder="Ваш Email...." maxlength="30" autocomplete="off" required/>
            <input id="button" name="send1" type="submit" value="Отправить отзыв"/>
            <br>
            <br>
            <textarea cols="35" id="name" name="name" type="text" placeholder="Отзыв"></textarea> 
        </form>
    </div>
<?php
if(isset($_POST['send1']))
{
$to = "vs.kurson@gmail.com";
$from = 'ukrvideo.com.ua';
$subject = "Отзывы";
$message = 'Отзыв: '.$_POST['name'].'; Email: '.$_POST['mail'].'; Телефон: '.$_POST['telephone'].';';
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