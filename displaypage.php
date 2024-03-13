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
	
    $q1="SELECT * FROM  mobile";
    $r1=mysqli_query($conn,$q1);
    
	$count=mysqli_num_rows($r1);
	echo"<br>Number of records are ".$count;

    while($info=mysqli_fetch_array($r1))
    {
        echo"<br>";
        echo "<br>Id is ".$info['id'];
        echo "<br>Companyname is ".$info['company'];
        echo "<br>RAM is ".$info['ram'];
        echo "<br>Color is ".$info['color'];
        echo "<br>Processor is ".$info['processor'];
        echo "<br>Price is ".$info['price'];
    }

    mysqli_close($conn);
?>