<?php 

function ctcheck($ct1,$ct2,$ct3,$ct4)
{
	
	if(empty($ct1) && empty($ct2) && empty($ct3) && empty($ct4))
	{
	return " ";
	}
	
	if(!empty($ct1) && empty($ct2) && empty($ct3) && empty($ct4))
	{
    $fct= sprintf('%0.2f', $ct1);
	return $fct;
	}
	
	if(!empty($ct1) && !empty($ct2) && empty($ct3) && empty($ct4))
	{
	$fct= sprintf('%0.2f', ($ct1+$ct2)/2);
	return $fct;
	}
	
	if(!empty($ct1) && !empty($ct2) && !empty($ct3) && empty($ct4))
	{	
	$fct= sprintf('%0.2f',($ct1+$ct2+$ct3)/3);
	return $fct;
	
	}
	
	if(!empty($ct1) && !empty($ct2) && !empty($ct3) && !empty($ct4))
	{
	$fct= sprintf('%0.2f',($ct1+$ct2+$ct3+$ct4)/4);
	return $fct;
	
	}
}

function cheek($cheeking)
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
			 else if($cheeking>=0.0001 && $cheeking<=1.99) return "F";
			 else if (empty($cheeking)) return ""; 
			 else if($cheeking==0.00) return "F";
			 else return "Withdrawn"; 
}

