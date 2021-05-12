
<?php


     $servername = "localhost";
     $user_name = "root";
     $password = "12345";
     $dbname="ictresult";

    $dbh = new mysqli($servername, $user_name, $password,$dbname);

if(!$dbh)
{
	print("Not Connected<br>".mysql_error());

}
else
{
}






?>