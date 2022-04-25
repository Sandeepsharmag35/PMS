<?php
include "navbar.php";
if(isset($_GET['btninsert'])){
	header("location:dbinsert.php");
}
if(isset($_GET['btnupdate'])){
	header("location:dbupdate.php");
}
if(isset($_GET['btndelete'])){
	header("location:dbdelete.php");
}
if(isset($_GET['btnshowall'])){
	header("location:dbshowall.php");
}


?>

<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
<form action="admindashboard.php" method="get">
<center>
	<h1><b>Click the buttons to visit the pages according to their index.</b></h1>
	<button type="submit" name="btninsert">INSERT</button>
	<button type="submit" name="btnupdate">UPDATE</button>
	<button type="submit" name="btndelete">DELETE</button><br><br>
	<button type="submit" name="btnshowall">SHOW ALL RECORDS</button>






</center>
</form>
</body>
</html>