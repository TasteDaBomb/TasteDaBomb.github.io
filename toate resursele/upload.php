<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if((strlen(basename( $_FILES["fileToUpload"]["name"]))-4)>18)
{echo "Numele fisierului e prea lung!Trebuie maxim 18 caractere!";}
	else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Fisierul ". basename( $_FILES["fileToUpload"]["name"]). " s-a incarcat.";
$file = 'postari.html';
$text1 = '<html>
<title>Postari</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stylepostari.css">
<body id="bodyu" oncontextmenu="return false">
<h1>Postari:</h1>
<a href="painpage.html"><div id="inapoi"><div id="vretical-align">Inapoi</div></div></a>
<div id="scroll">
';
file_put_contents($file,$text1);
$i = 0; 
$dir = 'uploads/';
$dir = "uploads"; 
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if($i >= 2)
				{
					$filename = pathinfo($file, PATHINFO_FILENAME);
					file_put_contents('postari.html','<a href="uploads/'.$file.'" target="_blank"><div id="file"><div id="vretical-align"><img id="img" src="docicon.png"><br><br>'.$filename. '</div></div></a>
',FILE_APPEND);
				}
				else
					$i++;
        }
        closedir($dh);
    }
}
$text3 = '</div>
</body>
</html>';
file_put_contents('postari.html',$text3,FILE_APPEND);
}
}
?>
<a href="upload.html"><button>Inapoi la incarcare!</button></a>
<a href="userpage.html"><button>Inapoi la pagina web!</button></a>