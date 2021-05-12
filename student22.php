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
		
$shw=md5(sha1(md5($user_name)));
$shw=$shw.$shw;	
	
if(isset($_GET[$shw]))
{
  $new_data=$_GET[$shw];
}

include ('function.php');

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
			  $st=$row["status"];
			  "<br>";
    }
 }
$mainadmin=0;

 if($st=="student")
{
   $mainadmin=1;
}

if($new_data==md5(sha1(md5($_SESSION['user_name'])))  && $mainadmin==1 && $st=="student"):
     
include('batch.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Academic Information</title>
<link rel="icon" href="assets\ico\mbstu.ico" type="image/icon" />
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
<link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
<link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
<link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
<link rel="stylesheet" href="css/prism/prism.css" media="screen" >
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
<?php include('includes/topbar.php');?>
<div class="content-wrapper">
<div class="content-container">
<?php include('includes/leftbar.php');?>
<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">Academic Information</h2>
      </div>
    </div>
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li> Information</li>
          <li class="active">2nd Year 2nd Semester</li>
        </ul>
      </div>
    </div>
  </div>
  <section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="panel"> 
        <div class="panel-heading"> 
        <center><h4>Department of Information and Communication Technology, MBSTU</h4></center>
        <center>Grade sheet for 2nd Year 2nd Semester B.Sc(Engg.) Session: <?php echo $c ?></center>      
        <center>Name: <?php echo $a?></center>
        <center>Student ID: <?php echo $b?></center>
</div>
          <div class="panel-body p-20">      

          
 <table class="table">
  <tr class="success">
    <td width="3%"></td>
    <td><strong>Course Code</strong></td>
    <td><strong> Course Title</strong></td>
    <td><strong> Credit Hour(s)</strong></td>
    <td><strong> Letter Grade</strong></td>
    <td><strong> Grade Point</strong></td>
    <td rowspan="5" class="success"> <strong> Grade Point Average</strong></td>
  </tr>
  
  <tr class="active">
    <td></td>
    <td><?php echo $code22[0] ?></td>
    <td><?php echo $title22[0] ?></td>
    <td><?php echo $credit22[0] ?></td>
    <td><center><?php echo cheek($gp22[0]) ?></center></td>         
    <td><center><?php echo $gp22[0]?></center></td> 
  </tr>
  
  <tr class="active">
  <td></td>
    <td><?php echo $code22[1] ?></td>
    <td><?php echo $title22[1] ?></td>
    <td><?php echo $credit22[1] ?></td>
    <td><center><?php  echo cheek($gp22[1]) ?></center></td>       
    <td><center><?php echo $gp22[1]?></center></td>
  </tr>
  
  <tr class="active">
  <td></td>
     <td><?php echo $code22[2] ?></td>
    <td><?php echo $title22[2] ?></td>
    <td><?php echo $credit22[2] ?></td>
    <td><center><?php  echo cheek($gp22[2]) ?></center></td>
    <td><center><?php echo $gp22[2]?></center></td>
  </tr>
  <tr class="active">
  <td></td>
    <td><?php echo $code22[3] ?></td>
    <td><?php echo $title22[3] ?></td>
    <td><?php echo $credit22[3] ?></td>
    <td><center><?php  echo cheek($gp22[3]) ?></center></td>
    <td><center><?php echo $gp22[3]?></center></td>
  </tr>

  <tr class="active">
  <td></td>
    <td><?php echo $code22[4] ?></td>
    <td><?php echo $title22[4] ?></td>
    <td><?php echo $credit22[4] ?></td>
    <td><center><?php  echo cheek($gp22[4]) ?></center></td>
    <td><center><?php echo $gp22[4]?></center></td> 
    
    <td rowspan="1" class="success"> <center><?php $finalgpa22= gpa($gp22,$credit22); if($finalgpa22==0) echo "";else echo gpa($gp22,$credit22); ?></center></td>

   </tr>
  
  <tr class="active">
  <td></td>
    <td><?php echo $code22[5] ?></td>
    <td><?php echo $title22[5] ?></td>
    <td><?php echo $credit22[5] ?></td>
    <td><center><?php  echo cheek($gp22[5]) ?></center></td>
    <td><center><?php echo $gp22[5]?></center></td>
    <td rowspan="7" class="success"></td>

  </tr>
  
  <tr class="active">
  <td></td>
    <td><?php echo $code22[6] ?></td>
    <td><?php echo $title22[6] ?></td>
    <td><?php echo $credit22[6] ?></td>
    <td><center><?php  echo cheek($gp22[6]) ?></center></td>
    <td><center><?php echo $gp22[6]?></center></td> 
  </tr>
  
  <?php if(!empty($code22[7])): ?>
  <tr class="active">
  <td></td>
     <td><?php echo $code22[7] ?></td>
    <td><?php echo $title22[7] ?></td>
    <td><?php echo $credit22[7] ?></td>
    <td><center><?php  echo cheek($gp22[7]) ?></center></td>
    <td><center><?php echo $gp22[7]?></center></td> 
  </tr>
   <?php endif; ?>
  <?php if(!empty($code22[8])): ?>
  <tr class="active">
  <td></td>
     <td><?php echo $code22[8] ?></td>
    <td><?php echo $title22[8] ?></td>
    <td><?php echo $credit22[8] ?></td>
    <td><center><?php  echo cheek($gp22[8]) ?></center></td>
    <td><center><?php echo $gp22[8]?></center></td> 
  </tr>
  <?php endif; ?>
  <?php if(!empty($code22[9])): ?>
  <tr class="active">
  <td></td>
     <td><?php echo $code22[9] ?></td>
    <td><?php echo $title22[9] ?></td>
    <td><?php echo $credit22[9] ?></td>
    <td><center><?php  echo cheek($gp22[9]) ?></center></td>
    <td><center><?php echo $gp22[9]?></center></td>
  </tr>
   <?php endif; ?>
  <tr>
  <td colspan="6" class="success"></td>
  </tr>
</table>

<?php 

 $status=gpacheck22($finalgpa22); 
    if($status=="Result Not Yet Published"):
	 ?>
     <center><strong>Status: </strong> <strong class="color-warning"> <?php echo gpacheck22($finalgpa22);?> </strong> </center>
   <br>
    
   <?php endif ?>
   
   <?php 
   if($status=="Promoted"):
	 ?>
     <center><strong>Status: </strong> <strong class="color-success"> <?php echo gpacheck22($finalgpa22);?> </strong> </center>
   <br>
    
   <?php endif ?>
   
   <?php 
   if($status=="Not Promoted"):
	 ?>
     <center><strong>Status: </strong> <strong class="color-danger"> <?php echo gpacheck22($finalgpa22);?> </strong> </center>
   <br>
    
   <?php endif ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
<script src="js/jquery/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/pace/pace.min.js"></script> 
<script src="js/lobipanel/lobipanel.min.js"></script> 
<script src="js/iscroll/iscroll.js"></script> 
<script src="js/prism/prism.js"></script> 
<script src="js/DataTables/datatables.min.js"></script> 
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

if($new_data==md5(sha1(md5($_SESSION['user_name'])))  && $mainadmin==0):
header("Location:dashboard.php");
endif;

if($mainadmin==0):
header("Location:dashboard.php");
endif;
?>
</body>
</html>
