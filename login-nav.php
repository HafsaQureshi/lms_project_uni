
<style>
    .co {
        color: white !important;
    font-size: large !important;
    }
    .co:hover {
        color: #7aa033 !important;
    font-size: large !important;
    font-weight:bold;
    text-decoration: none;
    }
    .cor{
    margin-right: -1%; padding: .6%;
    border-radius: 5px;
    color: white !important;
    font-size: large !important;
}
.cor:hover{
    margin-right: -1%; padding: .6%;
    border-radius: 5px;
    color: white !important;
    font-size: large !important;
    text-decoration: none;
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
<!-- Topbar  CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Top bar start -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light;" style=" background: black; z-index: 1000 !important; width: 100% !important;" id="navbar1">
  <div class="container-fluid">
  <img style="height: 12%; width: 12%; margin-left: -3.7%;"src="images/eLearning logo.png" alt="img"> 
  <a class="active co" href="http://localhost/LMS/">Home</a> 
  <a href="http://localhost/LMS/aboutus/aboutus.php" class="co">About Us</a> 
  <a href="http://localhost/LMS/contactus.php" class="active co">Contact Us</a> 
  <a href="http://localhost/LMS/our%20vision/Our-vision.php" class="active co">Our Vision</a> 
  <a href="http://localhost/LMS/events.php" class="active co">Events</a> 
  <a href="http://localhost/LMS/login.php" class="active cor" id="loginbtn" style="text-align:center"> Login</a>  
  </div>
</nav>


<!-- Top bar ended -->

<!--Topbar  CSS -->


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