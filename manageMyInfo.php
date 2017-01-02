<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "wad-side-menu-button-active";

include('templates/body.php');
?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title">Manage My Info</div>
  <div class="wad-body-content-internal">Personal Information</div>
  <div class="wad-body-content-internal-fields">
  <form action="0_action_manageDoctorInfo.php" method="POST">
  <label class="input-text">First Name:</label><input type="text" name="first_name" class="input-box" value="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['first_name']; } ; ?> 
  "></label><br />
  <label class="input-text">Last Name:</label><input type="text" name="last_name" class="input-box" value="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['last_name']; } ; ?> 
  "></label><br />
  <label class="input-text">Citizen ID:</label><input type="integer" name="citizen_id" class="input-box" value="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['citizen_id']; } ; ?> 
  "></label><br />
  <label class="input-text">Birth Date:</label><input type="date" name="birth_date" class="input-box" value="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['birth_date']; } ; ?> 
  "></label><br />
  <label class="input-text">Gender:</label><input type="text" name="gender" class="input-box" value="
  <?php foreach ($doctor_information as $doctorinfo) { /*trocar para radio-button*/
  	if($doctorinfo['gender']=='f'){
  		echo "Female";
  	}
  	elseif ($doctorinfo['gender']=='m') {
  		echo "Male";
  	}
  	else {
  		echo "Undefined";
  	}
   
   } ; ?> 
  "></label><br />
  <!--label class="input-text">Photo:</label><input type="text" name="photo" class="input-box" value="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['photo']; } ; ?> 
  "></label><br /-->
  </form>
  </div> 
  <div class="wad-body-content-internal">Contact Information</div>
  <div class="wad-body-content-internal-fields">
  <form action="0_action_manageDoctorInfo.php" method="POST">
  <label class="input-text">City:</label><input type="text" name="city" class="input-box" placeholder="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['city']; } ; ?> 
  "></label><br />
  <label class="input-text">Street:</label><input type="text" name="street" class="input-box" placeholder="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['street']; } ; ?> 
  "></label><br />
  <label class="input-text">Postal Code:</label><input type="integer" name="postal_code" class="input-box-half" placeholder="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['postal_code']; } ; ?> 
  "></label>
  <label class="input-text">Number:</label><input type="integer" name="number" class="input-box-half" placeholder="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['phone']; } ; ?> 
  "></label><br />
  <label class="input-text">Email:</label><input type="text" name="email" class="input-box" placeholder="
  <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['email']; } ; ?> 
  "></label><br />
  </form>
  </div> 
  <input type="submit" class="button-submit" value="Save">

  <div class="wad-body-content-internal">Change Password</div>
  <div class="wad-body-content-internal-fields">
  <form action="0_action_manageDoctorInfo.php" method="POST">
  <label class="input-text">Current Password:</label><input type="text" name="first_name" class="input-box"/><br />
  <label class="input-text">New Password:</label><input type="text" name="last_name" class="input-box"/><br />
  <label class="input-text">Confirm New Password:</label><input type="integer" name="citizen_id" class="input-box"/><br />
  </form>
  </div> 
</div>
<?php
 include('templates/footer.php');
?>
