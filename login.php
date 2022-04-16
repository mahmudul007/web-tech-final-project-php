  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
    <?php
    require 'dbConnect.php';

     include 'dbRead.php';
      $username = $password = "";
      $usernameErr = $passwordErr = "";
      $isValid = true;
       $successfulMessage = $errorMessage = "";

      
        if($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)) {
         $usernameErr = "Field can not be empty";
      $isValid = false;
       }
       if(empty($password)) {
        $passwordErr = "Field can not be empty";
        $isValid = false;
       }

       if ($isValid) {
         $res=login($username, $password);

         if($res) {
          session_start();
          $_SESSION['username'] =$username;
         header("location:welcome.php");
         }
         else {
        $errorMessage = "login failed";
        }
       }
}


        function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
        return $data;
}

?>

  <h1>Login</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
      <legend>Login</legend>

      <label for="username">User Name:</label>
      <input type="text" name="username" id="username" >
       <span style="color: red;">  <?php echo  $usernameErr;?></span>
      <br><br>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
       <span style="color: red;">  <?php echo  $passwordErr;?></span>
      <br><br>

      

      <input type="submit" name="submit" value="Login">
    </fieldset>
  </form>

  <br>
   <p style="color:green" > <?php echo  $successfulMessage;?></p>
  <p style="color: red" > <?php echo  $errorMessage;?>   </p>
  <br>
  <a href="registration.php">Click to Register</a>
  <a href="welcome.php">HOME</a>
</body>
</html>



  