<?php
session_start();
if(!isset($_SESSION["stud_id"])){
   header("location: http://localhost/classproject/student/index.php");
}
$id=$_SESSION['stud_id'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport">
  
   <link rel="stylesheet" href="pinfo.css">
   <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

   <!------------ FontAwesome for icons------------->
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
 

   <title>Description</title>
</head>

<body>
   <header>
      <nav>
         <!-----------------logo--------------------------->
         <a href="index.html" class="logo"><img src="images/aum science.png" alt="Auburn University at Montgomery"></a>


         <!-----------------navigation----------------------->
         <ul>
            <li><a href="index.php" >Home</a></li>
            <li><a href="Courseinfo.php">Courseinfo</a></li>
            <li><a href="Personalinfo.php" class="active">Personalinfo</a></li>
            <li><a href="News.php">News </a></li>
           
            <li><a href="Logout.php">Logout </a></li>
           
         </ul>
      </nav>
  
      <!-----------------Message from dean----------------------------------->
      <div class="dean">
         <p style="padding: 10px;">
         <strong>Welcome: </strong><?php  echo ($_SESSION["stud_id"]);?>
         </p>
      </div>


      
   <!-----------------------Description---------------------------------------->

   <div class="description">
      <div class="gridmain">
      <?php 
            $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
            $sql = "SELECT * FROM stu_info where sid='$id'  ";
            $result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");
            if(mysqli_num_rows($result)>0){
               while ($row = mysqli_fetch_assoc($result)){                
         ?>
         <div class="gri1">
            <form method="POST" action="updateprofile.php">
            <h2>Profile</h2> <br>

            <label>Name</label>
            <input type="text"  name="name" placeholder="" value="<?php echo $row['sname']; ?>"> <br> <br>

            <label>Gender</label>
            <input type="text"  name="gender" placeholder="" value="<?php echo $row['sgender']; ?>"> <br> <br>

            <label>Student ID</label>
            <input type="text"  name="id" placeholder="" value="<?php echo $row['sid']; ?>"> <br> <br>

            <label>Email</label>
            <input type="email"  name="email" placeholder="" value="<?php echo $row['semail']; ?>"> <br> <br>     
            
            <input type="submit" name="updatebtn" value="Update"> <br> <br> 
            </form>  <br> <br> 
            <?php
               }}
            ?>

                     
            
            
         </div>
         <div class="gri2">

         <form action="changepassword.php" method="POST">
            <h2>Change Password</h2> <br>

            <label>Current Password</label>
            <input type="text"  name="currentpass" placeholder=""> <br> <br>

            <label>New Password</label>
            <input type="text"  name="newpass" placeholder=""> <br> <br>

            <label>Confirm Password</label>
            <input type="text"  name="confirmnewpass" placeholder=""> <br> <br> 
            
            <input type="submit" value="Change Password"> <br> <br> 
            </form>  <br> <br> 
         </div>
      </div>
   </div>

   <div class="enrollc" >
         <p style="padding: 10px;">
         <h2 style="text-align: center;">Enrolled Courses</h2>
        
               <table style="margin-bottom: 50px;" >
               
                  <tr>
                     <th>Course id</th>
                     <th>Course name</th>
                     <th>Semester</th>
                     <th>Instructor</th>
                     <th>Classroom</th>
                     <th>Time</th>
                     <th></th>
                  </tr>
                  <?php 
                  $conn1 = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
                  $sql1 = "SELECT * FROM stucourse where stu_id='$id'  ";
                  $result1 = mysqli_query ($conn1, $sql1) or die("Query Unsuccessful.");
                  if(mysqli_num_rows($result1)>0){
                     while ($row1 = mysqli_fetch_assoc($result1)){             
               ?>
                  <tr>
                     <td><?php echo $row1['sco_id']; ?></td>
                     <td><?php echo $row1['sco_name']; ?></td>
                     <td><?php echo $row1['sco_sem']; ?></td>
                     <td><?php echo $row1['sco_instructor']; ?></td>
                     <td><?php echo $row1['sco_classroom']; ?></td>
                     <td><?php echo $row1['sco_time']; ?></td>
                     <td> <button> <a href='withdraw.php?id=<?php echo $row1['sco_id']; ?>'>Withdraw</a></button></td>
                     
                     
                     <?php   }} ?>
                  </tr>
                  
               </table>

         </p>
      </div>
      
      <!----------------------------footer-------------------------->
   
<?php

include "view/footer.php";
?>


</body>

</html>