<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_patients.php');
$_GET['classMenu1'] = "button-submit-pat-active";
$_GET['classMenu2'] = "";
$_GET['classMenu3'] = "";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');
?>



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
