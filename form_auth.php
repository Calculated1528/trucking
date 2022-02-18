<?php
    //Подключение шапки
    require_once("header.php");
?>

<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php

        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];

            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }

        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
            
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>

<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["client_password"])){
?>

<div class="reg-auth">
    <h2 class="title-reg-auth">АВТОРИЗАЦИЯ</h2>
    <form action="auth.php" method="post" name="form_auth" >
        <table class="txt-reg-auth">     
            <tr>
                <td> Email: </td>
                <td>
				<?php 
                    if (isset($_COOKIE['email'])){
                        $cookie = $_COOKIE['email'];
                        echo "<input type='email' name='email' required value='$cookie' required>";
                    }
					else{
					echo "<input type='email' name='email' required>";
					}
                ?>
                    <span id="valid_email_message" class="mesage_error"></span>
                </td>
            </tr>
     
            <tr>
                <td> Пароль: </td>
                <td>
                    <input type="password" name="password" placeholder="минимум 6 символов" required="required" /><br />
                    <span id="valid_password_message" class="mesage_error"></span>
                </td>
            </tr>
            
            <tr>
                <td> Введите капчу: </td>
                <td>
                    <p>
                        <img src="captcha.php" alt="Капча" /> <br />
                        <input type="text" name="captcha" placeholder="Проверочный код" />
                    </p>
                </td>
            </tr>
			<tr>
                <td>Не зарегистрированы?: </td>
                <td>
                   <a href="form_register.php" class="link-reg">Регистрация</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btn_submit_auth" value="Войти" class="btn-reg-auth"  />
                </td>
            </tr>
        </table>
    </form>
</div>
<?php 
    }else{
?>
    <div id="authorized">
        <h2>Вы уже авторизованы</h2>
    </div>
        
<?php
    }
?>

<?php 
    
    //Подключение подвала
    require_once("footer.php");
?>