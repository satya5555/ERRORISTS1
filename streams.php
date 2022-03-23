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
$_SESSION['streams'] = $_POST['streams'];
$streams = $_SESSION['streams'];

echo "<p style='position:fixed; font-family:Arial; margin-left: 200px; margin-top: 390px'>$loc</p>";
echo "<p style='position:fixed; font-family:Arial; margin-left: 200px; margin-top: 460px'>$fos</p>";
echo "<p style='position:fixed; font-family:Arial; margin-left: 200px; margin-top: 530px'>$streams</p>";

$location1 = 'Data/'.$loc.'/'.$fos.'/'.$streams.'/1.jpg';
$location2 = 'Data/'.$loc.'/'.$fos.'/'.$streams.'/2.jpg';
$location3 = 'Data/'.$loc.'/'.$fos.'/'.$streams.'/3.jpg';
$location4 = 'Data/'.$loc.'/'.$fos.'/'.$streams.'/4.jpg';

echo "<img src=$location1 style='margin-top: 320px; margin-left: 550px;width:320px; height:245px;'>";
echo "<img src=$location2 style='margin-top: -245px; margin-left: 900px;width:320px; height:245px;'>";
echo "<img src=$location3 style='margin-top: 100px; margin-left: 550px;width:320px; height:245px;'>";
echo "<img src=$location4 style='margin-top: -245px; margin-left: 900px;width:320px; height:245px;'>";

?>


<H3 style="position:fixed; font-family:Arial; margin-left: 200px; margin-top: -550px">Location</H3>
<H3 style="position:fixed; font-family:Arial; margin-left: 200px; margin-top: -480px">Field of Study</H3>
<H3 style="position:fixed; font-family:Arial; margin-left: 200px; margin-top: -410px">Stream</H3>

<form action='addm.php' method='POST' style='margin-top: -340px; margin-left: 150px; position: fixed;'>
<input type='submit' value="Predict Admission" style='background-color: #434343;
    position: fixed;
    border: none;
    color: white;
    padding: 13px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    font-family: Arial;'>
  </form>



</BODY>
</HTML>