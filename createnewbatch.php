<?php
	session_start();
	error_reporting(0);
	$errors = array(); 
	
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
$mainadmin=0;

if($st=="register")
{
   $mainadmin=1;
}

if(isset($_POST['submit']))
{
	$session=$_POST['session'];
	$batchno=$_POST['batchno'];
	$exam=$_POST['exam']; 
	
	
	if (!empty($session))
		{ 
		
		     $sql="SELECT * FROM tbatch WHERE session='$session'";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Session already exist, please try new one.");
			  header('refresh:3;url=createnewbatch.php');
              }
		 }
		if (!empty($batchno))
		 { 
		
		     $sql="SELECT * FROM tbatch WHERE batchno='$batchno'";
			 $result  = mysqli_query($dbh,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Batch already exist, please try new one.");
			  header('refresh:3;url=createnewbatch.php');
              }
		 }

 if (count($errors) == 0)
			 {		
	 	
$sql="INSERT INTO tbatch (session,batchno,exam) VALUES('$session','$batchno','$exam')";
	

		  if (mysqli_query($dbh, $sql))
			{		
			$msg="You can see subjects with corrosponging credits within few secounds by clicking action button";	
			header('refresh:1;url=viewallbatch.php');

			
			}
		  else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=createnewbatch.php');
			}
}
}
if($new_data==$_SESSION['user_name']  && $mainadmin==1):

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Batch Information</title>
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
</head>
<body class="top-navbar-fixed">
<div class="main-wrapper">

<!-- ========== TOP NAVBAR ========== -->
<?php include('includes/topbar.php');?>
<!-----End Top bar>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
<div class="content-wrapper">
<div class="content-container">

<!-- ========== LEFT SIDEBAR ========== -->
<?php include('includes/registerleftbar.php');?>
<!-- /.left-sidebar -->

<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">Add New Batch</h2>
      </div>
      
      <!-- /.col-md-6 text-right --> 
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Add Batch Information</li>
        </ul>
      </div>
    </div>
    <!-- /.row --> 
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12"><br>
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <h5>Please provide corresponding informations</h5>
            </div>
          </div>
          <div class="panel-body">
            <?php if($msg){?>
            <div class="alert alert-success left-icon-alert" role="alert"> <strong>Well done! </strong> <?php echo htmlentities($msg); ?> </div>
            <?php } 
            else if($error){?>
            <div class="alert alert-danger left-icon-alert" role="alert"> <strong>Oh snap! </strong> <?php echo htmlentities($error); ?> </div>
            <?php } ?>
            <form  class="form-group" method="post">
             <?php include('errors.php'); ?>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Batch Session</label>
                <div class="col-sm-10">
                  <select name="session" class="form-control" id="session" required="required">
                    <option value="">Select One</option>
                    <option value="2013-2014">2013-2014</option>
                    <option value="2014-2015">2014-2015</option>
                    <option value="2015-2016">2015-2016</option>
                    <option value="2016-2017">2016-2017</option>
                    <option value="2017-2018">2017-2018</option>
                    <option value="2018-2019">2018-2019</option>
                    <option value="2019-2020">2019-2020</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                  </select>
                </div><br>
              </div>
              
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Batch Number</label>
                <div class="col-sm-10">
                  <select name="batchno" class="form-control" id="batchno" required="required">
                    <option value="">Select One</option>
                    <option value="11 th Batch">11<sup>th</sup> Batch</option>
                    <option value="12 th Batch">12<sup>th</sup> Batch</option>
                    <option value="13 th Batch">13<sup>th</sup> Batch</option>
                    <option value="14 th Batch">14<sup>th</sup> Batch</option>
                    <option value="15 th Batch">15<sup>th</sup> Batch</option>
                    <option value="16 th Batch">16<sup>th</sup> Batch</option>
                    <option value="17 th Batch">17<sup>th</sup> Batch</option>
                    <option value="18 th Batch">18<sup>th</sup> Batch</option>
                    <option value="19 th Batch">19<sup>th</sup> Batch</option>
                    <option value="20 th Batch">20<sup>th</sup> Batch</option>
                    <option value="21 th Batch">21<sup>th</sup> Batch</option>
                    <option value="22 th Batch">22<sup>th</sup> Batch</option>
                  </select>
                </div><br>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Examination</label>
                <div class="col-sm-10">
                  <select name="exam" class="form-control" id="exam" required="required">
                    <option value="">Select One</option>
                    <option value="Graduate">Graduate</option>
                    <option value="Undergraduate">Undergraduate</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10"><br>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                  <center>
                    <button type="submit" name="submit" class="btn btn-primary btn-labeled"> Next<span class="btn-label btn-label-right"><i class="fa fa-angle-double-right"></i></span></button>
                  </center><br>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.col-md-12 --> 
    </div>
  </div>
</div>
<!-- /.content-container -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- /.main-wrapper --> 
<script src="js/jquery/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/pace/pace.min.js"></script> 
<script src="js/lobipanel/lobipanel.min.js"></script> 
<script src="js/iscroll/iscroll.js"></script> 
<script src="js/prism/prism.js"></script> 
<script src="js/select2/select2.min.js"></script> 
<script src="js/main.js"></script> 
<script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
<?php include("footer.php");       
endif; 
if($new_data==$_SESSION['user_name']  && $mainadmin==0):
header("Location:dashboard.php");
endif ?>
</body>
</html>
