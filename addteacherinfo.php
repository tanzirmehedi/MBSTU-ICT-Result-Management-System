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
	$teachername=$_POST['teachername'];
	$teacherusername=$_POST['teacherusername'];
	$designation=$_POST['designation']; 
	$organization=$_POST['organization'];
	$status=$_POST['status'];
	$phonenumber=$_POST['phonenumber'];
	$emailid=$_POST['emailid'];
	$teacherpassword=md5($_POST['teacherpassword']);
	
	
	if (!empty($teacherusername) && (!empty($teacherpassword)))
		{ 
		
		     $sql="SELECT * FROM user WHERE user_name='$teacherusername'";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
			  
              array_push($errors, "Username already exist, please try new one.");
			  $sha=md5($user_name);
			  $content="addteacherinfo.php?XsErCXz@".$sha."FCggVJyGGFFDGTRCDG%vvKIKhv45747551".$sha;
			  header('refresh:2;url='.$content);
              }
		 }
		if (!empty($emailid))
		 { 
		
		     $sql="SELECT * FROM user WHERE email='$emailid'";
			 $result  = mysqli_query($dbh,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Email already exist, please try new one.");
			  $sha=md5($user_name);
			  $content="addteacherinfo.php?XsErCXz@".$sha."FCggVJyGGFFDGTRCDG%vvKIKhv45747551".$sha;
			  header('refresh:2;url='.$content);
              }
		 }
 if (count($errors) == 0)
			 {		
	 	
$sql="INSERT INTO teacherinfo (teacherusername,teachername,designation,organization,status,phonenumber,email,teacherpassword) VALUES('$teacherusername','$teachername','$designation','$organization','$status','$phonenumber','$emailid','$teacherpassword')";
	
$sqlt="INSERT INTO user (name,father,mother,status,phone,email,password,user_name) VALUES('$teachername','$designation','$organization','$status','$phonenumber','$emailid','$teacherpassword','$teacherusername')";
	
	if (mysqli_query($dbh, $sqlt))
	{
		  if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been added successfully";
		     $sha=md5($user_name);
			 $content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
		  else 
			{
			 $error="Something went wrong. Please try again";
			 $sha=md5($user_name);
			 $content="addteacherinfo.php?XsErCXz@".$sha."FCggVJyGGFFDGTRCDG%vvKIKhv45747551".$sha;
			 header('refresh:2;url='.$content);
			}
	}
	else 
		{
		  $error="Something went wrong. Please try again";
		  $sha=md5($user_name);
		  $content="addteacherinfo.php?XsErCXz@".$sha."FCggVJyGGFFDGTRCDG%vvKIKhv45747551".$sha;
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
<title><?php echo $user_name; ?> | Teacher's Information</title>
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
        <h2 class="title">Add Teacher Information</h2>
      </div>
      
      <!-- /.col-md-6 text-right --> 
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Add Teacher Information</li>
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
                <label for="default" class="col-sm-2 control-label">Teacher's Name</label>
                <div class="col-sm-10">
                  <input type="text" name="teachername" class="form-control" id="teachername" required="required" autocomplete="off">
                </div>
              </div>
              
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Choose Username</label>
                <div class="col-sm-10">
                  <input type="text" name="teacherusername" class="form-control" id="teacherusername" required="required" autocomplete="off">
                </div>
              </div>
              
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Designation</label>
                <div class="col-sm-10">
                  <input type="text" name="designation" class="form-control" id="designation" required="required" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Organization</label>
                <div class="col-sm-10">
                  <input type="text" name="organization" class="form-control" id="organization" required="required" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Phone Number </label>
                <div class="col-sm-10">
                  <input type="text" name="phonenumber" class="form-control" id="rollid" required="required"  maxlength="11" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Email ID </label>
                <div class="col-sm-10">
                  <input type="email" name="emailid" class="form-control" id="emailid" required="required" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Enter Password</label>
                <div class="col-sm-10">
                  <input type="password" name="teacherpassword" class="form-control" id="teacherpassword" required="required" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Teacher Status</label>
                <div class="col-sm-10">
                  <select name="status" class="form-control" id="status" required="required">
                    <option value="">Select Status</option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="register">Register</option>
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
