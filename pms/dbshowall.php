<?php
include "navbar.php";
        $conn=mysqli_connect("localhost","root","","propertymanagementsystem");
        if(!$conn)
        {
          die("Error in connection");
        }
        $query="SELECT * FROM `property_info`";
        $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
?>
<head>
<title>DATABASE DATA</title>
<style>
         table{
               border: 5px solid black;
               border-radius: 10px;
               background-color: lightgray;
        }
        body{
                font-family: Calibri;
                color: #ffffff;
        }
        td{
                border-bottom: 2px solid black;
                border-right: 2px solid black;
                font-size: 20px;
                padding: 15px;
                color: black;
        }

</style>
</head>
<body>
        <center>
<h1>SHOWING ALL DATA</h1>
<form action="dbupdate.php" method="get">
<table>
        <thead>
        <tr>
                <td>Property ID:</td>
                <td>Property Name:</td>
                <td>Property Area:</td>
                <td>Property Location:</td>
                <td>Property Current Price:</td>
                <td>Property Purchased From:</td>
                <td>Property Purchased Price:</td>
                <td>Property Purchased Date:</td>
        </tr>
        </thead>
        <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){?>
        
        <tr>
             <td><?php echo $row['id']; ?></td>
             <td><?php echo $row['property_name']; ?></td>
             <td><?php echo $row['property_area']; ?></td> 
             <td><?php echo $row['property_location']; ?></td> 
             <td><?php echo $row['property_current_price']; ?></td> 
             <td><?php echo $row['property_purchased_from']; ?></td> 
             <td><?php echo $row['property_purchased_price']; ?></td> 
             <td><?php echo $row['property_purchased_date']; ?></td> 
           
        </tr>
<?php } ?>
</tbody>
</table>
</form>
</center>
</body>
</html>