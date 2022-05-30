<title>Landing Page</title>
<?php include_once('db_connection.php'); ?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://kit.fontawesome.com/e151ebcf1a.js" crossorigin="anonymous"></script>


<?php
// <!-- Header -->
include("header.html");
?> 

<div class="landing-page">
    <img src="images/landing.jpg" class="responsive" alt=""> <!-- landing page iamge  -->
</div>   

<div class="container-fluid frontpage-marketing" > <!-- website pages cards  -->
    <div class="card-deck">
        <div class="card">
        <div class="card-body" id="grencard">
            <i class="fas fa-eye fontsiz" ></i> <br> <br>
            <h3 id="txt">Our Vision</h3><br>
            <center><a class="btn" id="btn1" href="http://localhost/LMS/our%20vision/Our-vision.php">Read More</a></center> 
        </div>
        </div>
        <div class="card">
        <div class="card-body" id="grencard">
            <i class="far fa-building fontsiz"></i> <br> <br>
            <h3 id="txt">About Us</h2><br>
            <center><a class="btn" id="btn1" href="http://localhost/LMS/aboutus/aboutus.php">Read More</a></center> 
        </div>
        </div>
        <div class="card">
        <div class="card-body" id="grencard">
            <i class="far fa-id-badge fontsiz"></i> <br> <br>
            <h3 id="txt">Contact Us</h3><br>
           <center><a class="btn" id="btn1" href="http://localhost/LMS/contactus.php">Read More</a></center> 
        </div>
        </div>
        <div class="card">
        <div class="card-body" id="grencard">
            <i class="far fa-calendar fontsiz"></i> <br> <br>
            <h2  id="txt">Events</h2><br> 
            <center><a class="btn" id="btn1" href="http://localhost/LMS/events.php">Read More</a></center> 
        </div>
        </div>
    </div>
</div>
        

    
<!-- Third container -->
<div class="container-fluid frontpage-numbers" > 
  <div class="row analytics blak whittxt" >

    <div class="col-md-3">
        <center> <br> <br> <h1><p>OUR</p>ANALYTICS</h1></center>
    </div>

    <div class="col-md-3 number">
      <center>
      <span class="fa fa-user-circle fa-4x"></span> <br><br>
      <h3>
      <?php
      $users="SELECT count(id) FROM user_infoo";
      $result = mysqli_query($con,$users);
      $Available_users = mysqli_fetch_assoc($result);
      foreach ($Available_users as $key => $value) {
        echo "$value";}
      ?>
      </h3>
      <hr>
      <p class="h-p">Available Users</p>
      </center>  
    </div>

    <div class="col-md-3 number">
    <center>
      <span class="fa fa-graduation-cap fa-4x"></span> <br><br>
      <h3>
        
      <?php
      $currentDate =date('Y-m-d');
      $timestamp1 = strtotime($currentDate);
      $courses="SELECT count(id) FROM courses WHERE UNIX_TIMESTAMP(startdate) <= $timestamp1 AND UNIX_TIMESTAMP(enddate) >= $timestamp1";
      $result = mysqli_query($con,$courses);
      $all_courses = mysqli_fetch_assoc($result);
      foreach ($all_courses as $key => $value) {
        echo "$value";}
      ?>
      
      </h3>
      <hr>
      <p class="h-p">Available Trainings</p>
    </center>
    </div>

    <div class="col-md-3 number">
     <center>
      <span class="fa fa-puzzle-piece fa-4x"></span> <br><br>
      <h3>

      <?php
      $currentDate =date('Y-m-d');
      $timestamp1 = strtotime($currentDate);
      $courses="SELECT count(id) FROM courses WHERE UNIX_TIMESTAMP(startdate) > $timestamp1";
      $result = mysqli_query($con,$courses);
      $all_courses = mysqli_fetch_assoc($result);
      foreach ($all_courses as $key => $value) {
        echo "$value";}
      ?>

      </h3>
      <hr>
      <p class="h-p">Not Yet Started</p>
     </center>
    </div>

  </div>
</div>



<?php 
include("landing_slider.html"); 
include("footer.php"); 
?> 

    

    
