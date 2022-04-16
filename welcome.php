<?php  
 session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registrstion page</title>
</head>
<body>


<h1> welcome ,<?php   

if (isset( $_SESSION['username'])){

echo $_SESSION['username'];
}
else{
	
	header("Location:logout.php");
}?>
	

</h1>
<button> <a href="logout.php">log out</a></button>

<button> <a href="registration.php">Admin reg</a></button>
<button> <a href="adminList.php">AdminList</a></button>
<button> <a href="changePasswordAdmin.php">Change password</a></button>

<button> <a href="employe_reg.php">Seller register</a></button>
<button> <a href="employeelist.php">Seller List</a></button>


<button> <a href="user_reg.php">user registration</a></button>
<button> <a href="userList.php">user list</a></button>
<button> <a href="../view/search.html">Search</a></button>
</body>
</html>