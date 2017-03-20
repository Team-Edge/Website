<html>

<head>
<!DOCTYPE HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="../styles/eric-meyer-reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script src="../scripts/jquery-3.1.1.min.js"></script>
<script src="../scripts/prefixfree.js"></script>
<script src="../scripts/Slides-SlidesJS-3/source/jquery.slides.min.js"></script>

<title>Team Edge News Feed</title>

<script>
(function ($, window, document, undefined)
{
'use strict';$(function ()
{
$("#mobileMenu").hide();
$(".toggleMobile").click(function()
{
$(this).toggleClass("active");
$("#mobileMenu").slideToggle(500);});});
$(window).on("resize", function()
{
if($(this).width() > 500)
{
$("#mobileMenu").hide();
$(".toggleMobile").removeClass("active");
}});})(jQuery, window, document);
</script>
</head>

<body>
<header>
<h1>Team Edge</h1>
<p>News Feed</p>
<div class="toggleMobile">
<span class="menu1"></span>
<span class="menu2"></span>
<span class="menu3"></span></div>
<div id="mobileMenu">
<ul>

<li><a href=".">Home</a></li>

<?php
session_start();
if(isset($_SESSION['login'])){
echo "<li><a href='index.php?click=logout'>Logout</a></li>";
}else{
echo "<li><a href='index.php?click=login'>Login</a></li>";
}
?>


<li><a href="index.php?click=drei">Drei</a></li></ul></div>
<nav>
<ul>
<li><a href=".">Home</a></li>
<?php
session_start();
if(isset($_SESSION['login'])){
echo "<li><a href='index.php?click=logout'>Logout</a></li>";
}else{
echo "<li><a href='index.php?click=login'>Login</a></li>";
}
?>
<li><a href="index.php?click=drei">Drei</a></li></ul></nav></header>
<hr>
<div class="content">
  <?php     
  
  if(isset($_GET['click'])){
    
   switch($_GET['click']){
     case 'login': include('login.html');break;  
	 case 'register': include('register.html');break; 
	case 'logout': include('logout.html');break; 
	case 'profiles': include('profiles.html');break;
	case 'articles': include('articles.html');break;
    
     default: include('inhalt.html');
   }  
   
  
  }      
  else{
  include('inhalt.html');    
    
  }
  
  
  
  
  ?>

</div>


</body>
</html>