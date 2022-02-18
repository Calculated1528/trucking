<?php
require_once 'header.php';
$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
	 
	if(!empty($_POST['message'])){
		$name = trim(strip_tags($_POST['clent_fname']));
		$last_name = trim(strip_tags($_POST['client_lname']));
		$email = trim(strip_tags($_POST['email']));
		$message = trim(strip_tags($_POST['message']));
		mail('rozetka198@mail.ru', 'Письмо с dostavka', 
		'Вам написал: '.$name.'<br />Его почта: '.$email.'<br />
		Его сообщение: '.$message,"Content-type:text/html;charset=UTF-8");
		 
		echo "<p class='txt-reg-auth'> Ваше сообщение успешно отправлено!Вы получите ответ в 
		ближайшее время $back</p>";
		 
	exit;
	} 
	else {
		echo "Для отправки сообщения заполните все поля! $back";
		exit;
	}
?>