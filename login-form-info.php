
    <title>Learning Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 
  <?php
    include("db_connection.php");    
    $nameErr = $emailErr = $fnameErr  = $passwordErr= $cnicErr= $phoneErr= $cityErr= $countryErr=  "";
    $name = $fname = $email = $password = $cnic = $phone = $city = $country = $qf = $dob = $typelogin ="";
    
    if(isset($_POST['btn'])) 
    {
      $name = $_POST["name"];
      $fname = $_POST["fname"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      // $hash = password_hash($password,PASSWORD_DEFAULT);
      $cnic = $_POST["cnic"];  
      $phone = $_POST["phone"];  
      $city = $_POST["city"];  
      $country = $_POST["country"];  
      $qf = $_POST["qf"];  
      $dob = $_POST["dob"];
      $typelogin = "2";
      if($name =="") {
        $nameErr=  "<span class='error'>Please enter your name.</span>";
        }
        elseif($fname == ""){
        $fnameErr=  "<span class='error'>Please enter your father name.</span>";
        }
        elseif($email == "") {
        $emailErr=  "<span class='error'>Please enter your email</span>"; 
        } 
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        $emailErr= "<span class='error'>Please enter valide email, like your@abc.com</span>";
        }
        elseif($password == ""){
        $passwordErr=  "<span class='error'>Please enter your password.</span>";
        } 
        elseif($cnic == ""){
          $cnicErr=  "<span class='error'>Please enter your CNIC.</span>";
        }  
        elseif($phone == ""){
          $phoneErr=  "<span class='error'>Please enter your phone No.</span>";
        } 
        elseif($city == ""){
          $cityErr=  "<span class='error'>Please enter your city name.</span>";
        }
        elseif($country == ""){
          $countryErr=  "<span class='error'>Please enter your country name.</span>";
        }
        else{
         
          $sql="INSERT INTO user_infoo VALUES('','$name','$fname','$email','$password','$cnic','$phone','$city','$country','$qf','$dob','$typelogin')"; 
          $result=mysqli_query($con,$sql); 
          if($result)
          {
            echo "<script>window.location.href='confirm.php'</script>";
          }
      }
    }   
    ?>
    <div class="testbox">
      <form enctype="multipart/form-data" method="post" action="login-form-info.php">
        <div class="banner">
            <h1>Learning Application Form</h1>
          </div>
          <h2>Applicant Details</h2>
          <div class="contact-item">
            <div class="item">
              <p>Name</p>
              <input type="text" name="name" />
               <?php echo $nameErr;?>
            </div>
            <div class="item">
              <p>Father Name</p>
              <input type="text" name="fname" />
              <?php echo $fnameErr;?>
            </div>
          </div>
        <div class="contact-item">
          <div class="item">
            <p>Email</p>
            <input type="text" name="email" />
             <?php echo $emailErr;?>
          </div>
          <div class="item">
            <p>Password</p>
            <input type="text" name="password" />
            <?php echo $passwordErr;?>
          </div>
        </div>
        <div class="contact-item">
            <div class="item">
              <p>CNIC</p>
              <input type="text" name="cnic" />
              <?php echo $passwordErr;?>
            </div>
            <div class="item">
              <p>Phone </p>
              <input type="text" name="phone" />
              <?php echo $phoneErr;?>
            </div>
          </div>
        <div class="contact-item">
            <div class="item">
              <p>City</p>
              <input type="text" name="city" />
              <?php echo $cityErr;?>
            </div>
            <div class="item">
              <p>Country</p>
              <input type="text" name="country" />
              <?php echo $countryErr;?>
            </div>
          </div>
        <div class="position-item">
          <div class="item">
            <p>Qualification</p>
            <select name="qf">
              <option>Select your Qualification</option>
              <option value="Matric">Matric</option>
              <option value="Intermidiate">Intermidiate</option>
              <option value="Bachlers">Bachlers</option>
              <option value="Master">Master</option>
              <option value="PHD">PHD</option>
            </select>
          </div>
          <div class="item">
            <p>Date of Birth</p>
            <input type="date" name="dob" />
            <i class="fas fa-calendar-alt"></i>
          </div>
        </div>
        <div class="btn-block">
          <button class="green" type="submit" name="btn" style="border-radius:5px; width:20%;">Submit Application</button>
        </div>
      </form>
    </div>
  </body>
</html>

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
      padding-top: 90px;
      padding-left: 110px;
      padding-right: 110px;
      padding-bottom: 110px;
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
      color: #1c87c9;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #1c87c9;
      color: #1c87c9;
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
      top: 27px;
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
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #1c87c9;
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
      background: #1e6fa0;
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
    </style>