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
			  $ii= $row["hscgpa"];
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
<title> <?php echo $user_name; ?> | Academic Information</title>
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
          <li class="active">Academic Information</li>
        </ul>
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
            <table class="table">
             <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
              <tr class="active">
                <td width="5%"></td>
                <td width="15%"><strong>Applicant's Name </strong></td>
                <td width="5%">:</td>
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
              <tr  class="active">
                <td></td>
                <td>Batch Number</td>
                <td>:</td>
                <td><?php echo $d; ?></td>
              </tr>
               <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
            </table>
            <table class="table">
              <tr class="success">
                <td colspan="5"><center>
                    <strong>Secondary School Certificate Information</strong>
                  </center></td>
              </tr>
              <tr class="active">
                <td width="30%">Examination</td>
                <td>Board</td>
                <td>Year</td>
                <td>GPA</td>
              </tr>
              <tr class="info">
                <td>Secondary School Certificate</td>
                <td><?php echo $e; ?></td>
                <td><?php echo $g; ?></td>
                <td><?php echo $f; ?></td>
              </tr>
            </table>
            <table class="table">
              <tr class="success">
                <td colspan="5"><center>
                    <strong>Higher Secondary Certificate Information</strong>
                  </center></td>
              </tr>
              <tr class="active">
                <td width="30%">Examination</td>
                <td>Board</td>
                <td>Year</td>
                <td>GPA</td>
              </tr>
              <tr class="info">
                <td>Higher Secondary Certificate</td>
                <td><?php echo $h; ?></td>
                <td><?php echo $j; ?></td>
                <td><?php echo $ii; ?></td>
              </tr>
            </table>
            <table class="table">
              <tr class="success">
                <td colspan="11"><center>
                    <strong>Undergraduate Information</strong>
                  </center></td>
              </tr>
             
            </table>
            
 <table class="table">
  
  <tr class="success">
    <td width="5%">&nbsp;</td>
    <td  width="20%"><strong>Year and Semester</strong></td>
    <td width="8%"></td>
    <td width="10%"><strong>GPA</strong></td>
    <td width="25%"><strong>Letter Grade</strong></td>
    <td rowspan="4"><center><strong>Cumulative Grade Point Average</strong></center></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>1st Year 1st Semester</td>
    <td>:</td>
    <td><?php $finalgpa11= gpa($gp11,$credit11); if($finalgpa11==0) echo "";else echo gpa($gp11,$credit11); ?></td>
    <td><?php  cheek($finalgpa11);if ($finalgpa11==0) echo "" ; else echo cheek($finalgpa11) ?></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>1st Year 2nd Semester</td>
    <td>:</td>
    <td><?php $finalgpa12= gpa($gp12,$credit12); if($finalgpa12==0) echo "";else echo gpa($gp12,$credit12); ?></td>
    <td><?php  cheek($finalgpa12);if ($finalgpa12==0) echo "" ; else echo cheek($finalgpa12) ?></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>2nd Year 1st Semester</td>
    <td>:</td>
    <td><?php $finalgpa21= gpa($gp21,$credit21); if($finalgpa21==0) echo "";else echo gpa($gp21,$credit21); ?></td>
    <td><?php  cheek($finalgpa21);if ($finalgpa21==0) echo "" ; else echo cheek($finalgpa21) ?></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>2nd Year 2nd Semester</td>
    <td>:</td>
    <td><?php $finalgpa22= gpa($gp22,$credit22); if($finalgpa22==0) echo "";else echo gpa($gp22,$credit22); ?></td>
    <td><?php  cheek($finalgpa22);if ($finalgpa22==0) echo "" ; else echo cheek($finalgpa22) ?></td>
    <td class="success"><center><strong> <?php $finalcgpa= cgpa($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); 
   
         if($finalcgpa==0) 
             echo "";
         else 
              echo  cgpa($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32,$credit41,$credit42); ?> <strong> &nbsp; &nbsp;(&nbsp;<?php  cheek($finalcgpa);if ($finalcgpa==0) echo "" ; else echo cheek($finalcgpa) ?>&nbsp;)</center></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>3rd Year 1st Semester</td>
    <td>:</td>
    <td><?php $finalgpa31= gpa($gp31,$credit31); if($finalgpa31==0) echo "";else echo gpa($gp31,$credit31); ?></td>
    <td><?php  cheek($finalgpa31);if ($finalgpa31==0) echo "" ; else echo cheek($finalgpa31) ?></td>
    <td rowspan="5" class="success"></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>3rd Year 2nd Semester</td>
    <td>:</td>
    <td><?php $finalgpa32= gpa($gp32,$credit32); if($finalgpa32==0) echo "";else echo gpa($gp32,$credit32); ?></td>
    <td><?php  cheek($finalgpa32);if ($finalgpa32==0) echo "" ; else echo cheek($finalgpa32) ?></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>4th Year 1st Semester</td>
    <td>:</td>
    <td><?php $finalgpa41= gpa($gp41,$credit41); if($finalgpa41==0) echo "";else echo gpa($gp41,$credit41); ?></td>
    <td><?php  cheek($finalgpa41);if ($finalgpa41==0) echo "" ; else echo cheek($finalgpa41) ?></td>
  </tr>
  <tr class="active">
    <td>&nbsp;</td>
    <td>4th Year 2nd Semester</td>
    <td>:</td>
    <td><?php $finalgpa42= gpa($gp42,$credit42); if($finalgpa42==0) echo "";else echo gpa($gp42,$credit42); ?></td>
    <td><?php  cheek($finalgpa42);if ($finalgpa42==0) echo "" ; else echo cheek($finalgpa42) ?></td>
  </tr>
  <tr class="success">
    <td colspan="5"></td>
  </tr>
</table>

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
