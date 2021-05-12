<?php 


function check($cheeking)
{
	         if($cheeking>=80) return "4.00";
             else if($cheeking>=75 && $cheeking<=79) return "3.75";
			 else if($cheeking>=70 && $cheeking<=74) return "3.50";
			 else if($cheeking>=65 && $cheeking<=69) return "3.25";
			 else if($cheeking>=60 && $cheeking<=64) return "3.00";
			 else if($cheeking>=55 && $cheeking<=59) return "2.75";
			 else if($cheeking>=50 && $cheeking<=54) return "2.50";
			 else if($cheeking>=45 && $cheeking<=49) return "2.25";
			 else if($cheeking>=40 && $cheeking<=44) return "2.00";
			 else if($cheeking>=0 && $cheeking<=39) return "0.00";
			 else if (empty($cheeking)) return ""; 
			 else return "Withdrawn"; 
}			

function checkk($cheeking,$session,$yearsemester)                 
{	
    include('includes/indexconfig.php');
	
	include('batch6.php');
			 
			 if($totalstudent >0)
			   {
				   return 1;
			   }
			   else
			      {
					  return 0;
				  }
}

function semestergpa($yearsemester,$session,$id)
{
	include('includes/indexconfig.php');
	
	         include('batch7.php');		

			 $grade=$gp;
			
			 
	               for($i=0;$i<sizeof($credit);$i++)
				   {
					   if($grade[$i]>=0 && $grade[$i]<=1.99)
					   $grade[$i]=0;
					   else
					   $grade[$i]=$grade[$i];
				   }
				   
				  $tsp=0;
				   for($j=0;$j<sizeof($credit);$j++)
				   {   
					   $tsp= $tsp+($grade[$j]*$credit[$j]);
				   } 
				   
			    $tc= array_sum($credit);
				$gpa=$tsp/$tc;
				$gpa= sprintf('%0.2f', $gpa);
				return $gpa;				
}

function co($yearsemester,$session,$id)
{
	include('includes/indexconfig.php');
	
	         include('batch7.php');		
				   
			    $co= array_sum($credit);

				return $co;				
}

function ce($yearsemester,$session,$id)
{
	include('includes/indexconfig.php');
	
	         include('batch7.php');		
				   
			     $grade=$gp;
			
			     $tcredit=0;
				 
	               for($i=0;$i<sizeof($credit);$i++)
				   {
					   if($grade[$i]>=2 && $grade[$i]<=4.00)
					   {
					        $tcredit=$tcredit+$credit[$i];
					   }					        
				   }				   
				   
			    $tc= $tcredit;
				return $tc;					
}

function checking($cheeking)
{
	         if($cheeking==4.00) return "A+";
             else if($cheeking>=3.75 && $cheeking<=3.99) return "A";
			 else if($cheeking>=3.50 && $cheeking<=3.74) return "A-";
			 else if($cheeking>=3.25 && $cheeking<=3.49) return "B+";
			 else if($cheeking>=3.00 && $cheeking<=3.24) return "B";
			 else if($cheeking>=2.75 && $cheeking<=2.99) return "B-";
			 else if($cheeking>=2.50 && $cheeking<=2.74) return "C+";
			 else if($cheeking>=2.25 && $cheeking<=2.49) return "C";
			 else if($cheeking>=2.00 && $cheeking<=2.24) return "D";
			 else if($cheeking>=0.01 && $cheeking<=1.99) return "F";
			 else if (empty($cheeking)) return ""; 
			 else return "Withdrawn"; 
}

				  
?>