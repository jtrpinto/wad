</div>
<footer>
  &#169 Jo&atilde;o Ribeiro Pinto and Patr&iacute;cia Loureiro Rodrigues. Web Aided Diagnosis. Web Technologies. FEUP 2016.
</footer>

<div id="wad-doctor-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-doctor-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <img id="wad-doctor-popup-pic" src="files/img/doctors/<?=$doctor_information[0]['citizen_id'];?>.jpg" height="150px" alt="Doctor Picture" onclick="openPopUp('wad-doctor-popup')">
  <div id="wad-doctor-popup-name"><?=$doctor_information[0]['first_name']?> <?=$doctor_information[0]['last_name']?>, MD</div>
  <a href="manageMyInfo.php" style="text-decoration: none"><div class="wad-popup-button">Manage My Info</div></a>
  <a href="#"onclick="openPopUp('wad-doctor-delete-popup')" style="text-decoration: none"><div class="wad-popup-button">Delete My Account</div></a>
  <a href="createNewDoctor.php" style="text-decoration: none"><div class="wad-popup-button">Create a New Doctor's Account</div></a>
  <a href="0_action_logout.php" style="text-decoration: none"><div class="wad-popup-button">Log Out</div></a> <!--colocar antes do login o logout: ainda não está a funcionar...-->
</div>

<div id="wad-doctor-delete-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-doctor-delete-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Are you sure you want to delete your account?</div>
  <div class="wad-popup-button">Yes</div>
  <div class="wad-popup-button">No</div>
</div>

<div id="wad-manualdiag-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-manualdiag-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Set/change manual diagnosis</div>
  <form action="0_action_new_manualdiag.php" id="manualdiag-form" method="POST">
    Result:
    <select name='manualdiag_result' class="input-box">
        <option value="Positive">Positive</option>
        <option value="Negative">Negative</option>
        <option value="Uncertain">Uncertain</option>
    </select><br><br>
    Probability:
    <input type="text" name="manualdiag_prob"></input><br><br>
    <input type="hidden" name="exam_id" value="<?=$exam_id?>">
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<div id="wad-observation-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-observation-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add new observation</div>
  <form action="0_action_new_observation.php" id="manualdiag-form" method="POST">
    <textarea rows="4" cols="50" name="obs_text"></textarea><br><br>
    Date:
    <input class="input-box" type="date" name="obs_date"><br><br>
    <input type="hidden" name="appointment_id" value="<?=$exam_info[0]['appointments_id']?>"></input>
    <input type="hidden" name="exam_id" value="<?=$exam_id?>"></input>
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<div id="wad-newobservation-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-newobservation-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add new observation</div>
  <form action="0_action_new_observation.php" id="manualdiag-form" method="POST">
    <textarea rows="4" cols="50" name="obs_text"></textarea><br><br>
    Date:
    <input class="input-box" type="date" name="obs_date"><br><br>
    Appointment:
    <select name='appointment_id' class="input-box">
      <?php foreach ($patApps as $app){ ?>
        <option value="<?=$app['id']?>"><?=$app['appointment_date']?> - <?=$app['appointment_time']?></option>
      <?php } ?>
    </select><br><br>
    <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<div id="wad-newtreatment-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-newtreatment-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add new treatment</div>
  <form action="0_action_new_treatment.php" id="newtreatment-form" method="POST">
    Treatment:
    <select name='treatment_id' class="input-box">
      <?php foreach ($allTreatments as $treatment){ ?>
        <option value="<?=$treatment['id']?>"><?=$treatment['name']?> <?=$treatment['dose']?></option>
      <?php } ?>
    </select><br><br>
    Frequency:
    <input type="text" name="frequency"></input><br><br>
    Start:
    <input type="date" name="start_date"></input><br><br>
    End:
    <input type="date" name="end_date"></input><br><br>
    <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<div id="wad-newsymptom-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-newsymptom-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add new symptom</div>
  <form action="0_action_new_symptom.php" id="newsymptom-form" method="POST">
    Symptom:
    <select name='symptom_id' class="input-box">
      <?php foreach ($allSymptoms as $symptom){ ?>
        <option value="<?=$symptom['id']?>"><?=$symptom['name']?> (<?=$symptom['description']?>)</option>
      <?php } ?>
    </select><br><br>
    Place:
    <input type="text" name="place"></input><br><br>
    Description:
    <input type="text" name="description"></input><br><br>
    Start:
    <input type="date" name="start_date"></input><br><br>
    End:
    <input type="date" name="end_date"></input><br><br>
    <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<div id="wad-newappointment-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-newappointment-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add New Appointment</div>
  <form action="0_action_new_appointment.php" id="newappointment-form" method="POST">
  <?php 
      $patients_list = getAllPatients(); ?>
    Patient:
    <select name='patient_id' class="input-box">
      <?php foreach ($patients_list as $patient){ ?>
        <option value="<?=$patient['id']?>">
        <?php echo $patient['first_name'];
              echo ' ';
              echo $patient['last_name'];?> </option>
        <?php } ?>
    </select><br><br>
    Date:
    <input type="date" name="appointment_date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!"></input><br><br>
    Time:
    <input type="time" name="appointment_time" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" title="Can only have the form: hh:mm:ss!"></input><br><br>
    Room:
    <input type="text" name="roomApp"></input><br><br>
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<div id="wad-newsymptomtype-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-newsymptomtype-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add new symptom type</div>
  <form action="0_action_new_symptom_type.php" id="newsymptomtype-form" method="POST">
    Name:
    <input type="text" name="name"></input><br><br>
    Description:
    <textarea rows="4" cols="50" name="description"></textarea><br><br>
    <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<div id="wad-newtreatmenttype-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-newtreatmenttype-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add new treatment type</div>
  <form action="0_action_new_treatment_type.php" id="newtreatmenttype-form" method="POST">
    Name:
    <input type="text" name="name"></input><br><br>
    Dose:
    <input type="text" name="dose"></input><br><br>
    Type of treatment:
    <input type="text" name="treat_type"></input><br><br>
    <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
    <input type="submit" class="wad-popup-submit" value="Submit"></input>
  </form>
</div>

<script src="files/js/scripts.js"></script>
</body>
</html>
