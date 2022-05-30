
<title> Our Events</title>
<?php include("login-nav.php"); ?> 
    <section>
        <div class="leftBox">
          <div class="content">
            <h1>UpComming Events</h1>
            <p style="text-align: justify; font-size: 82%;">You are invited to attend all these online upcoming events to improve your learning skills and provide you a chance to be focused towards your career. These events are very beneficial for students which helps you to find your interest for future Goals. Your presence is our achievement...
             <br> <br>THANK YOU!!!!</p>
          </div>
          <!-- card -->
          <div class="card" >
            <img src="https://st3.depositphotos.com/2249091/12928/i/600/depositphotos_129285402-stock-photo-student-writing-an-exam.jpg" alt="Avatar" style= "height: 420px;" width="100%"  >
            <div class="container">
           <br> <br>
            <center>  <h4><b style="color:#7aa033;">FINAL EXAMINATION</b></h4> </center>
            <br>
              <h4>Web Engineering</h4>
              <p>Date:5th,January</p>
              <p>Time: 9:00 11:00</p>
              <p>Final examination of Web Engineering course of session 2021 will be held on 25th january,be prepear for it and make sure that plagiarism is not allowed.</p>
              <br>
              <h4>Terms and Conditions <br><br></h4>
              <p> While registering an account on our platform as a student enrolling for competitive exams, you agree to provide true, relevant, and current information about yourself and your organization. This, in turn, will help us maintain the confidentiality of your account and manage the association smoothly. You stay liable for any actions and performances that took place through your account. <br><br></p>
            </div>
          </div>
        </div>
        <div class="events">
          <ul>
          <br>  
            <li>
              <div class="time">
                <h2>14<br><span>January</span></h2>
              </div>
              <div class="details">
                <h3>Seminar on Cloud Computing</h3>
                <p style="text-align: justify;">SPEAKER: Muhammad Taha (senior system engineer)
AWS Certified Solution Architect Professional and DevOps Engineer.
Having wide Industrial Working experience regarding to International Standards. 
</p>
                <a href=""  onclick="firstFunction()">View Details</a>
              </div>
              <div style="clear: both;"></div>
            </li>
            <li>
              <div class="time">
                <h2>15<br><span>January</span></h2>
              </div>
              <div class="details">
                <h3>Seminar on Mobile APP Development</h3>
                <p style="text-align: justify;">SPEAKER: ISHAQ HASSAN (Web And Mobile App Developer)
Having 6 Years of experience. He has develop Alot of Applications through
Different platform like REACT NATIVE but now He is working on FLUTTER.

</p>
                <a href="" onclick="secondFunction()">View Details</a>
              </div>
              <div style="clear: both;"></div>
            </li>
            <li>
              <div class="time">
                <h2>20<br><span>January</span></h2>
              </div>
              <div class="details">
                <h3>Workshop on Art Of Freelancing</h3>
                <p style="text-align: justify;">SPEAKER: Muhammad Ali Mughal (Founder and chairperson of Jawan Pakistan)
He is Mphil in CS, MCS, BCS, BEd with Microsoft, Cisco and Nvidia International 
Certified. Also Ambassador at Cisco and work for Sylani Welfare. 

</p>
                <a href="" onclick="thirdFunction()">View Details</a>
              </div>
              <div style="clear: both;"></div>
            </li>



            <li>
              <div class="time">
                <h2>25<br><span>January</span></h2>
              </div>
              <div class="details">
                <h3>Online Project Competition</h3>
                <p style="text-align: justify;">You are invited in the online project competition to showoff your valuable
Projects based on Artificial Intelligence and Cyber Security. The three winners 
Of this competition will be awarded with Amazing prizes.
 
</p>
                <a href="" onclick="fourthFunction()">View Details</a>
              </div>
              <div style="clear: both;"></div>
            </li>

            <li>
              <div class="time">
                <h2>30<br><span>January</span></h2>
              </div>
              <div class="details">
                <h3>Workshop on Communication Skills</h3>
                <p style="text-align: justify;">
This workshop involves Improving listening skills, including empathetic listening and perspective-taking, Learning to manage difficult relationships or problem oriented personalities etc.
</p>
                <a href="" onclick="fifthFunction()">View Details</a>
              </div>
              <div style="clear: both;"></div>
            </li>
          </ul>
        </div>
      </section>
      <?php include("footer.php"); ?>  <!-- footer -->

