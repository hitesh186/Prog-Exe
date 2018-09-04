<?php
include('Connections/cn.php');
$sql = "DELETE FROM users WHERE id = '".$_GET['id']."'";
$result = mysql_query($sql);
?>
