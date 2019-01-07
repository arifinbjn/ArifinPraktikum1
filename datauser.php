<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data User</title>
</head>

<body>

<div id="layout">
	<div id="header"></div>
	<div id="menu">
	<div id="menuhome"> <a href="home.php">home</a></div>
	<div id="menudata"> <a href="data.php">data</a></div>
	<div id="menubelajar"> <a href="belajar.php">belajar </a></div>
	</div>
		
	<div id="wrapper">
		

<?php
//if(isset($_SESSION['username'])){
$conn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("tugas2",$conn) or die(mysql_error());

// Insert a row of information into the table "example"
$passmd5=md5($_POST[pass]);

mysql_query("INSERT INTO datauser
(username, password, nama_lengkap, NIM, Gender, jurusan, Alamat) VALUES('$_POST[usr]', '$passmd5', '$_POST[nml]', '$_POST[nim]', '$_POST[gender]', '$_POST[jur]','$_POST[almt]')") or die(mysql_error());

mysql_query("INSERT INTO login
(username, password) VALUES('$_POST[usr]', '$passmd5')") or die(mysql_error());

echo "Data di bawah ini telah tersimpan di database kami :<br><br>";

echo "<table border='1'>";

	echo "<tr><td align=left>";
	echo "Username: ";
	echo "</td><td>";
	echo "$_POST[usr]";
	echo "</td></tr>";

	echo "<tr><td align=left>";
	echo "Nama Lengkap : ";
	echo "</td><td>";
	echo "$_POST[nml]";
	echo "</td></tr>";
	
	echo "<tr><td align=left>";
	echo "NIM : ";
	echo "</td><td>";
	echo "$_POST[nim]";
	echo "</td></tr>";
		
	echo "<tr><td align=left>";
	echo "Gender : ";
	echo "</td><td>";
	echo "$_POST[gender]";
	echo "</td></tr>";
	
	echo "<tr><td align=left>";
	echo "Jurusan : ";
	echo "</td><td>";
	echo "$_POST[jur]";
	echo "</td></tr>";
	
	echo "<tr><td align=left>";
	echo "Alamat : ";
	echo "</td><td>";
	echo "$_POST[almt]";
	echo "</td></tr>";
	
	echo "</table>";

 ?>
 
 <p>
silakan login <a href="home.php">di sini</a>
</p>
</div>
<div id="sidebar">
	<?php 
	if(isset($_SESSION['username'])){
	echo $_GET['mess']; 
	echo "<br /><a href='logout.php'>logout</a>";
	}else{
	$form="<p>Belum punya akun? --> <a href='signup.php'>Sign Up</a> </p>
	<table border='1'>
	<form action='loggedin.php' method='post'>
	<tr><td>Username:</td>
	<td><input type='text' name='usr' size='10'></td>
	</tr>
	<tr><td>Password:</td>
	<td><input type='password' name='pass' size='10'></td></tr>
	<tr><td colspan='2'><input type='submit' value='masuk'>&nbsp;<input type='reset' value='Reset' /></td></tr>
	</form>
	</table>";
	echo $form;
	}
?>

	</d
</body>
</html>
