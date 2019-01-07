<?php session_start(); ?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
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
	include "server.php";
	echo "<br />Berikut ini adalah data Lengkap Mahasiswa :";
echo "<table border='1'>";

	echo "<tr><td>";
	echo "Username ";
	echo "</td><td>";
	echo "Nama Lengkap ";
	echo "</td><td>";
	echo "NIM ";
	echo "</td><td>";
	echo "Gender ";
	echo "</td><td>";
	echo "Jurusan ";
	echo "</td><td>";
	echo "Alamat Lengkap ";
	echo "</td><td>";
	echo "Edit ";
	echo "</td><td>";
	echo "Delete ";
	echo "</td></tr>";

$query=mysql_query("SELECT * FROM datauser") or die(mysql_error());
while($row = mysql_fetch_array($query)){
	$username = $row[username];
	echo "<tr><td>";
	echo "$row[username]";
	echo "</td><td>";
	echo "$row[nama_lengkap]";
	echo "</td><td>";
	echo "$row[nim]";
	echo "</td><td>";
	echo "$row[gender]";
	echo "</td><td>";
	echo "$row[jurusan]";
	echo "</td><td>";
	echo "$row[alamat]";
	echo "<td id='icon'><a href='edit.php?usrmhs=$username'><img src='img\edit.png' /></a></td>";
	echo "<td id='icon'><a href='delete.php?usrmhs=$username'><img src='img\delete.png' /></a></td>";
	echo "</tr>";
	

	
}
echo "</table>";

?>

<p><a href="logout.php">Log Out</a></p>
	

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

	</div>
</div>
</body>
</html>