<?php
if(isset($_POST))
{	session_start();
	require_once('../config.php');
	if(isset($_POST['to'])&&isset($_POST['msg'])&&isset($_SESSION['name'])){
		$from=mysql_real_escape_string($_SESSION['name']);
		$to=mysql_real_escape_string($_POST['to']);
		$m=mysql_real_escape_string($_POST['msg']);
			if($to!='ShoutAtMe'){
			mysql_query("INSERT INTO `message`(`from`, `to`, `message`) VALUES ('$from','$to','$m')");		
			unset($from,$to,$m);}
			else
			{
			mysql_query("INSERT INTO `shouter_message`(`from`,`message`) VALUES ('$from','$m')");		
			unset($from,$to,$m);
			}
	}
}
?>