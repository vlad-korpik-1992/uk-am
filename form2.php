<?php
$username = trim($_POST['name_user']);
$email = trim($_POST['email_user']);
$phone = trim($_POST['tel_user']);

$to = "mail@uk-am.com";
$subject = "Сообщение с сайта. Стать клиентом UKAM";
$message = "Имя: $username \nТелефон: $phone\nE-mail: $email";

mail($to, $subject, $message);
?>