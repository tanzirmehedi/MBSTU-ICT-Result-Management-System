<?php

$sql3="SELECT *FROM student202111 where code='$coursecode' UNION SELECT *FROM student202112 where code='$coursecode' UNION SELECT *FROM student202121 where code='$coursecode' UNION SELECT *FROM student202122 where code='$coursecode' UNION SELECT *FROM student202131 where code='$coursecode' UNION SELECT *FROM student202132 where code='$coursecode' UNION SELECT *FROM student202141 where code='$coursecode' UNION SELECT *FROM student202142 where code='$coursecode'";
	   
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
	$sqll="DELETE FROM student202111 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student202112 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student202121 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student202122 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student202131 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student202132 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student202141 WHERE code='$coursecode'";
	
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
	$sqll="DELETE FROM student202142 WHERE code='$coursecode'";
	
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