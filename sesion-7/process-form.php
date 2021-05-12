<?php 

	var_dump($_POST);	/*Imprimir $_POST que es unarray asosciativo*/
	$count = count($_POST);
	// echo $count;

	$username =$_POST['username']
	$pasword =$_POST['pasword']

	echo El usuario: $username , tiene como pasword: $pasword;
?>