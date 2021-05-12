<?php 

if($yearsemester=="11")
{
		$sql = "SELECT *FROM student232411";
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
		  
		$sql = "SELECT * FROM `student232411`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232411gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student232412";
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
		  
		$sql = "SELECT * FROM `student232412`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232412gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student232421";
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
		  
		$sql = "SELECT * FROM `student232421`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232421gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student232422";
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
		  
		$sql = "SELECT * FROM `student232422`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232422gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student232431";
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
		  
		$sql = "SELECT * FROM `student232431`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232431gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student232432";
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
		  
		$sql = "SELECT * FROM `student232432`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232432gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student232441";
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
		  
		$sql = "SELECT * FROM `student232441`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232441gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student232442";
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
		  
		$sql = "SELECT * FROM `student232442`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student232442gp WHERE id='$id'";
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