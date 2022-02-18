<?php

    require_once("header.php"); // там и шапка с картинками, и навигация с РЕГИСТРАЦИЕЙ
	if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];  
	}
	$query = "SELECT * FROM `client` WHERE `email`='$email'";
	$result = mysqli_query($mysqli, $query)	or die("Ошибка" . mysqli_error($mysqli)); 
	$row = mysqli_fetch_array($result);
	mysqli_free_result($result);

	$query2 = "SELECT `client_fname`, `client_lname`, `recipient_fname`, `recipient_lname`, `count_loader`, `creation_date`, `contract_status` 
	FROM (`client` JOIN `contract` USING (`id_client`)) JOIN `recipient` USING (`id_recipient`) WHERE `email`='$email' 
	ORDER BY `id_contract` desc limit 1";
	$result2 = mysqli_query($mysqli, $query2)	or die("Ошибка" . mysqli_error($mysqli)); 
	$row2 = mysqli_fetch_array($result2);
	mysqli_free_result($result2);
	
	$query3 = "SELECT COUNT(*) as `count`
	FROM (`client` JOIN `contract` USING (`id_client`)) JOIN `recipient` USING (`id_recipient`) WHERE `email`='$email' ";
	$result3 = mysqli_query($mysqli, $query3)	or die("Ошибка" . mysqli_error($mysqli)); 
	$row3 = mysqli_fetch_array($result3);
	mysqli_free_result($result3);
?>
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'anons')" id="defaultOpen">Профиль</button>
		<button class="tablinks" onclick="openCity(event, 'master')">Последний Договор</button>
		<button class="tablinks" onclick="openCity(event, 'feed')">Выйти</button>
	</div>
	<div id="anons" class="tabcontent">
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
					<tr>
						<td>Число договоров</td>
						<td><input type="text" name="email" value="<?php echo $row3['count'];?>" disabled></td>
					</tr>
				</table>
	</div>
	
	<div id="master" class="tabcontent">
		<table class="txt-reg-auth"> 
					<tr>
						<td>Имя отправителя</td>
						<td><input type="text" name="name" value="<?php echo $row['client_fname'] ?>" disabled></td>
					</tr>
					<tr>
						<td>Фамилия отправителя</td>
						<td><input type="text" name="last_name"value="<?php echo $row['client_lname'];?>" disabled></td>
					</tr>
					<tr>
						<td>Имя получателя</td>
						<td><input type="text" name="email" value="<?php echo $row2['recipient_fname'];?>" disabled></td>
					</tr>
					<tr>
						<td>Фамилия получателя</td>
						<td><input type="text" name="email" value="<?php echo $row2['recipient_lname'];?>" disabled></td>
					</tr>
					
					<tr>
						<td>Число грузчиков</td>
						<td><input type="text" name="email" value="<?php echo $row2['count_loader'];?>" disabled></td>
					</tr>
					
					<tr>
						<td>Дата создания</td>
						<td><input type="text" name="email" value="<?php echo $row2['creation_date'];?>" disabled></td>
					</tr>
					
					<tr>
						<td>Статус заявки</td>
						<td><input type="text" name="email" value="<?php echo $row2['contract_status'];?>" disabled></td>
					</tr>
				</table>
	</div>
	
	<div id="feed" class="tabcontent">
		<p>&nbsp;
		<li class="main-menu-item"><a href="logout.php" class="link-reg">Выйти</a></li> 
	</div>
<?php
    require_once("footer.php"); 
?>