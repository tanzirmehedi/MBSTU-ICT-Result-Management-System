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
		
if(isset($_GET['eb54c0d10f987429551feea863502171XsErCXz@FCggVJyGYG%vvKIKhv45747551eb54c0d10f987429551feea863502171']))
{
  $newid=$_GET['eb54c0d10f987429551feea863502171XsErCXz@FCggVJyGYG%vvKIKhv45747551eb54c0d10f987429551feea863502171'];
  
  $_SESSION['newid'] = $newid;
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
			  $st=$row["status"];
			  "<br>";
    }
 }
 
$sql = "SELECT *FROM user where id='$newid'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
              $a= $row["name"];
			  "<br>";
    }
 }
 $new_data=$user_name;
 
 $sql = "SELECT *FROM finish where user_name='$user_name'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
              $finish= $row["user_name"];
	   }
	}

$sql = "SELECT *FROM semester where teacherkey='$user_name'";
            $result = $dbh->query($sql);
            if ($result->num_rows > 0) 
               {
                while($row = $result->fetch_assoc())
                 {
                         
                            $year= $row['year'];
                            $semester= $row['semester'];
				 }
			   }
			   
$year=substr($year,0,1);
$semester=substr($semester,0,1);

$yearsemester=$year.$semester;

$sql = "SELECT *FROM tbatch where user_name='$user_name'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
			  $session=$row["session"];
	   }
	}
 
            $newyear= $year.$semester;
			include('batch5.php');			
            $result = $dbh->query($sql);
            $cnt=1;
            if ($result->num_rows > 0) 
               {
                while($row = $result->fetch_assoc())
                 {
					 $code[]= $row["code"];
		             $title[]= $row["title"];
			         $credit[]= $row["credit"];
			         "<br>";
				 }
			   }
 
 $mainadmin=0;

 if($st=="admin" || $st=="teacher")
{
   $mainadmin=1;
}



if (isset($_POST['submitt']))
	 {
		 
		 include('marksfunction.php');
		 
		 include('batch10.php');		        
				
                while($row=mysqli_fetch_array($result))
                {  
				    $c[]=check($_POST[$row['code']]);
									    
				}
				$_SESSION['c'] = $c;
	      include('batch9.php');	

		  if (mysqli_query($dbh, $sql))
			{
			 $msg="Marks has been inserted successfully";	
		     $sha=md5($user_name);
			 $content="lastviewandgpa.php?XsErCXz@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			 header('refresh:1;url='.$content);
			}
		  else 
			{
			 $error="Something went wrong. Please try again".mysqli_error($dbh);
			 $sha=md5($user_name);
			 $content="lastcreateresultstudentinfo.php?XsErCXz@".$sha."FCggVJyGGFFDGTRCDG%vvKIKhv45747551".$sha;
			 header('refresh:2;url='.$content);
			}
			
			
					  
	 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Mark Insert</title>
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

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin"):
include('includes/adminleftbar.php');
endif;

if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="teacher"):
include('includes/teacherleftbar.php');
endif;

?>

<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">Student Mark Insertion</h2>
      </div>
    </div>
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li> Result</li>
          <li class="active">Student mark insertion</li>
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
           <?php if($msg){?>
            <div class="alert alert-success left-icon-alert" role="alert"> <strong>Well done! </strong> <?php echo htmlentities($msg); ?> </div>
            <?php } 
            else if($error){?>
            <div class="alert alert-danger left-icon-alert" role="alert"> <strong>Oh snap! </strong> <?php echo htmlentities($error); ?> </div>
            <?php } ?>
          <?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin" || $st=="teacher"): ?>
            <table class="table">
            <tr class="success">
                <td colspan="1"></td>
              </tr>
              <tr class="active">     
                <td><center><strong><?php echo $a; ?> </strong><br> <center><?php echo $newid; ?></center></center></td>
              </tr>              
              <tr class="success">
                <td colspan="1"></td>
              </tr>
            </table>
            <form role="form" method="post" class="login-form">
            <table>                  
              <tr bgcolor="#eae3e3">
                <td width="6%"></td>     
                <td width="9%"><strong>Code</strong> </td>
                <td width="35%"> <strong>Subject Title</strong></td>
                <td width="7%"><strong>Credit</strong></td>
                 <td width="35%"> <center><strong>Number</strong></center></td>
                 <td width="6%"></td>               
              </tr>
              <tr bgcolor="#f7f4f4">
              <td colspan="6"></td>
              </tr>
            
				<?php   
				
				include('batch8.php');
					          
                while($row=mysqli_fetch_array($result))
                {
                echo "<tr bgcolor='#f7f4f4'>";
                echo "<td width='6%'></td>";
                echo "<td width='9%'>" . $row['code'] . "</td>";
                echo "<td width='35%'>" . $row['title'] . "</td>";
                echo "<td width='7%'>" . $row['credit'] . "</td>";
                echo "<td width='30%'> <input type='number' class='form-control'  name='".$row['code']."' placeholder='Place the number of subject code".$row['code']."' required></td>";
				echo "<td width='6%'></td>";
                echo "</tr>";
                }
                 ?>   
 
              
              <tr  bgcolor="#eae3e3">
                <td colspan="6"></td>
              </tr>    
  </table>          
            
            
             <center>
                    <button type="submit" class="btn" name="submitt"> <i class="fa fa-btn"></i> Insert </button>
                  </center>
                </form>
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
