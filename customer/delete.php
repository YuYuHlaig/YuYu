<html>
<head>
	<title></title>
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


	$sql="INSERT INTO tempDelete (Id,Name,cPerson,cNumber,Email,tDate) VALUES ('$Id','$Name','$cPerson','$cNumber','$Email','$date1')";
	mysql_query($sql);
}

// delete the entry

	$result = mysql_query("DELETE FROM entry WHERE id=$id") or die(mysql_error());

// redirect back to the view page

	header("Location: maintable.php");

}

?>
</body>
</html>