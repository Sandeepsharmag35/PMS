<?php
session_start();
if(!isset($_SESSION["valid"]))
{
    header("location:login.php");
    
}

if(isset($_GET["btnLogout"]))
{
    
    session_unset();
    header("location:login.php");
}
?>
<html>
<head>
<title>Navbar</title>
<link rel="stylesheet" type="text/css" href="css/navbar.css">

</head>
<body>
<form action="admindashboard.php" method="get">
<div class="container">
      <div class="ournav">
        <h3>&nbsp;Property Management System</h3>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="admindashboard.php"> Dashboard</a>
                </li>
                <li>
                    <a href="dbinsert.php"> Insert</a>
                </li>
                <li>
                    <a href="dbupdate.php"> Update</a>
                </li>
                <li>
                    <a href="dbdelete.php"> Delete</a>
                </li>
                <li>
                 <a href="login.php" name="btnLogout">Logout</a>
                </li>
            </ul>
 </nav>
</div>