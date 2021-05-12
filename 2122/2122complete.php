<?php 

            if($yearsemester=="11")
			 {
             $sqls="SELECT * FROM student212211gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="12")
			 {
             $sqls="SELECT * FROM student212212gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="21")
			 {
             $sqls="SELECT * FROM student212221gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="22")
			 {
             $sqls="SELECT * FROM student212222gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="31")
			 {
             $sqls="SELECT * FROM student212231gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="32")
			 {
             $sqls="SELECT * FROM student212232gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="41")
			 {
             $sqls="SELECT * FROM student212241gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="42")
			 {
             $sqls="SELECT * FROM student212242gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
 ?>