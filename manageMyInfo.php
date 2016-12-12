<?php
include_once('config/init.php');
include_once('database/appointments.php');
include('templates/header.php');
$_GET['class4'] = "wad-side-menu-button-active";
include('templates/body.php');
?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title">Manage My Info</div>
  <div class="internal-content">Personal Information</div>
  <div class="internal-content-fields">
  <form > <!--method="post" action=""-->
  <label class="input-text">First Name:</label><input type="text" name="first_name" class="input-box" /><br />
  <label class="input-text">Last Name:</label><input type="text" name="last_name" class="input-box"/><br />
  <label class="input-text">Citizen ID:</label><input type="integer" name="citizen_id" class="input-box"/><br />
  <label class="input-text">Birth Date:</label><input type="date" name="birth_date" class="input-box"/><br />
  <label class="input-text">Gender:</label><input type="text" name="gender" class="input-box"/><br />
  <label class="input-text">Photo:</label><input type="text" name="photo" class="input-box"/><br />
  </form>
  </div> 
  <div class="internal-content">Contact Information</div>
  <div class="internal-content-fields">
  <form > <!--method="post" action=""-->
  <label class="input-text">City:</label><input type="text" name="first_name" class="input-box"/><br />
  <label class="input-text">Street:</label><input type="text" name="last_name" class="input-box"/><br />
  <label class="input-text">Postal Code:</label><input type="integer" name="citizen_id" class="input-box-half"/>
  <label class="input-text">Number:</label><input type="date" name="birth_date" class="input-box-half"/><br />
  <label class="input-text">Phone Number:</label><input type="text" name="gender" class="input-box"/><br />
  <label class="input-text">Email:</label><input type="text" name="photo" class="input-box"/><br />
  </form>
  </div> 
  <input type="submit" value="Save">
  <div class="internal-content">Change Password</div>
  <div class="internal-content-fields">
  <form > <!--method="post" action=""-->
  <label class="input-text">Current Password:</label><input type="text" name="first_name" class="input-box"/><br />
  <label class="input-text">New Password:</label><input type="text" name="last_name" class="input-box"/><br />
  <label class="input-text">Confirm New Password:</label><input type="integer" name="citizen_id" class="input-box"/><br />
  </form>
  </div> 
  <input type="submit" value="Submit">

</div>

<?php
include('templates/footer.php');
?>
