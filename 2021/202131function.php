<?php 
$sql = "SELECT *FROM student202131";
$result= $dbh->query($sql);
if ($result->num_rows > 0)
   {
      while($row = $result->fetch_assoc())
	   {  
              $code31[]= $row["code"];
		      $title31[]= $row["title"];
			  $credit31[]= $row["credit"];
			  "<br>";
    }
  }
  
$sql = "SELECT * FROM `student202131`";
$connStatus = $dbh->query($sql);
$numberOfRows = mysqli_num_rows($connStatus); 
  
$sql1 = "SELECT *FROM student202131gp WHERE id='$b'";
$result1= $dbh->query($sql1);
if ($result1=mysqli_query($dbh,$sql1))
  {
    while ($row=mysqli_fetch_row($result1))
      {	
	     	  
		  $publish[0]=$row[$numberOfRows+2];  
	  }
  }
  
if($publish[0]=="publish"):
{
	$sql = "SELECT *FROM student202131gp WHERE id='$b'";
	$result= $dbh->query($sql);
	if ($result=mysqli_query($dbh,$sql))
	  {
		while ($row=mysqli_fetch_row($result))
		  {
			 for($i=0;$i<=$numberOfRows;$i++)
			 {		  
			  $gp31[$i]=$row[$i+2];   
			 }
	
		 }
	  }
}
endif;
 ?>