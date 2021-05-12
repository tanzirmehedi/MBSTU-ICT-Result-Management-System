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


if(isset($_POST['update']))
{
	$sha=md5($user_name);
    $sha=$sha.$sha;
	$mai="XSTHEAJAUWLOGN4784$5$3324bjhv".$sha;
   
		$cid=intval($_GET[$mai]);
		$sql = "SELECT * FROM teacherinfo where auto_id='$cid'";
		$result = $dbh->query($sql);
		if ($result->num_rows > 0) 
		   {
			while($row = $result->fetch_assoc())
			 {
				 $tuser= $row['teacherusername'];
			 }
		   }

	$teachername=$_POST['teachername'];
	$designation=$_POST['designation']; 
	$organization=$_POST['organization'];
	$status=$_POST['status'];
	$phonenumber=$_POST['phonenumber'];
	$emailid=$_POST['emailid'];
	$cid=$_POST['cid'];
	
	$sql="UPDATE teacherinfo set teachername='$teachername',designation='$designation',organization='$organization',status='$status',phonenumber='$phonenumber',email='$emailid' where auto_id= '$cid' AND teacherusername='$tuser'";
	
	$sqlt="UPDATE user set name='$teachername',father='$designation',mother='$organization',status='$status',phone='$phonenumber',email='$emailid' where user_name='$tuser'";
	
	if (mysqli_query($dbh, $sqlt))
	  {
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			 $sha=md5($user_name);
			 $content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			 $sha=md5($user_name);
			 $content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
	  }
	  else 
			{
			$error="Something went wrong. Please try again";
			 $sha=md5($user_name);
			 $content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
}

if(isset($_POST['delete']))
{
	$sha=md5($user_name);
    $sha=$sha.$sha;
	$mai="XSTHEAJAUWLOGN4784$5$3324bjhv".$sha;
   
		$cid=intval($_GET[$mai]);
		$sql = "SELECT * FROM teacherinfo where auto_id='$cid'";
		$result = $dbh->query($sql);
		if ($result->num_rows > 0) 
		   {
			while($row = $result->fetch_assoc())
			 {
				 $tuser= $row['teacherusername'];
			 }
		   }
	
	$teachername=$_POST['teachername'];
	$designation=$_POST['designation']; 
	$organization=$_POST['organization'];
	$status=$_POST['status'];
	$phonenumber=$_POST['phonenumber'];
	$emailid=$_POST['emailid'];
	$cid=$_POST['cid'];
	
	$sql = "SELECT * FROM teacherinfo where auto_id='$cid'";	
    $result = $dbh->query($sql);
		if ($result->num_rows > 0) 
		   {
			while($row = $result->fetch_assoc())
				{
					$mainteachername=$row['teachername'];
					$maindesignation=$row['designation'];
					$mainorganization=$row['organization'];
					$mainstatus=$row['status'];
					$mainphonenumber=$row['phonenumber'];
					$mainemailid=$row['email'];
					$maincid=$row['auto_id'];
				}
		   }
if($maincid==$cid && $mainteachername==$teachername && $maindesignation==$designation && $mainorganization==$organization && $mainstatus==$status && $mainphonenumber==$phonenumber && $mainemailid==$emailid)
{
	$sqll="DELETE FROM teacherinfo WHERE auto_id='$cid'";
	$sqllt="DELETE FROM user WHERE user_name='$tuser'";
	
	if (mysqli_query($dbh, $sqll))
	  {
	     if (mysqli_query($dbh, $sqllt))
		   {		
			$msg="Data has been deleted successfully";	
			 $sha=md5($user_name);
			 $content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 $sha=md5($user_name);
			 $content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
	  }
	  else 
			{
			$error="Something went wrong. Please try again";
			 $sha=md5($user_name);
			 $content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
	  
	}
	else 
	    {
		$error="Something went wrong. Please try again";
		 $sha=md5($user_name);
		$content="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
		header('refresh:1;url='.$content);
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
        <h2 class="title">Update Teacher Information</h2>
      </div>
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="#">Information</a></li>
          <li class="active">Update Teacher information</li>
        </ul>
      </div>
    </div>
  </div>
  
  <section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="result_display"></div>
        <div class="panel panel-default"><br>
        <div class="panel-heading">Please provide corresponding informations </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
              
            <?php if($msg){?>
            <br><div class="alert alert-success left-icon-alert" role="alert">
             <strong>Well done! </strong><?php echo $msg; ?>
             </div><?php } 
             else if($error){?>
             <div class="alert alert-danger left-icon-alert" role="alert">
             <strong>Oh snap!</strong> <?php echo $error; ?>
             </div>
              <?php } ?>
        
		<?php 
		$sha=md5($user_name);
        $sha=$sha.$sha;
	    $mai="XSTHEAJAUWLOGN4784$5$3324bjhv".$sha;
		$cid=intval($_GET[$mai]);
		
		$sql = "SELECT * FROM teacherinfo where auto_id='$cid'";
		$result = $dbh->query($sql);
		if ($result->num_rows > 0) 
		   {
			while($row = $result->fetch_assoc())
			 {
				 $tuser= $row['teacherusername'];
		 ?>
               <form  class="form-group" method="post">
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Teacher's Name</label>
                <div class="col-sm-10">
                  <input type="text" name="teachername" class="form-control" value="<?php echo $row['teachername']?>" id="teachername" required="required" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Designation</label>
                <div class="col-sm-10">
                  <input type="text" name="designation" class="form-control" value="<?php echo $row['designation']?>" id="designation" required="required" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Organization</label>
                <div class="col-sm-10">
                  <input type="text" name="organization" class="form-control" value="<?php echo $row['organization']?>"id="organization" required="required" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Phone Number </label>
                <div class="col-sm-10">
                  <input type="number" name="phonenumber" class="form-control" value="<?php echo $row['phonenumber']?>" id="phonenumber" required="required"  maxlength="11" autocomplete="off">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Email ID </label>
                <div class="col-sm-10">
                  <input type="email" name="emailid" class="form-control" value="<?php echo $row['email']?>" id="emailid" required="required" autocomplete="off">
                  <input type="hidden" class="form-control"  name="cid" value="<?php echo $row['auto_id']?>">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Teacher Status</label>
                <div class="col-sm-10">
                  <select name="status" class="form-control" id="status" required="required" >
                    <option value="<?php echo $row['status']?>">Select Status (Default his/her ststus) </option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="register">Register</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12"><br>
                </div>
              </div>
                  <center>
                    <button type="submit" name="update" class="btn btn-success btn-labeled">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                    
                    <button type="submit" name="delete" class="btn btn-danger btn-labeled">Delete<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                  </center>
                  
                </form>

            
            <?php }} ?>
           <br> 
        </div>
      </div>
    </div>
    <!-- /.col-md-8 col-md-offset-2 --> 
  </div>
  <!-- /.row --> 
  
</div>
<!-- /.container-fluid -->
</section>
<!-- /.section -->

</div>
<!-- /.main-page --> 

<!-- /.right-sidebar -->

</div>
<!-- /.content-container -->
</div>
<!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper --> 

<!-- ========== COMMON JS FILES ========== --> 
<script src="js/jquery/jquery-2.2.4.min.js"></script> 
<script src="js/jquery-ui/jquery-ui.min.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/pace/pace.min.js"></script> 
<script src="js/lobipanel/lobipanel.min.js"></script> 
<script src="js/iscroll/iscroll.js"></script> 

<!-- ========== PAGE JS FILES ========== --> 
<script src="js/prism/prism.js"></script> 

<!-- ========== THEME JS ========== --> 
<script src="js/main.js"></script>
<?php include("footer.php");       
endif; 
if($new_data==$_SESSION['user_name']  && $mainadmin==0):
header("Location:dashboard.php");
endif ?>
</body>
</html>