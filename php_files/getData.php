<?php /*?><?php 

    include('Connections/cn.php');
	mysql_select_db($database_cn, $cn);
	$query = mysql_query("SELECT * FROM users");
	$data = Array();

	while($row=mysql_fetch_assoc($query))
	{
		//$response['response'] = "Success";
		 $val['data'][]=$row;
	}
	print(json_encode($val));
?>

<?php */?>

<?php
include('Connections/cn.php');
header('Access-Control-Allow-Origin: *');

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysql_query($sql);

    // output data of each row
    $data = array() ;
    while($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);


?>
