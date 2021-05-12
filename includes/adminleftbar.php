<style>
img {
    border-radius: 50%;
}
</style>

<?php $sha=md5($user_name); ?>

<div class="left-sidebar bg-black-100 box-shadow ">
<div class="sidebar-content">
<div class="user-info closed"> <img src="images/user/user.png" width="80" height="80" alt="User"/>
  <h6 class="title"><?php echo $a; ?> </h6>
  <small class="info">DEPARTMENT OF ICT</small> </div>
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
<?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="admin"): ?>
<li class="has-children"><a href="#"><i class="fa fa-edit"></i> <span>Manage Teacher</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li> <a href="addteacherinfo.php?XsErCXz@<?php echo("$sha");?>FCggVJyGGFFDGTRCDG%vvKIKhv45747551<?php echo("$sha");?>"><i class="fa fa-bars"></i> <span>Add Teacher  Info</span></a></li>
    <li> <a href="updateteacherinfo.php?XsErCXz@FCggVJyGYG%vvKI<?php echo("$sha");?>Khv45747551<?php echo("$sha");?>"><i class="fa fa-bars"></i> <span>Update Teacher Info </span></a></li>    
  </ul>
</li>

<li class="has-children"><a href="#"><i class="fa fa-edit"></i> <span>Batch Information</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
  
    <li> <a href="adminviewallbatch.php?XsErCXz@FCggVJyGYG%vvKIKhv4<?php echo("$sha");?>5747551<?php echo("$sha");?>"><i class="fa fa-bars"></i> <span>View Batch Info</span></a></li>
  </ul>
</li>

<li class="has-children"><a href="#"><i class="fa fa-edit"></i> <span>Student Information</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li> <a href="adminviewallstudentbatch.php?XsEr<?php echo("$sha");?>CXz@FCggVJyGYG%vvKIKhv45747551<?php echo("$sha");?>"><i class="fa fa-bars"></i> <span>View Student Info</span></a></li>
  </ul>
</li>

<li class="has-children"><a href="#"><i class="fa fa-edit"></i> <span>Manage Result</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li> <a href="setteacher.php?XsdgvcgcvXz@FCggVJyGYG%vvKIKhv45747551<?php echo("$sha");?><?php echo("$sha");?>"><i class="fa fa-bars"></i> <span>Set Teacher</span></a></li>
    <li> <a href="viewteacher.php?XsDSXXErCXz@FCggVJyG<?php echo("$sha");?>YG%vvKIKhv45747551<?php echo("$sha");?>"><i class="fa fa-bars"></i> <span>View Teacher</span></a></li>
  </ul>
</li>


 <li class="has-children"> <a href="#"><i class="fa fa-info-circle"></i> <span>Create Result</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li><a href="createresult.php?XsErCXz@<?php echo("$sha");?>FCggVJyGYG%vvKIKhv4574<?php echo("$sha");?>7551<?php echo("$sha");?>"> <i class="fa fa-bars"></i> <span>Create New Result</span></a></li>
    <?php if($finish==$user_name):?>
    <li><a href="createresultinsert.php?XsErCXz@<?php echo("$sha");?>FCggVJyGYG%v<?php echo("$sha");?>vKIKhv45747551<?php echo("$sha");?>"> <i class="fa fa-bars"></i> <span>Insert Marks</span></a></li>
	<?php endif ; ?>
  </ul>
  
  <li class="has-children"> <a href="#"><i class="	fa fa-check-square"></i> <span>Publish Result</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li><a href="publishresult.php?XsErCXz@<?php echo("$sha");?>FCggVJyGYG%vvKIKhv4574<?php echo("$sha");?>7551<?php echo("$sha");?>"> <i class="fa fa-bars"></i> <span>Publish New Result</span></a></li>
  </ul>
  
    <li class="has-children"> <a href="#"><i class="fa fa-building"></i> <span>Class Test Marks</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
   <li><a href="registrationctmarks.php?YG%vvK<?php echo("$sha");?>XsErCXz@FCggVJyGIKhv45747551<?php echo("$sha");?>"> <i class="fa fa-bars"></i> <span>Class Test Registration</span></a></li>
    <li><a href="insertctmarks.php?XsErCXz@FCggVJyGYG%vvK<?php echo("$sha");?>IKhv45747551<?php echo("$sha");?>"> <i class="fa fa-bars"></i> <span>Class Test Marks</span></a></li>
    
    <li><a href="updatectmarks.php?XsErCXz@FCggVJyGYG%vvK<?php echo("$sha");?>IKhv45747551<?php echo("$sha");?>"> <i class="fa fa-bars"></i> <span>Update Class Test Marks</span></a></li>
     <li><a href="managectmarks.php?mbvXsErCXz@FCggVJyGYG%vvK<?php echo("$sha");?>IKhv45747551<?php echo("$sha");?>"> <i class="fa fa-bars"></i> <span>Manage Class Test</span></a></li>
  </ul>
 <?php endif ?>
  
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
