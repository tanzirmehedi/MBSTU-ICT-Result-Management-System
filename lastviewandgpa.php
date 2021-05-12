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

include ('function.php');

		
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

if($st=="admin" || $st=="teacher")
{
   $mainadmin=1;
}

$newid = $_SESSION['newid'];
$session = $_SESSION['session'];

			
			$sql = "SELECT *FROM semester where teacherkey='$user_name'";
            $result = $dbh->query($sql);
            if ($result->num_rows > 0) 
               {
                while($row = $result->fetch_assoc())
                 {
                         
                            $year1= $row['year'];
                            $semester1= $row['semester'];
				 }
			   }
			   
			 $year=substr($year1,0,1);
			 $semester=substr($semester1,0,1);			
			 $yearsemester=$year.$semester;			 			 
			 include('marksfunction.php');	

$sql = "SELECT *FROM user where session='$session' AND id='$newid'";
             $result = $dbh->query($sql);

             if ($result->num_rows > 0) 
               {
                while($row = $result->fetch_assoc())
                 {
					 $id=$row['id'];
					 $name=$row['name'];
					 
				 }
			   }

 if(isset($_POST['finishi']))
{
	        $session=$_POST['session'];
			$_SESSION['session'] = $session;	
			$msg="Wait few secounds";	
			$sha=md5($user_name);
			$content="lastcreateresultstudentinfo.php?XsErCXz".$sha."@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			header('refresh:1;url='.$content);
}
	 		  		

$b=$newid;
include('batch7.php');
 
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

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="teacher"):
include('includes/teacherleftbar.php');
endif ?>
<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">Mark's Review</h2>
      </div>
      
      <!-- /.col-md-6 text-right --> 
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li> Result</li>
          <li class="active">Student's Mark Review</li>
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
         <?php if($msg){?>
          <div class="alert alert-success left-icon-alert" role="alert"> <strong> Well done!</strong><?php echo htmlentities($msg); ?> </div>
          <?php } 
else if($error){?>
          <div class="alert alert-danger left-icon-alert" role="alert"> <strong>Oh snap!</strong> <?php echo htmlentities($error); ?> </div>
          <?php } ?>
        
        <center><h4>Department of Information and Communication Technology, MBSTU</h4></center>
        <center>Grade sheet for <?php echo $year1 ?> Year <?php echo $semester1 ?> Semester B.Sc(Engg.) Session: <?php echo $session ?></center> 
        <center>Credit Offered / Earned: <?php 
  $fi= co($yearsemester,$session,$id); if($fi==0) echo "";else echo co($yearsemester,$session,$id); ?> / <?php $fi= ce($yearsemester,$session,$id); if($fi==0) echo "0";else echo ce($yearsemester,$session,$id);?></center>     
        <center>Name: <?php echo $name?></center>
        <center>Student ID: <?php echo $id?></center>       
        </div>
          <div class="panel-body p-20">  
          <?php 
		  
		  if($yearsemester=="11") 
		  {                       
             include('last11.php');
		  }
		  
		  if($yearsemester=="12") 
		  {                       
             include('last12.php');
		  }
		  
		  if($yearsemester=="21") 
		  {                       
             include('last21.php');
		  }
		  
		  if($yearsemester=="22") 
		  {                       
             include('last22.php');
		  }
		  
		  if($yearsemester=="31") 
		  {                       
             include('last31.php');
		  }
		   if($yearsemester=="32") 
		  {                       
             include('last32.php');
		  }
		  
		  if($yearsemester=="41") 
		  {                       
             include('last41.php');
		  }
		  
		  if($yearsemester=="42") 
		  {                       
             include('last42.php');
		  }
		  ?>
	              <form role="form" method="post" class="login-form">
                 <br>
                  <input type="hidden" name="session" class="form-control" value="<?php echo $session ; ?>" id="session"  readonly required="required ">
                  <center><button type="submit" name="finishi" class="btn btn-success btn-labeled">Finish<span class="btn-label btn-label-right"><i class="fa fa-angle-double-right"></i></span></button>
                  </center>
                </form>
            
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