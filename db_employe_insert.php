<?php

function register($name,$gender,$dob,$relegion,$address,$email,$username,$password ,$salary){

	$conn = connect();
	$stmt=$conn->prepare ("INSERT INTO EMPLOYEE (name,gender,dob,relegion,address,email,username,password,salary) VALUES (?,?,?,?,?,?,?,?,?)");
	$stmt -> bind_param("ssssssssi",$name,$gender,$dob,$relegion,$address,$email,$username,$password ,$salary);
	return $stmt->execute();
}
 
?>