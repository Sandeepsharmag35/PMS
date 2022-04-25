<?php
session_start();
if(isset($_GET["btnLogin"]))
{
	
	if($_GET["txtUsername"]=="admin" && $_GET["txtPassword"]=="admin")
	{
		$_SESSION["valid"]=true;
		header("location:admindashboard.php");
	}
	else
	{
		echo "<b>"."PLEASE INSERT THE VALID USERNAME AND PASSWORD AND TRY AGAIN"."</b>";
	}
}
?>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>   
   
<form action="login.php" method="get">
<div class="content">
       <div class=" logindiv">
           <div class="login-form">
               <h1><center>LOGIN</center></h1>
            <div class="form-input">
                   <label><b>Username:</b></label><br>
                   <input type="text" name="txtUsername" placeholder="Enter Username">
            </div>
            <div class="form-input">
                <label><b>Password:</b></label><br>
                <input type="Password" name="txtPassword" placeholder="Enter Password">
            </div>
            <div class="form-input">
            <center><button type="submit" name="btnLogin">Login</button></center>
</div>
</div>
</div>
</div>
</form>
</body>
</html>




<!-- <html>
<head>
<title>Login Page</title>

</head>
<body>
<form action="login.php" method="get">
<h1>Login </h1>
<div class="form-input">
                <label class="form-label" for="username">Username:</label>
                <input class="form-control" name="uname" type="text" id="username" placeholder="Enter Username">
            </div>
            <div class="form-input">


                <label class="form-label" for="password">Password:</label>
                <input class="form-control" name="password" type="Password" id="password" placeholder="Enter Password">

            </div>
            <div class="form-input">
                <center><button type="submit" name="btnOK">Login</button></center>
            </div>
</form>
</body>
</html> -->