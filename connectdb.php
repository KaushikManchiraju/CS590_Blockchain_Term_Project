<?php
	function openConnection(){
		$host="localhost";
		$user="root";
		$pw="root";
		$db="supplychain";

		$con = new mysqli($host, $user, $pw,$db) or die("Connect failed: %s\n". $con -> error);
		return $con;
	}

	function closeConnection($con){
		$con -> close();
	}
?>
<!-- Developed by Kaushik and Ranjit for CS590 Blockchain -->
