<?php 

            if($yearsemester=="11")
			 {
             $sqls="SELECT * FROM student141511gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="12")
			 {
             $sqls="SELECT * FROM student141512gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="21")
			 {
             $sqls="SELECT * FROM student141521gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="22")
			 {
             $sqls="SELECT * FROM student141522gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="31")
			 {
             $sqls="SELECT * FROM student141531gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="32")
			 {
             $sqls="SELECT * FROM student141532gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="41")
			 {
             $sqls="SELECT * FROM student141541gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="42")
			 {
             $sqls="SELECT * FROM student141542gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
 ?>