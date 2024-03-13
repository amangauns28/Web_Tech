<?php

   $a=$_POST["fname"];
   $b=$_POST["lname"];
   $c=$_POST["mobile"];
   $d=$_POST["gender"];
   $e=$_POST["cntry"];
   $f=$_POST["email"];
   $g=$_POST["birthday"];
   
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

    $q1="INSERT INTO customerData(Fname, Lname, PhNo, Gender, Country, Email, DOB) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."')";
    $r1=mysqli_query($conn,$q1);
    if($r1)
	{
      echo "<br>Inserted successfully";
    }
    else
	{
      echo"<br>Error in insertion";
    }
	
    mysqli_close($conn);
 ?>