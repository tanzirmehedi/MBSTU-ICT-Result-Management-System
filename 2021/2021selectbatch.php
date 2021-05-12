<?php 
	if($newyear=="11" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202111");				
			}	
			
	if($newyear=="12" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202112");				
			}
			
	if($newyear=="21" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202121");				
			}
			
	if($newyear=="22" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202122");				
			}	
	if($newyear=="31" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202131");				
			}	
			
	if($newyear=="32" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202132");				
			}
			
	if($newyear=="41" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202141");				
			}
			
	if($newyear=="42" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202142");				
			}		
?>