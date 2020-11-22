<?php 
            $student_id = $_POST['stuid'];
            $co_id = $_POST['coid']; 
            $co_name = $_POST['coname'];
            $co_sem = $_POST['cosem'];
            $co_inst = $_POST['coinst'];
            $co_class = $_POST['classroom'];
            $co_time = $_POST['cotime'];
            
            $conn2 = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
         
            $sql2 = "INSERT INTO 
            stucourse(stu_id, sco_id, sco_name, sco_sem, sco_instructor, sco_classroom, sco_time)
             VALUES ('{$student_id}','{$co_id}', '{$co_name}' , '{$co_sem}' , '{$co_inst}' , '{$co_class}' , '{$co_time}') ";
            $result2 = mysqli_query ($conn2, $sql2) or die("Query Unsuccessfu.");

            header("Location: http://localhost/classproject/student/main/Courseinfo.php");
            
            mysqli_close($conn2);
?>