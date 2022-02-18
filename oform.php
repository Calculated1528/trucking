<?php
    //Запускаем сессию
    session_start();

    //Добавляем файл подключения к БД
    require_once("dbconnect.php");

    //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
    $_SESSION["error_messages"] = '';

    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';
	if(isset($_POST["btn_submit_oform"]) && !empty($_POST["btn_submit_oform"])){
	

	
	// проверка данных отправителя
	if(isset($_POST["sender_city"])){
                
                //Обрезаем пробелы с начала и с конца строки
                $sender_city = trim($_POST["sender_city"]);

                //Проверяем переменную на пустоту
                if(!empty($sender_city)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $sender_city = htmlspecialchars($sender_city, ENT_QUOTES);
                }else{
                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите город отправителя</p>";

                    //Возвращаем пользователя на страницу регистрации
                    if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}else

                    //Останавливаем скрипт
                    exit();
                }

                
            }else{
                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле с городом отправителя</p>";

                if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}else

                //Останавливаем скрипт
                exit();
            }
			
			
			if(isset($_POST["sender_street"])){

                //Обрезаем пробелы с начала и с конца строки
                $sender_street = trim($_POST["sender_street"]);

                if(!empty($sender_street)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $sender_street = htmlspecialchars($sender_street, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите улицу отправителя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
            }else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с улицей отправителя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }
			
			
			if(isset($_POST["sender_house"])){

                //Обрезаем пробелы с начала и с конца строки
                $sender_house = trim($_POST["sender_house"]);

                if(!empty($sender_house)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $sender_house = htmlspecialchars($sender_house, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите дом отправителя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
            }else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с домом отправителя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }
			
			
			if(isset($_POST["sender_flat"])){

                //Обрезаем пробелы с начала и с конца строки
                $sender_flat = trim($_POST["sender_flat"]);

                if(!empty($sender_flat)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $sender_flat = htmlspecialchars($sender_flat, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите квартиру отправителя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
            }else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с квартирой отправителя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }
			
//проверка данных получателя

			if(isset($_POST["recipient_fname"])){

                //Обрезаем пробелы с начала и с конца строки
                $recipient_fname = trim($_POST["recipient_fname"]);

                if(!empty($recipient_fname)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $recipient_fname = htmlspecialchars($recipient_fname, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите имя получателя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
            }else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с именем получателя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }


			if(isset($_POST["recipient_lname"])){

                //Обрезаем пробелы с начала и с конца строки
                $recipient_lname = trim($_POST["recipient_lname"]);

                if(!empty($recipient_lname)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $recipient_lname = htmlspecialchars($recipient_lname, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите фамилию получателя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
			}else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с фамилией получателя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }
			
			if(isset($_POST["recipient_city"])){

                //Обрезаем пробелы с начала и с конца строки
                $recipient_city = trim($_POST["recipient_city"]);

                if(!empty($recipient_city)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $recipient_city = htmlspecialchars($recipient_city, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите город получателя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
			}else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с городом получателя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }
			
						
			if(isset($_POST["recipient_street"])){

                //Обрезаем пробелы с начала и с конца строки
                $recipient_street = trim($_POST["recipient_street"]);

                if(!empty($recipient_street)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $recipient_street = htmlspecialchars($recipient_street, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите улицу получателя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
			}else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с улицей получателя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }
			
			if(isset($_POST["recipient_house"])){

                //Обрезаем пробелы с начала и с конца строки
                $recipient_house = trim($_POST["recipient_house"]);

                if(!empty($recipient_house)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $recipient_house = htmlspecialchars($recipient_house, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите дом получателя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
			}else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с домом получателя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }		

			if(isset($_POST["recipient_flat"])){

                //Обрезаем пробелы с начала и с конца строки
                $recipient_flat = trim($_POST["recipient_flat"]);

                if(!empty($recipient_flat)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $recipient_flat = htmlspecialchars($recipient_flat, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите квартиру получателя</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
			}else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с квартирой получателя</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }	

			if(isset($_POST["count_loader"])){

                //Обрезаем пробелы с начала и с конца строки
                $count_loader = trim($_POST["count_loader"]);

                if(!empty($count_loader)){
                    // Для безопасности, преобразуем специальные символы в HTML-сущности
                    $count_loader = htmlspecialchars($count_loader, ENT_QUOTES);
                }else{

                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите число грузчиков</p>";
                    
                   if ($_SERVER['HTTP_REFERER'] = "form_oform"){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: form_oform.php");
					}
                    //Останавливаем  скрипт
                    exit();
                }

                
			}else{

                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле с числом грузчиков</p>";
                
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}

                //Останавливаем  скрипт
                exit();
            }
			if(isset($_SESSION['email'])){
			$email = $_SESSION['email'];  
					}
			$query = "SELECT * FROM `client` WHERE `email`='$email'";
			$result = mysqli_query($mysqli, $query)	or die("Ошибка" . mysqli_error($mysqli)); 
			$row = mysqli_fetch_array($result);
			mysqli_free_result($result);
			$id = $row['id_client'];
			$date_today = date("Y-m-d");
			$mysqli->begin_transaction();
				try {
				/* Добавление каких-то значений */
				$mysqli->query("INSERT INTO `contract` (`id_client`, `contract_status`, `creation_date`, `count_loader`) 
								VALUES ('$id', 'создана', '$date_today', '$count_loader')");
				$mysqli->query("INSERT INTO `recipient`(`recipient_fname`,`recipient_lname`)  
								VALUES('$recipient_fname', '$recipient_lname')");
				$mysqli->query("INSERT INTO `adress_recipient`(`recipient_city`, `recipient_street`, `recipient_house`, `recipient_flat`) 
								VALUES('$recipient_city', '$recipient_street', '$recipient_house', '$recipient_flat')");
				$mysqli->query("INSERT INTO `adress_sender`(`sender_city`, `sender_street`, `sender_house`, `sender_flat`) 
								VALUES('$sender_city', '$sender_street', '$sender_house', '$sender_flat')");
				$mysqli->query("UPDATE `contract` 
								SET `id_recipient` = (SELECT `id_recipient`  
								FROM `recipient` ORDER BY `id_recipient` desc limit 1)
								ORDER BY `id_contract` DESC LIMIT 1");
				$mysqli->query("UPDATE `contract` 
								SET `id_adress_recipient` = (SELECT `id_adress_recipient`  
								FROM `adress_recipient` ORDER BY `id_adress_recipient` desc limit 1)
								ORDER BY `id_contract` DESC LIMIT 1");
				$mysqli->query("UPDATE `contract` 
								SET `id_adress_sender` = (SELECT `id_adress_sender`  
								FROM `adress_sender` ORDER BY `id_adress_sender` desc limit 1)
								ORDER BY `id_contract` DESC LIMIT 1;");
				/* Если код достигает этой точки без ошибок, фиксируем данные в базе данных. */
				$mysqli->commit();
			} catch (mysqli_sql_exception $exception) {
				$mysqli->rollback();

				throw $exception;
			}
			if($exception){
           // if(!$result_query_insert){
                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на добавление заказа</p>";
                if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: form_oform.php");
				}
                //Останавливаем  скрипт
                exit();
            }else{

                $_SESSION["success_messages"] = "<p class='success_message'>Заказ создан успешно! <br />Ожидайте сообщения от менеджера.</p>";
				if ($_SERVER['HTTP_REFERER'] = "form_oform"){
				header("HTTP/1.1 301 Moved Permanently");
                header("Location: lk.php");
				}
            }

            /* Завершение запроса */
           // $result_query_insert->close();

            //Закрываем подключение к БД
            $mysqli->close();	
	
	}else{
        exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на главную страницу</p>");
    }
	?>