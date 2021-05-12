<?php $sql = "SELECT *FROM student131411 UNION SELECT *FROM student131412 UNION SELECT *FROM student131421 UNION SELECT *FROM student131422 UNION SELECT *FROM student131431 UNION SELECT *FROM student131432 UNION SELECT *FROM student131441 UNION SELECT *FROM student131442";
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