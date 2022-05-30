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
 session_start();
include("top-sidebar-student.php");
include_once('db_connection.php');
?>


<!-- slider code start -->
<div class="content">
<!DOCTYPE html>
<html>
  <head>
    <title>Course Registeration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form { 
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
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
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
      height: 110px;
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
 
  
    </style>

    <div class="testbox">
      <form action="login.php">
        <div class="banner">
            <h1>

           <?php 
  $coursename = $_POST['coursename'];
  echo $coursename;
  $courses= "SELECT * FROM `courses` WHERE `fullname` = '$coursename' ";
  $result=mysqli_query($con,$courses);
  $row = mysqli_fetch_array($result);
  $description = $row['description'];
  $links = $row['links'];
  $file = $row['file'];
  $link = $row['link'];
  $files = $row['files'];
 ?>
            </h1>
        </div>
         <br>
          <section id="region-main" style="box-shadow: 5px 3px 7px #888888; padding:4%;" >
              <!-- <br> -->
               <hr>
               <h3 id="sectionid-123-title" class="sectionname accesshide"><span><a  style="color: #7aa033 !important;" href="http://178.128.223.2/mslms/course/view.php?id=22#section-0">General</a></span></h3>
                <hr>  
                 <div class="summary" style="text-align: justify;">

             <?php    echo $description; ?>
                </div>
                <hr>
                     <h3   id="sectionid-125-title" class="sectionname"><span><a style="color: #7aa033 !important;" href="#">Course Notes</a>
                    </h3> 
                     <hr>
                     <div class="summary">seful, and, unlike copy, is never a hard sell. We create content and deliver strategies aligned with your business goals to ensure at every stage you are pitching to </div>
                     <div class="activityinstance"><a  style="color: #7aa033 !important;" class="aalink" onclick="" href="#">
                     <span class="instancename"><?php echo  "<a href='$files'>Click here to Download Notes </a>"; ?></a> </span>
                     </div>

                     <hr>
                     <h3   id="sectionid-125-title" class="sectionname"><span><a style="color: #7aa033 !important;" href="#">Topic 1</a></h3> 
                     <hr>
                     <div class="summary">seful, and, unlike copy, is never a hard sell. We create content and deliver strategies aligned with your business goals to ensure at every stage you are pitching to </div>
                     <div class="activityinstance">
                     <iframe width="860" height="515" src="<?php echo $link;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                 
                     </div>
                     <!-- topic 3 -->
                     <hr>
                     <h3  id="sectionid-125-title" class="sectionname"><span><a style="color: #7aa033 !important;" href="#">Topic 2</a>
                     </h3> 
                     <hr>
                     <div class="summary">seful, and, unlike copy, is never a hard sell. We create content and deliver strategies aligned with your business goals to ensure at every stage you are pitching to </div>
                    <br>
                     <iframe width="860" height="515" src="<?php echo $links;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                 
                     <hr>
                     <h3   id="sectionid-125-title" class="sectionname"><span><a style="color: #7aa033 !important;" href="#">Assignments</a><span> 
                    </h3> 
                     <hr>
                     <div class="summary">seful, and, unlike copy, is never a hard sell. We create content and deliver strategies aligned with your business goals to ensure at every stage you are pitching to </div>
                     <div class="activityinstance"> <span class="instancename"><?php echo  "<a href='$file'>Click here to Download assignment </a>"; ?><span class="accesshide "> Assignment</span> </span></a>
                     </div>
      
         </section>   
      
                    </form>
    </div>

<br> <br>
</div>
<!-- slider end ended -->



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