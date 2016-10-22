<?php
header('Content-Type: text/html; charset=utf-8');
$recepient = "yourmail@.ua";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim($_POST["email"]);
$text = trim($_POST["comments"]);
$message = "Имя: $name \nТелефон: $phone \nКомментарии: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
