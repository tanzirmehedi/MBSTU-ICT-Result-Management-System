<?php 

if($myStr=="11")
	{	
	$sql="INSERT INTO student212211 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student212212 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student212221 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student212222 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student212231 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student212232 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student212241 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student212242 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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