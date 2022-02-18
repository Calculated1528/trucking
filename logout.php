<?php
session_start();
session_destroy();
if ($_SERVER['HTTP_REFERER'] != "form_auth"){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: index.php");
}
?>