<html>
<head>
	<title>Entry</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
	<p><h3>Customer Entry</h3></p><br><br>
	 <form class="form-inline">
    <div class="form-group">
      <label class="sr-only">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div><br><br>
    <div class="form-group">
      <label class="sr-only">Contact Person</label>
      <input type="text" class="form-control" name="cPerson" placeholder="Contact Person">
    </div><br><br>
    <div class="form-group">
      <label class="sr-only">Contact Number</label>
      <input type="text" class="form-control" name="cNumber" placeholder="Contact Number">
    </div><br><br>
     <div class="form-group">
      <label class="sr-only">Email</label>
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div><br><br>
    <button type="submit" class="btn btn-info">Submit</button>
    <button type="button" class="btn btn-success"><a href="maintable.php">List View</a></button><br><br>
  </form>
	<?php
	if($_GET){
$conn = mysql_connect('localhost',"root","") or die("unable to connect");
mysql_select_db("customers",$conn);

$query = mysql_query("select * from entry", $conn);

 //$count=mysql_num_rows($query);
 //$count1=$count+1;
$count=time();

 $Name=$_GET['name'];
$cPerson=$_GET['cPerson'];
$cNumber=$_GET['cNumber'];
$Email=$_GET['email'];

$sql="INSERT INTO entry (Id,Name,cPerson,cNumber,Email) VALUES ('$count','$Name','$cPerson','$cNumber','$Email')";
mysql_query($sql);
mysql_close($conn);

}
?>

</html>

