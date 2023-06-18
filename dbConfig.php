<?php

        $servername   = "localhost";
		$database = "database";
		$username = "root";
		$dbName="food";
		$mysqli = mysqli_connect($servername,$username,"",$dbName);
		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}

?>