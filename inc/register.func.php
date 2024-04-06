
<?php

function SignUp($usr,$pwd,$email,$city){
	$Encpwd =md5(sha1($pwd));
	$Query="INSERT INTO user (n_usr,n_password,n_email,n_city) values ('$usr','$Encpwd','$email','$city')";
	mysql_query($Query);
}

function Exist_Email($email){
	$Query=mysql_query("select count(*) from user where n_email='$email'");
	return mysql_result($Query,0);
}

function Exist_UserName($userName){
	$Query=mysql_query("select count(*) from user where n_usr='$userName'");
	return mysql_result($Query,0);
}

function getLastUserID($userName){
	$Query=mysql_query("select max(id) from user where n_usr='$userName'");
	return mysql_result($Query,0);
}

?>