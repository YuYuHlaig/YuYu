<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

</head>
<body>
	<?php
	$conn = mysql_connect('localhost',"root","") or die("unable to connect");
	mysql_select_db("customers",$conn);

	if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value
	$date=new datetime();

	$date1= $date->format('Y-m-d');

	$id = $_GET['id'];

	$query = mysql_query("select * from entry where Id=$id", $conn);

while($row = mysql_fetch_array($query)){
$Id= $row['Id'];
	$Name= $row['Name'];
	$cPerson= $row['cPerson'];
	$cNumber= $row['cNumber'];
	$Email=$row['Email'];


	$sql="INSERT INTO tempEdit (Id,Name,cPerson,cNumber,Email,tDate) VALUES ('$Id','$Name','$cPerson','$cNumber','$Email','$date1')";
	mysql_query($sql);
}


// delete the entry

	$result = mysql_query("DELETE FROM entry WHERE id=$id") or die(mysql_error());

// redirect back to the view page

	//header("Location: testPhp13.php");

}

?>


<!--	<form method="get" action="testPhp16.php">
	<input type="text" name="id" value="<?php //echo "$Id"?>">	
	<input type="text" name="user" value="<?php //echo "$User"?>">
	<input type="text" name="psw" value="<?php //echo "$Psw"?>">
	<input type= "submit" name = "edit" value="Edit!">
	</form>	-->


	<p><h3>Customer Data Edit</h3></p><br><br>
	 <form class="form-inline" method="get" action="edit.php">
    <div class="form-group">
    	<label class="sr-only">Id</label>
      <input type="text" class="form-control" name="Id" placeholder="Id" value="<?php echo "$Id"?>">
  </div><br><br>
  <div class="form-group">
      <label class="sr-only">Name</label>
      <input type="text" class="form-control" name="Name" placeholder="Name" value="<?php echo "$Name"?>">
    </div><br><br>
    <div class="form-group">
      <label class="sr-only">Contact Person</label>
      <input type="text" class="form-control" name="cPerson" placeholder="Contact Person"  value="<?php echo "$cPerson"?>">
    </div><br><br>
    <div class="form-group">
      <label class="sr-only">Contact Number</label>
      <input type="text" class="form-control" name="cNumber" placeholder="Contact number" value="<?php echo "$cNumber"?>">
    </div><br><br>
     <div class="form-group">
      <label class="sr-only">Email</label>
      <input type="text" class="form-control" name="Email" placeholder="Email"  value="<?php echo "$Email"?>">
    </div><br><br>
    <button type="submit" class="btn btn-info" name = "edit" >Update</button>
   
  </form>
</body>
</html>
	