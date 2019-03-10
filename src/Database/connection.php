<?php
	$conn = new mysqli('localhost', 'root', '', 'bus_system');
	if ($conn -> connect_error){
		die("Connection failed : " . $connect_error);
	}
	//echo "connection Successfuly";
?>
