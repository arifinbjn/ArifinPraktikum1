<?php session_start(); ?>
<html>
<head>
<title>Menu</title>
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

	<p>
	 <h1>LARUTAN ASAM DAN BASA</h1>

    Asam dan basa merupakan dua golongan zat kimia yang sangat penting. Dalam kehidupan sehari-hari, kita mengenal berbagai zat yang kita golongkan sebagai asam, misalnya asam cuka, asam sitrun, asam jawa, asam belimbing, serta "asam lambung". Salah satu sifat asam adalah rasanya yang masam.kita juga mengenal berbagai zat yang kita golongkan sebagai basa, misalnya kapur sirih, kaustik soda, air sabun, dan air abu. salah satu sifat basa adalah dapat melarutkan lemak; itulah sebabnya abu (abu gosok) digunakan untuk mencuci piring.
	</p>
	<p>
	<h1>KONSEP ASAM DAN BASA</h1>

    Berkaitan dengan sifat asam dan basa, larutan dikelompokkan ke dalam tiga golongan, yaitu bersifat asam, basa, dan netral. Masih ingatkah anda cara membedakannya?
    Meskipun asam dan basa mempunyai rasa yang berbeda, tidaklah bijaksana untuk menunjukkan keasaman atau kebasaan dengan cara mencicipinya, karena banyak diantara yang dapat merusak kulit atau bersifat racun Asam sulfat , sebagai contoh , dapat menyebabkan luka bakar yang serius. Berkatpengalaman dan penelitian para ahli kimia, kini telah tersedia cara praktis untuk menunjukkan keasaman dan kebasaan, yaitu dengan menggunakan indikator asam basa.
    Indikator asam basa adalah zat-zat warna yang mampu menunjukkan warna berbeda dalam larutan asam dan basa. Misalnya lakmus. Lakmus akan berwarna merah dalam larutan yang bersifat asam dan berwarna biru dalam larutan yang bersifat basa.Konsep Asam dan Basa.
    Sifat asam basa dari suatu larutan juga dapat ditunjukkan dengan mengukur pH-nya. pH adalah suatu parameter yang digunakan untuk menyatakan tingkat keasaman larutan. larutan asam mempunyai pH lebih kecil dari 7, larutan basa mempunyai pH lebih besar dari 7. pH larutan dapat ditentukan dengan menggunakan indikator pH (indikator universal), atau dengan pH meter.

	</p>
	</div>
	
	<div id="sidebar">
	<?php 
	$username=$_SESSION['username'];
	if(isset($_SESSION['username'])){
	echo "Anda login sebagai $username"; 
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
