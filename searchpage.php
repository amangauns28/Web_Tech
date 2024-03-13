<?php
    $a=$_GET["color"];
    $b=$_GET["processor"];
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
	
    $q1="SELECT * FROM mobile WHERE color ="."'".$a."'"." and processor = "."'".$b."'";
    $r1=mysqli_query($conn,$q1);
	if($r1)
    {
      $count=mysqli_num_rows($r1);
	  if($count>0)
	  {
        while($info=mysqli_fetch_array($r1))
        {
          echo"<br>";
          echo "<br>Id is ".$info['id'];
          echo "<br>CompanyName is ".$info['company'];
          echo "<br>RAM is ".$info['ram'];
          echo "<br>Color is ".$info['color'];
          echo "<br>Processor is ".$info['processor'];
          echo "<br>Price is ".$info['price'];
        }
      }
	  else
	    echo"<br>No record found";
	}
	else
	{
    	echo"<br>Error in search operation";
	}

    mysqli_close($conn);
?>