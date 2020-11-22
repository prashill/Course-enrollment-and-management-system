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
  
   <link rel="stylesheet" href="ninfo.css">
   <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
   <style>
      .wrapper{
    width:1200px;
    margin:100px auto;
   
  }
  .blog{
      
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between
  }
  .single-blog{
      margin: auto;
    flex-basis:390px;
    border:1px solid #eee;
  }
  .blog-img{
    position:relative;
    overflow:hidden;
  }
  .blog-img img{
    width:100%;
    transition:.3s;
  }
  .single-blog:hover .blog-img img{
    transform:scale(1.1)
  }
  .blog-img a{
    position:absolute;
    left:0;
    top:0;
    color:#fff;
    text-decoration:none;
    text-transform:capitalize;
    font-size:18px;
    background-color:#ff7720;
    padding:10px 30px;
  }
  .blog-info{
    width:80%;
    margin:0 auto;
    border:1px solid #ccc;
    position:relative;
    z-index:2;
    margin-top:-30px;
    padding:10px 5px;
    background-color:#fff;
    text-align:center;
  }
  .blog-info a{
    color:#333;
    text-decoration:none;
    margin:0 10px;
    display:inline-block
  }
  .blog-content{
    padding:20px;
  }
  .blog-content h4{
    font-size:22px;
    font-weight:600;
    text-transform:capitalize;
    border-bottom:1px dashed #eee;
    margin-bottom:10px;
    padding-bottom:5px;
  }
  .blog-content a{
    background-color:#ff7720;
    color:#fff;
    text-decoration:none;
    padding:10px 20px;
    font-size:16px;
    text-transform:capitalize;
    display:inline-block;
    margin-top:20px;
    position:relative;
    z-index:2;
    overflow:hidden;
  }
  .blog-content a:before{
    position:absolute;
    width:100%;
    height:100%;
    left:-100%;
    top:0;
    background-color:#333;
    content:"";
    transition:.3s;
    z-index:-1;
  }
  .blog-content a:hover:before{
    left:0;
  }
  
   </style>

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
            <li><a href="Personalinfo.php" >Personalinfo</a></li>
            <li><a href="News.php" class="active">News </a></li>
        
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

   
      <?php
    
    $url = 'http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=8ce87001b4b848f9ad97787b6faf1b13';
    $response = file_get_contents($url);
    $NewData=json_decode($response);
    ?>

        <?php 
            foreach($NewData->articles as $News)
        {
        ?>

    <div class="wrapper">
        <div class="blog">
          <div class="single-blog">

            <div class="blog-img">
              <img src="<?php echo $News->urlToImage ?>" alt="">
         
            </div>

            <div class="blog-info">
           
            Author: <?php echo $News->author ?>
            </div>

            <div class="blog-content">
              <h4><?php echo $News->title ?></h4>
              <p><?php echo $News->description ?></p>
              <p>content: <?php echo $News->content ?> </p><br>
              <h5>Published  <?php echo $News->publishedAt ?> </h5>
              <a href="<?php echo $News->url ?>">read more </a>
             
            </div>
            
          </div>

        
          
          </div>
        </div>
      </div>
    
        <?php 
        }
        
        ?>
      
     
      <!----------------------------footer-------------------------->
   
<?php

include "view/footer.php";
?>


</body>

</html>