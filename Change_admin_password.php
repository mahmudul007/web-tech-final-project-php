<?php

function changePassword($username,$password){

	$conn = connect();
	$stmt=$conn->prepare("UPDATE  USER  Set password=? WHERE username=?");
	$stmt -> bind_param("ss",$password,$username);
	
    return $stmt->execute();
 }
?>