<?php

include "Connection.php";

    $ID = $_GET['ID'];
    echo $ID;

    $sql = "select * from user where ID = '$ID'";

    $Result = mysqli_query($Conn,$sql);

    $Rows = mysqli_num_rows($Result);

    $Array = mysqli_fetch_assoc($Result);

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
			<td><input type="text" name="Name" value="<?php echo $Array['Name']?>" ></td>
		</tr>
		<tr>
			<td><input type="text" name="Email" value="<?php echo $Array['Email']?>" ></td>
		</tr>
		<tr>
			<td><input type="number" name="Age" value="<?php echo $Array['Age']?>"></td>
		</tr>
		<tr>
			<td><input type="number" name="PhoneNum" value="<?php echo $Array['PhoneNum'];?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</form>
</table>
<a href="Display.php">View Data</a>
<center>
</body>
</html>

<?php

include "Connection.php";

 if (isset($_POST['submit'])) 
 {
 	$Name = $_POST['Name'];
 	$Email = $_POST['Email'];
 	$Age = $_POST['Age'];
 	$PhoneNum = $_POST['PhoneNum'];

 	$sql = "update user set Name = '$Name' , Email = '$Email' , Age = '$Age' , PhoneNum = '$PhoneNum' where ID = '$ID'";

  	$Result = mysqli_query($Conn,$sql);

if ($Result) 
{
	echo "Data Updated";
	?>

        <script type="text/javascript">
    	window.location.replace("http://localhost/ThirdCRUD/Display.php");
    	</script>

	<?php
}

else
{
    echo "Data Not Updated";
}
}
?>