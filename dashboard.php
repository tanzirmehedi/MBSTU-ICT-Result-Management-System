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
		
if(isset($_SESSION['user_name']))
{
  $new_data=$_SESSION['user_name'];
}

include ('function.php');

 if (isset($_SESSION['user_name'])) :
         $user_name=$_SESSION['user_name'] ; 
         $password=$_SESSION['password'];
  endif;
  
$sql = "SELECT *FROM finish where user_name='$user_name'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
              $finish= $row["user_name"];
	   }
	}

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
			  $designation=$row["father"];
			  $organization=$row["mother"];
			  $phone=$row["phone"];
			  $email=$row["email"];
			  "<br>";
    }
 }
$mainadmin=0;

if($st=="admin" || $st=="teacher" || $st=="register" || $st=="teacher")
{
   $mainadmin=1;
}

 
     
include('batch.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Dashboard</title>
<link rel="icon" href="assets\ico\mbstu.ico" type="image/icon" />
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
<link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
<link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
<link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
<link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
<link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
<link rel="stylesheet" href="css/icheck/skins/line/red.css" >
<link rel="stylesheet" href="css/icheck/skins/line/green.css" >
<link rel="stylesheet" href="css/main.css" media="screen" >
<script src="js/modernizr/modernizr.min.js"></script>
<script src="js/background.js"></script>
</head>
<body class="top-navbar-fixed">
<div class="main-wrapper">

<?php include('includes/topbar.php'); ?>

<div class="content-wrapper">
<div class="content-container">

<?php if($new_data==$_SESSION['user_name']  && $mainadmin==0 && $st=="student"):
include('includes/leftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="teacher"):
include('includes/teacherleftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin"):
include('includes/adminleftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register"):
include('includes/registerleftbar.php');
endif ?>

<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-sm-6">
        <h2 class="title">Dashboard</h2>
      </div>
    </div>
  </div>
  <section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading"> </div>
          <div class="panel-body p-20">
          
          <?php if($new_data==$_SESSION['user_name']  && ($mainadmin==0) && ($st=="student")): ?>
          
            <table class="table">
              <tr class="success">
                <td></td>
                <td colspan="5"></td>
              </tr>
              <tr class="active">
                <td width="5%"></td>
                <td width="20%"><strong>Applicant's Name </strong></td>
                <td width="8%">:</td>
                <td><strong><?php echo $a; ?></strong></td>
              </tr>
              <tr  class="active">
                <td></td>
                <td>Student ID</td>
                <td> :</td>
                <td><?php echo $b; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Session</td>
                <td> :</td>
                <td><?php echo $c; ?></td>
              </tr>
              <tr class="success">
                <td></td>
                <td colspan="5"></td>
              </tr>
            </table>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-primary" href="dashboard.php"> <span class="number counter">
              <?php $totalcredit= totalcredit($credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($totalcredit==0) 
             echo "";
         else 
              echo  totalcredit($credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?>
              </span> <span class="name">Total Credit </span> <span class="bg-icon"><i class="fa fa-compass"></i></span> </a> </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-success" href="dashboard.php"> <span class="number counter">
              <?php $creditcomplete= creditcomplete($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($creditcomplete==0) 
             echo "";
         else 
              echo  creditcomplete($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?>
              </span> <span class="name">Credit Completed</span> <span class="bg-icon"><i class="fa fa-external-link"></i></span> </a> </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-danger" href="dashboard.php"> <span class="number counter">
              <?php $creditnotcomplete= creditnotcomplete($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($creditnotcomplete==0) 
             echo "";
         else 
              echo  creditnotcomplete($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?>
              </span> <span class="name">Backlog Credit</span> <span class="bg-icon"><i class="fa fa-ticket"></i></span> </a> </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-warning" href="dashboard.php"><span class="number">
              <?php $finalcgpa = cgpa($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($finalcgpa==0) 
             echo "0";
         else 
          echo  cgpa($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?>
              </span><span class="name">CGPA</span> <span class="bg-icon"><i class="fa fa-edit"></i></span> </a> </div>
            <table>
              <tr></tr>
            </table>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-warning" href="dashboard.php"> <span class="number counter">
              <?php $resultpublish= resultpublish($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($resultpublish==0) 
             echo "";
         else 
              echo  resultpublish($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?>
              </span> <span class="name">Result Published </span> <span class="bg-icon"><i class="fa fa-book"></i></span> </a> </div>
         
         <?php endif; ?>
         
         
          <?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin"):  ?>
            
            <?php 
            
             $sql="SELECT * FROM teacherinfo";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			 
			 
			 $sqls="SELECT * FROM user where status='student'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 
			 $sqla="SELECT * FROM user where status='admin'";
			 $resulta = mysqli_query($dbh,$sqla);
             $totaladmin = mysqli_num_rows($resulta);
			 
			 
			 $sqlb="SELECT * FROM tbatch";
			 $resultb  = mysqli_query($dbh,$sqlb);
             $totalbatch = mysqli_num_rows($resultb);
			 
			 
            ?>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-success" href="dashboard.php"> <span class="number counter">
              <?php echo $totaladmin; ?>
              </span> <span class="name">Total Admin</span> <span class="bg-icon"><i class="fa fa-user"></i></span> </a> </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-primary" href="dashboard.php"> <span class="number counter">
              <?php echo $totalNumRowResult; ?>
              </span> <span class="name">Total Teacher</span> <span class="bg-icon"><i class="fa fa-compass"></i></span> </a> </div>
              
              
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-success" href="dashboard.php"> <span class="number counter">
              <?php echo $totalstudent; ?>
              </span> <span class="name">Total Student</span> <span class="bg-icon"><i class="fa fa-external-link"></i></span> </a> </div>
              
              
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-danger" href="dashboard.php"> <span class="number counter">
              <?php echo $totalbatch; ?>
              </span> <span class="name">Total Batch</span> <span class="bg-icon"><i class="fa fa-ticket"></i></span> </a> </div>
              
              
              <table>
              <tr></tr>
            </table>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-warning" href="dashboard.php"><span class="number">
              <?php $finalcgpa = cgpa($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($finalcgpa==0) 
             echo "0";
         else 
          echo  cgpa($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?>
              </span><span class="name">Total Published Result</span> <span class="bg-icon"><i class="fa fa-edit"></i></span> </a> </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-danger" href="dashboard.php"> <span class="number counter">
              <?php $resultpublish= resultpublish($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($resultpublish==0) 
             echo "";
         else 
              echo  resultpublish($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?>
              </span> <span class="name">Pending Result</span> <span class="bg-icon"><i class="fa fa-book"></i></span> </a> </div>
         
         <?php endif; ?>
         
         <?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="teacher"):  ?>
           
            <?php 
            
			 
			 
			$sql="SELECT * FROM tbatch where user_name='$user_name'";
			$result = $dbh->query($sql);
			
			if ($result->num_rows > 0)
				{
				while($row = $result->fetch_assoc()) 
				   {

						  $sh= $row["session"];
						  $aw= $row["year"];
						  $on= $row["semester"];
				}
			 }
			 
			 $sqla="SELECT * FROM message";
			 $resulta = mysqli_query($dbh,$sqla);
             $totalmessage = mysqli_num_rows($resulta);
			 
			 
			 $sqlb="SELECT * FROM tbatch";
			 $resultb  = mysqli_query($dbh,$sqlb);
             $totalbatch = mysqli_num_rows($resultb);
 
			 
            ?>
            
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-success" href="dashboard.php"> <span class="number">
			  <?php if(empty($sh)){ echo "-";}else {echo $sh;} ?>
              </span> <span class="name">Session</span> <span class="bg-icon"><i class="fa fa-envelope-o"></i></span> </a> </div>
              
              
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-primary" href="dashboard.php"> <span class="number">
               <?php echo $aw ?> - <?php echo $on ?></span> <span class="name">Year-Semester</span> <span class="bg-icon"><i class="fa fa-ticket"></i></span> </a> </div>
              
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-success" href="dashboard.php"> <span class="number">
             0 %
              </span><span class="name">Progress</span> <span class="bg-icon"><i class="fa fa-external-link"></i></span> </a> </div>
              
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-warning" href="dashboard.php"><span class="number counter">
              0
              </span><span class="name">Result Completed</span> <span class="bg-icon"><i class="fa fa-edit"></i></span> </a> </div>
            <table>
              <tr></tr>
            </table>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-danger" href="dashboard.php"> <span class="number counter">
             0
              </span> <span class="name">Result Not Completed</span> <span class="bg-icon"><i class="fa fa-book"></i></span> </a> </div>
                   
         <?php endif; ?>
         
         
          <?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register"):  ?>
           
            <?php 
            
			 
			 
			 $sqls="SELECT * FROM user where status='student'";
			 $results = mysqli_query($dbh,$sqls);
             $totalstudent = mysqli_num_rows($results);
			 
			 $sqla="SELECT * FROM message";
			 $resulta = mysqli_query($dbh,$sqla);
             $totalmessage = mysqli_num_rows($resulta);
			 
			 
			 $sqlb="SELECT * FROM tbatch";
			 $resultb  = mysqli_query($dbh,$sqlb);
             $totalbatch = mysqli_num_rows($resultb);
 
			 
            ?>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-warning" href="dashboard.php"> <span class="number counter">
              <?php echo $totalmessage; ?>
              </span> <span class="name">Total Message</span> <span class="bg-icon"><i class="fa fa-envelope-o"></i></span> </a> </div>
              
              
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-primary" href="dashboard.php"> <span class="number counter">
              <?php echo $totalbatch; ?>
              </span> <span class="name">Total Batch</span> <span class="bg-icon"><i class="fa fa-ticket"></i></span> </a> </div>
              
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat bg-success" href="dashboard.php"> <span class="number counter">
              <?php echo $totalstudent; ?>
              </span> <span class="name">Total Student</span> <span class="bg-icon"><i class="fa fa-external-link"></i></span> </a> </div>
                   
         <?php endif; ?>
         
          </div>
        </div>
        </section>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script src="js/jquery/jquery-2.2.4.min.js"></script> 
<script src="js/jquery-ui/jquery-ui.min.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/pace/pace.min.js"></script> 
<script src="js/lobipanel/lobipanel.min.js"></script> 
<script src="js/iscroll/iscroll.js"></script> 
<script src="js/prism/prism.js"></script> 
<script src="js/waypoint/waypoints.min.js"></script> 
<script src="js/counterUp/jquery.counterup.min.js"></script> 
<script src="js/amcharts/amcharts.js"></script> 
<script src="js/amcharts/serial.js"></script> 
<script src="js/amcharts/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
<script src="js/amcharts/themes/light.js"></script> 
<script src="js/toastr/toastr.min.js"></script> 
<script src="js/icheck/icheck.min.js"></script> 
<script src="js/main.js"></script> 
<script src="js/production-chart.js"></script> 
<script src="js/traffic-chart.js"></script> 
<script src="js/task-list.js"></script> 
<script>
            $(function(){

                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome <?php echo $a; ?>");

            });
        </script> 
        
<?php include("footer.php");       

?>

</body>
</html>

