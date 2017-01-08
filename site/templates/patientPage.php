<?php $patient_id = $_GET['patient_id'];
?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title"><?php foreach ($patients as $patient){ echo $patient['first_name'];  echo ' '; echo $patient['last_name']; } ?>
</div>

<div class="wad-body-content-internal"> 
<ul><div class="patient-photo">
<a href="" class="img"><img src="files/img/patients/<?php foreach ($patients as $patient){ echo $patient['healthcare_id']; } ?>.jpg"/></a>
</ul>
<ul><div class="patient-info">
<label> Healthcare ID: <?php echo $patient['healthcare_id'];?></label><br/>
<label>Gender: <?php if($patient['gender']=='f'){
      echo "Female";
    }
    elseif ($patient['gender']=='m') {
      echo "Male";
    }
    else {
      echo "Undefined";
    }; ?></label><br/>
<label>Birthday: <?php echo $patient['birth_date']; ?></label><br/>
<label>Address: <?php echo $patient['door_number']; echo ' '; 
            echo $patient['street']; echo ', ';
            echo $patient['postal_code'];  echo ' ';
            echo $patient['city']; echo(', ');
            echo $patient['country']?></label><br/>
<label>Phone: <?php echo $patient['phone']; ?></label><br/>
<label>E-mail: <?php echo $patient['email']; ?></label><br/>
</div>
</ul>
</div>

<?php
$classMenu1 = $_GET["classMenu1"];
$classMenu2 = $_GET["classMenu2"];
$classMenu3 = $_GET["classMenu3"];
$classMenu4 = $_GET["classMenu4"];

if(empty($classMenu1)){
  $classMenu1 = "button-submit-pat";
}
if(empty($classMenu2)){
  $classMenu2 = "button-submit-pat";
}
if(empty($classMenu3)){
  $classMenu3 = "button-submit-pat";
}
if(empty($classMenu4)){
  $classMenu4 = "button-submit-pat";
}
?>

<div class="wad-body-patient-menu">
<a href="editPatientInfo.php?<?='patient_id='?><?=$_GET['patient_id']?>"><input type="submit" class="<?php echo $classMenu1; ?>" id="patient_id" value="Edit Patient Info"></input></a>
<a href="patientsHistory.php?<?='patient_id='?><?=$_GET['patient_id']?>"><input type="submit" class="<?php echo $classMenu2; ?>" id="patient_id" value="Patient History"></input></a>
<!--input type="submit" class="button-submit-pat" id="patient-history" value=""></input-->
<!--input type="submit" class="button-submit-pat" id="see-appoint" value=""></input-->
<a href="seeApointments.php?<?='patient_id='?><?=$_GET['patient_id']?>"><input type="submit" class="<?php echo $classMenu3; ?>" id="patient_id" value="See Appointments"></input></a>
<a href="patientImages.php?<?='patient_id='?><?=$_GET['patient_id']?>"><input type="submit" class="<?php echo $classMenu4; ?>" id="patient_id" value="Image Gallery"></input></a>
</div>
