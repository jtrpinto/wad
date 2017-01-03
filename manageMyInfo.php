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
  <form action="" method="POST"> <!--0_action_manageDoctorInfo.php-->
  <input type="hidden" name="doctor_id" value="<?=$doctorinfo['id']?>">
  <label class="input-text">First Name:</label><input type="text" name="first_name" class="input-box" placeholder="
  <?php echo $doctorinfo['first_name']; ?>" value="<?=$doctorinfo['first_name']?>"><br />
  <label class="input-text">Last Name:</label><input type="text" name="last_name" class="input-box" placeholder="
  <?php echo $doctorinfo['last_name']; ?> 
  "></label><br />
  <label class="input-text">Citizen ID:</label><input type="integer" name="citizen_id" class="input-box" placeholder="
  <?php echo $doctorinfo['citizen_id']; ?> 
  "></label><br />
  <label class="input-text">Birth Date:</label><input type="date" name="birth_date" class="input-box" placeholder="
  <?php echo $doctorinfo['birth_date']; ?> 
  "></label><br />
  <label class="input-text">Gender:</label>
  <input type="radio" name="gender" <?php if (isset($doctorinfo['gender']) && $doctorinfo['gender']=='f') echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($doctorinfo['gender']) && $doctorinfo['gender']=='m') echo "checked";?> value="Male">Male<br>

  <!--label class="input-text">Photo:</label><input type="text" name="photo" class="input-box" value="
  <?php echo $doctorinfo['photo']; ?> 
  "></label><br /-->
  </form>
  </div> 
  <div class="wad-body-content-internal">Contact Information</div>
  <div class="wad-body-content-internal-fields">
  <form action="0_action_manageDoctorInfo.php" method="POST">
  <label class="input-text">City:</label><input type="text" name="city" class="input-box" placeholder="
  <?php echo $doctorinfo['city']; ?> 
  "></label><br />
  <label class="input-text">Street:</label><input type="text" name="street" class="input-box" placeholder="
  <?php  echo $doctorinfo['street']; ?> 
  "></label><br />
  <label class="input-text">Postal Code:</label><input type="integer" name="postal_code" class="input-box-half" placeholder="
  <?php echo $doctorinfo['postal_code']; ?> 
  "></label>
  <label class="input-text">Number:</label><input type="integer" name="number" class="input-box-half" placeholder="
  <?php echo $doctorinfo['phone']; ?> 
  "></label><br />
  <label class="input-text">Email:</label><input type="text" name="email" class="input-box" placeholder="
  <?php echo $doctorinfo['email']; ?> 
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
