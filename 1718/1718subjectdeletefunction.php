<?php

$sql3="SELECT *FROM student171811 where code='$coursecode' UNION SELECT *FROM student171812 where code='$coursecode' UNION SELECT *FROM student171821 where code='$coursecode' UNION SELECT *FROM student171822 where code='$coursecode' UNION SELECT *FROM student171831 where code='$coursecode' UNION SELECT *FROM student171832 where code='$coursecode' UNION SELECT *FROM student171841 where code='$coursecode' UNION SELECT *FROM student171842 where code='$coursecode'";
	   
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
	$sqll="DELETE FROM student171811 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student171812 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student171821 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student171822 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student171831 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student171832 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student171841 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student171842 WHERE code='$coursecode'";
	
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