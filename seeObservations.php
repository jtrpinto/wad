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
$patApps = getPatientsAppointments($patient_id);
?>

<br>
<div class="wad-body-content-title">All observations</div>
<?php if(empty($patObs)) {echo 'No observations found.<br><br>';} ?>

<div class="wad-body-content-box">
<a href="#" onclick="openPopUp('wad-newobservation-popup')" title="Add new observation"><i class="fa fa-plus-circle" aria-hidden="true"></i> add new observation</a>
</div>

<?php foreach ($patObs as $obs){ ?>
  <div class="wad-body-content-box  wad-darker-box">
    <b><?=$obs['notes']?></b><br><br>
    <span style="font-size:0.7em;">
    Observation date: <?=$obs['date_observations']?><br>
    Appointment date: <?=$obs['appointment_date']?> <br>
    Doctor: <?=$obs['first_name']?> <?=$obs['last_name']?>, MD<br>
  </span>
  <a href="" title="Edit observation"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
  <a href="" title="Delete Observation"><i class="fa fa-window-close" aria-hidden="true"></i></a>

  </div>
<?php } ?>

</div>
<?php
include('templates/footer.php');
?>
