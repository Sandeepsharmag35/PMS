<?php
$id=$name=$area=$location=$cprice=$pfrom=$pprice=$date="";
if(isset($_GET["btnInsert"]))
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
        $query="INSERT INTO `property_info` (`id`, `property_name`, `property_area`, `property_location`, `property_current_price`, `property_purchased_from`, `property_purchased_price`, `property_purchased_date`) VALUES (NULL, '$name', '$area', '$location', '$cprice', '$pfrom', '$pprice', '$date');";
        if(mysqli_query($conn,$query))
        {
                echo "Information Saved Sucessfully";
        }
        else
        {
                echo "Failed To Save Information";
        }
       
}
?>

<html>
<head>
<title>DATABASE INSERT</title>
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
<h1>INSERT PROPERTY DETAILS</h1>
<form action="dbinsert.php" method="get">
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
                <td><input type="number" name="pcprice"></td>
        </tr>
        <tr>
                <td>Property Purchased From:</td>
                <td><input type="text" name="ppfrom"></td>
        </tr>
        <tr>
                <td>Property Purchased Price:</td>
                <td><input type="number" name="ppprice"></td>
        </tr>
        <tr>
                <td>Property Purchased Date:</td>
                <td><input type="DATE" name="pdate"></td>
        </tr>
        <tr>
                <td></td>
                <td><input type="submit" value="INSERT" name="btnInsert"></td>
        </tr>
</table>
</form>
</center>
</body>
</html>