<?php

include "Connection.php";

 if (isset($_POST['submit'])) 
 {
 	$Name = $_POST['Name'];
 	$Email = $_POST['Email'];
 	$Age = $_POST['Age'];
 	$PhoneNum = $_POST['PhoneNum'];

 	$sql = "Insert into user values('','$Name','$Email','$Age','$PhoneNum')";

  	$Result = mysqli_query($Conn,$sql);

if ($Result) 
{
	echo "Data Inserted";
}

else
{
    echo "Data Not Inserted";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
<table>
	<form action="" method="post">
		<tr>
			<td><input type="text" name="Name" placeholder="Enter Name"></td>
		</tr>
		<tr>
			<td><input type="text" name="Email" placeholder="Enter Email"></td>
		</tr>
		<tr>
			<td><input type="number" name="Age" placeholder="Enter Age"></td>
		</tr>
		<tr>
			<td><input type="number" name="PhoneNum" placeholder="Enter PhoneNum"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Insert Records"></td>
		</tr>
	</form>
</table>
<a href="Display.php">View Data</a>
<center>
</body>
</html>