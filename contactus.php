<title> Contact Us</title> 
<?php include("login-nav.php"); ?> 
<br>
  <div class="container">
  <div class="row co-urse">
        <div class="col-12">
       <center> <h1 >Contact us</h1> </center>
        </div>
    </div> 
    <br>
    <div class="content" style=" padding-top: 0px; margin-left: 0px;  font-size: 0px;">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Head Office</div>
          <div class="text-one">Karachi, NP12</div>
          <div class="text-two">clifton 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">elearning@gmail.com</div>
          <div class="text-two">hafsa.qureshi@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
      <center>  <h1 style="color: #7aa033;">Google Map</h1> </center>

<div id="googleMap" style="width:100%;height:400px;   box-shadow: 5px 3px 7px #888888;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.051087670731!2d67.16259751407831!3d24.862104684053143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33b9eb6d840a5%3A0x2d38d2540cc85961!2sAbdullah%20Green%20City!5e0!3m2!1sen!2s!4v1638702748257!5m2!1sen!2s" width="753" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
    </div>
  </div>
  <br>
</body>
</html>
<?php include("footer.php"); ?>  <!-- footer -->

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://kit.fontawesome.com/e151ebcf1a.js" crossorigin="anonymous"></script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  align-items: center;
  justify-content: center;
}
.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #7aa033;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
.co-urse{
    background: black;
    padding: 2%;
    color: white;
    margin-right: 0px !important;
    margin-left: 0px !important;
    }
 </style>