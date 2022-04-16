<?php

function login($username,$password){
	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM user WHERE username= ? and password= ? ");
	$stmt-> bind_param("ss", $username,$password);
	$stmt->execute();
	$records=$stmt->get_result();
	return $records->num_rows=== 1;

}

  function getALLadmin(){
      $conn=connect();
      $stmt = $conn->prepare ("SELECT id,username FROM user");
      $stmt->execute();
      $records = $stmt->get_result();
      return $records->fetch_all(MYSQLI_ASSOC);
	  
   }

  function getAdmin($username){
      $conn=connect();
      $stmt = $conn->prepare ("SELECT id, username FROM user WHERE username=?");
      $stmt-> bind_param("s", $username);
      $stmt->execute();
      $records = $stmt->get_result();
      return $records->fetch_all(MYSQLI_ASSOC);
	  
   }

?>