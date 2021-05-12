<style>
img {
    border-radius: 50%;
}
</style>

 <?php $resultpublish= resultpublish($gp11,$gp12,$gp21,$gp22,$gp31,$gp32,$gp41,$gp42,$credit11,$credit12,$credit21,$credit22,$credit31,$credit32, $credit41,$credit42); ?>
<?php $sha=md5($user_name); 

$shw=md5(sha1(md5($user_name)));
$shw=$shw.$shw;

$user_nam=md5(sha1(md5($user_name)));
?>

<div class="left-sidebar bg-black-100 box-shadow ">
<div class="sidebar-content">
<div class="user-info closed"> <img src="images/user/user.png" width="80" height="80" alt="User"/>
  <h6 class="title"><?php echo $a; ?> </h6>
  <small class="info"><?php echo $b; ?></small> </div>
<!-- /.user-info -->

<div class="sidebar-nav">
<ul class="side-nav color-gray">
<li class="nav-header"> <span class="">Main Category</span> </li>
<li> <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a> </li>
<li class="nav-header"> <span class="">Appearance</span> </li>

<li class="has-children"> <a href="#"><i class="fa fa-user"></i> <span>Personal Information</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li><a href="personalinfo.php?<?php echo("$sha");?>XsErCXz@FCggVJyGYG%vvKIKhv45747551<?php echo("$sha");?>"><i class="fa fa-bars"></i> <span>Personal</span></a></li>
  </ul>
</li>

<li class="has-children"><a href="#"><i class="fa fa-book"></i> <span>Academic Information</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li> <a href="academicinfo.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>Academic</span></a></li>
  </ul>
</li>

<li class="has-children"> <a href="#"><i class="fa fa-info-circle"></i> <span>Published Results</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li><a href="student11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="student12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
    <li><a href="student21.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 1st Semester</span></a></li>
    <li><a href="student22.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 2nd Semester</span></a></li>
    <li><a href="student31.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 1st Semester</span></a></li>
    <li><a href="student32.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 2nd Semester</span></a></li>
    <li><a href="student41.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>4th Year 1st Semester</span></a></li>
    <li><a href="student42.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>4th Year 2nd Semester</span></a></li>
  </ul>
  
  <li class="has-children"> <a href="#"><i class="fa fa-print"></i> <span>Class Test Marks</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
  <?php if($resultpublish=="7")
  { ?> 
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
  <?php } ;?> 
  
    <?php if($resultpublish=="1")
  { ?> 
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="ctstudent12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
     <?php } ;?> 
      <?php if($resultpublish=="2")
  { ?> 
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="ctstudent12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
    <li><a href="ctstudent21.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 1st Semester</span></a></li>
    <?php } ;?>       
    <?php if($resultpublish=="3")

  { ?> 
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="ctstudent12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
    <li><a href="ctstudent21.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 1st Semester</span></a></li>
    <li><a href="ctstudent22.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 2nd Semester</span></a></li>
     <?php } ;?> 
      <?php if($resultpublish=="4")
  { ?> 
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="ctstudent12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
    <li><a href="ctstudent21.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 1st Semester</span></a></li>
    <li><a href="ctstudent22.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 2nd Semester</span></a></li>
    <li><a href="ctstudent31.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 1st Semester</span></a></li>
     <?php } ;?> 
    
      <?php if($resultpublish=="5")
  { ?> 
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="ctstudent12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
    <li><a href="ctstudent21.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 1st Semester</span></a></li>
    <li><a href="ctstudent22.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 2nd Semester</span></a></li>
    <li><a href="ctstudent31.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 1st Semester</span></a></li>
    <li><a href="ctstudent32.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 2nd Semester</span></a></li>
     <?php } ;?> 
    
      <?php if($resultpublish=="0")
  { ?> 
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="ctstudent12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
    <li><a href="ctstudent21.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 1st Semester</span></a></li>
    <li><a href="ctstudent22.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 2nd Semester</span></a></li>
    <li><a href="ctstudent31.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 1st Semester</span></a></li>
    <li><a href="ctstudent32.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 2nd Semester</span></a></li>
    <li><a href="ctstudent41.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>4th Year 1st Semester</span></a></li>
     <?php } ;?> 
    
      <?php if($resultpublish=="7")
  { ?>
    <li><a href="ctstudent11.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 1st Semester</span></a></li>
    <li><a href="ctstudent12.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>1st Year 2nd Semester</span></a></li>
    <li><a href="ctstudent21.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 1st Semester</span></a></li>
    <li><a href="ctstudent22.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>2nd Year 2nd Semester</span></a></li>
    <li><a href="ctstudent31.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 1st Semester</span></a></li>
    <li><a href="ctstudent32.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>3rd Year 2nd Semester</span></a></li>
    <li><a href="ctstudent41.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>4th Year 1st Semester</span></a></li> 
    <li><a href="ctstudent42.php?<?php echo $shw?>=<?php echo("$user_nam"); ?>"><i class="fa fa-bars"></i> <span>4th Year 2nd Semester</span></a></li>
     <?php } ;?> 
  </ul>
  <li class="has-children"> <a href="#"><i class="fa fa-link"></i> <span>Important Links</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li><a href="http://mbstu.ac.bd" target="_new"><i class="fa fa-home"></i> <span>MBSTU Home</span></a></li>
    <li><a href="http://ict.mbstu.ac.bd" target="_new"><i class="fa fa-home"></i> <span>ICT Home</span></a></li>
    <li><a href="http://oj.mbstu.ac.bd" target="_new"><i class="fa fa-compass"></i> <span>MBSTU Online Judge</span></a></li>
  </ul>

</div>
<!-- /.sidebar-nav -->
</div>
<!-- /.sidebar-content -->
</div>
