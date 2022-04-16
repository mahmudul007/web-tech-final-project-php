
<?php
include 'dbConnect.php';

function register($name,$gender,$address,$dob,$email,$username,$password){
$conn = connect();
$stmt=$conn->prepare ("INSERT INTO USERS (name,gender,address,dob,email,username,password) VALUES (?,?,?,?,?,?,?)");
$stmt -> bind_param("sssssss",$name,$gender,$address,$dob,$email,$username,$password);

 return $stmt->execute();
}

?>