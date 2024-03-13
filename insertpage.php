<?php

   $a=$_GET["company"];
   $b=$_GET["id"];
   $c=$_GET["ram"];
   $d=$_GET["color"];
   $e=$_GET["processor"];
   $f=$_GET["price"];
   
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

    $q1="INSERT INTO mobile(id , company, ram , color, processor, price) VALUES('".$b."','".$a."','".$c."','".$d."','".$e."','".$f."');";
    

    $r1=mysqli_query($conn,$q1);
    if($r1)
	{
      echo "<br>Data inserted successfully";
    }
    else
    {
	  echo"<br>Error in inserting data";	
	}

    mysqli_close($conn);
 ?>