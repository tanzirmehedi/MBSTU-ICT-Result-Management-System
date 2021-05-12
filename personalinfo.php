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

$sql = "SELECT *FROM user where user_name='$user_name' AND password='$password'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
              $a= $row["name"];
			  $d= $row["father"];
			  $e= $row["mother"];
			  $f= $row["blood"];
			  $g= $row["home"];
			  $h= $row["phone"];
			  $i= $row["email"];
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

 if($st=="admin" || $st=="teacher" || $st=="register" || $st="student")
{
   $mainadmin=1;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Personal Information</title>
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

<?php 

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="student"):
include('includes/leftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin"):
include('includes/adminleftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="teacher"):
include('includes/teacherleftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register"):
include('includes/registerleftbar.php');
endif;
?>

<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">Personal Information</h2>
      </div>
    </div>
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li> Information</li>
          <li class="active">Personal Information</li>
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
          <?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="student"): ?>
            <table class="table">
            <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
              <tr class="active">
                <td width="5%"></td>
                <td width="15%"><strong>Applicant's Name </strong></td>
                <td width="1%">:</td>
                <td><strong><?php echo $a; ?></strong></td>
              </tr>
              <tr  class="active">
                <td></td>
                <td>Father Name</td>
                <td> :</td>
                <td><?php echo $d; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Mother Name</td>
                <td> :</td>
                <td><?php echo $e; ?></td>
              </tr>
              <tr  class="active">
                <td></td>
                <td>Blood Group</td>
                <td>:</td>
                <td><?php echo $f; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Home District</td>
                <td>:</td>
                <td><?php echo $g; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Phone Number</td>
                <td> :</td>
                <td><?php echo $h; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Email ID</td>
                <td>:</td>
                <td><?php echo $i; ?></td>
              </tr>
              <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
            </table>
            <?php endif; ?>
            
            
            <?php if(($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin") || ($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="teacher")): ?>
            <table class="table">
            <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
              <tr class="active">
                <td width="5%"></td>
                <td width="15%"><strong>Teacher's Name </strong></td>
                <td width="1%">:</td>
                <td><strong><?php echo $a; ?></strong></td>
              </tr>
              <tr  class="active">
                <td></td>
                <td>Designation</td>
                <td> :</td>
                <td><?php echo $d; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Organization</td>
                <td> :</td>
                <td><?php echo $e; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Phone Number</td>
                <td> :</td>
                <td><?php echo $h; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Email ID</td>
                <td>:</td>
                <td><?php echo $i; ?></td>
              </tr>
              <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
            </table>
            <?php endif; ?>
            
            <?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register"): ?>
            <table class="table">
            <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
              <tr class="active">
                <td width="5%"></td>
                <td width="15%"><strong>Register's Name </strong></td>
                <td width="1%">:</td>
                <td><strong><?php echo $a; ?></strong></td>
              </tr>
              <tr  class="active">
                <td></td>
                <td>Designation</td>
                <td> :</td>
                <td><?php echo $d; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Organization</td>
                <td> :</td>
                <td><?php echo $e; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Phone Number</td>
                <td> :</td>
                <td><?php echo $h; ?></td>
              </tr>
              <tr class="active">
                <td></td>
                <td>Email ID</td>
                <td>:</td>
                <td><?php echo $i; ?></td>
              </tr>
              <tr class="success">
                <td></td>
                <td colspan="4"></td>
              </tr>
            </table>
            <?php endif; ?>
            
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
<?php include("footer.php");  ?>  

</body>
</html>
