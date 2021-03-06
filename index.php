<?php

include_once('includes/connection.php');
include_once('includes/article.php');
$article = new Article;
$articles = $article->fetch_all();

print_r($articles);
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('perfect.png');
  min-height: 100%;
}
</style>
<body>
<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:55%">
  <div class="bgimg"></div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:55%">

  <!-- Links (sit on top) -->
<div class="w1-top"  style="width:auto;left:529px;top:38px;">
  <div class="w1-row w2-padding w1-white"  >
    <div class="w3-col s3"  style="width:auto;right:0;">
      <a id="barr" href="browse.php" class="w3-button w5-block w1-white"  >Top Rated</a>
    </div>
    <div class="w3-col s3"  style="width:auto;right:0;">
      <a href="#quates" class="w3-button w1-block w1-white" color="blue" >Food Quates</a>
    </div>
  </div>
</div>

   <div  style="padding:158px 86px">
    <h1 style="font-size:44px;width:70%">You Can Trust Our Taste.</h1>
    
    
    
    <form action="index.php" method="get" >
    <p><input  style="width:60%" class="w3-input w3-padding-16 w3-border" type="text" placeholder="Eg. Fridays" name="search"></p>
    <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> Search
        </button>
      </p>
      </form>
      <form action="index.php" method="get" class="w3-padding-24">
      Location:
      <div class="w3-section  w3-padding-16">
      <?php echo time();?>
      <button class="w3-button w3-light-grey">Riyadh</button>
      <button class="w3-button w3-white"></i>Jeddah</button>
      <button class="w3-button w3-light-grey w3-hide-small">Dammam</button>
      <button class="w3-button w3-white w3-hide-small">Buraydah</button>
    </div>
      </form>
      
   </div>
   
  <!-- End Contact Section -->
  </div>  

  
  <!-- Footer -->
  <footer style="margin-left:55%" class="w3-container w3-padding-8 w3-light-grey w3-center w3-opacity " style="margin:-34px">
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">Omar Alkabeer</a></p>
  <!-- End footer -->
  </footer>
  
<!-- END PAGE CONTENT -->
</div>

</body>
</html>
