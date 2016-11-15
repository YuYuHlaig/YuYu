<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
   <h2>Customers Listing</h2><br>
  <button type="button" class="btn btn-info"><a href="entry.php">Add New person</a></button>
  <button type="button" class="btn btn-info"><a href="tempDelete.php">Delete Customer</a></button>
  <button type="button" class="btn btn-info"><a href="tempedit.php">Edit Customer</a></button>

  <br><br>
  <table class="table table-striped">
    <thead>
     <tr>
     <th><h4>Id</h4></th>
     <th><h4>Name</h4></th>
    <th><h4>Contact Person</h4></th>
     <th><h4>Contact Number</h4></th>
      <th><h4>Email</h4></th> 
      <th><h4>Action</h4></th>        
       </tr>
   </thead>
<?php
error_reporting(1); 
 $con = mysql_connect("localhost","root","") or die(mysql_error());
 
$db = mysql_select_db("customers", $con);

$query = mysql_query("select * from entry", $con);


 if(mysql_num_rows($query) > 0){
      while($row = mysql_fetch_array($query)){

           // $count=$count+1;
          
           echo "<tr>";
                 echo "<td>" .$row['Id']. "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['cPerson'] . "</td>";
                echo "<td>" . $row['cNumber'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo '<td><a href="editform.php?id= ' . $row['Id'] . '">Edit</a></td>';
                echo '<td><a href="delete.php?id= ' . $row['Id'] . '">Delete</a></td>';

            echo "</tr>";
        
    }
        echo "</table>";
      
 }

?>

</body>
</html>
