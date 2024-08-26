<?php
    
    include "Connection.php";

    $ID = $_GET['ID'];
    echo $ID;

    $sql = "delete from user where ID = '$ID'";

    $Result = mysqli_query($Conn,$sql);

    if ($Result) 
    {
    	echo "Record deleted";

    	?>
    	<script type="text/javascript">
    	window.location.replace("http://localhost/ThirdCRUD/Display.php");
    	</script>
    	<?php
    }
    else
    {
    	echo "Record Not Deleted";
    }

?>