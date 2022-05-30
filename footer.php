
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

		<footer class="footer-distributed" >
			<div class="footer-center"style="margin-left: 36%;"  >
			<br>
			<h3><span><img style="height: 15%; width: 27%; margin-left: 14%; margin-right: 18%;"src="images/eLearning logo.png" alt="img"></span></h3><br>
				<p class="footer-links" style="margin-left: -4%; margin-right: 4%;" >
					<a href="http://localhost/LMS/">Home</a>
					|
					<a href="http://localhost/LMS/events.php">Events</a>
					|
					<a href="http://localhost/LMS/our%20vision/Our-vision.php">Our Vision</a>
					|
					<a href="http://localhost/LMS/aboutus/aboutus.php">About Us</a>
					|
					<a href="http://localhost/LMS/contactus.php">Contact Us</a>
				</p> <br> <br>
				<div style="margin-left: 16%; margin-right: 16%;">
				<i class="fa fa-map-marker" id="myBtn"></i>
					<i class="fa fa-phone"  onclick="phoneFunction()"></i>
					<i class="fa fa-envelope" onclick="emailFunction()"></i>
				</div>
				<br>
			</div>
			</div>
		</footer>

<script>
function phoneFunction() {
  alert("Contact on this number: 0317-2216076");
}
function emailFunction() {
  alert("Contact on this email: saira.sial1011@gmail.com");
}
</script>


<style>
@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');
.footer-distributed{
	background-color: black;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}
.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}
.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}
.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}
.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}
.footer-distributed .footer-center p a{
    margin-left: 2%;
    margin-right: 2%;
	color:  #7aa033;
	text-decoration: none;;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>





<!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
	<div id="googleMap" style="width:100%; height:400px;   box-shadow: 5px 3px 7px #888888;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.051087670731!2d67.16259751407831!3d24.862104684053143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33b9eb6d840a5%3A0x2d38d2540cc85961!2sAbdullah%20Green%20City!5e0!3m2!1sen!2s!4v1638702748257!5m2!1sen!2s"
	 width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
	</p>
  </div>

</div>


<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




