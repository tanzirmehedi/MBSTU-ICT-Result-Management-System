<?php 

if($myStr=="11")
	{	
	$sql="INSERT INTO student222311 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($myStr=="12")
	{	
	$sql="INSERT INTO student222312 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($myStr=="21")
	{	
	$sql="INSERT INTO student222321 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($myStr=="22")
	{	
	$sql="INSERT INTO student222322 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($myStr=="31")
	{	
	$sql="INSERT INTO student222331 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	
	if($myStr=="32")
	{	
	$sql="INSERT INTO student222332 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	if($myStr=="41")
	{	
	$sql="INSERT INTO student222341 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
	
	if($myStr=="42")
	{	
	$sql="INSERT INTO student222342 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="New Subject has been added successfully";	
			header('refresh:2;url=checksubjectandcredit.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactioncredit.php');
			}
	}
    
    ?>