<!DOCTYPE html>
<html>
<head>
	<title>Learning Management Systems</title>
	<link rel="stylesheet" type="text/css" href="finalStyle.css">
  <link src="finalJava.js" type="text/javascript" >
  <link rel="stylesheet" type="text/css" href="sos.css">
   <script type="text/javascript" src="time.js"></script>
  <script type="text/javascript" src="calendar.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="startTime()">
    <div id="container">
        <div id="header">
        	<div id="image">
    			<img id="img" src="1111.jpg" name="pic">
    		<div id="image2">
    			<img id="img2" src="222.png" name="pic2">
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
        <div id="content">  
        <div id="leNavB">        <!-- left navigation bar-->
        	 <button class="tablinks" onclick="window.location.href='Faculties.html'">Faculties</button>
             <button class="tablinks" onclick="window.location.href='StudentHandbook.html'" >Student Handbook</button>
             <button class="tablinks" onclick="window.location.href='ExamTimeTable.html'">Examination Time Tables</button>
             <button class="tablinks" onclick="window.location.href='ClassTimeTable.html'">Class Time Tables</button>
             <button class="tablinks" onclick="window.location.href='Regulations.html'">Regulations</button>
             <button class="tablinks" onclick="window.location.href='EventCal.html'">Event Calender</button>
              <button class="tablinks" onclick="window.location.href='Submission.html'">Assignment Submission</button>
        </div>
        <div id="middle">
        <br><br><br>
                  	<?php
					echo "<h1><center>Assignment submitted successfully!</center></h1> <br>";
				    $fname=$_FILES["file1"]["name"];
					$type=$_FILES["file1"]["type"];
					$size=$_FILES["file1"]["size"];
					echo "<h2>File name: $fname </h2><br>"; 
					echo "<h2>File type: $type </h2><br>";
					echo "<h2>File size: $size bytes</h2><br>";
?>
        </div>


  <div id="riNavB" >
  
  <div id="txt1"></div><!--Clock-->
    <div id="cal">
    <script>writeCalendar()</script><!--Clendar-->
  
</div>
</div>
<div id="footer"><br>Copyright @ university of cambridge No:-The Old Schools, Trinity Ln, Cambridge CB2 1TN, UK <br>Telephone:+44 (0)1223 333308 &nbsp; Fax:+44 (0)1223 746868  &nbsp; Email:admissions@cam.ac.uk
<br>
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
