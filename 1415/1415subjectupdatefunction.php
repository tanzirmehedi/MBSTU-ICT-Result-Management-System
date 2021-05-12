 <?php 
 $sql2="SELECT *FROM student141511 where code='$coursecode' UNION SELECT *FROM student141512 where code='$coursecode' UNION SELECT *FROM student141521 where code='$coursecode' UNION SELECT *FROM student141522 where code='$coursecode' UNION SELECT *FROM student141531 where code='$coursecode' UNION SELECT *FROM student141532 where code='$coursecode' UNION SELECT *FROM student141541 where code='$coursecode' UNION SELECT *FROM student141542 where code='$coursecode'";
	   
	  $result = $dbh->query($sql2);
			if ($result->num_rows > 0) 
			   {
				while($row = $result->fetch_assoc())
				 {
					 $ident= $row['ident'];
				 }
			   }
	  	   
	if($ident=="11")
	{	
	$sql="UPDATE student141511 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($ident=="12")
	{	
	$sql="UPDATE student141512 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($ident=="21")
	{	
	$sql="UPDATE student141521 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($ident=="22")
	{	
	$sql="UPDATE student141522 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($ident=="31")
	{	
	$sql="UPDATE student141531 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($ident=="32")
	{	
	$sql="UPDATE student141532 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($ident=="41")
	{	
	$sql="UPDATE student141541 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($ident=="42")
	{	
	$sql="UPDATE student141542 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
    ?>