<?php
	echo "<link rel='stylesheet' type='text/css' href='style.css' />";
	include "server.php";
	
	if($_POST[submit]){
		$username = $_POST['username'];
		$lname = $_POST['nama_lengkap'];
		$nim = $_POST['nim'];
		$gen = $_POST['gender'];
		$jur = $_POST['jurusan'];
		$alamat = $_POST['alamat'];
		
		if(mysql_query("UPDATE datauser SET username='$username',nama_lengkap='$lname',nim='$nim',gender='$gen',jurusan='$jur',alamat='$alamat' WHERE username='$username'"))
		{
			echo "Berhasil Disimpan !<br/>";
			echo "<a href='admin.php'>[back]</a>";
		}else echo "Gagal !";
	}else{
	echo "<form action='edit.php' method='POST'>";
	echo "<table border='1'>";
	echo "<th>Field</th>";
	echo "<th>Value</th>";
	
	$username = $_GET[usrmhs];	
	$query = mysql_query("select username,nama_lengkap,nim,gender,jurusan,alamat from datauser where username='$username'") or die(mysql_error());
	$hasil = mysql_fetch_array($query);
	
	$jmlkolom = mysql_num_fields($query);
	for($i=0;$i<$jmlkolom;$i++){
		echo "<tr>";
		$kolom = mysql_field_name($query,$i);
		//echo "<td>".strtoupper($kolom)."</td>";
		echo "<td>".$kolom."</td>";
		if($i==3) echo "<td><select name='$kolom'>
<option>Perempuan</option>
<option>Laki-laki</option>
</select>";
		else echo "<td><input type='text' name='$kolom' value='$hasil[$kolom]' /></td>"; 
		echo "</tr>";
	}
	
	echo "<tr><td colspan='2'><input type='submit' name='submit' value='SAVE' /></td></tr>";
	echo "</table>";
	echo "</form>";
	}
	
?>