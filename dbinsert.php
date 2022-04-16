<?php

function register($username,$password){

	$conn = connect();
	$stmt=$conn->prepare("INSERT INTO USER (username,password) VALUES (?,?)");
	$stmt -> bind_param("ss",$username,$password);
	
    return $stmt->execute();
 }
?>