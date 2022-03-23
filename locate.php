<HTML>
<HEAD>
  <TITLE>HOMEV- ERRORISTS</TITLE>
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


$loc = $_POST['location'];
$_SESSION['location'] = $_POST['location'];
echo "<p style='position:absolute; font-family:Arial; margin-left: 50px; margin-top: 380px'>$loc</p>";
$engineering = 'Data/'.$loc.'/engineering.jpg';
$management = 'Data/'.$loc.'/management.jpg';
$pharmacy = 'Data/'.$loc.'/pharmacy.jpg';

echo "<img src=$engineering height=300 width=350 style='margin-top: 350px; margin-left: 280px'>";
echo "<img src=$management height=300 width=350 style='margin-top: 350px; margin-left: 30px'>";
echo "<img src=$pharmacy height=300 width=350 style='margin-top: 350px; margin-left: 30px'>";


?>

<H4 style="position:absolute; font-family:Arial; margin-left: 50px; margin-top: -300px">Location</H4>
<H4 style="position:absolute; font-family:Arial; margin-left: 50px; margin-top: -230px">Field of Study</H4>

<form action="fos.php" method='POST' style="margin-top: -220px; margin-left: 50px;">
  <select name="fos" style="background-color: #ffffff;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;">
    <option value='select'>Select</option>
    <option value="Engineering">Engineering</option>
    <option value="Management">Management</option>
    <option value="Pharmacy">Pharmacy</option>
   </select>
  <br><br>

  <input type="Submit" style="background-color: #434343;
    border: none;
    color: white;
    padding: 13px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    font-family: Arial;">
</form>


</BODY>
</HTML>