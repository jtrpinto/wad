<html>
<!---->
<head>
  <title>WAD</title>
  <link rel="stylesheet" href="files/css/style.css"> <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="files/css/calendar.css"> <!-- Calendar Stylesheet -->
  <link rel="icon" href="files/img/WAD_icon.jpg"> <!-- Tab icon -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans" rel="stylesheet"> <!-- Google Fonts -->
  <script src="https://use.fontawesome.com/9f7b30ab12.js"></script> <!-- Font Awesome -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<?php 
//session_start();
include_once('config/init.php');
//$_GET['doctor_id'] = "1"; 
if(isset($_SESSION['doctor_id'])){
  $doctor_id=$_SESSION['doctor_id'];

  //file_put_contents('abc.txt', print_r($doctor_id, true));
}
else{ 
  header ('Location: myLogin.php');
}

//$_GET['patient_id'] = "2"; 
include_once('1_database_appointments.php');
include('1_database_doctors.php');
//include('1_database_patients.php');
?>
<body>
  <header>
    <div id="wad-header-date-time"><b><?php echo date("l, "); ?></b>
    <b id='date'></b><br>
    <b id='time' style="font-weight:normal"></b>
    <?php /*date_default_timezone_set("Portugal"); /*Saber se se faz a identificação automática das pessoas? ou faz-se default para PT */
    /*echo date("H:i"); */ ?>
    </div>
    <img id="wad-header-logo" src="files/img/WAD.png" height="60px" alt="WAD Logo">
    <div id="wad-header-doctor-info">
      <b> 
      <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['first_name']; } ; ?>    <?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['last_name']; } ; ?>, MD</b>
      <img id="wad-header-doctor-pic" src="files/img/doctors/<?php foreach ($doctor_information as $doctorinfo) { echo  $doctorinfo['citizen_id']; } ; ?>.jpg" height="60px" alt="Doctor Picture" onclick="openPopUp('wad-doctor-popup')">
    </div>
  </header>
<script type="text/javascript">
  
  function updateClock() {
    var now = new Date(), 

        months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']; 
        time = now.getHours() + ':' + now.getMinutes(), 

        date = [now.getDate(), 
                months[now.getMonth()],
                now.getFullYear()].join(' ');

    document.getElementById('date').innerHTML = [date].join(' ');
    document.getElementById('time').innerHTML = [time].join(' ');
    setTimeout(updateClock, 1000);
}
updateClock(); // initial call
</script>