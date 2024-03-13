<?php
    
   $a=$_GET["id"];
   $conn=mysqli_connect("localhost","root","","MobileBusiness");
    if($conn)
    {
      echo"connected to the database server successfully";
    }
    else
	{
      echo"Error in connecting to the database server";
	  exit();
    }
	
	$q1="DELETE FROM mobile WHERE id=".$a;
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
	  echo "<br>Values deleted successfully<br>";
	}
	else
	{
	  echo "<br>Error in deleting values";
	}
	
	mysqli_close($conn);
		
?>