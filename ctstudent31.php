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
<link rel="stylesheet" type="text/css" href="js/DataTables/new_datatables.min.css"/>
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
          <li class="active">3rd Year 1st Semester</li>
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
        <br><center>Class test marks for 3rd Year 1st Semester B.Sc(Engg.) Session: <?php echo $c ?></center>      
        <center>Name: <?php echo $a?></center>
        <center>Student ID: <?php echo $b?></center>
</div>
          <div class="panel-body p-20">      



            <table class="table">
              <tr class="success">
                <td width="2%"></td>
                <td> <strong>Course Code</strong></td>
                <td><strong> Course Title</strong></td>
                <td><strong> Credit Hour(s)</strong></td>
                <td><strong> CT-01</strong></td>
                <td><strong> CT-02</strong></td>
                <td><strong> CT-03</strong></td>
                <td><strong> CT-04</strong></td>
                <td><strong>Average</strong></td>
              </tr>
            
				<?php   
				
				$fff='31';  
				$sql = "SELECT * FROM ct where id='$b' AND session='$c' AND yearsem='$fff'";
	            $result = $dbh->query($sql);
					          
                while($row=mysqli_fetch_array($result))
                {
					 if(!empty($row['publish']))
				  {
                echo "<tr bgcolor='#f7f4f4'>";
                
				echo "<td></td>";
				echo "<td> ". $row['code']."</td>";
				
				$yearsemm=$row['yearsem'];
				
				include('batch11.php');
				
				$resultr= $dbh->query($sqlr);
				if ($resultr->num_rows > 0)
				   {
					  while($rowr = $resultr->fetch_assoc())
					   {  
							  $title31= $rowr["title"];
							  $credit31= $rowr["credit"];
					}
				  }
                
				echo "<td>" . $title31. "</td>";
				echo "<td>" . $credit31. "</td>";
                echo "<td><center>" . $row['ct1'] . "</center></td>";
                echo "<td><center>" . $row['ct2'] . "</center></td>";
                echo "<td><center>" . $row['ct3'] . "</center></td>";
				echo "<td><center>" . $row['ct4'] . "</center></td>";
                echo "<td class=\"success\"><center>" . ctcheck($row['ct1'],$row['ct2'],$row['ct3'],$row['ct4'])."</center></td>";
                echo "</tr>";
                }
				}
                 ?>   
 
              
              <tr>
              <td colspan="9" class="success"></td>
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
<script src="js/DataTables/new_datatables.min.js"></script> 
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
