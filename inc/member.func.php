<?php

function memeber_conected(){
	$data=array();
	$usr=$_SESSION['username'];
	$query=mysql_query("select * from user where n_usr='$usr'");
	while ($row=mysql_fetch_assoc($query)) {
		$data[] = $row;
	}
	return $data;
}
?>