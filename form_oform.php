<?php
    //Подключение шапки
    require_once("header.php");
	if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];  // в файле auth.php лежат данные в массиве сессий, 209 строка и ниже
	}
	$query = "SELECT * FROM `client` WHERE `email`='$email'";
	$result = mysqli_query($mysqli, $query)	or die("Ошибка" . mysqli_error($mysqli)); 
	$row = mysqli_fetch_array($result);
	mysqli_free_result($result);
?>
<form action="oform.php" method="post" name="form_oform">
	<table class="txt-reg-auth"> 
		<tbody class="table-oform">
			<tr>
				<td>Данные об отправителе</td>
			</tr>
			<tr>
				<td>Имя </td>
				<td><input type="text" name="name" value="<?php echo $row['client_fname'] ?>" disabled></td>
			</tr>
			<tr>
				<td>Фамилия </td>
				<td><input type="text" name="last_name"value="<?php echo $row['client_lname'];?>" disabled></td>
			</tr>
			<tr>
				<td>Email </td>
				<td><input type="email" name="email" value="<?php echo $email;?>" disabled></td>
			</tr>
			<tr>
				<td>Город </td>
				<td><input type="text" name="sender_city" required="required"></td>
			</tr>
			<tr>
				<td>Улица </td>
				<td><input type="text" name="sender_street" required="required"></td>
			</tr>
			<tr>
				<td>Дом</td>
				<td><input type="number" name="sender_house" min="1" required="required"></td>
			</tr>
			<tr>
				<td>Квартира</td>
				<td><input type="number" name="sender_flat" min="0" required="required"></td>
			</tr>
		</tbody>
		<tbody class="table-oform">
			<tr>
				<td>Данные о получателе</td>
			</tr>
			<tr>
				<td>Имя </td>
				<td><input type="text" name="recipient_fname" required="required"></td>
			</tr>
			<tr>
				<td>Фамилия </td>
				<td><input type="text" name="recipient_lname" required="required"></td>
			</tr>
			<tr>
				<td>Город </td>
				<td><input type="text" name="recipient_city" required="required"></td>
			</tr>
			<tr>
				<td>Улица </td>
				<td><input type="text" name="recipient_street" required="required"></td>
			</tr>
			<tr>
				<td>Дом</td>
				<td><input type="number" name="recipient_house" min="1" required="required"></td>
			</tr>
			<tr>
				<td>Квартира</td>
				<td><input type="number" name="recipient_flat" min="0" required="required"></td>
			</tr>
			<tr>
				<td>Число грузчиков</td>
				<td><input type="number" name="count_loader" min="0" max="3" required="required"></td>
				<td>
                    <input type="submit" name="btn_submit_oform" class="btn-reg-auth" value="Отправить">
                </td>
			</tr>
		</tbody>
	</table>
</form>

<?php 
    
    //Подключение подвала
    require_once("footer.php");
?>