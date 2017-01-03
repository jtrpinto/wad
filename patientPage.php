<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_patients.php');
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
$classMenu1 = "classMenu1";
$classMenu2 = "classMenu2";
$classMenu3 = "classMenu3";
$classMenu4 = "classMenu4";

if(empty($class1)){
  $class1 = "button-submit-pat";
}
if(empty($class2)){
  $class2 = "button-submit-pat";
}
if(empty($class3)){
  $class3 = "button-submit-pat";
}
if(empty($class4)){
  $class4 = "button-submit-pat";
}
?>

<div class="wad-body-patient-menu">
<input type="submit" class="button-submit-pat" id="edit-pat-info" value="Edit Patient Info"></input>
<input type="submit" class="button-submit-pat" id="patient-history" value="Patient History"></input>
<input type="submit" class="button-submit-pat" id="see-appoint" value="See Appointments"></input>
<input type="submit" class="button-submit-pat" id="see-gallery" value="Image Gallery"></input>
</div>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title-patient">Edit Patient Info</div>
  <div class="wad-body-content-internal-patient">Personal Information</div>
  <div class="wad-body-content-internal-fields-patient">
  <form action="" method="POST"> <!--0_action_manageDoctorInfo.php-->
  <label class="input-text">First Name:</label><input type="text" name="first_name" class="input-box" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['first_name']; } ; ?> 
  "></label><br />
  <label class="input-text">Last Name:</label><input type="text" name="last_name" class="input-box" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['last_name']; } ; ?> 
  "></label><br />
  <label class="input-text">Healthcare ID:</label><input type="integer" name="healthcare_id" class="input-box" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['healthcare_id']; } ; ?> 
  "></label><br />
  <label class="input-text">Birth Date:</label><input type="date" name="birth_date" class="input-box" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['birth_date']; } ; ?> 
  "></label><br />
  <label class="input-text">Gender:</label>
  <input type="radio" name="gender" <?php if (isset($patient['gender']) && $patient['gender']=='f') echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($patient['gender']) && $patient['gender']=='m') echo "checked";?> value="Male">Male<br>

  <!--label class="input-text">Photo:</label><input type="text" name="photo" class="input-box" value="
  <?php foreach ($patients as $patient) { echo  $patient['photo']; } ; ?> 
  "></label><br /-->
  </form>
  </div> 

  <div class="wad-body-content-internal">Contact Information</div>
  <div class="wad-body-content-internal-fields-patient">
  <form action="0_action_manageDoctorInfo.php" method="POST">
  <label class="input-text">City:</label><input type="text" name="city" class="input-box" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['city']; } ; ?> 
  "></label><br />
  <label class="input-text">Street:</label><input type="text" name="street" class="input-box" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['street']; } ; ?> 
  "></label><br />
  <label class="input-text">Postal Code:</label><input type="integer" name="postal_code" class="input-box-half" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['postal_code']; } ; ?> 
  "></label>
  <label class="input-text">Number:</label><input type="integer" name="number" class="input-box-half" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['phone']; } ; ?> 
  "></label><br />
  <label class="input-text">Email:</label><input type="text" name="email" class="input-box" placeholder="
  <?php foreach ($patients as $patient) { echo  $patient['email']; } ; ?> 
  "></label><br />
  </form>
  </div> 
  <input type="submit" class="button-submit" value="Save">
</div>
</div>

</div>

<?php
include('templates/footer.php');
?>
