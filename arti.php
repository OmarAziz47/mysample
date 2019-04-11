<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);
?>


<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

 
<!-- Content -->
<div >
<div >

<div >
<!-- Links (sit on top) -->
<div style="padding:0px 900px"style="width:auto;bottom:20px;top:20x;">
  <div>
    <div style="width:auto;right:80;">
      <a href="index.php">Home</a>
    </div>
  </div>
</div>

  <div >
    <h1><?php echo $data['article_title'];?></h1>
    <p><?php echo $data['auther'];?></p>
  </div>
</div>





  <!-- Slideshow -->
    
      <img src="pics/food.jpg" style="width:100%">
     
    <div >
  <!-- Grid -->
  <div>
 
      <span >What We Offer</span>
    </div>

    <!-- here we will write the php code that will select from database-->
    <div style="color:black">
      <h5><?php echo $data['article_content']; ?></h5>
    </div>
  

</div>

 <!-- Footer -->
  <footer style="margin:0%" >
   
  </footer>
  
</div>


</div>
</body>
</html>



<?php
}else{
    header('Location: article.php');
    exit();
}
?>
