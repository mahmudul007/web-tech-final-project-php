
<?php
require 'dbRead.php';
require 'dbConnect.php';


$username = empty($_GET['username']) ? "" : $_GET['username'];

if ( empty($username)){
    $userList = getALLadmin();
   }
   else{
       $userList = getAdmin($username);
   }
   


echo "<table>";
echo "<tr>"; 
echo "<th> Id </th>";
echo "<th> Username </th>";
echo "</tr>";

for($i = 0;  $i < count($userList); $i++)
{
    echo "<tr>";
    echo "<td>" . $userList[$i]["id"]."</td>";
    echo "<td>" . $userList[$i]["username"]."</td>";
    echo"</tr>";
}
echo "</table>";

?>
