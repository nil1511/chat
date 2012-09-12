<?
session_start();
require('../config.php');
$re = mysql_query('SELECT * FROM `chat`') or die('error');
$v='';
while($ue=mysql_fetch_row($re)){
	if($ue[0]!=$_SESSION['name'])
	$v .='<li onclick="msg(\''.$ue[0].'\');" class="users">'."$ue[0]".'</li>';}
echo '<div class="users_div">'.$v.'</div>';

?>