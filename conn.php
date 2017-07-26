<?php 
	$host = "localhost";
	$username = "root";
	$password = "tanakorn1994";
	$Conn = mysql_connect($host,$username,$password);

		if ($Conn) {
			echo "Conneted";
		}
		else {
			echo "DisConnect".mysql_error();
		}
 ?>