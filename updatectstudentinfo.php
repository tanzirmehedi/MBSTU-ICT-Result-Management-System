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
 
$session = $_SESSION['session'];
$coursecode = $_SESSION['coursecode'];
$yearsem = $_SESSION['yearsem'];
$postid = $_SESSION['postid'];

 
$sql = "SELECT *FROM finish where user_name='$user_name'";
$result = $dbh->query($sql);

if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
	   {
              $finish= $row["user_name"];
	   }
	}
	
	
	
	
	
if($postid==1)
{
$sqld = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resultd = $dbh->query($sqld);

if ($resultd->num_rows > 0)
    {
    while($rowd = $resultd->fetch_assoc()) 
	   {
              $pct1[]= $rowd['pct1'];
	   }
	   
	   if(empty($pct1[2]) && empty($pct1[3]) && empty($pct1[4]) && empty($pct1[5]))
	   {
		   $redirect=0;
	   }
	   else 
	     {
			 $redirect=1;
		 }
	}
}

if($postid==2)
{
$sqld = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resultd = $dbh->query($sqld);

if ($resultd->num_rows > 0)
    {
    while($rowd = $resultd->fetch_assoc()) 
	   {
              $pct2[]= $rowd['pct2'];
	   }
	   
	   if(empty($pct2[2]) && empty($pct2[3]) && empty($pct2[4]) && empty($pct2[5]))
	   {
		   $redirect=0;
	   }
	   else 
	     {
			 $redirect=1;
		 }
	}
}


if($postid==3)
{
$sqld = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resultd = $dbh->query($sqld);

if ($resultd->num_rows > 0)
    {
    while($rowd = $resultd->fetch_assoc()) 
	   {
              $pct3[]= $rowd['pct3'];
	   }
	   
	   if(empty($pct3[2]) && empty($pct3[3]) && empty($pct3[4]) && empty($pct3[5]))
	   {
		   $redirect=0;
	   }
	   else 
	     {
			 $redirect=1;
		 }
	}
}

if($postid==4)
{
$sqld = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resultd = $dbh->query($sqld);

if ($resultd->num_rows > 0)
    {
    while($rowd = $resultd->fetch_assoc()) 
	   {
              $pct4[]= $rowd['pct4'];
	   }
	   
	   if(empty($pct4[2]) && empty($pct4[3]) && empty($pct4[4]) && empty($pct4[5]))
	   {
		   $redirect=0;
	   }
	   else 
	     {
			 $redirect=1;
		 }
	}
}


	
if(isset($_POST['update_ct']))
{  
             $result = mysqli_query($dbh,"SELECT *FROM ct");	
             while($row=mysqli_fetch_array($result))
                {
					if($postid==1)
					{ 
					   $ct1=$_POST[$row['id']];
					   	
					   if($ct1==0)
					   {
						   $ct1="N/A";
					   }
					   $sql="UPDATE ct SET ct1 = '$ct1'  WHERE id='$row[id]'";
					   mysqli_query($dbh, $sql);
					}
					
					else if($postid==2)
					{ 
					   
					   $ct2=$_POST[$row['id']];	
					   	
					   if($ct2==0)
					   {
						   $ct2="N/A";
					   }			
					   $sql="UPDATE ct SET ct2 = '$ct2'  WHERE id='$row[id]'";
					   mysqli_query($dbh, $sql);
					}
					
					else if($postid==3)
					{ 
					   
					   $ct3=$_POST[$row['id']];	
					   if($ct3==0)
					   {
						   $ct3="N/A";
					   }				
					   $sql="UPDATE ct SET ct3 = '$ct3'  WHERE id='$row[id]'";
					   mysqli_query($dbh, $sql);
					}
					
					else if($postid==4)
					{ 
					   
					   $ct4=$_POST[$row['id']];	
					   
					   if($ct4==0)
					   {
						   $ct4="N/A";
					   }
					   				
					   $sql="UPDATE ct SET ct4 = '$ct4'  WHERE id='$row[id]'";
					   mysqli_query($dbh, $sql);
					}
				   
				}
				$_SESSION['session'] = $session;
				$_SESSION['coursecode'] = $coursecode;
				$_SESSION['yearsem'] = $yearsem;
				$_SESSION['postid'] = $postid; 
				
				$msg="Class test marks has been update successfully, Wait few secounds.";	
				$sha=md5($user_name);
				$content="updatelastctstudentinfo.php?XsErCXz".$sha."@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
				header('refresh:2;url='.$content);
				
				
				
}

$mainadmin=0;

if($st=="admin" ||$st=="teacher")
{
   $mainadmin=1;
}


