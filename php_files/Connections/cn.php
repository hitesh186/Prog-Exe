<?php
$hostname_cn = "localhost";
$database_cn = "angular4";
$username_cn = "root";
$password_cn = "";
$cn = mysql_pconnect($hostname_cn, $username_cn, $password_cn) or trigger_error(mysql_error(),E_USER_ERROR); mysql_select_db($database_cn,$cn);
?>