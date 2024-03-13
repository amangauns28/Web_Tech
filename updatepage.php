<?php
    $a=$_GET["id"];
    $b=$_GET["price"];
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
    
    $q1="UPDATE mobile set price=".$b." where id=".$a." ";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
      echo "<br>updated successfully";
    }
    else
	{
      echo"<br>Error";
	}
   
    mysqli_close($conn);
?>