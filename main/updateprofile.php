

<?php 
  $stu_name = $_POST['name'];
  $stu_gender = $_POST['gender']; 
  $stu_id = $_POST['id'];
  $stu_email = $_POST['email'];
  

$conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed"); 

$sql = "UPDATE stu_info SET sname = '{$stu_name}',sgender= '{$stu_gender}', sid= '{$stu_id}', semail= '{$stu_email}' WHERE sid='{$stu_id}'";
$result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");


include "Personalinfo.php";

mysqli_close($conn);

?>




