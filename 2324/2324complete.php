<?php 

            if($yearsemester=="11")
			 {
             $sqls="SELECT * FROM student232411gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="12")
			 {
             $sqls="SELECT * FROM student232412gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="21")
			 {
             $sqls="SELECT * FROM student232421gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="22")
			 {
             $sqls="SELECT * FROM student232422gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="31")
			 {
             $sqls="SELECT * FROM student232431gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="32")
			 {
             $sqls="SELECT * FROM student232432gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="41")
			 {
             $sqls="SELECT * FROM student232441gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="42")
			 {
             $sqls="SELECT * FROM student232442gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
 ?>