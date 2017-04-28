<?php
$db = mysql_connect('localhost','root','','test');

if(isset($_POST['sumbit']))
{
	session_start();
	$confirmpassword = $mysqli->real_escape_string($_POST['confirmpassword']);
		$password = $mysqli->real_escape_string($_POST['password']);
		$mail = $mysqli->real_escape_string($_POST['mail']);
		if($password == $confirmpassword)
		{
			//$insert = '' or die("not succesful");
			mysql_query('INSERT INTO `tabela`(`password`, `mail`) VALUES("$password", "$mail")') or die('error');
			header('Location: login.html');
		}
		else
		{
			echo "Parolele nu se potrivesc!";
		}
}
?>