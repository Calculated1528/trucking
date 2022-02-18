<?php 
session_start();
//Добавляем файл подключения к БД
require_once("dbconnect.php");

//if(isset($_POST["btn_submit_auth"]) && !empty($_POST["btn_submit_auth"])){
	$email = $_SESSION['email'];
	$conn = mysqli_connect($host, $user, $dbpassword, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } 
    
        if (isset($_GET['client_lname'])) 
			{ $client_lname = $_GET['client_lname']; 
			if ($client_lname == '') 
				{ unset($client_lname);
				} 
			}
        if (isset($_GET['client_fname'])) 
		{ $client_fname=$_GET['client_fname']; 
		if ($client_fname =='') 
			{ unset($client_fname);
			} 
		}
     
    if (empty($client_lname) or empty($client_fname))
        {
            exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }

    if (!(preg_match('/^[а-яё]+$/iu', $client_lname))) {
        exit( "uncorrected data, go back");
    }

    if (!(preg_match('/^[а-яё]+$/iu', $client_fname))) {
        exit( "uncorrected data, go back ");
    }


        
    $sql = "UPDATE `client` SET `client_lname`='$client_lname', `client_fname`='$client_fname' WHERE `email` = '$email'";

    if ($conn->query($sql) === TRUE) {
        header("HTTP/1.1 301 Moved Permanently");
		header("Location: logout.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


//}else{
       // exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на главную страницу</p>");
 //   }
?>