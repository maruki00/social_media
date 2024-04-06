<?php
/*
	Autor : Abdellah Oulahyane [Ab_OL]
*/
$email="";
$phone="";
$userName="";
$strongPwd="";

function CheckSI($input){
	if(str_replace($input)!==null){
		return false;
	}
	return true;
}

function ValideInput($inputstr){
	return htmlentities(trim($inputstr));
}

function AntiLocalFileInclude($file,$param){

}

function AntiSqlInjaction($inputstr){
	return str_replace("'", "''", $inputstr);
}

function AntiCrosSiteScripting($inputstr){
	
}

function AntiOsCommandInjection($inputstr){

}
?>