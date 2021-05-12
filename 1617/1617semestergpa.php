<?php 

if($yearsemester=="11")
{
		$sql = "SELECT *FROM student161711";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					  $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161711`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161711gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
}
	
			 
if($yearsemester=="12")
 {
        $sql = "SELECT *FROM student161712";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					  $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161712`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161712gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
			 }
			 
 if($yearsemester=="21")
    {
        $sql = "SELECT *FROM student161721";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					  $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161721`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161721gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
}

if($yearsemester=="22")
{
        $sql = "SELECT *FROM student161722";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					  $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161722`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161722gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
			 }
			 
if($yearsemester=="31")
   {
        $sql = "SELECT *FROM student161731";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					  $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161731`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161731gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
			 }

if($yearsemester=="32")
	{
              $sql = "SELECT *FROM student161732";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					  $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161732`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161732gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
			 }
if($yearsemester=="41")
	{
        $sql = "SELECT *FROM student161741";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					  $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161741`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161741gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
			 
			 }
if($yearsemester=="42")
	{
              $sql = "SELECT *FROM student161742";
		$result= $dbh->query($sql);
		if ($result->num_rows > 0)
		   {
			  while($row = $result->fetch_assoc())
			   {  
					 $code[]= $row["code"];
					  $title[]= $row["title"];
					  $credit[]= $row["credit"];
			}
		  }
		  
		$sql = "SELECT * FROM `student161742`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student161742gp WHERE id='$id'";
			$result= $dbh->query($sql);
			if ($result=mysqli_query($dbh,$sql))
			  {
				while ($row=mysqli_fetch_row($result))
				  {
					 for($i=0;$i<=$numberOfRows;$i++)
					 {		  
					  $gp[$i]=$row[$i+2];   
					 }
			
				 }
			  }
			 }
			 
 ?>