<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="components/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <?php
include_once('db_connection.php');
$currentDate =date('Y-m-d');
$timestamp1 = strtotime($currentDate);
$userCourse="SELECT fullname FROM courses WHERE UNIX_TIMESTAMP(startdate) > $timestamp1";
$result = mysqli_query($con,$userCourse);

?>


<!--  courses Gallery-->
<section class="pt-5 pb-5">
    <div class="course-container" style="box-shadow: 5px 3px 7px #888888;">
        <div class="row co-urse">
            <div class="col-10">
                <h3 class="mb-3">Courses Gallery</h3>
            </div>
            <div class="col-2 text-right">     
                <a style="width: 46%; background: #7aa033;" class="btn green mb-3 mr-1   left carousel-control" href="#theCarousel" role="button" data-slide="prev">
                    <i style="margin-top: 9%;" class="fa fa-arrow-left"></i></a>
                <a style="width: 46%; background: #7aa033;" class="btn green mb-3 right carousel-control " href="#theCarousel" role="button" data-slide="next">
                    <i style="margin-top: 9%;" class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12"> 
            <div id="theCarousel" class="carousel slide multi-item-carousel1">
                    <div class="carousel-inner">
                      <?php 
                      $count = 0;
                        foreach ($result as $values){           
                      ?>
                        <div class="item <?php 
                            if($count==0){
                              echo "active";  
                            }
                            else{
                                echo " ";
                            }
                        ?>">
<div class="col-md-4 mb-3">
                                    <div class="card">
                                    <?php     $current_coursei =  $values['courseimage'];
                                 ?>
                                        <img class="img-fluid" alt="100%x280" src='<?php echo  $current_coursei;?>'>
                                        <div class="card-body" style="background: #5f5f5f3;">
                                           <center> <h6 class="card-title"><?php echo $values['fullname']; ?></h6></center>
                                                <button class="green hoverblack" type="submit" name="btn" style="font-size:60%;width:100%;height:40;"><a style="text-decoration: none;color: white;font-size: 112%;" href="course-registeration-form.php"> Click Here To Enroll </a></button>
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
$('.multi-item-carousel1').carousel({
  interval: false
});
$('.multi-item-carousel1 .item').each(function(){
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





<!-- Enrolled gallery -->
<!-- 
<section class=" pb-5">
    <div class="course-container"style="box-shadow: 5px 3px 7px #888888;" >
            <div class="row co-urse">
                <div class="col-6">
                    <h3 class="mb-3">Enrolled Courses</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn green mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
                    <a class="btn green mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>   
            <br>
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 mb-6">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1588702547919-26089e690ecc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80">
                                        <div class="card-body" style="background: #5f5f5f3;">
                                            <h4 class="card-title">Course Title</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>  
</section>

<style>
    .co-urse{
    background: black;
    padding: 2%;
    color: white;
    }
    .row {
    --bs-gutter-x: 0rem !important;
    margin-right: 0px !important;
    margin-left: 0px !important;
}
.hoverblack:hover{
    background-color:black !important;
}

</style>
 -->








