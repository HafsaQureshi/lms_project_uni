<?php session_start();
$email = $_SESSION['email'];
?>

<title>Course Registeration Form</title>
<?php
include("top-sidebar-student.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://kit.fontawesome.com/e151ebcf1a.js" crossorigin="anonymous"></script>

<div class="content ">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

 <!-- courses dropdown query-->
  <?php

  $currentDate =date('Y-m-d');
  $timestamp1 = strtotime($currentDate);
include_once('db_connection.php');


$userCourse="SELECT fullname FROM courses where UNIX_TIMESTAMP(startdate) > $timestamp1 ";
$result = mysqli_query($con,$userCourse);
?>  
<!-- courses dropdown query end -->
<?php
     

    include("db_connection.php");    
    $coursenameErr = $gpaErr = $deptErr  = $semesterErr= "";
    $coursename = $gpa = $dept = $semester ="";
    
    if(isset($_POST['submit'])) 
    {
      $coursename = $_POST["coursename"];
      $gpa = $_POST["gpa"];
      $dept = $_POST["dept"];
      $semester = $_POST["semester"];
      if($coursename =="") {
        $coursenameErr=  "<span class='error'>Please enter coursename.</span>";
        }
        elseif($gpa == ""){
          $gpaErr=  "<span class='error'>Please enter your current gpa.</span>";
        }
      
        elseif($dept == ""){
          $deptErr=  "<span class='error'>Please select your department.</span>";
        } 
        elseif($semester == ""){
          $semesterErr=  "<span class='error'>Please select your current semester.</span>";
        }  
        else{

    $checkCourse="SELECT id,fullname,eligibility_criteria_GPA,semester,category FROM courses  where fullname = '$coursename' ";
    $result1 = mysqli_query($con, $checkCourse);
     while
    ($savedResult = mysqli_fetch_assoc($result1)) 
    {
      // echo "<xmp>";print_r($savedResult);echo "</xmp>";
    if($savedResult['eligibility_criteria_GPA']==$gpa && $savedResult['category']==$dept && $savedResult['semester']==$semester  ){
      $course_id=$savedResult['id'];
      ?><script> alert("you are eligible for this course");</script><?php
  
      $sql = "SELECT * FROM user_infoo WHERE `email` = '".$_SESSION['email']."' ";
      $result=mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      $id = $row['id'];
      $sql="INSERT INTO `course_enroll_users` VALUES('', '$course_id' ,'$id')"; 
      $result=mysqli_query($con,$sql); 
      if($result)
      {
        echo "<script>window.location.href='confirm.php'</script>";
      }
    }
    else{
    ?><script> alert("you are not eligible for this course");</script><?php
    }
 }
          // $sql="INSERT INTO user_infoo VALUES('','$name','$fname','$email','$hash','$cnic','$phone','$city','$country','$qf','$dob','$typelogin')"; 
          // $result=mysqli_query($con,$sql); 

          // if($result)
          // {
          //   echo "<script>window.location.href='confirm.php'</script>";
          // }
      }
    }   


  ?>
    <div class="testbox">
      <form method="post" action="course-registeration-form.php">
        <div class="banner">
            <h1>Adding a New Course</h1>
          </div>
          <div class="contact-item">
          <div class="item">
                <p>Course Name<span class="required">*</span></p>
                <?php echo $coursenameErr;?>
                <select required name="coursename">
                  <option value="1">Select Course</option>
                <?php  while($data = mysqli_fetch_array($result)){
    echo "<option value='". $data['fullname'] ."'>" .$data['fullname'] ."</option>";  // displaying data in option menu
}	?>
                </select>
            </div>
            <div class="item">
              <p>Your Current GPA<span class="required">*</span></p>
              <?php echo $gpaErr;?>
              <input type="text" name="gpa" required/>
            </div>
          </div>
          <div class="contact-item">
            <div class="item">
              <p>Department/category<span class="required">*</span></p>
              <?php echo $deptErr;?>
              <select required  name="dept">
                  <option value="1">Select Your Current Department</option>
                  <option value="BSCS">BSCS</option>
                  <option value="BSE">BSE</option>
                  <option value="BES">BES</option>
                  <option value="BCE">BCE</option>
                </select>
            </div>
            <div class="item">
                <p>Eligibility Criteria<span class="required">*</span></p>
                <?php echo $semesterErr;?>
                <select required name="semester">
                  <option value="1">Select Your Current Semester</option>
                  <option value="1st Semester">1st Semester</option>
                  <option value="2nd Semester">2nd Semester</option>
                  <option value="3rd Semester">3rd Semester</option>
                  <option value="4th Semester">4th Semester</option>
                  <option value="5th Semester">5th Semester</option>
                  <option value="6th Semester">6th Semester</option>
                  <option value="7th Semester">7th Semester</option>
                  <option value="8th Semester">8th Semester</option>
                </select>
            </div>
          </div>

        <div class="btn-block">
          <button class="green"  type="submit" name="submit" >Submit Request</button>
        </div>
      </form>
    </div>
  </body>
</html>

<br> <br>
</div>

<?php include("footer.php"); ?>  <!-- footer -->


<!--Topbar  CSS -->
<style>
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  .sticky + .content {
    padding-top: 60px;
  }
</style>
<!-- Topbar  CSS -->

<!-- Topbar script start -->
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<!-- Topbar script ended -->

<style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      }
      p.top-info {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      /* padding-top: 50px;
      padding-left: 110px;
      padding-right: 110px;
      padding-bottom: 110px; */
      }
      .green{
  background-color: #7aa033 !important;
  border-color: #7aa033 !important;
  color: white !important;
  /* z-index: -1; */
}
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #888888; 
      }
     .banner {
      position: relative;
      height: 210px;
      background-image: url("https://st2.depositphotos.com/3994451/6203/v/600/depositphotos_62037487-stock-illustration-businessmen-signing-of-a-treaty.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.6); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #888888;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #888888;
      color: #888888;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #888888;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #888888;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: auto;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #1c87c9;
      font-size: 16px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #888888;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item, .position-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item .item, .position-item .item {
      width: calc(50% - 8px);
      }
      .contact-item input, .position-item input {
      width: calc(100% - 12px);
      }
      .position-item select {
      width: 100%;
      }
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
    </style>