<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto Condensed', sans-serif;
}
section {
  display: grid;
  grid-gap: 0;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas:
    "main main"
    "event event";
  background-image: url(https://s3.ca-central-1.amazonaws.com/image-web-frankie/Music+show.jpg);
  background-size: cover;
  background-position: center;
  min-height: 100vh;
}
@media (min-width: 1200px) {
  section {
    grid-template-areas:
      "main event"
      "main event";
  }
}
.leftBox {
  grid-area: main;
  padding-left: 5%;
  padding-top: 10%;
  box-sizing: border-box;
}
section .leftBox .content {
  color: #fff;
  background-color: #7aa033;
  padding: 40px;
  transition: 0.5s;
}
section .leftBox .content h1 {
  margin: 0;
  padding: 0;
  font-size: 50px;
  text-transform: uppercase;
}
section .leftBox .content p {
  margin: 10px 0 0;
  padding: 0;
}
section .events {
  grid-area: event;
  /* background-color: #7aa033; */
  box-sizing: border-box;
}
section .events ul {
  margin: 0;
  padding: 40px;
  list-style: none;
}
section .events ul li {
  background-color: #fff;
  box-sizing: border-box;
  display: grid;
  grid-template-columns: 30% 1fr;
  grid-template-rows: 1fr;
  grid-gap: 0;
  grid-template-areas:
    "time time"
    "detail detail";
  margin-bottom: 20px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
@media (min-width: 768px) {
  section .events ul li {
    grid-template-areas:
      "time detail"
      "time detail";
  }
 
}
section .events ul li .time {
  grid-area: time;
  position: relative;
  padding: 8% 40%;
  background-color: black;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  transition: 0.5s;
}
section .events ul li .time h2 {
  margin: 0;
  padding: 0;
  color: #fff;
  font-size: 60px;
  line-height: 30px;
}
section .events ul li .time h2 span {
  font-size: 30px;
}
section .events ul li .details {
  grid-area: detail;
  padding: 20px 20px 32px;
  background-color: #fff;
  box-sizing: border-box;
}
section .events ul li .details h3 {
  margin: 0;
  padding: 0;
  font-size: 22px;
}
section .events ul li .details p {
  margin: 10px 0 0;
  padding: 0;
  font-size: 16px;
}
section .events ul li .details a {
  display: inline-block;
  text-decoration: none;
  padding: 10px 15px;
  color: white;
  background-color: #7aa033;
  margin-top: 16px;
  font-size: 18px;
  transition: 0.5s;
}
section .events ul li .details a:hover {
  background-color: black;
  color: white;
  border-color: #034d1b;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding-top: 5px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
  padding: 2px 16px;
}


.content {
    padding-top: 9.5%;
    margin-left: 0% !important; 
    font-size: 28px;
     margin-right: 0% !important;
}
    </style>

<script>
function firstFunction() {

var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();  // var today = new Date();
  if( date == "2022-1-14"){
    alert("https://www.youtube.com/watch?v=w52OvI9iNKU&list=PLM8O2eH9K-MhAn18QwQRr0oTxQpcmu4LX");
  }
else {
  alert("Comming Soon...!!");
}
}
function secondFunction() {
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();  // var today = new Date();
  if( date == "2022-1-15"){
    alert("https://www.youtube.com/watch?v=w52OvI9iNKU&list=PLM8O2eH9K-MhAn18QwQRr0oTxQpcmu4LX");
  }
else {
  alert("Comming Soon...!!");
}
}
function thirdFunction() {
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();  // var today = new Date();
  if( date == "2022-1-20"){
    alert("https://www.youtube.com/watch?v=w52OvI9iNKU&list=PLM8O2eH9K-MhAn18QwQRr0oTxQpcmu4LX");
  }
else {
  alert("Comming Soon...!!");
}
}
function fourthFunction() {
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();  // var today = new Date();
  if( date == "2022-1-25"){
    alert("https://www.youtube.com/watch?v=w52OvI9iNKU&list=PLM8O2eH9K-MhAn18QwQRr0oTxQpcmu4LX");
  }
else {
  alert("Comming Soon...!!");
}
}

function fifthFunction() {
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();  // var today = new Date();
  if( date == "2022-1-30"){
    alert(" echo https://www.youtube.com/watch?v=w52OvI9iNKU&list=PLM8O2eH9K-MhAn18QwQRr0oTxQpcmu4LX");
  }
else {
  alert("Comming Soon...!!");
}
}

</script>
