<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'test')or die("error1"); 


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if($_POST['password'] == $_POST['confirmpassword'])
	{
		$password = $mysqli->real_escape_string($_POST['password']);
		$mail = $mysqli->real_escape_string($_POST['mail']);
		$username = $mysqli->real_escape_string($_POST['username']);
		$_SESSION['username'] = $username;
		$sql = "INSERT INTO tabela(username, password, mail) VALUES ('$username', '$password', '$mail')" or die("not succesful");
		if($mysqli->query($sql) === true)
		{
			header('Location: login.html');
		}
		else
			echo "Nu te-am putut adauga la baza de date!";
	}
	else
		echo "Parolele nu se potrivesc!";
}
?>