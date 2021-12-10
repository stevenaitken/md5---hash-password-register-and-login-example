<?php

$user = $_POST["user"];
$pwd = md5($_POST["pwd"]);

include 'includes/db_connx.php';

$sql = "SELECT username, pwd FROM users WHERE username = '$user' AND pwd = '$pwd'";

$result = $conn->query($sql);

if ($result->num_rows === 1) {
	header('location:admin.php');
//$_SESSION['username']=$username;
}

else{

  echo "error";
}

$conn->close();
?>