<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
$_GET['classMenu1'] = "";
$_GET['classMenu2'] = "";
$_GET['classMenu3'] = "button-submit-pat-active";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');
$appointments_list = getPatientsAppointments($_GET['patient_id']);
?>

<a href="#" onclick="openPopUp('wad-newappointment-pat-popup')" ><input type="submit" name="addApp" class="button-submit-pat-new" value="Add New Appointment"></a>

<form action="" method="post">
<label class="go-to-search-a">Search From:</label>
<input type="date" name="start_date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!">
<label class="go-to-search-b">To:</label>
<input type="date" name="end_date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!">
<input type="submit" name="search" class="submit-go-to-a" value="Go">
</form> 
<?php
if(isset($_POST["start_date"]) && isset($_POST["end_date"])){
	$appointments_list = getAppointmentsByDate($_GET['patient_id'], $_POST['start_date'], $_POST['end_date']);
}
?>
<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-internal-app">Appointments:</div>
</div>
<?php foreach ($appointments_list as $appointment) { ?>
<div class="appointment-class">
<a href="#" class="app"></a>
Date: <?php echo $appointment['appointment_date'];?><br />
Time: <?php echo $appointment['appointment_time'];?><br />
Room: <?php echo $appointment['room'];?><br />
Speciality: Osteoporosis<br />
<a href="appointmentDetails.php?patient_id=<?=$_GET['patient_id']?>&app_id=<?=$appointment['id']?>" class="name">See More Details</a></div>
<?php }; ?>

</div>


<?php
include('templates/footer.php');
?>
