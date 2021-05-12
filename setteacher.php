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

if($st=="admin")
{
   $mainadmin=1;
}

if(isset($_POST['submit']))
{
	$teacherusername=$_POST['teacherusername'];
	$year=$_POST['year'];
	$semester=$_POST['semester'];
	$session4=$_POST['session']; 
	$batchno=$_POST['batchno'];
	
	if (!empty($teacherusername))
		{ 
		
		     $sql="SELECT * FROM user WHERE user_name='$teacherusername'";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult <1)
			  {
              array_push($errors, "Username does not exist, please try again.");
			  
             $sha=md5($user_name);
			 $content="setteacher.php?XsdgvcgcvXz@FCggVJyGYG%vvKIKhv45747551".$sha.$sha;
			 header('refresh:2;url='.$content);
              }
		 }
		 
		if (!empty($session4))
		{ 
		
		     $sql="SELECT * FROM tbatch WHERE session='$session4'";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult <1)
			  {
              array_push($errors, "Session does not exist, please try again.");
			  $sha=md5($user_name);
			  $content="setteacher.php?XsdgvcgcvXz@FCggVJyGYG%vvKIKhv45747551".$sha.$sha;
			  header('refresh:2;url='.$content);
              }
		 }
		 
		 if (!empty($batchno))
		{ 
		
		     $sql="SELECT * FROM tbatch WHERE batchno='$batchno'";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult <1)
			  {
              array_push($errors, "Batch number does not exist, please try again.");
			  $sha=md5($user_name);
			  $content="setteacher.php?XsdgvcgcvXz@FCggVJyGYG%vvKIKhv45747551".$sha.$sha;
			  header('refresh:2;url='.$content);
              }
		 }
		 
		  if (!empty($teacherusername))
		{ 
		
		     $sql="SELECT * FROM tbatch WHERE user_name='$teacherusername'";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult >0)
			  {
              array_push($errors, "Teacher already assigned, please try new teacher to assign.");
			  $sha=md5($user_name);
			  $content="setteacher.php?XsdgvcgcvXz@FCggVJyGYG%vvKIKhv45747551".$sha.$sha;
			  header('refresh:2;url='.$content);
              }
		 }
		 
		
		 
 if (count($errors) == 0)
			 {		
	 	
$sql="UPDATE tbatch SET user_name = '$teacherusername', year='$year', semester='$semester' WHERE session='$session4' AND batchno='$batchno'";

$sql2="UPDATE semester SET teacherkey = '$teacherusername' WHERE year='$year' AND semester='$semester'";
	
	if (mysqli_query($dbh, $sql2))
			{
			 if (mysqli_query($dbh, $sql))
				{		
				$msg="Teacher has been added successfully for this batch";	
				$sha=md5($user_name);
			    $content="viewteacher.php?XsDSXXErCXz@FCggVJyG".$sha."YG%vvKIKhv45747551".$sha;
			    header('refresh:2;url='.$content);
				}
			  else 
				{
				$error="Something went wrong. Please try again";
				$sha=md5($user_name);
			    $content="setteacher.php?XsdgvcgcvXz@FCggVJyGYG%vvKIKhv45747551".$sha.$sha;
			    header('refresh:2;url='.$content);
				}
			}
		else 
			{
			$error="Something went wrong. Please try again";
			 $sha=md5($user_name);
			 $content="setteacher.php?XsdgvcgcvXz@FCggVJyGYG%vvKIKhv45747551".$sha.$sha;
			 header('refresh:2;url='.$content);
			}

}
}

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin"):

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Teacher Information</title>
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
<?php include('includes/adminleftbar.php');?>
<!-- /.left-sidebar -->

<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">Teacher Information</h2>
      </div>
      
      <!-- /.col-md-6 text-right --> 
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Teacher Information</li>
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
            <form  class="form-group" method="post" >
             <?php include('errors.php'); ?>
             
     <table class="table"> <tr class="active"><td class="success" valign="middle"><center>Teacher's Information </center></td> </tr></table>
               <div class="col-sm-offset-0 col-sm-12"> 
               <table class="table"> 
               <tr class="active"><td colspan="4"> 
              <div class="form-group">
                <label for="default" class="col-sm-3 control-label">Teacher's Username Unique</label>
                <div class="col-sm-9">
                  <input type="text" name="teacherusername" class="form-control" id="teacherusername" placeholder="Enter Teache's Username" required="required">
                </div>
              </div>
              </td>
              </tr>
              <tr class="active">
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Year</label>
                <div class="col-sm-10">
                  <select name="year" class="form-control" id="year" required="required">
                    <option value="">Choose One</option>
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    <option value="4th">4th Year</option>
                  </select>
                </div>
              </div>
             </td>
             <td>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Semester</label>
                <div class="col-sm-10">
                  <select name="semester" class="form-control" id="semester" required="required">
                    <option value="">Choose One</option>
                    <option value="1st">1st Semester</option>
                    <option value="2nd">2nd Semester</option>
                  </select>
                </div>
              </div>
             </td>
             </tr>
             <tr class="active">
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label"> Session</label>
                <div class="col-sm-10">
                  <select name="session" class="form-control" id="session" required="required">
                    <option value="">Choose One</option>
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
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Batch</label>
                <div class="col-sm-10">
                 <select name="batchno" class="form-control" id="batchno" required="required">
                    <option value="">Choose One</option>
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
                </div>
              </div>
              </td>
              </tr>
              </table>
              </div>            
             
             
              
               
             <table class="table"> <tr class="active"><td class="success"></td> </tr></table>
              <div class="form-group">
                <div class="col-sm-10"><br>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                  <center>
                    <button type="submit" name="submit" class="btn btn-primary btn-labeled"> Add Information<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
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
