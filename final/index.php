<?php

include_once 'Users.php';
$user = new Users();

if(!isset($_SESSION['session-user'])){
    header('location: Login.php');
}

    $user = $_SESSION['session-user'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learning Management Systems</title>
	<link rel="stylesheet" type="text/css" href="finalStyle.css">
  <link rel="stylesheet" type="text/css" href="SlideShow.css">
  <link rel="stylesheet" type="text/css" href="sos.css">
  <script type="text/javascript" src="time.js"></script>
  <script type="text/javascript" src="calendar.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  onload="startTime()">
    <div id="container">
        <div id="header">
        	<div id="image">
    			<img id="img" src="1111.jpg" name="pic">
    		<div id="image2">
    			<img id="img2" src="222.png" name="pic2">
          <h5 align="left" ><a href="destroy.php" style="color: #002e4d;" align="right">Sign Out&nbsp;&nbsp;<?php echo $user->getName(); ?></a></h5>
    		</div>
        </div>
       </div>
        <div id="upNavB">        <!-- upper navigation bar--> 
    	    <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="news.html">News</a></li>
              <li><a href="sport.html">Sports</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="about.html">About</a></li>
            </ul>
        </div>  
        <div id="content" >  
        <div id="leNavB">        <!-- left navigation bar-->
        	   <button class="tablinks" onclick="window.location.href='Faculties.html'">Faculties</button>
             <button class="tablinks" onclick="window.location.href='StudentHandbook.html'" >Student Handbook</button>
             <button class="tablinks" onclick="window.location.href='ExamTimeTable.html'">Examination Time Tables</button>
             <button class="tablinks" onclick="window.location.href='ClassTimeTable.html'">Class Time Tables</button>
             <button class="tablinks" onclick="window.location.href='Regulations.html'">Regulations</button>
             <button class="tablinks" onclick="window.location.href='EventCal.html'">Event Calender</button>
              <button class="tablinks" onclick="window.location.href='submit.html'">Assignment Submission</button>
        </div>

        <div id="middle"> 
<!--Slideshow-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="c1.jpg" style="width:100%">
  <div class="text">University of Cambridge</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="c2.jpg" style="width:100%">
  <div class="text">University of Cambridge Press</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="c3.jpg" style="width:100%">
  <div class="text">Library</div>
</div>

</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script type="text/javascript"> //slideshow
  
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000);
}

</script>
   </div>
 <div id="riNavB" >
    <div id="txt1"></div><!--Clock-->
    <div id="cal">
    <script>writeCalendar()</script><!--Clendar-->
</div>
</div>
</div>
<div id="footer"><br>Copyright @ university of cambridge No:-The Old Schools, Trinity Ln, Cambridge CB2 1TN, UK <br>Telephone:+44 (0)1223 333308 &nbsp; Fax:+44 (0)1223 746868  &nbsp; Email:admissions@cam.ac.uk<br>
<center>
<a href="https://www.facebook.com/cambridge.university" class="fa fa-facebook"></a>
<a href="https://www.twitter.com/cambridge_uni" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/cambridgeuniversity" class="fa fa-youtube"></a>
<a href="https://www.cam.ac.uk/linkedin" class="fa fa-linkedin"></a>
</center>
</div>

</div>
</body>
</html>