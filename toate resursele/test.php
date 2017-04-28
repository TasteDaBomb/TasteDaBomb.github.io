<html>
<head>
<title>Creaza-ti un cont!</title>
<link href="manual.png" rel = "icon">
<link href="log.css" rel = "stylesheet">
<script>
<?php
include 'core/init.php';
?>
</script>
</head>
<body>
<form method="post" action="login.php"></br>
<p>Nume de utilizator:</p></br>
<input type="text" name="username" style="margin-left: 50px; width: 600px; height: 30px; border: 2px solid #4169E1;"/></br>
<p>Adresa de mail:</p></br>
<input type="text" name="mail" style="margin-left: 50px; width: 600px; height: 30px; border: 2px solid #4169E1;"/></br>
<p>Parola:</p></br>
<input type="text" name="password" style="margin-left: 50px; width: 600px; height: 30px; border: 2px solid #4169E1;"/></br></br></br></br>
<input type="submit" name="submit" value="Creaza!" style="margin-left: 300px; width: 100px; height: 30px; border: 2px solid #4169E1;">
</form>
</body>
</html>