<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sih18_companylogin";
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    $jobtitle = $_POST['jobtitle'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $company = $_POST['company'];
    $field = $_POST['field'];
    $state = $_POST['state'];

    $query = "INSERT INTO data VALUES ('$jobtitle', '$location', '$salary', '$company', '$field', '$state')";
    $connection->query($query);
?>

<HTML>
<HEAD>
	<TITLE>HOME-ERRORISTS</TITLE>
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


<H2 style="position:fixed; top:90px; left:600px; font-family:Arial; font-style: bold;">ERRORISTS</H2>
<p style="position:fixed; top:140px; left:350px; font-family:Arial; font-size:22px; text-align:center;">Prediction of Admission and Jobs in Engineering, Management and Pharmacy<br>with respect to Demographic Location</p>


<!-- DROPDOWN MENU -->

<H3 style='margin-left: 200px; margin-top: 450px;'>Data entered Successfully!</H3>

<form action="index.html" method='POST'>

  <input type="Submit" style="background-color: #434343;
    border: none;
    color: white;
    padding: 13px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    font-family: Arial;
    margin-top: 100px;
    margin-left: 200px;">
</form>


</BODY>
</HTML>