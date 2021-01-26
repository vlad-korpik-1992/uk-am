<?php
$username = trim($_POST['username']);
$phone = trim($_POST['phone']);

$to = "mail@uk-am.com";
$subject = "Сообщение с сайта. Бесплатная консультация";
$message = "Имя: $username \nТелефон: $phone";

mail($to, $subject, $message);
?>