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

$sql = "SELECT max(last_name) as maxL , min(last_name) as minL , avg(last_name) as avgL FROM users";
$result = mysql_query($sql);

    // output data of each row
    $data = array() ;
    while($row = mysql_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);


?>
