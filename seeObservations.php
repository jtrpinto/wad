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
$_GET['classMenu3'] = "";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');
include('1_database_observations.php');

$patObs = getPatientsObservations($patient_id);
?>

<br>
<div class="wad-body-content-title">All observations</div>
<?php foreach ($patObs as $obs){ ?>
  <div class="wad-body-content-box  wad-darker-box">
    <h4>Observation of <?=$obs['date_observations']?></h4>
    <?=$obs['notes']?><br><br>
    <span style="font-size:0.6em;">
    Appointment date: <?=$obs['appointment_date']?><br>
    Doctor: <?=$obs['first_name']?> <?=$obs['last_name']?>, MD<br>
    Room: <?=$obs['room']?>
  </span>

  </div>
<?php } ?>

</div>
<?php
include('templates/footer.php');
?>
