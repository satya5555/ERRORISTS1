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
  <a href="#companylogin">COMPANY LOGIN</a>

</div>

<!-- TEAM NAME and PROBLEM-->


<H2 style="position:fixed; top:90px; left:600px; font-family:Arial; font-style: bold;">ERRORISTS</H2>
<p style="position:fixed; top:140px; left:350px; font-family:Arial; font-size:22px; text-align:center;">Prediction of Admission and Jobs in Engineering, Management and Pharmacy<br>with respect to Demographic Location</p>


<!-- DROPDOWN MENU -->

<H3 style="position:absolute; font-family:Arial; margin-left: 200px; margin-top: -320px">Stream</H3>

<?php

session_start();

$loc = $_SESSION['location'];
$fos = $_SESSION['fos'];

echo "<p style='position:fixed; font-family:Arial; margin-left: 200px; margin-top: 390px'>$loc</p>";
echo "<p style='position:fixed; font-family:Arial; margin-left: 200px; margin-top: 460px'>$fos</p>";

if($fos == 'Management'){
  echo "<form action='result.php' method='POST' style='margin-top: -300px; margin-left: 200px; position: fixed;'>
  <select name='streams' style='background-color: #ffffff;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;'>
    <option value='Finance'>Finance</option>
    <option value='Marketing'>Marketing</option>
    <option value='HR'>HR</option>
    <option value='IT'>IT</option>


   </select>
  <br><br>

  <input type='Submit' style='background-color: #434343;
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
</form>";
}

else if($fos == 'Engineering'){
  echo "<form action='result.php' method='POST' style='margin-top: -300px; margin-left: 200px; position: fixed;'>
  <select name='streams' style='background-color: #ffffff;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;'>
    <option value='CSE+IT'>CSE+IT</option>
    <option value='MECH+CIVIL'>MECH+CIVIL</option>
    <option value='ARCHITECTURE'>ARCHITECTURE</option>
    <option value='EEE'>EEE</option>


   </select>
  <br><br>

  <input type='Submit' style='background-color: #434343;
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
</form>";

}

else if($fos == 'Pharmacy'){
  echo "<form action='result.php' method='POST' style='margin-top: -300px; margin-left: 200px; position: fixed;'>
  <select name='streams' style='background-color: #ffffff;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;'>
    <option value='CSE/IT'>CSE/IT</option>
    <option value='MECH/CIVIL'>MECH/CIVIL</option>
    <option value='ARCHITECTURE'>ARCHITECTURE</option>
    <option value='EEE'>EEE</option>


   </select>
  <br><br>

  <input type='Submit' style='background-color: #434343;
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
</form>";
}

?>
</BODY>
</HTML>