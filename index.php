<?php
$conn = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=tweb1601','tweb1601','Monet1840');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$conn->query("SET SCHEMA 'public'");

$stmt = $conn->prepare('SELECT * FROM wad.appointments');
$stmt->execute();
$categories = $stmt->fetchAll();
?>

<html>
<head>
  <title>WAD</title>
  <link rel="stylesheet" href="files/css/style.css"> <!-- CSS Stylesheet -->
  <link rel="icon" href="files/img/WAD_icon.jpg"> <!-- Tab icon -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans" rel="stylesheet"> <!-- Google Fonts -->
  <script src="https://use.fontawesome.com/9f7b30ab12.js"></script> <!-- Font Awesome -->
</head>
<body>
  <header>
    <div id="wad-header-date-time"><b>Tuesday, 11 Nov. 2016</b><br>12:31</div>
    <img id="wad-header-logo" src="files/img/WAD.png" height="60px" alt="WAD Logo">
    <div id="wad-header-doctor-info">
      <b>Jane Doe, MD</b>
      <img id="wad-header-doctor-pic" src="files/img/doctor1.jpg" height="60px" alt="Doctor Picture" onclick="openPopUp('wad-doctor-popup')">
    </div>
  </header>
  <div class="wad-body">
    <div id="wad-side-menu" class="wad-side-menu">
      <div id="wad-side-menu-opened">
        <div class="wad-side-menu-button-active">Home Page</div>
        <div class="wad-side-menu-button">My Patients</div>
        <div class="wad-side-menu-button">Manage My Schedule</div>
        <div class="wad-side-menu-button">Manage My Info</div>
        <div id="wad-side-menu-collapse-button"><a href="#" onclick="collapseSideMenu()"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></div>
      </div>
      <div id="wad-side-menu-collapsed">
        <div class="wad-side-menu-button-active"><i class="fa fa-home" aria-hidden="true"></i></div>
        <div class="wad-side-menu-button"><i class="fa fa-users" aria-hidden="true"></i></div>
        <div class="wad-side-menu-button"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="wad-side-menu-button"><i class="fa fa-user-md" aria-hidden="true"></i></div>
        <div id="wad-side-menu-collapse-button"><a href="#" onclick="openSideMenu()"><i class="fa fa-chevron-right" aria-hidden="true" onclick="openSideMenu"></i></a></div>
      </div>
    </div>
    <div class="wad-body-content">
      <div class="wad-body-content-title">Schedule</div>
      <div class="wad-body-content-box">
        <div class="month">
          <ul>
            <li class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></li>
            <li class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
            <li>
              August 2016
            </li>
          </ul>
        </div>
        <ul class="weekdays">
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>
        <ul class="days">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li><span class="active">10</span></li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>
      </div>
      <div class="wad-half-body-division">
        <div class="wad-half-body-content">
          <div class="wad-body-content-title">Next Appointments</div>
            <ul>
              <?php foreach ($categories as $category) { ?>
                <li><?=$category['description'];?></li>
              <? };?>
            </ul>
          <div class="wad-body-content-box"></div>
        </div>
        <div class="wad-half-body-content">
          <div class="wad-body-content-title">Recent Exams</div>
          <div class="wad-body-content-box"></div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    &#169 João Ribeiro Pinto and Patrícia Loureiro Rodrigues. Web Aided Diagnosis. Web Technologies. FEUP 2016.
  </footer>
  <div id="wad-doctor-popup" class="wad-popup">
    <a class="wad-popup-icon" href="#" onclick="closePopUp('wad-doctor-popup')"><i class="fa fa-times" aria-hidden="true"></i></a>
    <img id="wad-doctor-popup-pic" src="files/img/doctor1.jpg" height="150px" alt="Doctor Picture" onclick="openPopUp('wad-doctor-popup')">
    <div id="wad-doctor-popup-name">Jane Doe, MD</div>
    <div class="wad-popup-button">Manage My Info</div>
    <div class="wad-popup-button">Delete My Account</div>
    <div class="wad-popup-button">Create a New Doctor's Account</div>
    <div class="wad-popup-button">Log Out</div>
  </div>
  <script src="files/js/scripts.js"></script>
</body>
</html>
