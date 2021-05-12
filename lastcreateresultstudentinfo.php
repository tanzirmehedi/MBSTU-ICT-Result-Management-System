<?php
	session_start();
	error_reporting(0);
	
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
	
	include('includes/indexconfig.php');
	
	if(!isset($_SESSION["user_name"]))
	    {
		  header("Location:index.php");
		}
	if(isset($_SESSION['user_name']))
		{
	  	  $user_name=$_SESSION['user_name'];
		}
$session="";
		
if(isset($_SESSION['user_name']))
{
  $new_data=$_SESSION['user_name'];
}

 if (isset($_SESSION['user_name'])) :
         $user_name=$_SESSION['user_name'] ; 
         $password=$_SESSION['password'];
  endif;

$sql = "SELECT *FROM user where user_name='$user_name' AND password='$password'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
              $a= $row["name"];
		      $b= $row["id"];
			  $c= $row["session"];
			  $d= $row["batch"];
			  $e= $row["sscboard"];
		      $f= $row["sscgpa"];
			  $g= $row["sscyear"];
			  $h= $row["hscboard"];
			  $i= $row["hscgpa"];
		      $j= $row["hscyear"];
			  $k=$row["image"];
			  $st=$row["status"];
			  "<br>";
    }
 }
 
 
 $sql = "SELECT *FROM finish where user_name='$user_name'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
              $finish= $row["user_name"];
	   }
	}
	

$mainadmin=0;

if($st=="admin" ||$st=="teacher")
{
   $mainadmin=1;
}

$session = $_SESSION['session'];

if(($new_data==$_SESSION['user_name']  && $mainadmin==1 && (!empty($session))&& $st=="admin" || $st=="teacher")):

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Student Information</title>
<link rel="icon" href="assets\ico\mbstu.ico" type="image/icon" />
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
<link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
<link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
<link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
<link rel="stylesheet" href="css/prism/prism.css" media="screen" >
<!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
<link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
<link rel="stylesheet" href="css/main.css" media="screen" >
<script src="js/modernizr/modernizr.min.js"></script>
<style>
.errorWrap {
	padding: 10px;
	margin: 0 0 20px 0;
	background: #fff;
	border-left: 4px solid #dd3d36;
	-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
}
.succWrap {
	padding: 10px;
	margin: 0 0 20px 0;
	background: #fff;
	border-left: 4px solid #5cb85c;
	-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
}
</style>
</head>
<body class="top-navbar-fixed">
<div class="main-wrapper">
<?php  include('includes/topbar.php'); ?>
<div class="content-wrapper">
<div class="content-container">
<?php 
if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin"):
include('includes/adminleftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register"):
include('includes/registerleftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="teacher"):
include('includes/teacherleftbar.php');
endif ?>
<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">All Student's Information</h2>
      </div>
      
      <!-- /.col-md-6 text-right --> 
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li> Information</li>
          <li class="active">Student's Information</li>
        </ul>
      </div>
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container-fluid -->
  
  <section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <h5>Check and Update Corresponding student information for session  <strong><?php echo $session ?></strong> </h5>
            </div>
          </div>
          <?php if($msg){?>
          <div class="alert alert-success left-icon-alert" role="alert"> <strong> Well done!</strong><?php echo htmlentities($msg); ?> </div>
          <?php } 
else if($error){?>
          <div class="alert alert-danger left-icon-alert" role="alert"> <strong>Oh snap!</strong> <?php echo htmlentities($error); ?> </div>
          <?php } ?>
          <div class="panel-body p-20">
            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>GPA</th>
                  <th>LG</th>
                  <th>CO / CE</th>
                  <th>Updation Date</th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
			<?php
			
			$sql = "SELECT *FROM semester where teacherkey='$user_name'";
            $result = $dbh->query($sql);
            if ($result->num_rows > 0) 
               {
                while($row = $result->fetch_assoc())
                 {
                         
                            $year= $row['year'];
                            $semester= $row['semester'];
				 }
			   }
			   
			 $year=substr($year,0,1);
			 $semester=substr($semester,0,1);			
			 $yearsemester=$year.$semester;
			 include('marksfunction.php');			
             $sql = "SELECT *FROM user where session='$session'";
             $result = $dbh->query($sql);
             $cnt=1;
             if ($result->num_rows > 0) 
               {
                while($row = $result->fetch_assoc())
                 {
             ?>
                           <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><center><?php $finalgpa= semestergpa($yearsemester,$session,$row['id']); if($finalgpa==0) echo "";else echo semestergpa($yearsemester,$session,$row['id']); ?> </center></td>
                            <td><center><?php  checking($finalgpa);if ($finalgpa==0) echo "" ; else echo checking($finalgpa) ?></center></td>
                            <td><center><?php $fi= co($yearsemester,$session,$row['id']); if($fi==0) echo "";else echo co($yearsemester,$session,$row['id']); ?> / <?php $fi= ce($yearsemester,$session,$row['id']); if($fi==0) echo "0";else echo ce($yearsemester,$session,$row['id']); ?> </center></td>
                            <td><?php echo $row['updatetime'];?></td>
                          
                           <td><a href="insertmarks.php?eb54c0d10f987429551feea863502171XsErCXz@FCggVJyGYG%vvKIKhv45747551eb54c0d10f987429551feea863502171=<?php echo $row['id'];?>"><?php $ci= checkk($row['id'],$session,$yearsemester); if( $ci==1){ echo "Update"; } else { echo "<i class='fa fa-edit' title='Create Result'></i> ";}?> </a></td>
                     
                          </tr>
            
                <?php $cnt=$cnt+1;}} ?>  
              </tbody>
            </table>
            
            <!-- /.col-md-12 --> 
          </div>
        </div>
      </div>
      <!-- /.col-md-6 --> 
      
    </div>
    <!-- /.col-md-12 --> 
  </div>
</div>
<!-- /.panel -->
</div>
<!-- /.col-md-6 -->

</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
</section>
<!-- /.section -->

</div>
<!-- /.main-page -->

</div>
<!-- /.content-container -->
</div>
<!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper --> 

<!-- ========== COMMON JS FILES ========== --> 
<script src="js/jquery/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/pace/pace.min.js"></script> 
<script src="js/lobipanel/lobipanel.min.js"></script> 
<script src="js/iscroll/iscroll.js"></script> 

<!-- ========== PAGE JS FILES ========== --> 
<script src="js/prism/prism.js"></script> 
<script src="js/DataTables/datatables.min.js"></script> 

<!-- ========== THEME JS ========== --> 
<script src="js/main.js"></script> 
<script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
 
<?php include("footer.php");  
 
endif; 
if($new_data==$_SESSION['user_name'] && (empty($session))):
header("Location:dashboard.php");
endif ?>
</body>
</html>
