<?php
require'dbConnect.php';
require 'emp_DB_read.php';
require 'employee_DB_delete.php';
$userList = getALLemp();



$succecfullMessage= $errorMassage="";


if (!empty ($_GET['uid']) and !empty($_GET['uname']))
{
    $response =removeEmployee($_GET['uid'],$_GET['uname'] );
    if ($response)
    { 
     $userList = getALLemp();
        $succecfullMessage= "deleted sucessfully an user";
    }
    else{
        $errorMassage ="error while deleting";
    }

}


?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Seller  List</title>
    </head>
    <body>
        <h1> Seller list</h1>
<?php
if(count($userList)>0){
echo "<table>";
echo "<tr>"; 
echo "<th> ID </th>";
echo "<th>Name </th>";
echo "<th>Gender </th>";
echo "<th> Birth date </th>";
echo "<th>Relegion </th>";
echo "<th> Address</th>";
echo "<th>Email </th>";
echo "<th>Username </th>";
echo "<th>Salary </th>";
echo "<th> Action </th>";
echo "<th> Update </th>";
echo "<tr>";

for($i = 0;  $i < count($userList); $i++)
{
    echo "<tr>";
    echo "<td>" . $userList[$i]["id"]."</td>";
    echo "<td>" . $userList[$i]["name"]."</td>";
    echo "<td>" . $userList[$i]["gender"]."</td>";
    echo "<td>" . $userList[$i]["dob"]."</td>";
    echo "<td>" . $userList[$i]["relegion"]."</td>";
    echo "<td>" . $userList[$i]["address"]."</td>";
    echo "<td>" . $userList[$i]["email"]."</td>";
    echo "<td>" . $userList[$i]["username"]."</td>";
    echo "<td>" . $userList[$i]["salary"]."</td>";
    
    echo "<td> <a href='". $_SERVER['PHP_SELF'] . "?uid=" . $userList[$i]["id"]. "&uname=" . $userList[$i]["username"] ." ' > Delete </a></td>";

  


    echo "</tr>";
}
echo "</table>";
}

?>

<p> <a href="welcome.php">"HOME"</a></p>

    </body>
 
</html>