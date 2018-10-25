<?php
	require 'libs/rb.php';
	R::setup('mysql:host=localhost;dbname=lesson', 'root', '');
	$con = mysqli_connect("localhost", "root", "", "lesson");

	mysqli_set_charset($con, 'utf8');   
	mysqli_query ($con,"set character_set_client='utf8'");
	mysqli_query ($con,"set character_set_results='utf8'");
	mysqli_query ($con,"set collation_connection='utf8_general_ci'");
	mysqli_character_set_name($con);

?>