<?php 

session_start();
if(!isset($_SESSION["stud_id"])){
   header("location: http://localhost/classproject/student/index.php");
}

$stid = $_SESSION["stud_id"];



?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport">
  
   <link rel="stylesheet" href="cinfo.css">
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
            <li><a href="Courseinfo.php" class="active">Courseinfo</a></li>
            <li><a href="Personalinfo.php" >Personalinfo</a></li>
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
      
      <div class="gri2" style="height: auto;"> <br>
      <h2 style="text-align: center;">Available Courses</h2> 
            
            
               <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
               <input type="text" name="search" placeholder="Search Course id, name, or instuctor...">
               <br>
               <input type="submit" name="search_btn" value="Search"  >
               <br> 
               <br>
               <br>
               <br>
               </form>
               <?php 
            if(isset($_POST['search_btn'])){
            $conn3 = mysqli_connect("localhost","root","","student") or  die("Connection Failed");

            $search = $_POST['search']
            ;
            $sql3 = "SELECT * FROM course_info   WHERE c_id = '{$search}' or c_name = '{$search}'or
            c_semester = '{$search}' or c_instructor = '{$search}'  ";

            $result3 = mysqli_query ($conn3, $sql3) or die("Query Unsuccessful.");
         
            if(mysqli_num_rows($result3)>0){
            while($row=mysqli_fetch_assoc($result3)){    
         ?>
            <br> <br>

           
         <form action="enrollcourse.php" method="post">
            <h3>Search Result For: <i> <?php echo $search;  ?> </i></h3>

         <label> Student ID</label>
         <input type="text" name="stuid" value="<?php  echo ($_SESSION["stud_id"]);?>" readonly> <br> <br>

         <label> Course ID</label>
         <input type="text" name="coid" value="<?php echo $row['c_id'];?>" readonly> <br> <br>

         <label> Course Name</label>
         <input type="text" name="coname" value="<?php echo $row['c_name'];?>" readonly><br> <br>

         <label> Semester</label>
         <input type="text" name="cosem" value="<?php echo $row['c_semester'];?>" readonly><br> <br>

         <label> Instructor</label>
         <input type="text" name="coinst" value="<?php echo $row['c_instructor'];?>" readonly><br> <br>

         <label> Classroom</label>
         <input type="text" name="classroom" value="<?php echo $row['c_classroom'];?>" readonly><br> <br>

         <label> Time</label>
         <input type="text" name="cotime" value="<?php echo $row['c_time'];?>" readonly><br> <br>

         <input type="submit"  value="Enroll"> <br> <br> <br> <br> <br>

        
         </form>
            <?php
            }
         }else {
            
            echo "Error: No Result Found";
         } 
         
         }
            ?>


       

         <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 

            <label>Select Course:</label>
            <select name="course" required>
                <option value="" selected disabled>Choose Course</option>
                <?php 
                $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
                $sql = "SELECT * FROM course_info";
                $result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");
                while($row = mysqli_fetch_assoc($result)) 
                {              
                ?>
                
                <option ><?php echo $row['c_name']; ?></option>
                
                <?php } ?>
            </select>
            <br> <br> 

            <input type="submit" name="showbtn" value="Show" > <br> <br>  
            <br>
         <br>
         </form>

         <?php 
            if(isset($_POST['showbtn'])){
            $conn1 = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
         
            $co_name = $_POST['course'];
            

            $sql1 = "SELECT * FROM course_info   WHERE c_name = '{$co_name}'  ";
            

            $result1 = mysqli_query ($conn1, $sql1) or die("Query Unsuccessful.");
         
            if(mysqli_num_rows($result1)>0){
            while($row=mysqli_fetch_assoc($result1)){    
         ?>
         
         <form action="enrollcourse.php" method="post">

         <label> Student ID</label>
         <input type="text" name="stuid" value="<?php  echo ($_SESSION["stud_id"]);?>" readonly> <br> <br>

         <label> Course ID</label>
         <input type="text" name="coid" value="<?php echo $row['c_id'];?>" readonly> <br> <br>

         <label> Course Name</label>
         <input type="text" name="coname" value="<?php echo $row['c_name'];?>" readonly><br> <br>

         <label> Semester</label>
         <input type="text" name="cosem" value="<?php echo $row['c_semester'];?>" readonly><br> <br>

         <label> Instructor</label>
         <input type="text" name="coinst" value="<?php echo $row['c_instructor'];?>" readonly><br> <br>

         <label> Classroom</label>
         <input type="text" name="classroom" value="<?php echo $row['c_classroom'];?>" readonly><br> <br>

         <label> Time</label>
         <input type="text" name="cotime" value="<?php echo $row['c_time'];?>" readonly><br> <br>

         <input type="submit"  value="Enroll"> <br> <br> <br> <br> <br>
         <br>
         <br>
        
         </form>
      
            <?php
            }}}
            ?>
      </div>
      
      
        


   </div>
   
<!----------------------------footer-------------------------->
   
<?php

include "view/footer.php";
?>




</body>

</html>