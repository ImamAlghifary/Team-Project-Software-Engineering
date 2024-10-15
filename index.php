<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  <?php include "style1.css" ?>
</style>
</head>
<body>
	<header>
		<h1>Hospital Management System</h1>
	</header>
	<nav>
		<ul>
			<li><a href="/Hospital_Management/patientadd.php">Add Patient</a></li>
			<li><a href="/Hospital_Management/doctoradd.php">Add Doctor</a></li>
			<li><a href="/Hospital_Management/prescriptionadd.php">Add Prescription</a></li>
			<li><a href="/Hospital_Management/medicalrecordadd.php">Add Medical Record</a></li>
			<li><a href="/Hospital_Management/appointmentmake.php">Make Appointment</a></li>
			
		</ul>
	</nav>
	<main>
		<h2>Welcome to the Hospital Management System</h2>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">
        <img src="h1.jpg" alt="hospital" style="width:100%;">
      </div>

      <div class="item">
        <img src="h2.jpeg" alt="doctor" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="h3.avif" alt="bed" style="width:100%;">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </main>
	<footer>
		<p>Copyright © 2023 Hospital Management System</p>
	</footer>
</body>
</html> 