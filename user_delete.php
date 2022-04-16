<?php
function removeUser($uid,$username){

	$conn = connect();
	$stmt=$conn->prepare("DELETE FROM USERS WHERE id=? and username =?");
	$stmt -> bind_param("is",$uid,$username);
	
    return $stmt->execute();
 }
?>