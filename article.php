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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

 
<!-- Content -->
<div class="w3-light-grey">
<div class=" w3-padding-32"></div>
<div class="w3-content">

<div class="w3-white w3-rightbar w3-leftbar ">
<!-- Links (sit on top) -->
<div class="w1-top" style="padding:0px 900px"style="width:auto;bottom:20px;top:20x;">
  <div class="w1-row w2-padding w1-white"  >
    <div class="w3-col s3"  style="width:auto;right:80;">
      <a id="barr" href="index.php" class="w3-button w5-block w1-white"  >Home</a>
    </div>
  </div>
</div>
<div  class="w3-padding-16"></div>

  <div class="w3-padding-32 w3-panel w3-white w3-small w3-center ">
    <h1><b><?php echo $data['article_title'];?></b></h1>
    <p><?php echo $data['auther'];?></p>
  </div>
</div>

<div class=" w3-padding-16"></div>




  <!-- Slideshow -->
    
      <img src="pics/food.jpg" style="width:100%">
     
    <div class=" w3-white">
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>

    <!-- here we will write the php code that will select from database-->
    <div style="color:black"class="w3-small w3-center w3-bottombar w3-border-dark-grey w3-padding-16">
      <h5><?php echo $data['article_content']; ?></h5>
    </div>
  

</div>
<div  class="w3-padding-64"></div>
 <!-- Footer -->
  <footer style="margin:0%" class="w3-container w3-padding-32 w3-white w3-center w3-opacity ">
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">Omar Alkabeer</a></p>
  <!-- End footer -->
  </footer>
  
</div>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</div>
</body>
</html>



<?php
}else{
    header('Location: article.php');
    exit();
}
?>
