<?php 

            if($yearsemester=="11")
			 {
             $sqls="SELECT * FROM student161711gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="12")
			 {
             $sqls="SELECT * FROM student161712gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="21")
			 {
             $sqls="SELECT * FROM student161721gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="22")
			 {
             $sqls="SELECT * FROM student161722gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="31")
			 {
             $sqls="SELECT * FROM student161731gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="32")
			 {
             $sqls="SELECT * FROM student161732gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="41")
			 {
             $sqls="SELECT * FROM student161741gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="42")
			 {
             $sqls="SELECT * FROM student161742gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
 ?>