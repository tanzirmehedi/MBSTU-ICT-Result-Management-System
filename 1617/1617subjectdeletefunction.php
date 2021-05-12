<?php

$sql3="SELECT *FROM student161711 where code='$coursecode' UNION SELECT *FROM student161712 where code='$coursecode' UNION SELECT *FROM student161721 where code='$coursecode' UNION SELECT *FROM student161722 where code='$coursecode' UNION SELECT *FROM student161731 where code='$coursecode' UNION SELECT *FROM student161732 where code='$coursecode' UNION SELECT *FROM student161741 where code='$coursecode' UNION SELECT *FROM student161742 where code='$coursecode'";
	   
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
	$sqll="DELETE FROM student161711 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student161712 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student161721 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student161722 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student161731 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student161732 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student161741 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student161742 WHERE code='$coursecode'";
	
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