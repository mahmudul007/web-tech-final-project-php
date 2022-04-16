  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>registration</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <?php
    include 'user_insert.php';

 
      $username = $password =$gender=$dob=$name= $address=$email= "";
      $usernameErr = $passwordErr =$nameErr= $genderErr=$dobErr=$addressErr=$emailErr="";
      $isValid = true;
       $successfulMessage = $errorMessage = "";

      
        if($_SERVER['REQUEST_METHOD'] === "POST") {
        $name = $_POST['name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        
        $address=$_POST['address'];
        $email=$_POST['email'];

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        // function validation
        if(empty($name)) {
            $nameErr = "Field can not be empty";
         $isValid = false;
          }

          if(empty($gender)) {
            $genderErr = "Field can not be empty";
         $isValid = false;
          }

          if(empty($dob)) {
            $dobErr = "Field can not be empty";
         $isValid = false;
          }

          if(empty($address)) {
            $addressErr = "Field can not be empty";
         $isValid = false;
          }

          if(empty($email)) {
            $emailErr = "Field can not be empty";
         $isValid = false;
          }
        if(empty($username)) {
         $usernameErr = "Field can not be empty";
      $isValid = false;
       }
       if(empty($password)) {
        $passwordErr = "Field can not be empty";
        $isValid = false;
       }
      
       // end of php employee form validation
    //    start of data submit

       if ($isValid) {
         $res=register($name,$gender,$address,$dob,$email,$username,$password);

         if($res) {
         
         $successfulMessage = "Sucessfully saved";
       
         }
         else {
        $errorMessage = "saving error";
        }
       }
    //    end of data submission
}



        function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
        return $data;
}

?>

  <h1>Registration</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset >
      <legend>Input your information</legend>

      <label for="name">Name:</label>
      <input type="text" name="name" id="name" >
      <span style="color: red;">  <?php echo  $nameErr;?></span>

      <br><br>

      <label for="gender">Gender:</label>
      <input type="text" name="gender" id="gender" >

        <span style="color: red"><?php echo $genderErr; ?></span><br><br>

 <label for="dob">DoB<span style="color: red">*</span></label>
        <input type="date" name="dob" id="dob">
        <span style="color: red"><?php echo $dobErr; ?></span><br><br>


       


      <label for="email">Email:</label>
      <input type="text" name="email" id="email" >
      <span style="color: red;">  <?php echo  $emailErr;?></span>

      <br><br>
      <label for="address">Address:</label>
      <input type="text" name="address" id="address" >
      <span style="color: red;">  <?php echo  $addressErr;?></span>

      <br><br>


      <label for="username">User Name:</label>
      <input type="text" name="username" id="username" >
       <span style="color: red;">  <?php echo  $usernameErr;?></span>
      <br><br>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
       <span style="color: red;">  <?php echo  $passwordErr;?></span>
      <br><br>

      <input type="submit" name="submit" value="Register">
    </fieldset>
  </form>

  <br>
   <p style="color:green" > <?php echo  $successfulMessage;?></p>
  <p style="color: red" > <?php echo  $errorMessage;?>   </p>
  <br>
  <a href="login.php">Click to login</a>
</body>
</html>



  