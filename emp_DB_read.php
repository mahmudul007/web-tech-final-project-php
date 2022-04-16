<?php
  
   function getALLemp(){
      $conn=connect();
      $stmt = $conn->prepare ("SELECT id, name,gender,dob,relegion,address,email,username,salary FROM employee");
      $stmt->execute();
      $records = $stmt->get_result();
      return $records->fetch_all(MYSQLI_ASSOC);
      
      
   }

   
?>