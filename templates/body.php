<?php
$class1 = $_GET["class1"];
$class2 = $_GET["class2"];
$class3 = $_GET["class3"];
$class4 = $_GET["class4"];

if(empty($class1)){
  $class1 = "wad-side-menu-button";
}
if(empty($class2)){
  $class2 = "wad-side-menu-button";
}
if(empty($class3)){
  $class3 = "wad-side-menu-button";
}
if(empty($class4)){
  $class4 = "wad-side-menu-button";
}
?>

<div class="wad-body">
  <div id="wad-side-menu" class="wad-side-menu">
    <div id="wad-side-menu-opened">
      <!--<div id="wad-side-menu-button-home-page" class="wad-side-menu-button"><a href="index.php" style="text-decoration: none">Home Page</a></div-->
      <a href="index.php" style="text-decoration: none"><div class="<?php echo $class1; ?>">Home Page</div></a>
      <a href="myPatients.php" style="text-decoration: none"><div class="<?php echo $class2; ?>">My Patients</div></a>
      <a href="mySchedule.php" style="text-decoration: none"><div class="<?php echo $class3; ?>">Manage My Schedule</div></a>
      <a href="manageMyInfo.php" style="text-decoration: none"><div class="<?php echo $class4; ?>">Manage My Info</div></a>
      <div id="wad-side-menu-collapse-button"><a href="#" onclick="collapseSideMenu()"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></div>
    </div>
    <div id="wad-side-menu-collapsed">
      <a href="index.php" style="text-decoration: none"><div class="<?php echo $class1; ?>"><i class="fa fa-home" aria-hidden="true"></i></div></a>
      <a href="myPatients.php" style="text-decoration: none"><div class="<?php echo $class2; ?>"><i class="fa fa-users" aria-hidden="true"></i></div></a>
      <a href="mySchedule.php" style="text-decoration: none"><div class="<?php echo $class3; ?>"><i class="fa fa-calendar" aria-hidden="true"></i></div></a>
      <a href="manageMyInfo.php" style="text-decoration: none"><div class="<?php echo $class4; ?>"><i class="fa fa-user-md" aria-hidden="true"></i></div></a>
      <div id="wad-side-menu-collapse-button"><a href="#" onclick="openSideMenu()"><i class="fa fa-chevron-right" aria-hidden="true" onclick="openSideMenu"></i></a></div>
    </div>
  </div>
