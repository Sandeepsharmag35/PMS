<?php
$id="";
if(isset($_GET["btnDelete"]))
{
        $id=$_GET["pid"];
        $conn=mysqli_connect("localhost","root","","propertymanagementsystem");
        if(!$conn)
        {
          die("Error in connection");
        }
       
        $query="DELETE FROM `property_info` WHERE `id`= '$id';";
        if(mysqli_query($conn,$query))
        {
                echo "<h1>"."Information Deleted Sucessfully"."</h1>";
        }
        else
        {
                echo "Failed To Delete Information";
        }
       
}
?>

<html>
<head>
<title>DATABASE DELETE</title>
<style>
         table{
               border: 5px solid black;
               border-radius: 10px;
               background-color: lightgray;
        }
        body{
                font-family: Calibri;
                
        }
        td{
                font-size: 20px;
                padding: 15px;
                color: black;
        }

</style>
</head>
<body>
        <center>
<h1>DELETE PROPERTY DETAILS</h1>
<form action="dbdelete.php" method="get">
<table>
        <tr>
                <td>Property ID:</td>
                <td><input type="text" name="pid"></td>
        </tr>
        <tr>
                <td></td>
                <td><input type="submit" value="DELETE" name="btnDelete"></td>
        </tr>
</table>

<div>

</div>
</form>
</center>
</body>
</html>