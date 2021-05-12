<style>
img {
    border-radius: 50%;
}
</style>

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
    <li><a href="personalinfo.php?user=<?php echo("$user_name"); ?>"><i class="fa fa-bars"></i> <span>Personal</span></a></li>
  </ul>
</li>
<?php if($new_data==$_SESSION['user_name']  && $mainadmin==1 && $st=="register"): ?>

<li class="has-children"><a href="#"><i class="fa fa-edit"></i> <span>Manage Batch</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li> <a href="createnewbatch.php?user=<?php echo("$user_name"); ?>"><i class="fa fa-bars"></i> <span>Add New Batch</span></a></li>
    <li> <a href="viewallbatch.php?user=<?php echo("$user_name"); ?>"><i class="fa fa-bars"></i> <span>Update Batch Info</span></a></li>
  </ul>
</li>

<li class="has-children"><a href="#"><i class="fa fa-edit"></i> <span>Manage Student</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li> <a href="addstudentinfo.php?user=<?php echo("$user_name"); ?>"><i class="fa fa-bars"></i> <span>Add New Student</span></a></li>
    <li> <a href="viewallstudentbatch.php?user=<?php echo("$user_name"); ?>"><i class="fa fa-bars"></i> <span>Update Student Info</span></a></li>
  </ul>
</li>

<li class="has-children"><a href="#"><i class="fa fa-envelope-o"></i> <span>Total Message</span> <i class="fa fa-angle-right arrow"></i></a>
  <ul class="child-nav">
    <li> <a href="viewmessage.php?user=<?php echo("$user_name"); ?>"><i class="fa fa-bars"></i> <span>View Message</span></a></li>
    <li> <a href="sendmessage.php?user=<?php echo("$user_name"); ?>"><i class="fa fa-bars"></i> <span>Send Message</span></a></li>
  </ul>
</li>

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
