<?php 
	if($yearsemester=="11" )
			{
		 $result = mysqli_query($dbh,"SELECT *FROM student242511");				
			}	
			
	if($yearsemester=="12" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student242512");				
			}
			
	if($yearsemester=="21" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student242521");				
			}
			
	if($yearsemester=="22" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student242522");				
			}	
	if($yearsemester=="31" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student242531");				
			}	
			
	if($yearsemester=="32" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student242532");				
			}
			
	if($yearsemester=="41" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student242541");				
			}
			
	if($yearsemester=="42" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student242542");				
			}		
?>