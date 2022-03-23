<HTML>
<HEAD>
	<TITLE>HOME - ERRORISTS </TITLE>
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

<H3 style="position:fixed; font-family:Arial; margin-left: 200px; margin-top: -400px">Location</H3>
<H3 style="position:absolute; font-family:Arial; margin-left: 200px; margin-top: -280px">Field of Study</H3>

<?php

session_start();

$loc = $_POST['location'];
$fos = $_POST['fos'];

echo "<p style='position:absolute; font-size: 15pt; font-family:Arial; margin-left: 200px; margin-top: -350px'>$loc</p>";
echo "<p style='position:absolute; font-size: 15pt; font-family:Arial; margin-left: 200px; margin-top: -240px'>$fos</p>";

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sih18_companylogin";
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT * FROM data WHERE field='$fos' AND state='$loc'";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table style='position: absolute; margin-left: 500px; margin-top: -450px; border-spacing: 20px;'>";
            echo "<tr>";
                echo "<th>Job Title</th>";
                echo "<th>Location</th>";
                echo "<th>Salary</th>";
                echo "<th>Company</th>";
                echo "<th>Field</th>";
                echo "<th>State</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['jobtitle'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
                echo "<td>" . $row['company'] . "</td>";
                echo "<td>" . $row['field'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "<p style='position: absolute; margin-left: 600px; margin-top: -400px;'>No records matching your query were found.</p>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

</BODY>
</HTML>