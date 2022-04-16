<?php
require 'dbConnect.php';
require 'user_db_read.php';
require 'user_delete.php';
$userList = getALLusers();
$succecfullMessage= $errorMassage="";


if (!empty ($_GET['uid']) and !empty($_GET['uname']))
{
    $response =removeUser($_GET['uid'],$_GET['uname'] );
    if ($response)
    { 
     $userList = getALLusers();
        $succecfullMessage= "deleted sucessfully an user";
    }
    else{
        $errorMassage ="error while deleting";
    }

}
//-------------------

?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Users  List</title>
    </head>
    <body>
        <h1>Users list</h1>
<?php
echo "<table>";
echo "<tr>"; 
echo "<th> ID </th>";
echo "<th>Name </th>";
echo "<th>Gender </th>";
echo "<th> Address</th>";
echo "<th> Birth date </th>";
echo "<th>Email </th>";
echo "<th>Username </th>";

echo "<th> Action </th>";
echo "<tr>";

for($i = 0;  $i < count($userList); $i++)
{
    echo "<tr>";
    echo "<td>" . $userList[$i]["id"]."</td>";
    echo "<td>" . $userList[$i]["name"]."</td>";
    echo "<td>" . $userList[$i]["gender"]."</td>";
    echo "<td>" . $userList[$i]["dob"]."</td>";
    echo "<td>" . $userList[$i]["address"]."</td>";  
    echo "<td>" . $userList[$i]["email"]."</td>";
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