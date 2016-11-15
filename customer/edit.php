<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conn = mysql_connect('localhost',"root","") or die("unable to connect");
		mysql_select_db("customers",$conn);

if (isset($_GET['edit'])) {

   $Id= $_GET['Id'];
	$Name= $_GET['Name'];
	$cPerson= $_GET['cPerson'];
	$cNumber= $_GET['cNumber'];
	$Email=$_GET['Email'];
    //$query=mysql_query("UPDATE login SET username = '$User', password = '$Password' WHERE Id = '$Id'",$conn);

	$sql="INSERT INTO entry (Id,Name,cPerson,cNumber,Email) VALUES ('$Id','$Name','$cPerson','$cNumber','$Email')";
	mysql_query($sql);
	mysql_close($conn);

}

header( 'Location: maintable.php' ) ;

	?>
</body>
</html>