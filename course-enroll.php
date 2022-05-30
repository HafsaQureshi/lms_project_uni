<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="components/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<?php
include_once('db_connection.php');
$sql = "SELECT * FROM user_infoo WHERE `email` = '".$_SESSION['email']."' ";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];
?>


<!--  courses Gallery-->
<section class="pt-5 pb-5">
    <div class="course-container" style="box-shadow: 5px 3px 7px #888888;">
        <div class="row co-urse">
            <div class="col-10">
                <h3 class="mb-3">Enrolled Courses </h3>
            </div>
            <div class="col-2 text-right">     
                <a style="width: 46%; background: #7aa033;" class="btn green mb-3 mr-1   left carousel-control" href="#theCarousell" role="button" data-slide="prev">
                    <i style="margin-top: 9%;" class="fa fa-arrow-left"></i></a>
                <a  style="width: 46%; background: #7aa033;" class="btn green mb-3 right carousel-control " href="#theCarousell" role="button" data-slide="next">
                    <i style="margin-top: 9%;" class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12"> 
            <div id="theCarousell" class="carousel slide multi-item-carousel">
                    <div class="carousel-inner">
                      <?php 
                      $count = 0;
                      $Course="SELECT Distinct course_id FROM course_enroll_users WHERE `useer_id` = $id ";
$result1 = mysqli_query($con,$Course);
$result= array();
while ($row = mysqli_fetch_assoc($result1)){
$Course = $row['course_id'];
$userCourse="SELECT fullname, courseimage FROM courses WHERE `id` = $Course";
$result = mysqli_query($con,$userCourse);


                        foreach ($result as $values){           
                      ?>
                        <div class="item <?php 
                            if($count==0){
                              echo "active";  
                            }
                            else{
                                echo " ";
                            }}
                        ?>">
<div class="col-md-4 mb-3">
                                    <div class="card">
                               <?php     $current_coursei =  $values['courseimage'];
                                 ?>
                                        <img class="img-fluid" alt="100%x280" src='<?php echo  $current_coursei;?>'>
                                        <div class="card-body" style="background: #5f5f5f3;">
                                           <center> <h6 class="card-title">
                                             <?php 
                                           $current_course =  $values['fullname'];
                                           echo  $current_course; 
// $_SESSION['coursename']= $current_course;
                                           ?></h6></center>
                                             <form method="POST" action="http://localhost/LMS/courselayout.php">
                                               <input type="hidden" name="coursename" value="<?php echo $current_course; ?>">
                                           <button class="green hoverblack" type="submit" name="submit" style="font-size:60%;width:100%;height:40;">
                                           <!-- <a style="text-decoration: none;color: white;font-size: 112%;" href="http://localhost/LMS/courselayout.php">  </a> -->
                                           Click Here To View
                                          </button>
                          </form>
                                          </div>
                                    </div>

        </div>
                    </div>
        <?php 
                        $count++;
                        }
                        ?>
             </div>
    </div><br>
    </div>
        </div>
    </div>
</section>


<script>
$('.multi-item-carousel').carousel({
  interval: false
});
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
</script>
