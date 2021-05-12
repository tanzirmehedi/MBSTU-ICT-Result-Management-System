<?php $sql = "SELECT *FROM student192011 UNION SELECT *FROM student192012 UNION SELECT *FROM student192021 UNION SELECT *FROM student192022 UNION SELECT *FROM student192031 UNION SELECT *FROM student192032 UNION SELECT *FROM student192041 UNION SELECT *FROM student192042";
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