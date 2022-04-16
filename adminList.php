
<?php
require 'dbRead.php';
require 'dbConnect.php';
require 'Db_admin_Delete.php';

$succecfullMessage= $errorMassage="";
$userList = getALLadmin();
$username = empty($_GET['username']) ? "" : $_GET['username'];

if ( empty ($username)){
    $userList = getALLadmin();
   }
   else{
       $userList = getAdmin($username);
   }
   if (!empty ($_GET['uid']) and !empty($_GET['uname']))
   {
       $response =removeAdmin($_GET['uid'],$_GET['uname'] );
       if ($response)
       { 
        $userList = getALLadmin();
           $succecfullMessage= "deleted sucessfully an admin";
       }
       else{
           $errorMassage ="error while deleting";
       }

   }
   ?>
   <html>
    <head>
        <meta charset="utf-8">
        <title> Admin   List</title>
    </head>
    <body>
        <h1>Admin  list</h1>
   <?php

echo "<table>";
echo "<tr>"; 
echo "<th> Id </th>";
echo "<th> Username </th>";
echo "<th> Action </th>";
echo "<tr>";

for($i = 0;  $i < count($userList); $i++)
{
    echo "<tr>";
    echo "<td>" . $userList[$i]["id"]."</td>";
    echo "<td>" . $userList[$i]["username"]."</td>";
    
    echo "<td> <a href='". $_SERVER['PHP_SELF'] . "?uid=" . $userList[$i]["id"]. "&uname=" . $userList[$i]["username"] ." ' > Delete </a></td>";
   
    echo "</tr>";
}
echo "</table>";


?>
<br>
<span style="color:green" > <?php echo  $succecfullMessage;?></span>
  <span style="color: red" > <?php echo $errorMassage;?>   </span>

<p> <a href="welcome.php">"HOME"</a></p>

    </body>
 
</html>