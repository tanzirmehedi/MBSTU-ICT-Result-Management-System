 <?php 
 $sql2="SELECT *FROM student222311 where code='$coursecode' UNION SELECT *FROM student222312 where code='$coursecode' UNION SELECT *FROM student222321 where code='$coursecode' UNION SELECT *FROM student222322 where code='$coursecode' UNION SELECT *FROM student222331 where code='$coursecode' UNION SELECT *FROM student222332 where code='$coursecode' UNION SELECT *FROM student222341 where code='$coursecode' UNION SELECT *FROM student222342 where code='$coursecode'";
	   
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
	$sql="UPDATE student222311 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student222312 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student222321 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student222322 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student222331 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student222332 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student222341 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student222342 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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