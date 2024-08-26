<?php

   include "Connection.php";

   $sql = "select * from user";

   $Result = mysqli_query($Conn,$sql);

   $Rows = mysqli_num_rows($Result);

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
	<table border="4" style="font-size: 20;">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Age</th>
			<th>Phone Number</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
          if ($Rows>0) 
          {
          	while ($Array = mysqli_fetch_assoc($Result)) 
          	{
          		?>
                  
                <tr>
                	<td><?php echo $Array['ID']; ?></td>
                	<td><?php echo $Array['Name']; ?></td>
                	<td><?php echo $Array['Email']; ?></td>
                	<td><?php echo $Array['Age']; ?></td>
                	<td><?php echo $Array['PhoneNum']; ?></td>
                	<td><a href="Update.php?ID=<?php echo $Array['ID'];?>">Edit</a></td>
                	<td><a href="Delete.php?ID=<?php echo $Array['ID'];?>">Delete</a></td>
                </tr>

          		<?php
          	}
          }
		?>
	</table>
	<a href="Create.php">Insert New records</a>
</center>
</body>
<script type="text/javascript"></script>
</html>