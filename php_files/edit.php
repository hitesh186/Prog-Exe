<?php

include('Connections/cn.php');
$sql = "UPDATE `users` SET `first_name`='".$_GET['first_name']."',`last_name`='".$_GET['last_name']."' WHERE id = '".$_GET['id']."'";
$qry = mysql_query($sql);

?>
