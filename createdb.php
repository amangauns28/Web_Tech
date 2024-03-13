<?php
	
	$conn=mysqli_connect("localhost","root","");
    if($conn)
    {
      echo"connected to the database server successfully";
    }
    else
	{
      echo"Error in connecting to the database server";
	  exit();
    }
	
	$q1="CREATE DATABASE MobileBusiness";
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
		echo "<br>Database created successfully";
	}
	else
	{
		echo"<br>Error in creating database";
	}
	
	mysqli_close($conn);
	
?>