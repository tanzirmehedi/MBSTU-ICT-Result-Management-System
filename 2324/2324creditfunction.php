<?php $sql = "SELECT *FROM student232411 UNION SELECT *FROM student232412 UNION SELECT *FROM student232421 UNION SELECT *FROM student232422 UNION SELECT *FROM student232431 UNION SELECT *FROM student232432 UNION SELECT *FROM student232441 UNION SELECT *FROM student232442";
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