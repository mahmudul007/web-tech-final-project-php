<?php
function removeEmployee($uid,$username){

	$conn = connect();
	$stmt=$conn->prepare("DELETE FROM EMPLOYEE WHERE id=? and username =?");
	$stmt -> bind_param("is",$uid,$username);
	
    return $stmt->execute();
 }
?>