function gpa($grade,$credit)
{
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

function cgpa($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42)
{   
				//Total credit calculation
				
				 
				 for($i=2;$i<sizeof($gp11);$i++)
				 {  
				     if((!empty($gp11[$i]) && $gp11[$i]<=4.00))
				         {   
			               $tc11= array_sum($credit11);
				         }
				    else 
				         $tc11=0;
				 }
				
				for($i=2;$i<sizeof($gp12);$i++)
				 {  
				     if((!empty($gp12[$i]) && $gp12[$i]<=4.00))
				         {   
			               $tc12= array_sum($credit12);
				         }
				    else 
				         $tc42=0;
				 }
				
				for($i=2;$i<sizeof($gp21);$i++)
				 {  
				     if((!empty($gp21[$i]) && $gp21[$i]<=4.00))
				         {   
			               $tc21= array_sum($credit21);
				         }
				    else 
				         $tc21=0;
				 }
				
				for($i=2;$i<sizeof($gp22);$i++)
				 {  
				     if((!empty($gp22[$i]) && $gp22[$i]<=4.00))
				         {   
			               $tc22= array_sum($credit22);
				         }
				    else 
				         $tc22=0;
				 }
				 
				for($i=2;$i<sizeof($gp31);$i++)
				 {  
				     if((!empty($gp31[$i]) && $gp31[$i]<=4.00))
				         {   
			               $tc31= array_sum($credit31);
				         }
				    else 
				         $tc31=0;
				 }
				
				for($i=2;$i<sizeof($gp32);$i++)
				 {  
				     if((!empty($gp32[$i]) && $gp32[$i]<=4.00))
				         {   
			               $tc32= array_sum($credit32);
				         }
				    else 
				         $tc32=0;
				 }
				
				for($i=2;$i<sizeof($gp41);$i++)
				 {  
				     if((!empty($gp41[$i]) && $gp41[$i]<=4.00))
				         {   
			               $tc41= array_sum($credit41);
				         }
				    else 
				         $tc41=0;
				 }
				
				for($i=2;$i<sizeof($gp42);$i++)
				 {  
				     if((!empty($gp42[$i]) && $gp42[$i]<=4.00))
				         {   
			               $tc42= array_sum($credit42);
				         }
				    else 
				         $tc42=0;
				 }
				 
				 //total gpa calculation
				 
				 for($i=0;$i<sizeof($credit11);$i++)
				   {
					   if($gp11[$i]>=0 && $gp11[$i]<=1.99)
					   $gp11[$i]=0;
					   else
					   $gp11[$i]=$gp11[$i];
				   }
				  $tsp11=0;
				   for($j=0;$j<sizeof($credit11);$j++)
				   {   
					   $tsp11= $tsp11+($gp11[$j]*$credit11[$j]);
				   } 
				   
				   
			 for($i=0;$i<sizeof($credit12);$i++)
				   {
					   if($gp12[$i]>=0 && $gp12[$i]<=1.99)
					   $gp12[$i]=0;
					   else
					   $gp12[$i]=$gp12[$i];
				   }
				  $tsp12=0;
				   for($j=0;$j<sizeof($credit12);$j++)
				   {   
					   $tsp12= $tsp12+($gp12[$j]*$credit12[$j]);
				   } 
				   
				   
			  for($i=0;$i<sizeof($credit21);$i++)
				   {
					   if($gp21[$i]>=0 && $gp21[$i]<=1.99)
					   $gp21[$i]=0;
					   else
					   $gp21[$i]=$gp21[$i];
				   }
				  $tsp21=0;
				   for($j=0;$j<sizeof($credit21);$j++)
				   {   
					   $tsp21= $tsp21+($gp21[$j]*$credit21[$j]);
				   } 
				   
				   
			   for($i=0;$i<sizeof($credit22);$i++)
				   {
					   if($gp22[$i]>=0 && $gp22[$i]<=1.99)
					   $gp22[$i]=0;
					   else
					   $gp22[$i]=$gp22[$i];
				   }  
				  $tsp22=0;
				   for($j=0;$j<sizeof($credit22);$j++)
				   {   
					   $tsp22= $tsp22+($gp22[$j]*$credit22[$j]);
				   } 
				   
				   
			   for($i=0;$i<sizeof($credit31);$i++)
				   {
					   if($gp31[$i]>=0 && $gp31[$i]<=1.99)
					   $gp31[$i]=0;
					   else
					   $gp31[$i]=$gp31[$i];
				   }   
				  $tsp31=0;
				   for($j=0;$j<sizeof($credit31);$j++)
				   {   
					   $tsp31= $tsp31+($gp31[$j]*$credit31[$j]);
				   } 
				   
				   
			   for($i=0;$i<sizeof($credit32);$i++)
				   {
					   if($gp32[$i]>=0 && $gp32[$i]<=1.99)
					   $gp32[$i]=0;
					   else
					   $gp32[$i]=$gp32[$i];
				   } 
				  $tsp32=0;
				   for($j=0;$j<sizeof($credit32);$j++)
				   {   
					   $tsp32= $tsp32+($gp32[$j]*$credit32[$j]);
				   } 
				   
			 for($i=0;$i<sizeof($credit41);$i++)
				   {
					   if($gp41[$i]>=0 && $gp41[$i]<=1.99)
					   $gp41[$i]=0;
					   else
					   $gp41[$i]=$gp41[$i];
				   }  
				  $tsp41=0;
				   for($j=0;$j<sizeof($credit41);$j++)
				   {   
					   $tsp41= $tsp41+($gp41[$j]*$credit41[$j]);
				   } 
				   
				   
			for($i=0;$i<sizeof($credit42);$i++)
				   {
					   if($gp42[$i]>=0 && $gp42[$i]<=1.99)
					   $gp42[$i]=0;
					   else
					   $gp42[$i]=$gp42[$i];
				   } 
				  $tsp42=0;
				   for($j=0;$j<sizeof($credit42);$j++)
				   {   
					   $tsp42= $tsp42+($gp42[$j]*$credit42[$j]);
				   } 
				
				
				$cgpa=($tsp11+$tsp12+$tsp21+$tsp22+$tsp31+$tsp32+$tsp41+$tsp42)/($tc11+$tc12+$tc21+$tc22+$tc31+$tc32+$tc41+$tc42);
				
				$cgpa= sprintf('%0.2f', $cgpa);
				
				return $cgpa;	
	
	
}

function gpacheck11($finalgpa11)
{
	if($finalgpa11>= 2.00) return "Promoted";
	else if(($finalgpa11< 2.00) && $finalgpa11 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
	
}
function gpacheck12($finalgpa12)
{
	if($finalgpa12>= 2.00) return "Promoted";
	else if(($finalgpa12< 2.00) && $finalgpa12 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
	
}
function gpacheck21($finalgpa21)
{
	if($finalgpa21>= 2.25) return "Promoted";
	else if(($finalgpa21< 2.00) && $finalgpa21 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
}
function gpacheck22($finalgpa22)
{
	if($finalgpa22>= 2.25) return "Promoted";
	else if(($finalgpa22< 2.00) && $finalgpa22 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
	
}
function gpacheck31($finalgpa31)
{
	if($finalgpa31>= 2.50) return "Promoted";
	else if(($finalgpa31< 2.00) && $finalgpa31 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
	
}
function gpacheck32($finalgpa32)
{
	if($finalgpa32>= 2.50) return "Promoted";
	else if(($finalgpa32< 2.00) && $finalgpa32 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
	
}
function gpacheck41($finalgpa41)
{
	if($finalgpa41>= 2.50) return "Promoted";
	else if(($finalgpa41< 2.00) && $finalgpa41 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
	
}
function gpacheck42($finalgpa42)
{
	if($finalgpa42>= 2.50) return "Promoted";
	else if(($finalgpa42< 2.00) && $finalgpa42 >0) return "Not Promoted";
	else 
	  return "Result Not Yet Published";
	
}


function creditcomplete($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42)
{
				   
				//Total credit calculation
				
				 $tc11=0;
				 for($i=0;$i<=sizeof($gp11);$i++)
				 {  
				      if((!empty($gp11[$i]) && ($gp11[$i]<=4.00) &&($gp11[$i] >=2.00)))
				          {   
			               $tc11= $tc11+$credit11[$i];
				         }
				 }
				
				 $tc12=0;
				 for($i=0;$i<=sizeof($gp12);$i++)
				 {  
				      if((!empty($gp12[$i]) && ($gp12[$i]<=4.00) &&($gp12[$i] >=2.00)))
				          {   
			               $tc12= $tc12+$credit12[$i];
				         }
				 }
				 $tc21=0;
				 for($i=0;$i<=sizeof($gp21);$i++)
				 {  
				      if((!empty($gp21[$i]) && ($gp21[$i]<=4.00) &&($gp21[$i] >=2.00)))
				          {   
			               $tc21= $tc21+$credit21[$i];
				         }
				 }
				 $tc22=0;
				 for($i=0;$i<=sizeof($gp22);$i++)
				 {  
				      if((!empty($gp22[$i]) && ($gp22[$i]<=4.00) &&($gp22[$i] >=2.00)))
				          {   
			               $tc22= $tc22+$credit22[$i];
				         }
				 }
				 
				  $tc31=0;
				 for($i=0;$i<=sizeof($gp31);$i++)
				 {  
				      if((!empty($gp31[$i]) && ($gp31[$i]<=4.00) &&($gp31[$i] >=2.00)))
				          {   
			               $tc31= $tc31+$credit31[$i];
				         }
				 }
				 
				  $tc32=0;
				 for($i=0;$i<=sizeof($gp32);$i++)
				 {  
				      if((!empty($gp32[$i]) && ($gp32[$i]<=4.00) &&($gp32[$i] >=2.00)))
				          {   
			               $tc32= $tc32+$credit32[$i];
				         }
				 }
				  $tc41=0;
				 for($i=0;$i<=sizeof($gp41);$i++)
				 {  
				      if((!empty($gp41[$i]) && ($gp41[$i]<=4.00) &&($gp41[$i] >=2.00)))
				          {   
			               $tc41= $tc41+$credit41[$i];
				         }
				 }
				 
				  $tc42=0;
				 for($i=0;$i<=sizeof($gp42);$i++)
				 {  
				      if((!empty($gp42[$i]) && ($gp42[$i]<=4.00) &&($gp42[$i] >=2.00)))
				          {   
			               $tc42= $tc42+$credit42[$i];
				         }
				 }
				$creditcomplete=($tc11+$tc12+$tc21+$tc22+$tc31+$tc32+$tc41+$tc42);
				
				return $creditcomplete;		
}

function creditnotcomplete($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42)
{
				   
				 for($i=2;$i<sizeof($gp11);$i++)
				 {  
				     if((!empty($gp11[$i]) && $gp11[$i]<=4.00))
				         {   
			               $tcc11= array_sum($credit11);
				         }
				    else 
				         $tcc11=0;
				 }
				
				for($i=2;$i<sizeof($gp12);$i++)
				 {  
				     if((!empty($gp12[$i]) && $gp12[$i]<=4.00))
				         {   
			               $tcc12= array_sum($credit12);
				         }
				    else 
				         $tcc12=0;
				 }
				
				for($i=2;$i<sizeof($gp21);$i++)
				 {  
				     if((!empty($gp21[$i]) && $gp21[$i]<=4.00))
				         {   
			               $tcc21= array_sum($credit21);
				         }
				    else 
				         $tcc21=0;
				 }
				
				for($i=2;$i<sizeof($gp22);$i++)
				 {  
				     if((!empty($gp22[$i]) && $gp22[$i]<=4.00))
				         {   
			               $tcc22= array_sum($credit22);
				         }
				    else 
				         $tcc22=0;
				 }
				 
				for($i=2;$i<sizeof($gp31);$i++)
				 {  
				     if((!empty($gp31[$i]) && $gp31[$i]<=4.00))
				         {   
			               $tcc31= array_sum($credit31);
				         }
				    else 
				         $tcc31=0;
				 }
				
				for($i=2;$i<sizeof($gp32);$i++)
				 {  
				     if((!empty($gp32[$i]) && $gp32[$i]<=4.00))
				         {   
			               $tcc32= array_sum($credit32);
				         }
				    else 
				         $tcc32=0;
				 }
				
				for($i=2;$i<sizeof($gp41);$i++)
				 {  
				     if((!empty($gp41[$i]) && $gp41[$i]<=4.00))
				         {   
			               $tcc41= array_sum($credit41);
				         }
				    else 
				         $tcc41=0;
				 }
				
				for($i=2;$i<sizeof($gp42);$i++)
				 {  
				     if((!empty($gp42[$i]) && $gp42[$i]<=4.00))
				         {   
			               $tcc42= array_sum($credit42);
				         }
				    else 
				         $tcc42=0;
				 }
				 
				 
				
				//Total credit calculation
				
				 $tc11=0;
				 for($i=0;$i<=sizeof($gp11);$i++)
				 {  
				      if((!empty($gp11[$i]) && ($gp11[$i]<=4.00) &&($gp11[$i] >=2.00)))
				          {   
			               $tc11= $tc11+$credit11[$i];
				         }
				 }
				
				 $tc12=0;
				 for($i=0;$i<=sizeof($gp12);$i++)
				 {  
				      if((!empty($gp12[$i]) && ($gp12[$i]<=4.00) &&($gp12[$i] >=2.00)))
				          {   
			               $tc12= $tc12+$credit12[$i];
				         }
				 }
				 $tc21=0;
				 for($i=0;$i<=sizeof($gp21);$i++)
				 {  
				      if((!empty($gp21[$i]) && ($gp21[$i]<=4.00) &&($gp21[$i] >=2.00)))
				          {   
			               $tc21= $tc21+$credit21[$i];
				         }
				 }
				 $tc22=0;
				 for($i=0;$i<=sizeof($gp22);$i++)
				 {  
				      if((!empty($gp22[$i]) && ($gp22[$i]<=4.00) &&($gp22[$i] >=2.00)))
				          {   
			               $tc22= $tc22+$credit22[$i];
				         }
				 }
				 
				  $tc31=0;
				 for($i=0;$i<=sizeof($gp31);$i++)
				 {  
				      if((!empty($gp31[$i]) && ($gp31[$i]<=4.00) &&($gp31[$i] >=2.00)))
				          {   
			               $tc31= $tc31+$credit31[$i];
				         }
				 }
				 
				  $tc32=0;
				 for($i=0;$i<=sizeof($gp32);$i++)
				 {  
				      if((!empty($gp32[$i]) && ($gp32[$i]<=4.00) &&($gp32[$i] >=2.00)))
				          {   
			               $tc32= $tc32+$credit32[$i];
				         }
				 }
				  $tc41=0;
				 for($i=0;$i<=sizeof($gp41);$i++)
				 {  
				      if((!empty($gp41[$i]) && ($gp41[$i]<=4.00) &&($gp41[$i] >=2.00)))
				          {   
			               $tc41= $tc41+$credit41[$i];
				         }
				 }
				 
				  $tc42=0;
				 for($i=0;$i<=sizeof($gp42);$i++)
				 {  
				      if((!empty($gp42[$i]) && ($gp42[$i]<=4.00) &&($gp42[$i] >=2.00)))
				          {   
			               $tc42= $tc42+$credit42[$i];
				         }
				 }
				$creditcomplete=($tc11+$tc12+$tc21+$tc22+$tc31+$tc32+$tc41+$tc42);
				$totalcredit=($tcc11+$tcc12+$tcc21+$tcc22+$tcc31+$tcc32+$tcc41+$tcc42);
				
				$creditnotcomplete=$totalcredit-$creditcomplete;
				
				return $creditnotcomplete;		
}

function resultpublish($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42)
{
				   
				//Total credit calculation
				
				 
				for($i=2;$i<sizeof($gp11);$i++)
				 {  
				     if((!empty($gp11[$i]) && $gp11[$i]<=4.00))
				         {   
			               $tcc11= array_sum($credit11);
				         }
				    else 
				         $tcc11=0;
				 }
				
				for($i=2;$i<sizeof($gp12);$i++)
				 {  
				     if((!empty($gp12[$i]) && $gp12[$i]<=4.00))
				         {   
			               $tcc12= array_sum($credit12);
				         }
				    else 
				         $tcc42=0;
				 }
				
				for($i=2;$i<sizeof($gp21);$i++)
				 {  
				     if((!empty($gp21[$i]) && $gp21[$i]<=4.00))
				         {   
			               $tcc21= array_sum($credit21);
				         }
				    else 
				         $tcc21=0;
				 }
				
				for($i=2;$i<sizeof($gp22);$i++)
				 {  
				     if((!empty($gp22[$i]) && $gp22[$i]<=4.00))
				         {   
			               $tcc22= array_sum($credit22);
				         }
				    else 
				         $tcc22=0;
				 }
				 
				for($i=2;$i<sizeof($gp31);$i++)
				 {  
				     if((!empty($gp31[$i]) && $gp31[$i]<=4.00))
				         {   
			               $tcc31= array_sum($credit31);
				         }
				    else 
				         $tcc31=0;
				 }
				
				for($i=2;$i<sizeof($gp32);$i++)
				 {  
				     if((!empty($gp32[$i]) && $gp32[$i]<=4.00))
				         {   
			               $tcc32= array_sum($credit32);
				         }
				    else 
				         $tcc32=0;
				 }
				
				for($i=2;$i<sizeof($gp41);$i++)
				 {  
				     if((!empty($gp41[$i]) && $gp41[$i]<=4.00))
				         {   
			               $tcc41= array_sum($credit41);
				         }
				    else 
				         $tcc41=0;
				 }
				
				for($i=2;$i<sizeof($gp42);$i++)
				 {  
				     if((!empty($gp42[$i]) && $gp42[$i]<=4.00))
				         {   
			               $tcc42= array_sum($credit42);
				         }
				    else 
				         $tcc42=0;
				 }
				$totalcredit=($tcc11+$tcc12+$tcc21+$tcc22+$tcc31+$tcc32+$tcc41+$tcc42);
					
					$publish=$totalcredit/18.00;	
					$publish= sprintf('%d', $publish);	 				
				   
					return $publish;
					
				
}

function totalcredit($credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42)
{
				   
				//Total credit calculation
				
				 
				$totalcredit11=array_sum($credit11);
				$totalcredit12=array_sum($credit12);
				$totalcredit21=array_sum($credit21);
				$totalcredit22=array_sum($credit22);
				$totalcredit31=array_sum($credit31);
				$totalcredit32=array_sum($credit32);
				$totalcredit41=array_sum($credit41);
				$totalcredit42=array_sum($credit42);
				$totalcredit=$totalcredit11+$totalcredit12+$totalcredit21+$totalcredit22+$totalcredit31+$totalcredit32+$totalcredit41+$totalcredit42;
			    return $totalcredit;
}




?>