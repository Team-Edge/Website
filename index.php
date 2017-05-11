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

<script>
$(function() {
$('#slides').slidesjs({
height: 235,
navigation: false,
pagination: false,
effect: {
fade: {
speed: 400}},callback:
{
start: function(number)
{
$("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);},
complete: function(number)
{
$("#slider_content" + number).delay(100).fadeIn(1000);}},
play:
{
active: false,
auto: true,
interval: 6000,
pauseOnHover: false,
effect: "fade"}});});

</script>
</head>

<body>
<header>
<h1><img src='e+l.png' width='500' height='80' alt='Team Edge'></h1>
<p>News Feed</p>
<div class="toggleMobile">
<span class="menu1"></span>
<span class="menu2"></span>
<span class="menu3"></span></div>
<div id="mobileMenu">
<ul>

<a href="."><li>Home</li></a>

<?php
session_start();
if(isset($_SESSION['login'])){
echo "<a href='index.php?click=account'><li>Account</li></a>";
echo "<a href='index.php?click=logout'><li>Logout</li></a>";
}else{
echo "<a href='index.php?click=login'><li>Login</li></a>";
echo "<a href='index.php?click=register'><li>Registrieren</li></a>";
}
?>


</ul></div>
<nav>
<ul>
<a href="."><li>Home</li></a>
<?php

if(isset($_SESSION['login'])){
echo "<a href='index.php?click=account'><li>Account</li></a>";
echo "<a href='index.php?click=logout'><li>Logout</li></a>";
}else{
echo "<a href='index.php?click=login'><li>Login</li></a>";
echo "<a href='index.php?click=register'><li>Registrieren</li></a>";
}
?>
</ul></nav></header>

<?php

if(isset($_SESSION['login']) || isset($_GET['click'])){}
else{
	echo'
<section class="container">
<h2 class="hidden">Slider</h2>
<article id="slider_content1">
<h3>Wilkommen!</h3>
<p>Alle für Sie interessanten Nachrichten!</p>
<a class="button" href="index.php?click=register">Jetzt Registrieren!</a></article>
<article id="slider_content2">
<h3>Persönlich!</h3>
<p>Erstellen Sie ihre persönlichen Newsprofile!</p>
<a class="button" href="index.php?click=register">Jetzt Registrieren</a></article>
<article id="slider_content3">
<h3>Überall!</h3>
<p>Egal ob auf unserer Seite oder per Mail: Sie sind immer auf dem neusten Stand!</p>
<a class="button" href="index.php?click=register">Jetzt Registrieren</a></article>
<div id="slides" style="display:block;">
<img src="news.jpg" alt="Picture 1">
<img src="news2.jpg" alt="Picture 2">
<img src="news3.jpg" alt="Picture 3"></div></section>';
}?>

<div class="content">
  <?php     
  
  if(isset($_GET['click'])){
    
   switch($_GET['click']){
     case 'login': include('login.html');break;  
	 case 'register': include('register.html');break; 
	case 'logout': include('logout.html');break; 
	case 'profiles': include('profiles.html');break;
	case 'articles': include('articles.html');break;
	
	case 'settings2':include('settings2.html');break;
    case 'account':include('account.html');break;
	case 'contact':include('contact.html');break;
	 case 'impressum':include('impressum.html');break;
	 case 'ch_pwd':include('ch_pwd.html');break;
	  case 'delete':include('delete.html');break;
	   case 'newpw': include('newpw.html');break;
	   case 'archiv': include('archiv.html');break;
     default: include('inhalt.html');
   }  
   
  
  }      
  else{
  include('inhalt.html');    
    
  }
  
  
  
  
  ?>

</div>
<footer>
<h2 class="hidden">Our footer</h2>
<section id="copyright">
<h3 class="hidden">Copyright notice</h3>
<div class="wrapper">

&copy; Copyright 2017 by Team Edge. All Rights Reserved.</div></section>
<section class="wrapper">
<h3 class="hidden">Footer content</h3>
<article class="column">
<h4>Entwickler</h4>
Tessa Haschtschek<br>Severin Neuner<br>Kevin Mangold<br>Florian Schmidt<br>Nicholas Dickel
</article>
<article class="column midlist">
<h4>Informationen</h4>
<a class='uoh' href='index.php?click=contact'>Zum Kontaktformular</a><br><a class='uoh' href='index.php?click=impressum'>Zum Impressum</a>
</article>
<article class="column rightlist">
<h4>Haftung</h4>
Diese Website basiert auf einem Projekt mit dem Ziel der Weiterbildung. Aus diesem Grund übernehmen wir keine Haftung für den Gebrauch der Seite.
</article></section></footer>


</body>
</html>