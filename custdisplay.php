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
	
    $q1="SELECT * FROM customerData";
    $r1=mysqli_query($conn,$q1);
    
	$count=mysqli_num_rows($r1);
	echo"<br>Number of records are ".$count;

    while($info=mysqli_fetch_array($r1))
    {
        echo"<br>";
        echo "<br>First Name is ".$info['Fname'];
        echo "<br>Last Name is ".$info['Lname'];
		echo "<br>Contact No. is ".$info['PhNo'];
        echo "<br>Gender is ".$info['Gender'];
        echo "<br>Country is ".$info['Country'];
        echo "<br>Email is ".$info['Email'];
        echo "<br>Birth-Date is ".$info['DOB'];
        
    }

    mysqli_close($conn);
?>