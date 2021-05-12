<?php 
 
require('includes/indexconfig.php');

if (isset($_SESSION['user_name'])) :
         $user_name=$_SESSION['user_name']; 
         $password=$_SESSION['password'];
 endif;
      
			$ip = getrealip();
			
			
     $sql = "SELECT  *FROM user where user_name='$user_name' AND password='$password'";

    $result = $dbh->query($sql);
          if ($result->num_rows > 0)
             {
                while($row = $result->fetch_assoc()) 
	                {
                     
					 $name=$row["name"];
					 $user_name=$row["user_name"];
					 $session=$row["session"];
					 $mobileno=$row["phone"];
					 $id=$row["id"];
					}
			 }

$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
$time= $dt->format('F j, Y, g:i a');	
		 
$to = $mobileno;
$token = "fb5e6d462e3ca7b1c980990af4eb32ca";
$message= "Hi, $name, username: $user_name. You are successfully login at $time to MBSTU ICT result website by using $ip IP address.";

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

?>