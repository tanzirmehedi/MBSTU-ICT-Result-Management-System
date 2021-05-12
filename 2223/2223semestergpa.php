<?php 

if($yearsemester=="11")
{
		$sql = "SELECT *FROM student222311";
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
		  
		$sql = "SELECT * FROM `student222311`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222311gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student222312";
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
		  
		$sql = "SELECT * FROM `student222312`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222312gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student222321";
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
		  
		$sql = "SELECT * FROM `student222321`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222321gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student222322";
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
		  
		$sql = "SELECT * FROM `student222322`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222322gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student222331";
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
		  
		$sql = "SELECT * FROM `student222331`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222331gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student222332";
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
		  
		$sql = "SELECT * FROM `student222332`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222332gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student222341";
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
		  
		$sql = "SELECT * FROM `student222341`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222341gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student222342";
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
		  
		$sql = "SELECT * FROM `student222342`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student222342gp WHERE id='$id'";
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