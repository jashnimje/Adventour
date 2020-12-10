<?php 

	// Connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'adventour');

	// Check connection
	if(!$conn) {
		echo 'Connection Error: ' . mysqli_connect_error();
	}