if(($new_data==$_SESSION['user_name']  && $mainadmin==1 && (!empty($session))&& $st=="admin" || $st=="teacher")):

  if($redirect==1)
  {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_name; ?> | Class Test Information</title>
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
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );
</script>

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
        <h2 class="title">Class Test Information</h2>
      </div>
      
      <!-- /.col-md-6 text-right --> 
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li> Information</li>
          <li class="active">Class Test Information</li>
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
            <div class="panel-title">
              <h5>Please provide marks for class test  <strong><?php echo $postid ?></strong> those session  <strong><?php echo $session ?></strong> and course code <strong><?php echo $coursecode ?></strong> </h5>
            </div>
          </div>
          <?php if($msg){?>
          <div class="alert alert-success left-icon-alert" role="alert"> <strong> Well done ! </strong><?php echo htmlentities($msg); ?> </div>
          <?php } 
else if($error){?>
          <div class="alert alert-danger left-icon-alert" role="alert"> <strong>Oh snap!</strong> <?php echo htmlentities($error); ?> </div>
          <?php } ?>
          <div class="panel-body p-20">
          <form  class="form-group" method="post">
            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>Student ID</th>
                  <th>Student Name</th>
                    <?php if ($postid==1) {?>
                  <th><center>Class Test-1</center></th>
                  <?php  } ?>
                  
                    <?php if ($postid==2) {?>
                  <th><center>Class Test-2</center></th>
                  <?php  } ?>
                  
                    <?php if ($postid==3) {?>
                  <th><center>Class Test-3</center></th>
                  <?php  } ?>
                  
                    <?php if ($postid==4) {?>
                  <th><center>Class Test-4</center></th>
                  <?php  } ?>
                  
                  <th><center>Remarks</center></th>
                 
                </tr>
              </thead>
              <tbody>   
			<?php
			
				
             $sql = "SELECT *FROM user where session='$session'";
             $result = $dbh->query($sql);
             $cnt=1;
             if ($result->num_rows > 0) 
               {
                while($row = $result->fetch_assoc())
                 {
             ?>
                           <tr>
                            <td><center><?php echo $cnt;?></center></td>
                            <td><?php echo $row['id'];?></td>
                            
                            
                            <?php 
							
							$newid=$row['id'];
							
							$sqlh = "SELECT *FROM ct where id='$newid' And code='$coursecode'";
							$resulth = $dbh->query($sqlh);
							if ($result->num_rows > 0) 
							   {
								while($rowh = $resulth->fetch_assoc())
								 {?>
									 
							<td><?php echo $rowh['studentname'];?></td>
								 
							   
                            
                            <?php if ($postid==1) {?>
                               
                            <td> <center><?php if(!empty($rowh['ct1']))
							          { 
									     echo "<input type='number'  name='".$row['id']."' value='".$rowh['ct1']."' class='form-control' required ></td>"; 
									  }
 
									    ?></center></td>
                                        
                               <?php  } ?>
                               
                               
                              
                             <?php if ($postid==2) {?> 
                            <td> <center><?php if(!empty($rowh['ct1']))
							          { 
									     echo "<input type='number'  name='".$row['id']."' value='".$rowh['ct2']."' class='form-control' required ></td>"; 
									  }
 
									    ?></center></td>
                                        
                               <?php  } ?>
                                 
                                 
                               <?php if ($postid==3) {?>    
                             <td> <center><?php if(!empty($rowh['ct1']))
							          { 
									     echo "<input type='number'  name='".$row['id']."' value='".$rowh['ct3']."' class='form-control' required ></td>"; 
									  }
 
									    ?></center></td>
                                        
                               <?php  } ?>
                                        
                                        
                              <?php if ($postid==4) {?> 
                            <td> <center><?php if(!empty($rowh['ct1']))
							          { 
									     echo "<input type='number'  name='".$row['id']."' value='".$rowh['ct4']."' class='form-control' required ></td>"; 
									  }
 
									    ?></center></td>
                                        
                               <?php  } ?>
                                     
                                     <td></td>

                     
                          </tr>
            
                <?php }} $cnt=$cnt+1;}} ?>  
              </tbody>
            </table>          
             
                  <center>
                    <button type="submit" name="update_ct" class="btn btn-success btn-labeled">Update <span class="btn-label btn-label-right"><i class="fa fa-angle-double-right"></i></span></button>
                    
                  </center>
                  
                </form>
            
            <!-- /.col-md-12 --> 
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
                $('#example2').DataTable();

                $('#example').DataTable( {
                    "scrollY":        "500px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
 
<?php include("footer.php");  
  }
  
  else if($redirect==0)
  {
	            $sha=md5($user_name);
				$content="insertctmarks.php?gvvcr tXsErCXz".$sha."@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
				header('Location:'.$content); 
  }
  
endif; 
if($new_data==$_SESSION['user_name'] && (empty($session))):
header("Location:dashboard.php");
endif ?>
</body>
</html>
