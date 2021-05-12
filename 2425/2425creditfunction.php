<?php $sql = "SELECT *FROM student242511 UNION SELECT *FROM student242512 UNION SELECT *FROM student242521 UNION SELECT *FROM student242522 UNION SELECT *FROM student242531 UNION SELECT *FROM student242532 UNION SELECT *FROM student242541 UNION SELECT *FROM student242542";
$result = $dbh->query($sql);
$cnt=1;
if ($result->num_rows > 0) 
   {
    while($row = $result->fetch_assoc())
	 {
 ?>
               <tr>
                <td><?php echo $cnt;?></td>
                <td><?php echo $row['code'];?></td>
                <td><?php echo $row['title'];?></td>
                <td><?php echo $row['credit'];?></td>
                <td><?php echo $row['updatetime'];?></td>
                <?php  if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register" ): ?>
               <td><a href="updateactioncredit.php?XSTHEAJAUWLOGN4784$5$3324bjhv=<?php echo $row['code'];?>"><i class="fa fa-edit" title="Edit Record"></i> </a></td>
               <?php endif; ?>
              </tr>

    <?php $cnt=$cnt+1;}} ?>