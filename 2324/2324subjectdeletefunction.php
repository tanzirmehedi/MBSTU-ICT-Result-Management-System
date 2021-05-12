<?php

$sql3="SELECT *FROM student232411 where code='$coursecode' UNION SELECT *FROM student232412 where code='$coursecode' UNION SELECT *FROM student232421 where code='$coursecode' UNION SELECT *FROM student232422 where code='$coursecode' UNION SELECT *FROM student232431 where code='$coursecode' UNION SELECT *FROM student232432 where code='$coursecode' UNION SELECT *FROM student232441 where code='$coursecode' UNION SELECT *FROM student232442 where code='$coursecode'";
	   
	  $result = $dbh->query($sql3);
			if ($result->num_rows > 0) 
			   {
				while($row = $result->fetch_assoc())
				 {
					 $ident= $row['ident'];
				 }
			   }
	  	   
	if($ident=="11")
	{	
	$sqll="DELETE FROM student232411 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
	 if($ident=="12")
	{	
	$sqll="DELETE FROM student232412 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
	 if($ident=="21")
	{	
	$sqll="DELETE FROM student232421 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
	 if($ident=="22")
	{	
	$sqll="DELETE FROM student232422 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
	 if($ident=="31")
	{	
	$sqll="DELETE FROM student232431 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
	 if($ident=="32")
	{	
	$sqll="DELETE FROM student232432 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
	 if($ident=="41")
	{	
	$sqll="DELETE FROM student232441 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
	 if($ident=="42")
	{	
	$sqll="DELETE FROM student232442 WHERE code='$coursecode'";
	
		if (mysqli_query($dbh, $sqll))
		  {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=checksubjectandcredit.php');
			}
	 }
 ?>