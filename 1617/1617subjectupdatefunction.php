 <?php 
 $sql2="SELECT *FROM student161711 where code='$coursecode' UNION SELECT *FROM student161712 where code='$coursecode' UNION SELECT *FROM student161721 where code='$coursecode' UNION SELECT *FROM student161722 where code='$coursecode' UNION SELECT *FROM student161731 where code='$coursecode' UNION SELECT *FROM student161732 where code='$coursecode' UNION SELECT *FROM student161741 where code='$coursecode' UNION SELECT *FROM student161742 where code='$coursecode'";
	   
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
	$sql="UPDATE student161711 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student161712 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student161721 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student161722 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student161731 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student161732 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student161741 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student161742 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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