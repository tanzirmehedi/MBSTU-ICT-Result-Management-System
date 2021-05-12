<?php 

if($myStr=="11")
	{	
	$sql="INSERT INTO student202111 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student202112 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student202121 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student202122 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student202131 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student202132 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student202141 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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
	$sql="INSERT INTO student202142 (code,title,credit,ident) VALUES('$newcoursecode','$coursetitle','$coursecredit','$myStr')";
	
	
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