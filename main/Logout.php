<?php 

 
$conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed"); 

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/classproject/student/");

mysqli_close($conn);

?>