<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title">My Patients</div>

<?php 
(isset($_POST["ordered_by"])) ? $ordered_by = $_POST["ordered_by"] : $ordered_by=1;
 ?>

  <form><label class="input-text" name="ordered_by">Select list:</label>
   <select id = "ordered_by" class="input-box" onchange="mySelectChange(this.options[this.selectedIndex].value)">
     <option <?php if ($ordered_by == 1 ) echo 'selected' ; ?> value="1">Last Appointment (Most Rrecent First)</option>
     <option <?php if ($ordered_by == 2 ) echo 'selected' ; ?> value="2">Last Appointment (Least Recent First)</option>
     <option <?php if ($ordered_by == 3 ) echo 'selected' ; ?> value="3">Future Appointment (Nearest First)</option>
     <option <?php if ($ordered_by == 4 ) echo 'selected' ; ?> value="4">Last Name (Ascending)</option>
     <option <?php if ($ordered_by == 5 ) echo 'selected' ; ?> value="5">Last Name (Descending)</option>
     <option <?php if ($ordered_by == 6 ) echo 'selected' ; ?> value="6">Current Diagnosis (Positive First)</option>
     <option <?php if ($ordered_by == 7 ) echo 'selected' ; ?> value="7">Current Diagnosis (Negative First)</option>
   </select></form> <!--br /--> 

   <label id="teste" class="input-text">Search:</label>
   <input type="text" name="first_name" class="input-box-half" value="First Name">
   <input type="text" name="last_name" class="input-box-half" value="Last Name">
   <input type="submit" class="button-submit" value="Go">

   

<div class="patients"><ul>
	<li>
		<div class="patient">
		<a href="#" class="img"><img src="files/img/00000000.png"/></a>
		<a href="#" class="name">New Patient</a> 
		</div>

	</li>
<?php 
  $php_array = array('a1', 'a2', 'a3');

  $appointmentsTotalInformation = array();
    $i = 0;
    foreach ($appointments_info_doctor as $appointment) { 
     /*$appointmentsTotalInformation[$i] = $appointmentsTotalInformation();*/
     $appointmentsTotalInformation[$i]['date'] = $appointment['appointment_date'];
     $appointmentsTotalInformation[$i]['time'] = $appointment['appointment_time'];
     $appointmentsTotalInformation[$i]['room'] = $appointment['room'];
     $appointmentsTotalInformation[$i]['patient_fn'] = $appointment['first_name_patient'];
     $appointmentsTotalInformation[$i]['patient_ln'] = $appointment['last_name_patient'];
     $appointmentsTotalInformation[$i]['patient_id'] = $appointment['patient_id'];
    $i++;
  }
     //print_r($appointmentsTotalInformation);
     //echo nl2br("\n");
     //echo nl2br("\n");
?>

<label style="display: none;" id="label_id"><?php print_r($php_array);?></label>

<div id="patient_list">
	<li>
		<div class="patient">
		<a href="#" class="img"><img src="files/img/<?php foreach ($patients as $patientinfo) { echo  $patientinfo['healthcare_id']; } ; ?>.png"/></a>
		<a href="#" class="name"> 
		<?php foreach ($patients as $patientinfo) { echo  $patientinfo['first_name']; } ; ?> <?php foreach ($patients as $patientinfo) { echo  $patientinfo['last_name']; } ; ?> </a> 
		</div>
	</li>

</div>

</ul></div>


</div>
<?php
include('templates/footer.php');
?>
