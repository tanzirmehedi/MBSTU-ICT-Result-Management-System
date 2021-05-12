         <table class="table">
          <tr class="success">
            <td width="2%"></td>
            <td> <strong>Course Code</strong></td>
            <td><strong> Course Title</strong></td>
            <td><strong> Credit Hour(s)</strong></td>
            <td><strong> Letter Grade</strong></td>
            <td><strong> Grade Point</strong></td>
            <td rowspan="5" class="success"> <strong> Grade Point Average</strong></td>
          </tr>
          
          <tr class="active">
            <td></td>
            <td><?php echo $code[0] ?></td>
            <td><?php echo $title[0] ?></td>
            <td><?php echo $credit[0] ?></td>
            <td><center><?php echo cheek($gp[0]) ?></center></td>         
            <td><center><?php echo $gp[0]?></center></td> 
          </tr>
          
          <tr class="active">
          <td></td>
            <td><?php echo $code[1] ?></td>
            <td><?php echo $title[1] ?></td>
            <td><?php echo $credit[1] ?></td>
            <td><center><?php  echo cheek($gp[1]) ?></center></td>       
            <td><center><?php echo $gp[1]?></center></td>
          </tr>
          
          <tr class="active">
          <td></td>
             <td><?php echo $code[2] ?></td>
            <td><?php echo $title[2] ?></td>
            <td><?php echo $credit[2] ?></td>
            <td><center><?php  echo cheek($gp[2]) ?></center></td>
            <td><center><?php echo $gp[2]?></center></td>
          </tr>
          <tr class="active">
          <td></td>
            <td><?php echo $code[3] ?></td>
            <td><?php echo $title[3] ?></td>
            <td><?php echo $credit[3] ?></td>
            <td><center><?php  echo cheek($gp[3]) ?></center></td>
            <td><center><?php echo $gp[3]?></center></td>
          </tr>
        
          <tr class="active">
          <td></td>
            <td><?php echo $code[4] ?></td>
            <td><?php echo $title[4] ?></td>
            <td><?php echo $credit[4] ?></td>
            <td><center><?php  echo cheek($gp[4]) ?></center></td>
            <td><center><?php echo $gp[4]?></center></td> 
            
            <td rowspan="1" class="success"> <center><?php $finalgpa= gpa($gp,$credit); if($finalgpa==0) echo "";else echo gpa($gp,$credit); ?></center></td>
        
           </tr>
          
          <tr class="active">
          <td></td>
            <td><?php echo $code[5] ?></td>
            <td><?php echo $title[5] ?></td>
            <td><?php echo $credit[5] ?></td>
            <td><center><?php  echo cheek($gp[5]) ?></center></td>
            <td><center><?php echo $gp[5]?></center></td>
            <td rowspan="7" class="success"></td>
          </tr>
          
          <tr class="active">
          <td></td>
            <td><?php echo $code[6] ?></td>
            <td><?php echo $title[6] ?></td>
            <td><?php echo $credit[6] ?></td>
            <td><center><?php  echo cheek($gp[6]) ?></center></td>
            <td><center><?php echo $gp[6]?></center></td> 
          </tr>
          
           <?php if(!empty($code[7])): ?>
          <tr class="active">
          <td></td>
             <td><?php echo $code[7] ?></td>
            <td><?php echo $title[7] ?></td>
            <td><?php echo $credit[7] ?></td>
            <td><center><?php  echo cheek($gp[7]) ?></center></td>
            <td><center><?php echo $gp[7]?></center></td> 
          </tr>
          <?php endif; ?>
          <?php if(!empty($code[8])): ?>
          <tr class="active">
          <td></td>
             <td><?php echo $code[8] ?></td>
            <td><?php echo $title[8] ?></td>
            <td><?php echo $credit[8] ?></td>
            <td><center><?php  echo cheek($gp[8]) ?></center></td>
            <td><center><?php echo $gp[8]?></center></td> 
          </tr>
          <?php endif; ?>
          <?php if(!empty($code[9])): ?>
          <tr class="active">
          <td></td>
             <td><?php echo $code[9] ?></td>
            <td><?php echo $title[9] ?></td>
            <td><?php echo $credit[9] ?></td>
            <td><center><?php  echo cheek($gp[9]) ?></center></td>
            <td><center><?php echo $gp[9]?></center></td>
          </tr>
          <?php endif; ?>
          <tr>
          <td colspan="6" class="success"></td>
          </tr>
        </table>
        <?php 
        
         $status=gpacheck21($finalgpa); 
            if($status=="Result Not Yet Published"):
             ?>
             <center><strong>Status: </strong> <strong class="color-warning"> <?php echo gpacheck21($finalgpa);?> </strong> </center>
           <br>
            
           <?php endif ?>
           
           <?php 
           if($status=="Promoted"):
             ?>
             <center><strong>Status: </strong> <strong class="color-success"> <?php echo gpacheck21($finalgpa);?> </strong> </center>
           <br>
            
           <?php endif ?>
           
           <?php 
           if($status=="Not Promoted"):
             ?>
             <center><strong>Status: </strong> <strong class="color-danger"> <?php echo gpacheck21($finalgpa);?> </strong> </center>
           <br>
            
           <?php endif ?>