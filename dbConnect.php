<?php
function connect(){
        $conn = new mysqli("localhost","sayed","123","user");
        if ($conn->connect_errno) {
	   die( " connection failed due to" . $conn->connect_error);
}
return $conn;
}

?>
