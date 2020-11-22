<?php
// session_start();
// if(!isset($_SESSION["stud_id"])){
//    header("location: http://localhost/classproject/student/index.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" />
   <link rel="stylesheet" href="css/style.css" />
   <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet" />

   <link rel="stylesheet" href="scroll.js">

   <!------------ FontAwesome for icons------------->
   <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

   

</head>


<body>
  
   <header>
      
      <nav>
         <!-----------------logo--------------------------->
         <a href="index.html" class="logo"><img src="images/aum science.png"
               alt="Auburn University at Montgomery" /></a>

         <!-----------------navigation----------------------->
         <ul>
            <li><a href="index.php" >Home</a></li>
            <li><a href="Courseinfo.php">Courseinfo</a></li>
            <li><a href="Personalinfo.php">Personalinfo</a></li>
            <li><a href="News.php">News </a></li>
            <li><a href="Weather.php">Weather </a></li>
            <li><a href="Logout.php">Logout </a></li>
           
         </ul>
      </nav>
     
      <!-----------------Message from dean----------------------------------->
      <div class="dean">
         <p style="padding: 10px;">
         <strong>Welcome: </strong><?php echo ($_SESSION['stud_id']);?>
         </p>
      </div>

</header>
</body>
</html>