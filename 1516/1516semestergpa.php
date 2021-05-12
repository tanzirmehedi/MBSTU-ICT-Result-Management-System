<?php 

if($yearsemester=="11")
{
		$sql = "SELECT *FROM student151611";
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
		  
		$sql = "SELECT * FROM `student151611`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151611gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student151612";
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
		  
		$sql = "SELECT * FROM `student151612`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151612gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student151621";
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
		  
		$sql = "SELECT * FROM `student151621`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151621gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student151622";
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
		  
		$sql = "SELECT * FROM `student151622`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151622gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student151631";
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
		  
		$sql = "SELECT * FROM `student151631`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151631gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student151632";
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
		  
		$sql = "SELECT * FROM `student151632`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151632gp WHERE id='$id'";
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
        $sql = "SELECT *FROM student151641";
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
		  
		$sql = "SELECT * FROM `student151641`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151641gp WHERE id='$id'";
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
              $sql = "SELECT *FROM student151642";
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
		  
		$sql = "SELECT * FROM `student151642`";
		$connStatus = $dbh->query($sql);
		$numberOfRows = mysqli_num_rows($connStatus); 
		  
			$sql = "SELECT *FROM student151642gp WHERE id='$id'";
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