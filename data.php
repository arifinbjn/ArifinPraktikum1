<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Anda</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<?php

include "server.php";

// Insert a row of information into the table "example"
$passmd5=md5($_POST[pass]);

$username=$_SESSION['username'];
if(isset($username)){
echo "<div id='layout'>
<div id='header'></div>
	<div id='menu'>
	<div id='menuhome'> <a href='home.php'>home</a></div>
	<div id='menudata'> <a href='data.php'>data</a></div>
	<div id='menubelajar'> <a href='belajar.php'>belajar </a></div>
	</div>
	<div id='wrapper'>";

echo "Data di bawah ini telah tersimpan di database kami :<br><br>";

echo "<br />Berikut ini adalah data anda :";
echo "<table>";

$query=mysql_query("SELECT * FROM datauser where username='$username'") or die(mysql_error());
while($row = mysql_fetch_array($query)){
	echo "<tr><td>";
	echo "Username anda : $row[username]";
	echo "</td><tr></tr><td>";
	echo "Nama Lengkap anda : $row[nama_lengkap]";
	echo "</td><tr></tr><td>";
	echo "NIM anda : $row[nim]";
	echo "</td><tr></tr><td>";
	echo "Jurusan anda : $row[jurusan]";
	echo "</td><tr></tr><td>";
	echo "Gender anda : $row[gender]";
	echo "</td><tr></tr><td>";
	echo "Alamat Lengkap : $row[alamat]";
	echo "</td></tr>";	
}//end while
echo "</table>";
echo "</div>
	<div id='sidebar'>
		anda login sebagai $username
		<br /><a href='logout.php'>logout</a>
	</div>
</div>";

}else echo "anda belum logim, silakan login <a href='home.php'>di sini</a>";
?>
</body>
</html>
