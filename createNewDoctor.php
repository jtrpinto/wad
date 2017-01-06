<?php
include_once('config/init.php');
//include_once('database/appointments.php');
include('templates/header.php');
//$_GET['class4'] = "wad-side-menu-button-active";
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
?>


<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title">Insert a New Doctor</div>
  <div class="wad-body-content-internal">Information</div>
  <div class="wad-body-content-internal-fields">
    <form action="0_action_createNewDoctor.php" method="post" enctype="multipart/form-data"> <!---->
      <label class="input-text">First Name:</label><input type="text" name="first_name" class="input-box" pattern="[A-Za-z]+" title="Can only contain characters!"><br />
      <label class="input-text">Last Name:</label><input type="text" name="last_name" class="input-box" pattern="[A-Za-z]+" title="Can only contain characters!"></label><br />
      <label class="input-text">Citizen ID:</label><input type="integer" name="citizen_id" class="input-box" pattern="[0-9]{8}" title="Can only contain precisely 8 integers!"></label><br />
      <label class="input-text">Birth Date:</label><input type="date" name="birth_date" class="input-box" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!"></label><br />
      <label class="input-text">Gender:</label>
      <input type="radio" name="gender" value="f">Female
      <input type="radio" name="gender" value="m">Male<br>
      <!--label class="input-text">Photo:</label><input type="text" name="photo" class="input-box" value="
      <?php //echo $doctorinfo['photo']; ?> 
      "></label><br /-->

      <label class="input-text">First Day of Service:</label><input type="date" name="first_day_of_service" class="input-box" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!"></label><br />
      <label class="input-text">Is Active:</label>
      <input type="radio" name="is_active" value="1">Yes
      <input type="radio" name="is_active" value="0">No<br>

	  <label class="input-text">Country:</label><input type="text" name="country" class="input-box" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">City:</label><input type="text" name="city" class="input-box" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">Street:</label><input type="text" name="street" class="input-box" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">Floor Number:</label><input type="integer" name="floor_app" class="input-box-half" pattern="[A-Za-z0-9]{0-5}" title="Can only contain characters and integers!"></label>
      <label class="input-text">Door Number:</label><input type="integer" name="doornumber" class="input-box-half" pattern="[A-Za-z0-9]{0-5}" title="Can only contain characters and integers!"></label><br />
      <label class="input-text">Postal Code:</label><input type="integer" name="postal_code" class="input-box-half" pattern="[0-9]{5}" title="Can only contain precisely 5 integers!"></label>
      
      <label class="input-text">Number:</label><input type="integer" name="number" class="input-box-half" pattern="[0-9]{9}" title="Can only contain precisely 9 integers!"></label><br />
      <label class="input-text">Email:</label><input type="text" name="email" class="input-box" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" title="Can only be simillar to the form: example@email.com!"></label><br />

      <label class="input-text">Username:</label><input type="text" name="username" class="input-box" pattern="[A-Za-z0-9_-.]+" title="Can only contain characters, integers, and [.-_]!"></label><br />
      <label class="input-text">Password:</label><input type="password" name="password" class="input-box" class="input-box"></label><br />
      <label class="input-text">Confirm Password:</label><input type="password" name="confirmPassword" class="input-box" class="input-box"></label><br />

      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div> 
</div>
<?php
 include('templates/footer.php');
?>
