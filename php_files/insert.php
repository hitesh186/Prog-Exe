
<?php
//$data =  file_get_contents('php://input');
//$_POST = json_decode(file_get_contents('php://input'), true);
include('Connections/cn.php');
$sql = "INSERT INTO users (`first_name`, `last_name`)
VALUES ('".$_GET['first_name']."', '".$_GET['last_name']."')";
	@mysql_query($sql);
	//$qry = $conn->query($sql);
$conn->close();
?>
