<?php
$id=$name=$area=$location=$cprice=$pfrom=$pprice=$date="";
if(isset($_GET["btnUpdate"]))
{
        $id=$_GET["pid"];
        $name=$_GET["pname"];
        $area=$_GET["parea"];
        $location=$_GET["plocation"];
        $cprice=$_GET["pcprice"];
        $pfrom=$_GET["ppfrom"];
        $pprice=$_GET["ppprice"];
        $date=$_GET["pdate"];
        $conn=mysqli_connect("localhost","root","","propertymanagementsystem");
        if(!$conn)
        {
          die("Error in connection");
        }
       
        $query="UPDATE `property_info` SET `id`='$id',`property_name`='$name',`property_area`='$area',`property_location`='$location',`property_current_price`='$cprice',`property_purchased_from`='$pfrom',`property_purchased_price`='$pprice',`property_purchased_date`='$date' WHERE `property_info`.`id`='$id';";
        if(mysqli_query($conn,$query))
        {
                echo "Information Updated Sucessfully";
        }
        else
        {
                echo "Failed To Update Information";
        }    
}
?>
<html>
<head>
<title>DATABASE UPDATE</title>
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
<h1>UPDATE PROPERTY DETAILS</h1>
<form action="dbupdate.php" method="get">
<table>
        <tr>
                <td>Property ID:</td>
                <td><input type="text" name="pid"></td>
        </tr>
        <tr>
                <td>Property Name:</td>
                <td><input type="text" name="pname"></td>
        </tr>
        <tr>
                <td>Property Area:</td>
                <td><input type="text" name="parea"></td>
        </tr>
        <tr>
                <td>Property Location:</td>
                <td><input type="text" name="plocation"></td>
        </tr>
        <tr>
                <td>Property Current Price:</td>
                <td><input type="text" name="pcprice"></td>
        </tr>
        <tr>
                <td>Property Purchased From:</td>
                <td><input type="text" name="ppfrom"></td>
        </tr>
        <tr>
                <td>Property Purchased Price:</td>
                <td><input type="text" name="ppprice"></td>
        </tr>
        <tr>
                <td>Property Purchased Date:</td>
                <td><input type="date" name="pdate"></td>
        </tr>
        <tr>
                <td></td>
                <td><input type="submit" value="UPDATE" name="btnUpdate"></td>
        </tr>
</table>
</form>
</center>
</body>
</html>