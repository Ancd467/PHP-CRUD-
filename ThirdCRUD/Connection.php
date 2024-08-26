<?php

$Conn = mysqli_connect("localhost:3307","root","","student");

if ($Conn) 
{
	echo "Connection Done";
}
else
{
	echo "Connection Not Done";
}

?>