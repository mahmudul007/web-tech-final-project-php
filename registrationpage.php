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
<h1> welcome ,<?php isset( $_SESSION['username'])? $_SESSION['username']:"anonymus"?></h1>

</body>
</html>