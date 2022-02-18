<?php
    //Запускаем сессию
    session_start();
		if (time() - $_SESSION['last_active'] > 120) { ?>

<script type="text/javascript">
alert("You Have Been inactive for 120 seconds");
window.location.href = "logout.php"; //To my logout function
break;
</script>

<?
} else {
$_SESSION['last_active'] = time(); //set new timestamp
}
	require_once 'dbconnect.php'; // подключаем скрипт
	$link = mysqli_connect($host, $user, $dbpassword, $database) // подключаемся к серверу
		or die("Ошибка" . mysqli_error($link));		
	
if(!isset($_SESSION["email"]) && !isset($_SESSION["client_password"])) //если не авторизован
{
	$account = "<a href='form_auth.php' class='main-menu-link'>Войти</a>"; // ссылка войти и оформить перевозку на авторизацию ссылаются
	$oform =  "<a href='form_auth.php' class='main-menu-link'>Оформить перевозку</a>";
	$update = "<a href='form_auth.php' class='main-menu-link'>Изменить данные</a>";
}else{
	$account = "<a href='lk.php' class='main-menu-link'>Личный кабинет</a>"; // войти меняется на личный кабинет, оформить перевозку -- на оформление перевозки
	$oform	= "<a href='form_oform.php' class='main-menu-link'>Оформить перевозку</a>";
	$update = "<a href='form_update.php' class='main-menu-link'>Изменить данные</a>";
	}
?>			
<html>
<head>	
		<meta charset="UTF-8">
		<title>доставка</title>
		<link  rel="stylesheet" href="css\list.css"></link>
		 <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
		<script src="js/lk.js"></script>
		
</head>	
<body>
<div class="wrap_site">
		<header class="main-header">	
			<div class="logo">
				<figure>
					<img src="pic/logo.png" width=150px>  	<!-- логотип сюды -->
				</figure>
			</div>
			<div class="slogan">
				<p>ДОСТАВКА</p> 
				<p>В ЛЮБОЕ МЕСТО</p>
				<p>РОССИИ</p>
			</div>
			<div class="contacts">
			<p class="txt-reg-auth">+79850000000</p>
			<p class="txt-reg-auth">Адрес</p>
			<a href="message_adm.php" class="link-reg">Отправить отзыв</a>
			</div>
		</header>
		<nav class="main-menu">
			<div class="container-nav"> 
				<ul class="menu-ul">
						<li class="main-menu-item"><p class="blue-link"><a href="about.php" class="main-menu-red-link">О нас</a></p></li>
						<li class="main-menu-item"><p class="blue-link"><?php echo $update; ?></p></li>
						<li class="main-menu-item"><p class="blue-link"><?php echo $account; ?></p></li>
						<li class="main-menu-item"><p class="blue-link"><?php echo $oform; ?></p></p></li>	
                </ul>
			</div> 
		</nav>