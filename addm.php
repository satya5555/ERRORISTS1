<HTML>
<HEAD>
  <TITLE>HOME - ERRORISTS</TITLE>
</HEAD>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<BODY>

<!-- FIXED MENU BAR ON TOP-->

<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 500;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 48px;
  text-decoration: none;
  font-family: Arial;
  font-size: 17px;
  z-index: 500;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

</style>
</head>
<body>

<div class="navbar" style="position:fixed;">
  <a href="index.html">HOME</a>
  <a href="aboutus.html">ABOUT US</a>
  <a href="ourproject.html">OUR PROJECT</a>
  <a href="companylogin.html">COMPANY LOGIN</a>
  

</div>


<!-- TEAM NAME and PROBLEM-->


<H1 style="position:fixed; top:90px; left:600px; font-family:Arial; font-style: bold;">ERRORISTS</H1>
<p style="position:fixed; top:140px; left:350px; font-family:Arial; font-size:20px; text-align:center;">Prediction of Admission and Jobs in Engineering, Management and Pharmacy<br>with respect to Demographic Location</p>


<!-- DROPDOWN MENU -->

<?php

session_start();

$loc = $_SESSION['location'];
$fos = $_SESSION['fos'];
$streams = $_SESSION['streams'];

echo "<p style='position:fixed; font-family:Arial; margin-left: 200px; margin-top: 390px'>$loc</p>";
echo "<p style='position:fixed; font-family:Arial; margin-left: 200px; margin-top: 460px'>$fos</p>";
echo "<H3 style='position:fixed; font-family:Arial; margin-left: 450px; margin-top: 280px'>Proposed Variation of seats in $fos at $loc</H3>";

$location1 = 'Data/'.$loc.'/'.$fos.'/'.'Addm'.'/1.jpg';
$location2 = 'Data/'.$loc.'/'.$fos.'/'.'Addm'.'/2.jpg';
$location3 = 'Data/'.$loc.'/'.$fos.'/'.'Addm'.'/3.jpg';
$location4 = 'Data/'.$loc.'/'.$fos.'/'.'Addm'.'/4.jpg';

echo "<img src=$location1 style='margin-top: 320px; margin-left: 550px;width:320px; height:245px;'>";
echo "<img src=$location2 style='margin-top: -245px; margin-left: 900px;width:320px; height:245px;'>";
echo "<img src=$location3 style='margin-top: 100px; margin-left: 550px;width:320px; height:245px;'>";
echo "<img src=$location4 style='margin-top: -245px; margin-left: 900px;width:320px; height:245px;'>";

?>


<H3 style="position:fixed; font-family:Arial; margin-left: 200px; margin-top: -550px">Location</H3>
<H3 style="position:fixed; font-family:Arial; margin-left: 200px; margin-top: -480px">Field of Study</H3>


</BODY>
</HTML>