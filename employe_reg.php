  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require 'dbConnect.php';
    include 'db_employe_insert.php';

 
      $username = $password =$gender=$dob=$relegion=$name=$salary= $address=$email= "";
      $usernameErr = $passwordErr =$nameErr= $genderErr=$dobErr=$salaryErr=$addressErr=$relegionErr=$emailErr="";
      $isValid = true;
       $successfulMessage = $errorMessage = "";

      
        if($_SERVER['REQUEST_METHOD'] === "POST") {
        $name = $_POST['name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $relegion=$_POST['relegion'];
        $address=$_POST['address'];
        $email=$_POST['email'];

        $username = $_POST['username'];
        $password = $_POST['password'];
        $salary =  $_POST['salary'];

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
          if(empty($relegion)) {
            $relegionErr = "Field can not be empty";
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
       if(empty($salary)) {
        $salaryErr = "Field can not be empty";
        $isValid = false;
       }
       // end of php employee form validation
    //    start of data submit

       if ($isValid) {
         $res=register($username,$password,$gender,$dob,$relegion,$name,$address,$email,$salary);

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

  <h1>ADD EMPLOYEE</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
      <legend>Add employee</legend>

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


        <label for="relegion">Relegion<span style="color: red">*</span>:</label>
   <select id = "relegion" name="relegion">
    <option value="Islam"> Islam </option> 
        <option value="Hindu"> Hindu </option>
            <option value="Buddha"> Buddha </option>
                <option value="Other"> Other </option>   
            </select>
            <span style="color: red"><?php echo $relegionErr; ?></span><br><br>



<br><br>


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
      <label for="salary">Salary:</label>
      <input type="number" name="salary" id="salary">
       <span style="color: red;">  <?php echo  $salaryErr;?></span>
      <br><br>

      

      <input type="submit" name="submit" value="Register">
    </fieldset>
  </form>

  <br>
   <p style="color:green" > <?php echo  $successfulMessage;?></p>
  <p style="color: red" > <?php echo  $errorMessage;?>   </p>
  <br>
  <a href="login.php">Click to login</a>
  <a href="welcome.php">HOME</a>
</body>
</html>



  