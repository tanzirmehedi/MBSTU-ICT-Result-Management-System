<?php 
	if($yearsemester=="11" )
			{
		 $result = mysqli_query($dbh,"SELECT *FROM student202111");				
			}	
			
	if($yearsemester=="12" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202112");				
			}
			
	if($yearsemester=="21" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202121");				
			}
			
	if($yearsemester=="22" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202122");				
			}	
	if($yearsemester=="31" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202131");				
			}	
			
	if($yearsemester=="32" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202132");				
			}
			
	if($yearsemester=="41" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202141");				
			}
			
	if($yearsemester=="42" )
			{
		$result = mysqli_query($dbh,"SELECT *FROM student202142");				
			}		
?>