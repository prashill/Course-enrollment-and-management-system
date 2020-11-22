<?php
// session_start();
// if(!isset($_SESSION["stud_id"])){
//    header("location: http://localhost/classproject/student/main/index.php");
// }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" />

    <title>CEMS Signup and Signin</title>
  </head>

  <body>

    <div class="container">

      <div class="forms-container">

        <div class="signin-signup">
          <!-- sign in form -->
          <form action="signin.php" method="POST" class="sign-in-form">
            <h1> <i class="fas fa-user-graduate"></i> Student</h1> <br>
            <br>
            <h2 class="title">Sign in</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="studentid" placeholder="Student ID" required />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="studentpassword" placeholder="Password" required />
            </div>

            <input type="submit" value="Login" name="login" class="btn solid" />
          </form>
          
          <!-- sign up form -->
          <form action="signup.php" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="st_name" placeholder="Name"  required/>
            </div>

           
             <select class="input-field" name="st_gender" required>     
                <option class="input-field" value="Gender" > Select Gender</option>
                <option class="input-field" value="male">Male</option>
                <option class="input-field" value="female">Female</option>
              </select>
          

            <div class="input-field" required>
              <i class="fas fa-id-badge"></i>
              <input type="text" name="st_id" placeholder="Student ID" />
            </div>

            <div class="input-field" required>
              <i class="fas fa-envelope"></i>
              <input type="email" name="st_email" placeholder="Email" />
            </div>

            <div class="input-field" required>
              <i class="fas fa-lock"></i>
              <input type="password" name="st_password" placeholder="Password" />
            </div>

            <div class="input-field" required>
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_password" placeholder="Confirm Password" />
            </div>

            <input type="submit" class="btn" value="Sign up" />

        </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Sign up and discover great amount <br> of new opportunities!
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <!-- <img src="img/log.svg" class="image" alt="" /> -->
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
           <p> If you already has an account, just sign in. <br> We've missed you!</p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <!-- <img src="img/register.svg" class="image" alt="" /> -->
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
