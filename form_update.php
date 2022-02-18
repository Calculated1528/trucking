<?php
    //Подключение шапки
    require_once("header.php");


if(empty($_SESSION['email'])) {
    header("Location: index.php");
} else {
    $email = $_SESSION['email'];
    $conn = mysqli_connect($host, $user, $dbpassword, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    $sql = "SELECT `client_fname`, `client_lname` FROM `client`  WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	}
	?>
	
	<div class="reg-auth">
    <h2 class="title-reg-auth">Изменение данных</h2>
    <form action="update.php" method="get" name="form_update">
			<table class="txt-reg-auth"> 
					<tr>
						<td>Имя отправителя</td>
						<td><input type="text" name="client_fname" value="<?php echo $myrow['client_fname'] ?>"></td>
					</tr>
					<tr>
						<td>Фамилия отправителя</td>
						<td><input type="text" name="client_lname"value="<?php echo $myrow['client_lname'];?>"></td>
					</tr>
					
					<tr>
                <td colspan="2">
                    <input type="submit" name="btn_submit_auth" value="Изменить данные" class="btn-reg-auth"  />
                </td>
            </tr>
				</table>
 </form>
</div>
<?php
    require_once("footer.php"); 
?>