<?php
$mail = $_POST['mail'];
$password = $_POST['password'];
$db = "test";
if(!$mail || !$password)
{
	echo "Introdu parola sau mail-ul";
	exit;
}
if (!get_magic_quotes_gpc())
{
	$mail = addslashes($mail);
	$password = addslashes($password);
}
mysql_connect('localhost', 'root', '', 'test') or die("Error1");
mysql_select_db($db) or die("Error2");
$result = mysql_query("SELECT * FROM `tabela` WHERE `mail` = '$mail' AND`password` = '$password'") or die("Eroare la conectarea cu baza de date. Va rugam reveniti!".mysql_error());
$row = mysql_fetch_array($result);
if($row['mail'] == $mail && $row['password'] == $password)
{
	$count = 1;
}
	else
	{
		echo "Scuze, un script nu a functionat sau nu ati introdus parola corect. Va rugam reveniti!";
		$count = 0;
	}
	if($count == 1)
	{
		session_start();
		$_SESSION['logged']=true;
		$_SESSION['username']=$myusername;
		header ('Location: userpage.html');
	}
?>