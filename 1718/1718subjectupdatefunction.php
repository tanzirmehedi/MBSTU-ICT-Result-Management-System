 <?php 
 $sql2="SELECT *FROM student171811 where code='$coursecode' UNION SELECT *FROM student171812 where code='$coursecode' UNION SELECT *FROM student171821 where code='$coursecode' UNION SELECT *FROM student171822 where code='$coursecode' UNION SELECT *FROM student171831 where code='$coursecode' UNION SELECT *FROM student171832 where code='$coursecode' UNION SELECT *FROM student171841 where code='$coursecode' UNION SELECT *FROM student171842 where code='$coursecode'";
	   
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
	$sql="UPDATE student171811 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student171812 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student171821 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student171822 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student171831 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student171832 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student171841 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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
	$sql="UPDATE student171842 set code='$newcoursecode',title='$coursetitle',credit='$coursecredit' where code= '$coursecode'";
	
	
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