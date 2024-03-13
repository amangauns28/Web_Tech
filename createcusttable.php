<?php
    
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
	
	$q1="CREATE TABLE customerData(Fname char(20),Lname char(20), PhNo Integer not null, Gender char(20), Country char(20), Email char(30), DOB varchar(20))"; 
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
		echo "<br>Table customer created successfully";
	}
	else
	{
		echo "<br>Error in creating customer table";
	}
	
	mysqli_close($conn);
	
		
?>