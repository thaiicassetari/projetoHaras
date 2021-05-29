<?php
	define("HOST", "localhost");
	define("USER", "root"); # usuario
	define("PASS", "");
	define("BASE", "haras");


	$conn = new mysqli(HOST, USER, PASS, BASE) or die(mysqli_error($conn));

?>