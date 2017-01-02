<?php
include('templates/login_header.php');
?>


<div class="wad-body-content-login">
<img id="wad-header-logo" class="wad-body-content-login-img" src="files/img/WAD.png" height="60px" alt="WAD Logo">
<div class="wad-body-content-title-login">Login</div>
<div class="wad-body-content-box-login">
<form action="0_action_login.php" method="post" class="login-form"> 
<input type="text" placeholder="username" name="username"> <br /><br />
<input type="password" placeholder="password" name="password"> <br /><br />
<input type="submit" value="Submit"> <br />
</form>
</div>
</div>
<?php
include('templates/footer.php');
?>
