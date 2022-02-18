<?php
require_once 'dbconnect.php';
 
if(isset($_GET['email'])){
	$email = $_GET['email'];
	$link = mysqli_connect($host, $user, $dbpassword, $database)
		or die("Ошибка" . mysqli_error($link));	

	$email_query ="SELECT email FROM client WHERE email='$email'";

	$email_rows = mysqli_query($link, $email_query) or die("Ошибка " . mysqli_error($link));
	if($email_rows->num_rows > 0){
		echo "no";
	}else{
		echo "yes";
	}
	mysqli_close($link);
}

?>