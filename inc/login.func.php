<?php

function SignIn($usr,$pwd){

	$pwd=md5(sha1($pwd));
	$Query=mysql_query("select n_usr,n_password,n_city,n_email from user where n_usr='$usr' and n_password='$pwd'");
	return mysql_num_rows($Query);
}

function getPwd($userName){
	$use=ValideInput($userName);
	$query=mysql_query("select n_password from user where n_usr='$userName'");
	return mysql_result($query, 0);
}
?>