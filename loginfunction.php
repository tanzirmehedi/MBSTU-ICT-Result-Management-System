<?php
require_once("includes/indexconfig.php");
$errors = array(); 
$_SESSION['success'] = "";	

if (isset($_POST['sub_mit']))
	 {
		    $remain=0;
			$uname = mysqli_real_escape_string($dbh, $_POST['user_name']);
			$pw = mysqli_real_escape_string($dbh, $_POST['password']);
			$url=$_POST['uri'];
			$pw=md5($pw);
			
			function getrealip()
			{
				$ipaddress = '';
				if (getenv('HTTP_CLIENT_IP'))
					$ipaddress = getenv('HTTP_CLIENT_IP');
				else if(getenv('HTTP_X_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
				else if(getenv('HTTP_X_FORWARDED'))
					$ipaddress = getenv('HTTP_X_FORWARDED');
				else if(getenv('HTTP_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_FORWARDED_FOR');
				else if(getenv('HTTP_FORWARDED'))
					$ipaddress = getenv('HTTP_FORWARDED');
				else if(getenv('REMOTE_ADDR'))
					$ipaddress = getenv('REMOTE_ADDR');
				else
					$ipaddress = 'UNKNOWN';
			 
				return $ipaddress;
			}
			
			$ip = getrealip();
			
			mysqli_query($dbh, "INSERT INTO `ip` (`address` ,`timestamp`)VALUES ('$ip',CURRENT_TIMESTAMP)");
			$result = mysqli_query($dbh, "SELECT COUNT(*) FROM `ip` WHERE `address` LIKE '$ip' AND `timestamp` > (now() - interval 1 minute)");
			$count = mysqli_fetch_array($result, MYSQLI_NUM);
			
			if($count[0] > 3)
			  {
			  $t = date("s");
			  $remain=60-$t;
			  require('wrongsms.php');
			  array_push($errors, "Your are allowed to login attempts in $remain secounds");
			  }
        		 
			$lq="SELECT * FROM user WHERE user_name='$uname' AND password='$pw'";
			$sq=mysqli_query($dbh,$lq);
			$row=mysqli_fetch_array($sq);
			if(!empty($row))
			{
			  if($remain==0):
				if($uname==$row['user_name'] && $row['password']==$pw)
				{
					   $_SESSION=array();
					   $_SESSION['user_name']=$row['user_name'];
					   $_SESSION['password']=$row['password'];
					   require('sms.php');
					   header("Location: $url");
					   
					   
				}
				else
				{
					 array_push($errors, "These credentials do not match our records please try again.");
				}
			  endif;
			}	  
          else
           {
			 
			 array_push($errors, "These credentials do not match our records please try again.");
		   }
	 }
?>