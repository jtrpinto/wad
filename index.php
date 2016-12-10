<?php
include_once('config/init.php');
include_once('database/appointments.php');
include('templates/header.php');
include('templates/body.php');
?>

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
        <div class="wad-body-content-box">
          <ul>
            <?php foreach ($categories as $category) { ?>
              <li><?=$category['description'];?></li>
            <? };?>
          </ul>
        </div>
      </div>
      <div class="wad-half-body-content">
        <div class="wad-body-content-title">Recent Exams</div>
        <div class="wad-body-content-box"></div>
      </div>
    </div>
  </div>

  <?php
  include('templates/footer.php');
  ?>
