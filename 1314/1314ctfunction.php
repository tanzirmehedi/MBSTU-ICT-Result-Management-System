<?php 
              if($yearsemm==11)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131411 where code='$ncode' AND ident='$yearsemm'";				
			  }
			  
			   if($yearsemm==12)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131412 where code='$ncode' AND ident='$yearsemm'";				
			  }
			  
			   if($yearsemm==21)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131421 where code='$ncode'  AND ident='$yearsemm'";				
			  }
			  
			   if($yearsemm==22)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131422 where code='$ncode'  AND ident='$yearsemm'";				
			  }
			   if($yearsemm==31)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131431 where code='$ncode'  AND ident='$yearsemm'";				
			  }
			   if($yearsemm==32)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131432 where code='$ncode'  AND ident='$yearsemm'";				
			  }
			   if($yearsemm==41)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131441 where code='$ncode'  AND ident='$yearsemm'";				
			  }
			   if($yearsemm==42)
			  {
                $ncode=$row['code'];			
                $sqlr = "SELECT *FROM student131442 where code='$ncode'  AND ident='$yearsemm'";				
			  }
?>