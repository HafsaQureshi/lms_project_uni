
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<style>
body{
  background-image: url("images/cover.jpg");                   
  background-size: cover;
}  
</style> 
<?php
  include("db_connection.php");
  session_start();
  $emailErr = $passwordErr =  "";
	if(isset($_SESSION['email']))
	{
		echo "<script>window.location.href='student-dashboard.php'</script>";
	}
	if(isset($_POST['btn']))
	{
		$email=$_POST['email'];
    $password=$_POST['password'];
    if(($email == "")) {
      $emailErr=  "<span class='error'>Please enter your email</span>"; 
      } 
    elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
      $emailErr= "<span class='error'>Please enter valide email, like your@abc.com</span>";
      }
    elseif($password == ""){
      $passwordErr=  "<span class='error'>Please enter your password.</span>";
      }
    else{
      $sql = "SELECT * FROM user_infoo where email='$email' and password='$password'";
		  $result=mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      $name = $row['name'];
      $email = $row['email'];
      $password = $row['password'];
      $type = $row['type_login'];
      if($email==$email && $password=$password){
        if($type=="1" && $type!="2"){
          	  $_SESSION['email']=$email;
              $_SESSION['name']=$name;
			        $_SESSION['password']=$password;
              echo "<script>window.location.href='student-dashboard.php'</script>";
        } elseif($type=="2" && $type!="1"){
          $_SESSION['email']=$email;
          $_SESSION['name']=$name;
          $_SESSION['password']=$password;
          echo "<script>window.location.assign('admin-dashboard.php')</script>";
        }
        else{
         
          echo "Record not Exist";
          
        }
      }
      else{
        echo "<h3>Invalid User Name and Password</h3>";
      }    
    }     
	}	
	?>
    <div class="login-container">
      <div class="wrapper log-in">
        <div class="title"><span>Login Form</span></div>     
        <form enctype="multipart/form-data" method="post" action="login.php">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Email or Phone">
            <?php echo $emailErr;?>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
            <?php echo $passwordErr;?>
            
          </div>
          <div class="row button">
            <input type="submit" name="btn" value="Login" >
          </div>
          <br> <br>
          <center>
          Don't have an account? <a href="login-form-info.php" class="text-info m-l-5" style="text-decoration: none;"><b style="color: #007500 !important;">Sign Up</b></a>
          </center>
          <div>
        </form>      
      </div>
    </div>