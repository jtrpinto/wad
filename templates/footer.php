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
    <input type="submit" class="wad-popup-submit"></input>
  </form>
</div>
<div id="wad-observation-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-observation-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div class="wad-popup-title">Add new observation</div>
  <div class="wad-popup-button">Yes</div>
  <div class="wad-popup-button">No</div>
</div>
<script src="files/js/scripts.js"></script>
</body>
</html>
