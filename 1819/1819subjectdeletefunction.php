<?php

$sql3="SELECT *FROM student181911 where code='$coursecode' UNION SELECT *FROM student181912 where code='$coursecode' UNION SELECT *FROM student181921 where code='$coursecode' UNION SELECT *FROM student181922 where code='$coursecode' UNION SELECT *FROM student181931 where code='$coursecode' UNION SELECT *FROM student181932 where code='$coursecode' UNION SELECT *FROM student181941 where code='$coursecode' UNION SELECT *FROM student181942 where code='$coursecode'";
	   
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
	$sqll="DELETE FROM student181911 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student181912 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student181921 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student181922 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student181931 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student181932 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student181941 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student181942 WHERE code='$coursecode'";
	
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