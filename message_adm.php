  <?php
	require_once 'header.php'; // там и шапка с картинками, и навигация с РЕГИСТРАЦИЕЙ	
	if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];  // в файле auth.php лежат данные в массиве сессий, 209 строка и ниже
	}
	$query = "SELECT * FROM `client` WHERE `email`='$email'";
	$result = mysqli_query($mysqli, $query)	or die("Ошибка" . mysqli_error($mysqli)); 
	$row = mysqli_fetch_array($result);
	mysqli_free_result($result);
?>	
<section class="mesg_feedback">
		<form action="feedback-form.php" method="post">
		<table class="txt-reg-auth"> 
			<tr>
				<td>Имя</td>
				<td><input type="text" name="name" value="<?php echo $row['client_fname'] ?>" disabled></td>
			</tr>
			<tr>
				<td>Фамилия</td>
				<td><input type="text" name="last_name"value="<?php echo $row['client_lname'];?>" disabled></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>" disabled></td>
			</tr>
		</table>	
			<p><textarea class="text-feedback" name="message" maxlength=1000  placeholder="Ваше обращение"></textarea></p>
				<td><p><input type="submit" class="btn-reg-auth"/></p>
		</form>
	</section> 

  <?php
  require_once 'footer.php'; 	
	?>