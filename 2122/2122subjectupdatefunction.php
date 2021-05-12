 <?php 
 $sql2="SELECT *FROM student212211 where code='$coursecode' UNION SELECT *FROM student212212 where code='$coursecode' UNION SELECT *FROM student212221 where code='$coursecode' UNION SELECT *FROM student212222 where code='$coursecode' UNION SELECT *FROM student212231 where code='$coursecode' UNION SELECT *FROM student212232 where code='$coursecode' UNION SELECT *FROM student212241 where code='$coursecode' UNION SELECT *FROM student212242 where code='$coursecode'";
	   
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
	$sql="UPDATE student212211 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student212212 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student212221 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student212222 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student212231 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student212232 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student212241 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student212242 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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