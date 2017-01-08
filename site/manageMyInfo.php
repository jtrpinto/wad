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
    <form action="0_action_manageDoctorInfo_pi.php" method="post" enctype="multipart/form-data"> <!---->
      <label class="input-text">First Name:</label><input type="text" name="first_name" class="input-box" placeholder="<?php echo $doctorinfo['first_name']; ?>" value="<?=$doctorinfo['first_name']?>" pattern="[A-Za-z]+" title="Can only contain characters!"><br />
      <label class="input-text">Last Name:</label><input type="text" name="last_name" class="input-box" placeholder="<?php echo $doctorinfo['last_name']; ?>" value="<?=$doctorinfo['last_name']?>" pattern="[A-Za-z]+" title="Can only contain characters!"></label><br />
      <label class="input-text">Citizen ID:</label><input type="integer" name="citizen_id" class="input-box" placeholder="<?php echo $doctorinfo['citizen_id']; ?>" value="<?=$doctorinfo['citizen_id']?>" pattern="[0-9]{8}" title="Can only contain precisely 8 integers!"></label><br />
      <label class="input-text">Birth Date:</label><input type="date" name="birth_date" class="input-box" placeholder="<?php echo $doctorinfo['birth_date']; ?>" value="<?=$doctorinfo['birth_date']?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!"></label><br />
      <label class="input-text">Gender:</label>
      <input type="radio" name="gender" <?php if (isset($doctorinfo['gender']) && $doctorinfo['gender']=='f') echo "checked";?> value="f">Female
      <input type="radio" name="gender" <?php if (isset($doctorinfo['gender']) && $doctorinfo['gender']=='m') echo "checked";?> value="m">Male<br>
      <!--label class="input-text">Photo:</label><input type="text" name="photo" class="input-box" value="
      <?php //echo $doctorinfo['photo']; ?> 
      "></label><br /-->
      <label class="input-text">First Day of Service:</label><input type="date" name="first_day_of_service" class="input-box" placeholder="<?php echo $doctorinfo['first_day_of_service']; ?>" value="<?=$doctorinfo['first_day_of_service']?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!"></label><br />
      <label class="input-text">Is Active:</label>
      <input type="radio" name="is_active" <?php if (isset($doctorinfo['is_active']) && $doctorinfo['is_active']=='1') echo "checked";?> value="1">Yes
      <input type="radio" name="is_active" <?php if (isset($doctorinfo['is_active']) && $doctorinfo['is_active']=='0') echo "checked";?> value="0">No<br>
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div> 
  <div class="wad-body-content-internal">Contact Information</div>
  <div class="wad-body-content-internal-fields">
    <form action="0_action_manageDoctorInfo_ci.php" method="POST">
      <label class="input-text">Country:</label><input type="text" name="country" class="input-box"  placeholder="<?php echo $doctorinfo['country']; ?>" value="<?=$doctorinfo['country']?>" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">City:</label><input type="text" name="city" class="input-box" placeholder="<?php echo $doctorinfo['city']; ?>" value="<?=$doctorinfo['city']?>" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">Street:</label><input type="text" name="street" class="input-box" placeholder="<?php  echo $doctorinfo['street']; ?>" value="<?=$doctorinfo['street']?>" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">Floor Number:</label><input type="integer" name="floor_app" class="input-box-half" placeholder="<?php  echo $doctorinfo['floor_app']; ?>" value="<?=$doctorinfo['floor_app']?>" pattern="[A-Za-z0-9]{0-5}" title="Can only contain characters and integers!"></label>
      <label class="input-text">Door Number:</label><input type="integer" name="doornumber" class="input-box-half"  placeholder="<?php  echo $doctorinfo['doornumber']; ?>" value="<?=$doctorinfo['doornumber']?>" pattern="[A-Za-z0-9]{0-5}" title="Can only contain characters and integers!"></label><br />
      <label class="input-text">Postal Code:</label><input type="integer" name="postal_code" class="input-box-half" placeholder="   <?php echo $doctorinfo['postal_code']; ?>" value="<?=$doctorinfo['postal_code']?>" pattern="[0-9]{5}" title="Can only contain precisely 5 integers!"></label>
      <label class="input-text">Number:</label><input type="integer" name="number" class="input-box-half" placeholder="<?php echo $doctorinfo['phone']; ?>" value="<?=$doctorinfo['phone']?>" pattern="[0-9]{9}" title="Can only contain precisely 9 integers!"></label><br />
      <label class="input-text">Email:</label><input type="text" name="email" class="input-box" placeholder="<?php echo $doctorinfo['email']; ?>" value="<?=$doctorinfo['email']?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" title="Can only be simillar to the form: example@email.com!"></label><br />
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div> 
 

  <div class="wad-body-content-internal">Change Password</div>
  <div class="wad-body-content-internal-fields">
    <form action="0_action_manageDoctorInfo_login.php" method="POST">
      <label class="input-text">Current Password:</label><input type="password" name="oldPassword" class="input-box" class="input-box"></label><br />
      <label class="input-text">New Password:</label><input type="password" name="newPassword" class="input-box" class="input-box"></label><br />
      <label class="input-text">Confirm New Password:</label><input type="password" name="confirmPassword" class="input-box" class="input-box"></label><br />
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div> 
</div>
<?php
 include('templates/footer.php');
?>
