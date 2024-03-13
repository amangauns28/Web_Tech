<?php
	$conn=mysqli_connect("localhost","root","","MobileBusiness");
	if($conn)
	{
		echo"successfully connected to the server";
	}
	else
	{
		echo"connection failed";
		exit();
	}
	$q1="CREATE TABLE mobile(id Integer not null,company char(20) not null, ram varchar(10) not null,color varchar(20) not null,processor varchar(20) not null,price Integer not null, primary key(id))";
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
		echo "<br>Table mobile created successfully";
	}
	else
	{
		echo "<br>Error in creating table mobile";
	}
	
	mysqli_close($conn);
	
		
?>