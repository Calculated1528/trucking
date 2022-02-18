<?php
$host = 'localhost'; // адрес сервера 
$database = 'dostavka'; // имя базы данных
$user = 'root'; // имя пользователя
$dbpassword = ''; // пароль

$mysqli = new mysqli($host, $user, $dbpassword, $database);
if(!$mysqli){
	die("<p>Ошибка подключения к БД.</p><p>Код ошибки: ".$mysqli->connect_errno."</p><p>Описание ошибки: ".$mysqli->connect_error."</p>");
}

$mysqli->set_charset('utf8');
$address_site = "http://index.php";

function redirect_to($message, $address_page){

	$_SESSION["serever_message"] = $message;

	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".$address_site."/".$address_page);

	exit();
}	
?>