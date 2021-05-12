<?php 
	if($yearsemester=="11" )
			{
		 $result = mysqli_query($dbh,"SELECT *FROM student192011");				
			}	
			
	if($yearsemester=="12" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student192012");				
			}
			
	if($yearsemester=="21" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student192021");				
			}
			
	if($yearsemester=="22" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student192022");				
			}	
	if($yearsemester=="31" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student192031");				
			}	
			
	if($yearsemester=="32" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student192032");				
			}
			
	if($yearsemester=="41" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student192041");				
			}
			
	if($yearsemester=="42" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student192042");				
			}		
?>