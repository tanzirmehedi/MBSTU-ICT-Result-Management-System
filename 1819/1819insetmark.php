<?php 
	if($yearsemester=="11" )
			{
		 $result = mysqli_query($dbh,"SELECT *FROM student181911");				
			}	
			
	if($yearsemester=="12" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student181912");				
			}
			
	if($yearsemester=="21" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student181921");				
			}
			
	if($yearsemester=="22" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student181922");				
			}	
	if($yearsemester=="31" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student181931");				
			}	
			
	if($yearsemester=="32" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student181932");				
			}
			
	if($yearsemester=="41" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student181941");				
			}
			
	if($yearsemester=="42" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student181942");				
			}		
?>