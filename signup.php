<?php 

  $stu_name = $_POST['st_name']; 
  $stu_id = $_POST['st_id'];
  $stu_gender = $_POST['st_gender'];
  $stu_email = $_POST['st_email'];
  $stu_password = $_POST['st_password'];
  $stu_cpassword = $_POST['confirm_password'];

  if($stu_password==$stu_cpassword){

$conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed"); 

$sql = "INSERT INTO stu_info(sname,sgender, sid, semail , spassword )
VALUES ('{$stu_name}','{$stu_gender}', '{$stu_id}','{$stu_email}','{$stu_password}') ";

$result = mysqli_query ($conn, $sql) or die("Query Unsuccessful for signup.");


header("Location: http://localhost/classproject/student/index.php");

mysqli_close($conn);
  }else{
    echo "Error: Password should be match";
  }


?>