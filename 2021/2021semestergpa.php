<?php 

if($yearsemester=="11")
{
		$sql = "SELECT *FROM student202111";
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
		  
		$sql = "SELECT * FROM `student202111`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202111gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student202112";
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
		  
		$sql = "SELECT * FROM `student202112`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202112gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student202121";
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
		  
		$sql = "SELECT * FROM `student202121`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202121gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student202122";
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
		  
		$sql = "SELECT * FROM `student202122`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202122gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student202131";
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
		  
		$sql = "SELECT * FROM `student202131`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202131gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student202132";
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
		  
		$sql = "SELECT * FROM `student202132`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202132gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student202141";
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
		  
		$sql = "SELECT * FROM `student202141`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202141gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student202142";
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
		  
		$sql = "SELECT * FROM `student202142`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student202142gp WHERE id='$id'";
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