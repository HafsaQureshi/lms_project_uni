<title>Course Creation Form</title>
<?php
    include("db_connection.php");
          
    if(isset($_POST['submit'])) 
    {
      $department = $_POST["dept"];
      $coursename = $_POST["cname"];
    // course image
    $iamgee = $_FILES["cimage"]["name"];
    $im = $_FILES["cimage"]["tmp_name"];
    $cimagee="images/".$iamgee;
    move_uploaded_file($im,$cimagee);
    // $image = $_POST["cimage"];
// course image
      $description = $_POST["description"];  
      $gpa = $_POST["gpa"];
      $credithours = $_POST["hours"]; 
      $startdate = $_POST["sdate"];  
      $enddate = $_POST["edate"];  
      $semester = $_POST["semester"];
  
      // course note +link
      $filename = $_FILES["CourseNotes"]["name"];
      $tempname = $_FILES["CourseNotes"]["tmp_name"];
      $folder="images/".$filename;
      move_uploaded_file($tempname,$folder);
      $links = $_POST["links"];
      // assignment file + link
      $file = $_FILES["assignments"]["name"];
      $temp = $_FILES["assignments"]["tmp_name"];
      $folderr="images/".$file;
      move_uploaded_file($temp,$folderr);
      $link = $_POST["link"];

      $sql="INSERT INTO `courses` VALUES('','$department','$coursename','$cimagee',' $description',
      '$startdate','$enddate','$gpa',' $credithours','$semester','$links','$folder','$link','$folderr')"; 
      $result=mysqli_query($con,$sql); 
      // exit();
      if($result)
      {
        echo "<script>window.location.href='course-confirmation.php'</script>";
      //  alert("I am an alert box!");
      }
    }
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


<?php 
include("admin-nav.php");
?>

<div class="content ">
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <div class="testbox">
      <form method="post" action="course-info.php"  enctype="multipart/form-data">
        <div class="banner">
            <h1>Adding a New Course</h1>
          </div>
          <!-- <h2>Applicant Details</h2> -->
          <div class="contact-item">
            <div class="item"> 
              <p>Course Full Name<span class="required">*</span></p>
              <input type="text" name="cname" required/>
            </div>
            <div class="item">
              <p>Course Image<span class="required">*</span></p>
              <input type="file" name="cimage" required/>
            </div>
          </div>  
          <div class="contact-item">
            <div class="item">
              <p>Department<span class="required">*</span></p>
              <!-- <input type="text" name="name" required/> -->
              <select required  name="dept">
                  <option value="1">Select Department</option>
                  <option value="BSCS">BSCS</option>
                  <option value="BSE">BSE</option>
                  <option value="BES">BES</option>
                  <option value="BCE">BCE</option>
                </select>
            </div>
            <div class="item">
                <p>Semester<span class="required">*</span></p>
                <select required name="semester">
                  <option value="1">Select Semester</option>
                  <option value="1st Semester">1st Semester</option>
                  <option value="2nd Semester">2nd Semester</option>
                  <option value="3">3rd Semester</option>
                  <option value="4">4th Semester</option>
                  <option value="5">5th Semester</option>
                  <option value="3">6th Semester</option>
                  <option value="4">7th Semester</option>
                  <option value="5">8th Semester</option>
                </select>
            </div>
          </div>

          <div class="contact-item">
            <div class="item"> 
              <p>Your Courrent GPA<span class="required">*</span></p>
              <input type="text" name="gpa" required/>
            </div>
            <div class="item">
              <p>Course Credit Hours<span class="required">*</span></p>
              <input type="text" name="hours" required/>
            </div>
          </div> 

        <div class="position-item">
          <div class="item" >
            <p>Start Date <span class="required">*</span></p>
             <input type="date" name="sdate" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="item" >
            <p>End Date <span class="required">*</span></p>
            <input type="date" name="edate" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
        </div>



        <div class="position-item">
          <div class="item" >
            <p>Course Notes <span class="required">*</span></p>
             <input type="file" name="CourseNotes" required/>
          </div>
          <div class="item" >
            <p>Course Lecture Link <span class="required">*</span></p>
            <input type="text" name="links" required/>
          </div>
        </div>




        <div class="position-item">
          <div class="item" >
            <p>Assignments <span class="required">*</span></p>
             <input type="file" name="assignments" required/>
          </div>
          <div class="item" >
            <p>Assignments Link <span class="required">*</span></p>
            <input type="text" name="link" required/>
          </div>
        </div>
        <div class="item">
            <label for="instructions">Description</label>
            <textarea id="instructions"name="description" rows="3"></textarea>
          </div>
  
        <div class="btn-block">
          <button class="green" type="submit" name="submit" href="/">Add Course</button>
        </div>
      </form>
    </div>
  </body>
</html>

<br> <br>
</div>

<?php include("footer.php"); ?>  <!-- footer -->




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
      right: 4%;
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


  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  .sticky + .content {
    padding-top: 60px;
  }
</style>


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