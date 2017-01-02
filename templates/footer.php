</div>
<footer>
  &#169 Jo&atilde;o Ribeiro Pinto and Patr&iacute;cia Loureiro Rodrigues. Web Aided Diagnosis. Web Technologies. FEUP 2016.
</footer>
<div id="wad-doctor-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-doctor-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <img id="wad-doctor-popup-pic" src="files/img/doctor1.jpg" height="150px" alt="Doctor Picture" onclick="openPopUp('wad-doctor-popup')">
  <div id="wad-doctor-popup-name">Jane Doe, MD</div>
  <a href="manageMyInfo.php" style="text-decoration: none"><div class="wad-popup-button">Manage My Info</div></a>
  <a href="#"onclick="openPopUp('wad-doctor-delete-popup')" style="text-decoration: none"><div class="wad-popup-button">Delete My Account</div></a>
  <a href="createNewDoctor.php" style="text-decoration: none"><div class="wad-popup-button">Create a New Doctor's Account</div></a>
   <a href="myLogIn.php" style="text-decoration: none"><div class="wad-popup-button">Log Out</div></a>
</div>
<div id="wad-doctor-delete-popup" class="wad-popup">
  <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-doctor-delete-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
  <div id="wad-doctor-delete-popup-name">Are you sure you want to delete your account?</div>
  <div class="wad-popup-button">Yes</div>
  <div class="wad-popup-button">No</div>
</div>
<script src="files/js/scripts.js"></script>
</body>
</html>
