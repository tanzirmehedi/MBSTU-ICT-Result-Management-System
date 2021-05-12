<?php 

            if($yearsemester=="11")
			 {
             $sqls="SELECT * FROM student151611gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="12")
			 {
             $sqls="SELECT * FROM student151612gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
			 if($yearsemester=="21")
			 {
             $sqls="SELECT * FROM student151621gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="22")
			 {
             $sqls="SELECT * FROM student151622gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="31")
			 {
             $sqls="SELECT * FROM student151631gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="32")
			 {
             $sqls="SELECT * FROM student151632gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="41")
			 {
             $sqls="SELECT * FROM student151641gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 if($yearsemester=="42")
			 {
             $sqls="SELECT * FROM student151642gp where id='$cheeking'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 }
			 
 ?>