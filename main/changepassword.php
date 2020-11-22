<?php
session_start();
if(!isset($_SESSION["stud_id"])){
   header("location: http://localhost/classproject/student/index.php");
}
$id=$_SESSION['stud_id'];


		//check fields
		
		$oldpassword = ($_POST['currentpass']);
		$newpassword = ($_POST['newpass']);
		$repeatnewpassword = ($_POST['confirmnewpass']);
		
        //check pass against db
        $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
         $sql = "SELECT spassword FROM stu_info where sid='$id'  ";
        $result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");

		$row = mysqli_fetch_assoc($result);
		
		$oldpassworddb = $row['spassword'];
		
			
		
		//check pass
		if ($oldpassword==$oldpassworddb)
		{
		
		
		
		//check twonew pass
		if ($newpassword==$repeatnewpassword)
		{
		//success
        //change pass in db
      
        $sqlnew = "UPDATE stu_info SET  spassword='$newpassword' where sid='$id'  ";
        $result = mysqli_query ($conn, $sqlnew) or die("Query Unsuccessful.");

		echo "Your password has benn changed Successfully. <br> <a href='Personalinfo.php'>Return</a> to the main page";
		} 
		else{
				echo "Password error";
		
		}
		
		
		
		
		
		
		}else{
			echo "Password error";}
		
		




		




?>