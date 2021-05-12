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

if(isset($_POST['submit']))
{
	$studentname=$_POST['studentname'];
	$studentid=$_POST['studentid'];
	$session=$_POST['session']; 
	$batchno=$_POST['batchno'];
	$blood=$_POST['blood'];
	$dist=$_POST['dist'];
	$father=$_POST['father'];
	$mother=$_POST['mother'];
	$susername=$_POST['susername'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];	
	$phonenumber=$_POST['phonenumber'];
	$emailid=$_POST['emailid'];	
	$board1=$_POST['board1'];
	$gpa1=$_POST['gpa1'];
	$year1=$_POST['year1'];
	$board2=$_POST['board2'];
	$gpa2=$_POST['gpa2'];
	$year2=$_POST['year2'];	
	
	$npassword=md5($password);
	
	$exam="Undergraduate";
	$status="student";
	$image="user.png";
	
	$_SESSION['session'] = $session;
	
	if (!empty($studentname) && (!empty($password)) && (!empty($cpassword)))
		{ 
		
		     $sql="SELECT * FROM user WHERE user_name='$studentname'";
			 $result  = mysqli_query($dbh,$sql);
             $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Username already exist, please try new one.");
			  header('refresh:3;url=addstudentinfo.php');
              }
		 }
		if (!empty($emailid))
		 { 
		
		     $sql="SELECT * FROM user WHERE email='$emailid'";
			 $result  = mysqli_query($dbh,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Email already exist, please try new one.");
			  header('refresh:3;url=addstudentinfo.php');
              }
		 }
		 
		 if (!empty($phonenumber))
		 { 
		
		     $sql="SELECT * FROM user WHERE phone='$phonenumber'";
			 $result  = mysqli_query($dbh,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Phone number already exist, please try new one.");
			  header('refresh:3;url=addstudentinfo.php');
              }
		 }
		 if (!empty($studentid))
		 { 
		
		     $sql="SELECT * FROM user WHERE id='$studentid'";
			 $result  = mysqli_query($dbh,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Student ID already exist, please try new one.");
			 header('refresh:3;url=addstudentinfo.php');
              }
		 }
		 
		 if ($password != $cpassword) 
		{
			array_push($errors, "The two passwords are not same.");
			header('refresh:3;url=addstudentinfo.php');
		}
		 
 if (count($errors) == 0)
			 {		
	 	
$sql="INSERT INTO user (id,name,user_name,status,session,batch,exam,blood, father, mother,phone, email, password,sscboard,sscgpa,sscyear,hscboard,hscgpa,hscyear,image,home) VALUES('$studentid','$studentname','$susername','$status','$session','$batchno','$exam','$blood','$father','$mother','$phonenumber','$emailid','$npassword','$board1','$gpa1','$year1','$board2','$gpa2','$year2','$image','$dist')";


	
		  if (mysqli_query($dbh, $sql))
			{
									
					$msg="Student has been added successfully";	
					header('refresh:2;url=managestudentinfo.php');
			}

		  else 
			{
				$error="Something went wrong. Please try again";
				header('refresh:2;url=addstudentinfo.php');
           }

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
        <h2 class="title">Add Student Information</h2>
      </div>
      
      <!-- /.col-md-6 text-right --> 
    </div>
    <!-- /.row -->
    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Add Student Information</li>
        </ul>
      </div>
    </div>
    <!-- /.row --> 
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12"><br>
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <h5>Please provide corresponding informations</h5>
            </div>
          </div>
          <div class="panel-body">
            <?php if($msg){?>
            <div class="alert alert-success left-icon-alert" role="alert"> <strong>Well done! </strong> <?php echo htmlentities($msg); ?> </div>
            <?php } 
            else if($error){?>
            <div class="alert alert-danger left-icon-alert" role="alert"> <strong>Oh snap! </strong> <?php echo htmlentities($error); ?> </div>
            <?php } ?>
            <form  class="form-group" method="post" >
             <?php include('errors.php'); ?>
             
     <table class="table"> <tr class="active"><td class="success" valign="middle"><center> Applicant's Academic Information </center></td> </tr></table>
               <div class="col-sm-offset-0 col-sm-12"> 
               <table class="table"> 
               <tr class="active"><td colspan="4"> 
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Applicant's Name</label>
                <div class="col-sm-10">
                  <input type="text" name="studentname" class="form-control" id="studentname" required="required">
                </div>
              </div>
              </td>
              </tr>
              <tr class="active">
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">Student ID</label>
                <div class="col-sm-8">
                  <input type="text" name="studentid" class="form-control" id="studentid" required="required" >
                </div>
              </div>
             </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-3 control-label"> Session</label>
                <div class="col-sm-9">
                  <select name="session" class="form-control" id="session" required="required">
                    <option value="">Choose One</option>
                    <option value="2013-2014">2013-2014</option>
                    <option value="2014-2015">2014-2015</option>
                    <option value="2015-2016">2015-2016</option>
                    <option value="2016-2017">2016-2017</option>
                    <option value="2017-2018">2017-2018</option>
                    <option value="2018-2019">2018-2019</option>
                    <option value="2019-2020">2019-2020</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                  </select>
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">Batch No</label>
                <div class="col-sm-8">
                 <select name="batchno" class="form-control" id="batchno" required="required">
                    <option value="">Choose One</option>
                    <option value="11 th Batch">11<sup>th</sup> Batch</option>
                    <option value="12 th Batch">12<sup>th</sup> Batch</option>
                    <option value="13 th Batch">13<sup>th</sup> Batch</option>
                    <option value="14 th Batch">14<sup>th</sup> Batch</option>
                    <option value="15 th Batch">15<sup>th</sup> Batch</option>
                    <option value="16 th Batch">16<sup>th</sup> Batch</option>
                    <option value="17 th Batch">17<sup>th</sup> Batch</option>
                    <option value="18 th Batch">18<sup>th</sup> Batch</option>
                    <option value="19 th Batch">19<sup>th</sup> Batch</option>
                    <option value="20 th Batch">20<sup>th</sup> Batch</option>
                    <option value="21 th Batch">21<sup>th</sup> Batch</option>
                    <option value="22 th Batch">22<sup>th</sup> Batch</option>
                  </select>
                </div>
              </div>
              </td>
              </tr>
              </table>
              </div>            
              
     <table class="table"> <tr class="active"><td class="success" valign="middle"><center> Applicant's Personal Information </center></td> </tr></table>
               <div class="col-sm-offset-0 col-sm-12"> 
               <table class="table"> 
               <tr class="active"><td>              
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">Blood Group </label>
                <div class="col-sm-8">
                 <select name="blood"  class="form-control"  id="blood" required="required" />                
                <option value="">Choose One</option>
                <option value="A+">A Positive</option>
                <option value="A-">A Negative</option>
                <option value="B+">B Positive</option>
                <option value="B-">B Negative</option>
                <option value="AB+">AB Positive</option>
                <option value="AB-">AB Negative</option>
                <option value="O+">O Positive</option>
                <option value="O-">O Negative</option>
                </select>
                </div>
              </div>
              </td>
              <td>
               <div class="form-group">
                <label for="default" class="col-sm-4 control-label">Home District</label>
                <div class="col-sm-8">
                  <select name="dist" class="form-control" id="dist" required="required">
                  <option value="">Choose One</option>
                  <option value="Bagerhat">Bagerhat</option>
                  <option value="Bandarban">Bandarban</option>
                  <option value="Barguna">Barguna</option>
                  <option value="Barisal">Barisal</option>
                  <option value="Bhola">Bhola</option>
                  <option value="Bogra">Bogra</option>
                  <option value="Brahamanbaria">Brahamanbaria</option>
                  <option value="Chandpur">Chandpur</option>
                  <option value="Chapainawabganj">Chapainawabganj</option>
                  <option value="Chittagong">Chittagong</option>
                  <option value="Chuadanga">Chuadanga</option>
                  <option value="Comilla">Comilla</option>
                  <option value="Cox`s Bazar">Cox`s Bazar</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Dinajpur">Dinajpur</option>
                  <option value="Faridpur">Faridpur</option>
                  <option value="Feni">Feni</option>
                  <option value="Gaibanda">Gaibanda</option>
                  <option value="Gazipur">Gazipur</option>
                  <option value="Gopalganj">Gopalganj</option>
                  <option value="Habiganj">Habiganj</option>
                  <option value="Jaipurhat">Jaipurhat</option>
                  <option value="Jamalpur">Jamalpur</option>
                  <option value="Jessore">Jessore</option>
                  <option value="Jhalokhathi">Jhalokhathi</option>
                  <option value="Jhenaidah">Jhenaidah</option>
                  <option value="Khagrachhari">Khagrachhari</option>
                  <option value="Khulna">Khulna</option>
                  <option value="Kishorganj">Kishorganj</option>
                  <option value="Kurigram">Kurigram</option>
                  <option value="Kushtia">Kushtia</option>
                  <option value="Lalmonirhat">Lalmonirhat</option>
                  <option value="Luxmipur">Luxmipur</option>
                  <option value="Madaripur">Madaripur</option>
                  <option value="Magura">Magura</option>
                  <option value="Manikganj">Manikganj</option>
                  <option value="Meharpur">Meharpur</option>
                  <option value="Mouluvibazar">Mouluvibazar</option>
                  <option value="Munshiganj">Munshiganj</option>
                  <option value="Mymensingh">Mymensingh</option>
                  <option value="Naogaon">Naogaon</option>
                  <option value="Narail">Narail</option>
                  <option value="Narayanganj">Narayanganj</option>
                  <option value="Narsingdi">Narsingdi</option>
                  <option value="Natore">Natore</option>
                  <option value="Netrokona">Netrokona</option>
                  <option value="Nilphamari">Nilphamari</option>
                  <option value="Noakhali">Noakhali</option>
                  <option value="Pabna">Pabna</option>
                  <option value="Panchagarh">Panchagarh</option>
                  <option value="Patuakhali">Patuakhali</option>
                  <option value="Pirojpur">Pirojpur</option>
                  <option value="Rajbari">Rajbari</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Rangamati">Rangamati</option>
                  <option value="Rangpur">Rangpur</option>
                  <option value="Satkhira">Satkhira</option>
                  <option value="Shariatpur">Shariatpur</option>
                  <option value="Sherpur">Sherpur</option>
                  <option value="Sirajganj">Sirajganj</option>
                  <option value="Sunamganj">Sunamganj</option>
                  <option value="Sylhet">Sylhet</option>
                  <option value="Tangail">Tangail</option>
                  <option value="Thakurgaon">Thakurgaon</option>
                </select>
                </div>
              </div>
              </td>
              </tr>
              <tr class="active"><td colspan="3">               
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Father's Name</label>
                <div class="col-sm-10">
                  <input type="text" name="father" class="form-control" id="father" required="required">
                </div>
              </div>
              </td></tr>
              <tr class="active"><td colspan="3">  
              <div class="form-group">
                <label for="default" class="col-sm-2 control-label">Mother's Name</label>
                <div class="col-sm-10">
                  <input type="text" name="mother" class="form-control" id="mother" required="required">
                </div>
              </div>
              </td></tr></table>
              </div>
             
              <table class="table"> <tr class="active"><td class="success"><center> Applicant's Login Information </center></td> </tr></table>
               <div class="col-sm-offset-0 col-sm-12"> 
               <table class="table"> 
               <tr class="active"><td>
                <div class="form-group">
                <label for="default" class="col-sm-4 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" name="susername" class="form-control" id="susername" required="required" autocomplete="off">
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" name="password" class="form-control" id="password" required="required" autocomplete="off">
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-6 control-label">Confirm Password</label>
                <div class="col-sm-6">
                  <input type="password" name="cpassword" class="form-control" id="cpassword" required="required" autocomplete="off">
                </div>
              </div>
              </td>
              </tr>
              </table>
              </div>
               
               
               <table class="table"> <tr class="active"><td class="success"><center> Applicant's Contact Information </center></td> </tr></table>
               <div class="col-sm-offset-0 col-sm-12"> 
               <table class="table"> 
               <tr class="active"><td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">Phone Number</label>
                <div class="col-sm-6">
                  <input type="text" name="phonenumber" class="form-control" id="rollid" required="required"  maxlength="11">
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-3 control-label">Email ID</label>
                <div class="col-sm-9">
                  <input type="email" name="emailid" class="form-control" id="emailid" required="required" >
                </div>
              </div>
              </td>
              </tr>
              </table>
              </div>
              <table class="table"> <tr class="active"><td class="success"><center> Previous Academic Information </center></td> </tr></table>
              <div class="col-sm-offset-0 col-sm-12"> 
              <table class="table">
              <tr class="active">
              <td>
               <div class="form-group">
                <label for="default" class="col-sm-5 control-label">SSC Board</label>
                <div class="col-sm-7">
                 <select name="board1"  class="form-control"  id="board1" required="required" />                
                <option value="">Choose One</option>
                <option value="Barisal">Barisal</option>
                <option value="Comilla">Comilla</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Dinajpur">Dinajpur</option>
                <option value="Jessore">Jessore</option>
                <option value="Madrasah">Madrasaha</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Technical">Technical</option>
                <option value="Others">Others</option>
                </select>
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">SSC GPA</label>
                <div class="col-sm-8">
                  <input type="text" name="gpa1" class="form-control" id="gpa1" required="required" >
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">SSC Year</label>
                <div class="col-sm-8">
                  <select name="year1"   class="form-control"  id="year1" required="required">
                  <option value="">Choose One</option>
				  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                </select>
                </div>
              </div>
              </td>
              </tr>
              <tr class="active">
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-5 control-label">HSC Board</label>
                <div class="col-sm-7">
                 <select name="board2"  class="form-control"  id="board2" required="required" />                
                <option value="">Choose One</option>
                <option value="Barisal">Barisal</option>
                <option value="Comilla">Comilla</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Dinajpur">Dinajpur</option>
                <option value="Jessore">Jessore</option>
                <option value="Madrasah">Madrasaha</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Technical">Technical</option>
                <option value="Others">Others</option>
                </select>
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">HSC GPA</label>
                <div class="col-sm-8">
                  <input type="text" name="gpa2" class="form-control" id="gpa2" required="required">
                </div>
              </div>
              </td>
              <td>
              <div class="form-group">
                <label for="default" class="col-sm-4 control-label">HSC Year</label>
                <div class="col-sm-8">
                  <select name="year2"   class="form-control"  id="year2" required="required">
                  <option value="">Choose One</option>
				  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                </select>
                </div>
              </div>
             </td>
             </tr>
             </table></div>
             <table class="table"> <tr class="active"><td class="success"></td> </tr></table>
              <div class="form-group">
                <div class="col-sm-10"><br>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                  <center>
                    <button type="submit" name="submit" class="btn btn-primary btn-labeled"> Add Information<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                  </center><br>
                </div>
              </div>
            </form>
            
            
            
          </div>
        </div>
      </div>
      <!-- /.col-md-12 --> 
    </div>
  </div>
</div>
<!-- /.content-container -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- /.main-wrapper --> 
<script src="js/jquery/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/pace/pace.min.js"></script> 
<script src="js/lobipanel/lobipanel.min.js"></script> 
<script src="js/iscroll/iscroll.js"></script> 
<script src="js/prism/prism.js"></script> 
<script src="js/select2/select2.min.js"></script> 
<script src="js/main.js"></script> 
<script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
<?php include("footer.php");       
endif; 
if($new_data==$_SESSION['user_name']  && $mainadmin==0):
header("Location:dashboard.php");
endif ?>
</body>
</html>
