<?php
function removeAdmin($uid,$username){

	$conn = connect();
	$stmt=$conn->prepare("DELETE FROM USER WHERE id=? and username =?");
	$stmt -> bind_param("is",$uid,$username);
	
    return $stmt->execute();
 }
?>