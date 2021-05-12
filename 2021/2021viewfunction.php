<?php {	
$sql="SELECT *FROM student202111 where code='$coursecode' UNION SELECT *FROM student202112 where code='$coursecode' UNION SELECT *FROM student202121 where code='$coursecode' UNION SELECT *FROM student202122 where code='$coursecode' UNION SELECT *FROM student202131 where code='$coursecode' UNION SELECT *FROM student202132 where code='$coursecode' UNION SELECT *FROM student202141 where code='$coursecode' UNION SELECT *FROM student202142 where code='$coursecode'";
}
?>