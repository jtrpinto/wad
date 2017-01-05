<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_patients.php');
$_GET['classMenu1'] = "";
$_GET['classMenu2'] = "";
$_GET['classMenu3'] = "button-submit-pat-active";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');
?>


</div>

<?php
include('templates/footer.php');
?>
