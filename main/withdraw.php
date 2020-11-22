<?php

$co_id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");

$sql = "DELETE FROM stucourse WHERE sco_id='{$co_id}'";

$result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/classproject/student/main/Personalinfo.php");

mysqli_close($conn);

?>