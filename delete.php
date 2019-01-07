<?php
	echo "<link rel='stylesheet' type='text/css' href='style.css' />";
	
	include "server.php";
	$username = $_GET['usrmhs'];
	
	if(mysql_query("DELETE FROM datauser WHERE username='$username'"))
	{
		echo "Berhasil menghapus !<br/>";
		echo "<a href='admin.php'>[back]</a>";
	}else echo "Gagal !";
	
?>