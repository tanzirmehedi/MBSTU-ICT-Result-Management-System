<?php
  session_start();
  require('loginfunction.php');
  require_once("includes/indexconfig.php"); 

	if(isset($_SESSION['user_name']))
       {
         header("Location:dashboard.php");
       }
     if(isset($_SESSION['url']))
        {
          $url=$_SESSION['url'];               
        }
     else
        {
        $url="dashboard.php";              
        }    
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ICT RESULT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="assets\ico\mbstu.ico" type="image/icon" />
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap3-dialog/bootstrap-dialog.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.minef3a.css?t=1497976263" />
<link href="css/font-awesome.min.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/modernizr/modernizr.min.js"></script>
<script src="js/background.js"></script>
<meta name="description" content="MBSTU">
<meta name="keywords" content="ICT">
</head>
<body>
<script> bubbly(); </script>
<div class="container"><br>
  <div id="main_header2">
    <div class="fleft"><img align="center" src="images/logo.png" style="width: 60px; height: 60px; padding: 0px 0px 0px 0px;"></div>
    <br>
    <div style="margin-left:0px; ">
      <h4><font color=white>MAWLANA BHASHANI SCIENCE AND TECHNOLOGY UNIVERSITY</font></h4>
      <h5><font color=white>DEPARTMENT OF INFORMATION AND COMMUNICATION TECHNOLOGY</font></h5>
    </div>
  </div>
  <div id="page-wrapper">
    <div class="row"></div>
    <div class="row">
      <div class="row buttons" id="buttons_up"></div>
      <br/>
      <div class="col-md-12">
        <div id="result_display"></div>
        <div class="panel panel-default">
          <div class="panel-heading">Please provide your corresponding informations </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <form role="form" action="index.php" method="post" class="login-form">
                  <?php include('errors.php'); ?>
                  <div class="form-group">
                    <label  class="sr-only"  for="user_name">Username</label>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter your Username..."  required>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <input type="password" class="form-control"  name="password" placeholder="Enter your Password..." required>
                    <input type="hidden" class="form-control"  name="uri" value="<?php echo("$url");?>">
                  </div>
                  <center>
                    <button type="submit" class="btn" name="sub_mit"> <i class="fa fa-btn fa-sign-in"></i> Login </button>
                  </center>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row buttons" id="buttons_down"><br/>
      </div>
      <br/>
    </div>
  </div>
  <div id="dev_info">
    <p class="footer">DEVELOPED BY © TANZIR MEHEDI, SHAMIM, AL-AMIN, POLASH, KHAIRUM MONIR, NADIM & ABIR</p>
    <p class="footer">ICT, MBSTU, BANGLADESH</p>
  </div>
</div>
<script src="bundles/modernizr8fce?v=wBEWDufH_8Md-Pbioxomt90vm6tJN2Pyy9u9zHtWsPo1"></script> 
<script src="bundles/scriptsd83f?v=oz581ohlwKFbCRbNAxF4puJyoDQTyWRyWqNWcC00WVw1"></script> 
<script defer src="StartJS/Circliful.js"></script>
</body>
</html>
