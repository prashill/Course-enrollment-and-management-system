<?php
session_start();

if(!isset($_SESSION["stud_id"])){
   header("location: http://localhost/classproject/student/index.php");
}
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

   <title>Auburn University at Montgomery</title>

</head>


<body>
  
   <header>
      
      <nav>
         <!-----------------logo--------------------------->
         <a href="index.html" class="logo"><img src="images/aum science.png"
               alt="Auburn University at Montgomery" /></a>

         <!-----------------navigation----------------------->
         <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="Courseinfo.php">Courseinfo</a></li>
            <li><a href="Personalinfo.php">Personalinfo</a></li>
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

      <!------------------slider-------------------->
      <div class="slider">

      </div>
   </header>

   <!---------------student activity---------------------->
   <div class="student_activity">
      <div class="grid">
         <!--------------cards of activity---------------------------------->
         <div class="box-container" style="background-color: #ffffff;">
            <h2 style="text-align: center;"><u> Students Activity</u></h2>
            <br />
            <div class="grid-2">
               <div class="box-1">
                  <div class="textbox-4">
                     <a href="http://sciences.aum.edu/student-resources/advising">
                        <img src="images/advising.png" style="
                      width: 20%;
                      align-items: center;
                      margin-left: 75px;
                      margin-top: 10px;
                    " />
                        <h4 style="color: red; margin-top: 2px; text-align: center;">
                           Advising
                        </h4>
                     </a>
                     <p style="text-align: center; margin-top: -5px; font-size: 13px;">
                        With high quality advising services and academic support that
                        will assist them in achieving their academic and career goals.
                        Stop by the Office of Central Advising in Taylor Center 125.
                     </p>
                  </div>
               </div>

               <div class="box-2">
                  <div class="textbox-4">
                     <a href="http://sciences.aum.edu/student-resources/clubs-and-organizations">
                        <img src="images/club.png" style="
                      width: 20%;
                      align-items: center;
                      margin-left: 75px;
                      margin-top: 10px;
                    " />
                        <h4 style="color: red; margin-top: 2px; text-align: center;">
                           Clubs & Organizations
                        </h4>
                     </a>
                     <p style="text-align: center; margin-top: -5px; font-size: 15px;">
                        The College of Sciences has a variety of clubs and
                        organizations to promote networking with fellow students,
                        professors, and working professionals.
                     </p>
                  </div>
               </div>

               <div class="box-3">
                  <div class="textbox-4">
                     <a href="http://sciences.aum.edu/student-resources/scholarships">
                        <img src="images/scholarship.png" style="
                      width: 20%;
                      align-items: center;
                      margin-left: 75px;
                      margin-top: 10px;
                    " />
                        <h4 style="color: red; margin-top: 2px; text-align: center;">
                           Scholarships
                        </h4>
                     </a>
                     <p style="text-align: center; margin-top: -5px; font-size: 13px;">
                        AUM proud to award scholarship funding throughout the academic
                        school year. These scholarships are awarded to deserving
                        students at all levels.
                     </p>
                  </div>
               </div>

               <div class="box-4">
                  <div class="textbox-4">
                     <a href="http://sciences.aum.edu/about/dean's-office">
                        <img src="images/request.png" style="
                      width: 20%;
                      align-items: center;
                      margin-left: 75px;
                      margin-top: 10px;
                    " />
                        <h4 style="color: red; margin-top: 2px; text-align: center;">
                           Request Information
                        </h4>
                     </a>
                     <p style="text-align: center; margin-top: -5px; font-size: 15px;">
                        Contact us today to learn more about earning your degree from
                        The AUM College of Sciences.
                     </p>
                  </div>
               </div>

               <div class="box-5">
                  <div class="textbox-5">
                     <a href="http://www.aum.edu/apply?action">
                        <img src="images/apply.png" style="
                      width: 20%;
                      align-items: center;
                      margin-left: 75px;
                      margin-top: 10px;
                    " />
                        <h4 style="color: red; margin-top: 2px; text-align: center;">
                           Apply Now
                        </h4>
                     </a>
                     <p style="text-align: center; margin-top: -5px; font-size: 13px;">
                        The AUM College of Sciences offers a variety of resources to
                        give students the necessary knowledge and skills. Join us and
                        apply to AUM, Where learning matters most.
                     </p>
                  </div>
               </div>

               <div class="box-6">
                  <div class="textbox-6">
                     <a href="https://aum.elluciancrmrecruit.com/admissions/pages/events.aspx">
                        <img src="images/campus.png" style="
                      width: 20%;
                      align-items: center;
                      margin-left: 75px;
                      margin-top: 10px;
                    " />
                        <h4 style="color: red; margin-top: 2px; text-align: center;">
                           Visit Campus
                        </h4>
                     </a>
                     <p style="text-align: center; margin-top: -5px; font-size: 14px;">
                        At AUM we encourage all prospective students to visit our
                        campus at any time. Contact the Admissions Office
                        (334-244-3615 or admissions@aum.edu)
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <!------------------news and events------------------------------->
         <div id="grid-2" style="background-color: blanchedalmond;">
            <h2 style="text-align: center;"><u> News and Events</u></h2>

            <div class="news_and_events">
               <div class="event-1">
                  <div class="news-1">
                     <h2>
                        26 <sup>th</sup> <br />
                        August <br />
                        2020
                     </h2>
                  </div>
                  <a href="http://www.aum.edu/events">
                     <h3 style="text-align: center; margin-top: 4px;">
                        Part-time Job Fair
                     </h3>
                  </a>
                  <p style="margin-top: -5px; text-align: center; font-weight: 700;">
                     <u> Location:</u> <br />
                     Taylor Center 221-223
                  </p>
               </div>

               <div class="event-1">
                  <div class="news-2">
                     <h2>
                        2 <sup>nd</sup> <br />
                        September <br />
                        2020
                     </h2>
                  </div>
                  <a href="http://www.aum.edu/events">
                     <h3 style="text-align: center; margin-top: 4px;">
                        Part-time Job Fair
                     </h3>
                  </a>
                  <p style="margin-top: -5px; text-align: center; font-weight: 700;">
                     <u> Location:</u> <br />
                     Taylor Center 221-223
                  </p>
               </div>

               <div class="event-3">
                  <h3>
                     Check Out <br />
                     Upcoming Campus Events <br />
                     <a href="http://www.aum.edu/events" style="color: white;" target="_blank">
                        <u> here.</u>
                     </a>
                  </h3>
               </div>

               <div class="event-4">
                  <div class="news-4">
                     <img src="images/news1.jpg" alt="" />
                  </div>
                  <h4 style="text-align: center;">
                     AUM accounting student earns $10,000 PCOAB scholarship
                  </h4>
                  <br />
                  <br />
                  <h3 style="margin-top: -30px; text-align: center;">
                     <a href="http://www.aum.edu/pressroom/news-releases" style="color: black;">
                        <u> Read More</u>
                     </a>
                  </h3>
               </div>

               <div class="event-4">
                  <div class="news-4">
                     <img src="images/news2.jpg" alt="" />
                  </div>
                  <h4 style="text-align: center;">
                     AUM rises in U.S. News & World Report rankings
                  </h4>
                  <br />
                  <br />
                  <h3 style="margin-top: -30px; text-align: center;">
                     <a href="http://www.aum.edu/pressroom/news-releases" style="color: black;">
                        <u> Read More</u>
                     </a>
                  </h3>
               </div>

               <div class="event-3">
                  <h3>
                     Check Out <br />More AUM News <br />
                     <a href="http://www.aum.edu/pressroom/news-releases" style="color: white;" target="_blank">
                        <u> here.</u>
                     </a>
                  </h3>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--------------------------some_text------------------------------------------>

   <div class="some_text">
      <p>
         The College of Sciences offers students a scientific education to meet
         the needs of the 21st century,<br />
         allowing them to compete for a variety of careers in an increasingly
         complex and evolving world.
      </p>
      <br />
   </div>

<!----------------------------footer-------------------------->
   
<?php

include "view/footer.php";
?>




</body>

</html>