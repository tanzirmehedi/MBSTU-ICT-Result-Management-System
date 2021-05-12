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
$session = $_SESSION['session'];

if(isset($_POST['update']))
{
	$id=$_POST['cid'];		
	$newid=$_POST['newid'];
	$name=$_POST['sname']; 
	$mobileno=$_POST['mobileno'];


    if (!empty($mobileno))
		 { 
		
		     $sql="SELECT * FROM user WHERE phone='$mobileno'";
			 $result  = mysqli_query($dbh,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 1)
			  {
              array_push($errors, "Phone number already exist, please try new one.");
			  header('refresh:3;url=managestudentinfo.php');
              }
		 }
		 if (!empty($newid))
		 { 
		
		     $sql="SELECT * FROM user WHERE id='$newid'";
			 $result  = mysqli_query($dbh,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 1)
			  {
              array_push($errors, "Student ID already exist, please try new one.");
			  header('refresh:3;url=managestudentinfo.php');
              }
		 }
		 
 if (count($errors) == 0)
			 {	
	     	   
	$sql="UPDATE user set id='$newid',name='$name',phone='$mobileno' where id= '$id'";
	
	
		if (mysqli_query($dbh, $sql))
			{		
			$msg="Data has been updated successfully";	
			header('refresh:2;url=managestudentinfo.php');
			}
	     else 
			{
			$error="Something went wrong. Please try again";
			header('refresh:2;url=updateactionstudent.php');
			}
}

}

if(isset($_POST['delete']))
{
	$id=$_POST['cid'];		
	
	$sqll="DELETE FROM user WHERE id='$id'";
	
		if (mysqli_query($dbh, $sqll))
		   {		
			$msg="Data has been deleted successfully";	
			header('refresh:2;url=managestudentinfo.php');
			}
		 else 
			{
			$error="Something went wrong. Please try again";
			 header('refresh:2;url=managestudentinfo.php');
			}
 }	 
 	
if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register"):
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Student's Information</title>
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
        <h2 class="title">Update Student's Information</h2>
      </div>
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="#">Information</a></li>
          <li class="active">Update Student's information</li>
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
        <div class="panel-heading">Please provide corresponding informations<?php echo $myStr ?></div>
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
		
$id=($_GET['XSTHEAJAUWLOGN4784$5$3324bjhv']);		
{	
$sql="SELECT *FROM user where id='$id' ";
}
	 
		$result = $dbh->query($sql);
		if ($result->num_rows > 0) 
		   {
			while($row = $result->fetch_assoc())
			 {
		 ?>
               <form  class="form-group" method="post">
               <?php include('errors.php'); ?>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Applicant's ID</label>
                <div class="col-sm-10">
                  <input type="text" name="newid" class="form-control" value="<?php echo $row['id']?>" placeholder="IT-14012"id="newid" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Applicant's Name</label>
                <div class="col-sm-10">
                  <input type="text" name="sname" class="form-control" value="<?php echo $row['name']?>" id="sname" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Mobile Number</label>
                <div class="col-sm-10">
                  <input type="text" name="mobileno" class="form-control" value="<?php echo $row['phone']?>" id="mobileno" required="required" maxlength="11">
                  <input type="hidden" class="form-control"  name="cid" value="<?php echo $row['id']?>">
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

            <?php }}?>
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