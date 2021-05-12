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
$sqle = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resulte = $dbh->query($sqle);

if ($resulte->num_rows > 0)
    {
    while($rowe = $resulte->fetch_assoc()) 
	   {
              $publishe[]= $rowe["pct1"];
	   }
	}
}


if($postid==2)
{	
$sqle = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resulte = $dbh->query($sqle);

if ($resulte->num_rows > 0)
    {
    while($rowe = $resulte->fetch_assoc()) 
	   {
              $publishe[]= $rowe["pct2"];
	   }
	}
}



if($postid==3)
{	
$sqle = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resulte = $dbh->query($sqle);

if ($resulte->num_rows > 0)
    {
    while($rowe = $resulte->fetch_assoc()) 
	   {
              $publishe[]= $rowe["pct3"];
	   }
	}
}



if($postid==4)
{	
$sqle = "SELECT *FROM ct where session='$session' AND code='$coursecode' AND yearsem='$yearsem'";
$resulte = $dbh->query($sqle);

if ($resulte->num_rows > 0)
    {
    while($rowe = $resulte->fetch_assoc()) 
	   {
              $publishe[]= $rowe["pct4"];
	   }
	}
}
	
if(isset($_POST['publish']))
{  
         if($postid==1)
		 {
         $sql="UPDATE ct SET publish = 'publish', pct1='pct1' where session='$session'";
		 }
		 
		 else if($postid==2)
		 {
         $sql="UPDATE ct SET publish = 'publish', pct2='pct2' where session='$session'";
		 }
		 
		 else if($postid==3)
		 {
         $sql="UPDATE ct SET publish = 'publish', pct3='pct3' where session='$session'";
		 }
		 
		 else if($postid==4)
		 {
         $sql="UPDATE ct SET publish = 'publish', pct4='pct4' where session='$session'";
		 }
		 
		 
		  if (mysqli_query($dbh, $sql))
			{		
			$msg="Class test marks has been published.";
			$sha=md5($user_name);
			$content="lastctstudentinfo.php?XsErCXz".$sha."@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			header('refresh:3;url='.$content);			
			}
		  else 
			{
			$error="Something went wrong. Please try again";
			$sha=md5($user_name);
			$content="lastctstudentinfo.php?XsErCXz".$sha."@FCggVJyGYG%vvKI".$sha."Khv45747551".$sha;
			header('refresh:2;url='.$content);
			}
			
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
            $time= $dt->format('F j, Y, g:i a');
			
	       $sqlp = "SELECT *FROM user where session='$session'";
             $resultp = $dbh->query($sqlp);
             if ($resultp->num_rows > 0) 
               {
                while($rowp = $resultp->fetch_assoc())
                 {
					 $phone[]=$rowp['phone'];
					 
				 }
				    
					$str = implode(',',$phone);					
					
					$to = "$str";
					$token = "fb5e6d462e3ca7b1c980990af4eb32ca";
					$message= "Dear Student, Course code: ".$coursecode." , class test: 0".$postid." marks has been published at $time. Please check your class test marks through website 103.28.121.91.";
					
					$url = "http://sms.greenweb.com.bd/api.php";
					
					$data= array(
					'to'=>"$to",
					'message'=>"$message",
					'token'=>"$token"
					); 
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL,$url);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$smsresult = curl_exec($ch);
				
			   }    
				
}

$mainadmin=0;

if($st=="admin" ||$st=="teacher")
{
   $mainadmin=1;
}



if(($new_data==$_SESSION['user_name']  && $mainadmin==1 && (!empty($session))&& $st=="admin" || $st=="teacher")):

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Class Test: 0<?php echo $postid; ?> , Course Code: <?php echo $coursecode ?></title>
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


    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=19472395a2969da78c8a4c707e72123a">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    
	<script type="text/javascript" class="init">
  $(document).ready(function() {
    var printCounter = 0;
 
    // Append a caption to the table before the DataTables initialisation
 
    $('#example').DataTable( 
	{
        dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            {
                extend: 'print',
                messageTop: function ()
				 {
                    printCounter++;
 
                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ]
    } );
} );



	</script>



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
          <li class="active">Class Test Information </li>
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
              <h5>Please check marks for class test  <strong><?php echo $postid ?></strong> those session  <strong><?php echo $session ?></strong> and course code <strong><?php echo $coursecode ?></strong> </h5>
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
                               
                            <td> <center><?php if(empty($rowh['ct1']))
							          { 
									     echo "<input type='number'  name='".$row['id']."' class='form-control' required></td>"; 
									  } 
									  else 
									  { 
									     echo $rowh['ct1'];
								      } 
									    ?></center></td>
                                        
                               <?php  } ?>
                               
                               
                              
                             <?php if ($postid==2) {?> 
                             <td><center> <?php if(empty($rowh['ct2']))
							          { 
									    echo "<input type='number'  name='".$row['id']."' class='form-control' required></td>"; 
									  } 
									  else 
									  { 
									     echo $rowh['ct2'];
								      } 
									    ?></center></td>
                                 <?php  } ?>
                                 
                                 
                               <?php if ($postid==3) {?>    
                             <td> <center><?php if(empty($rowh['ct3']))
							          { 
									     echo "<input type='number'  name='".$row['id']."' class='form-control' required></td>"; 
									  } 
									  else 
									  { 
									     echo $rowh['ct3'];
								      } 
									    ?></center></td>
                                    <?php  } ?>
                                        
                                        
                              <?php if ($postid==4) {?> 
                            <td><center> <?php if(empty($rowh['ct4']))
							          { 
									     echo "<input type='number'  name='".$row['id']."' class='form-control' required></td>";  
									  } 
									  else 
									  { 
									     echo $rowh['ct4'];
								      } 
									    ?></center></td>
                                        
                                     <?php  } ?>
                                     
                                     <td></td>

                     
                          </tr>
            
                <?php }} $cnt=$cnt+1;}} ?>  
              </tbody>
            </table>  
            <?php if(empty($publishe[2])):?>        
                  <center><button type="submit" name="publish" class="btn btn-success btn-labeled">Publish<span class="btn-label btn-label-right"><i class="fa fa-angle-double-right"></i></span></button></center>
                </form>
                <?php endif; ?>
                
                 <?php if(!empty($publishe[2])):?>
                 <center><a href="dashboard.php" <button class="btn btn-success btn-labeled">Class test result already published, go to dathboard<span class="btn-label btn-label-right"><i class="fa fa-angle-double-right"></i></span></button>></center></a>
                 <?php endif; ?>  
            
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
 
<?php include("footer.php");  
 
endif; 
if($new_data==$_SESSION['user_name'] && (empty($session))):
header("Location:dashboard.php");
endif ?>
</body>
</html>
