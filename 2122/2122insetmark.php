<?php 
	if($yearsemester=="11" )
			{
		 $result = mysqli_query($dbh,"SELECT *FROM student212211");				
			}	
			
	if($yearsemester=="12" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student212212");				
			}
			
	if($yearsemester=="21" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student212221");				
			}
			
	if($yearsemester=="22" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student212222");				
			}	
	if($yearsemester=="31" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student212231");				
			}	
			
	if($yearsemester=="32" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student212232");				
			}
			
	if($yearsemester=="41" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student212241");				
			}
			
	if($yearsemester=="42" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student212242");				
			}		
?>