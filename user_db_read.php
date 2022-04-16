<?php

function getALLusers(){
      $conn=connect();
      $stmt = $conn->prepare ("SELECT id, name,gender,address,dob,email,username FROM users");
      $stmt->execute();
      $records = $stmt->get_result();
      return $records->fetch_all(MYSQLI_ASSOC);
      
      
   }
   ?>
