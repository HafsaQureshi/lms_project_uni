<style>
/* Amna css */
/* .cat{
        
        margin-top: 10px !important;
    }
.black{
    font-weight :bolder !important;
    color:black !important;
    font-size: 1vw;
}
.is{
    font-size: 1vw !important;
}


#line-chartcanvas > label {
    font-size: 1vw !important;
} */
/* Amna css */


    .a-gr{
    background: black;
    padding: 2%;
    color: white;
    }
    /* .a-gr {
    --bs-gutter-x: 0rem !important;
    margin-right: 0px !important;
    margin-left: 0px !important;
} */


</style>
<?php
// current user id
$sql = "SELECT * FROM user_infoo WHERE `email` = '".$_SESSION['email']."' ";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];

// Completed
$currentDate =date('Y-m-d');
$timestamp1 = strtotime($currentDate);
$sql = "SELECT count(fullname) FROM courses WHERE UNIX_TIMESTAMP(enddate) < $timestamp1 ";
$result=mysqli_query($con,$sql);
$completed = mysqli_fetch_array($result);
// echo "<xmp>";print_r($completed['0']);echo "</xmp>";

// Inprogress
$currentDate =date('Y-m-d');
$timestamp1 = strtotime($currentDate);
$sql = "SELECT count(fullname) FROM courses WHERE UNIX_TIMESTAMP(startdate) <= $timestamp1 AND UNIX_TIMESTAMP(enddate) >= $timestamp1 ";
$result=mysqli_query($con,$sql);
$Inprogress = mysqli_fetch_array($result);
// echo "<xmp>";print_r($Inprogress['0']);echo "</xmp>";
?>
<!-- Amna Graph -->
     
            <br >
<div  style="box-shadow: 5px 3px 7px #888888;"> 
            <div class="row a-gr">
                <div class="col-6">
                    <h3 class="mb-3">My Course </h3>
                </div>
                <div class="col-6 text-right">
                    <!-- <a class="btn green mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
                    <a class="btn green mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next"><i class="fa fa-arrow-right"></i></a> -->
                </div>
            </div>   
            <br>
    <div class="row " width="100%" height="32px !important">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8  col-xl-8" style="padding:1% !important; ">
           <div style=" height:60% !important; width:100% !important;"><canvas id="myChart1" width="100%" height="60%"></canvas></div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4  col-xl-4" style="padding:1% !important;padding-bottom: 5% !important; "> 
            <div class="">
            <i class="fa fa-calendar " aria-hidden="true"></i> <span class="black">Number Of Courses</span><hr><span  style="font-size: 1vw !important;" ><?php print_r($Inprogress['0'])?> Inprogress </span><i class="fa fa-spinner is" aria-hidden="true"></i> <span  style="font-size: 1vw !important; "><?php print_r($completed['0'])?> Completed </span> <i class="fa fa-check is" aria-hidden="true"></i>
            </div>
            <!-- <div class="cat"> -->
            <!-- <i class="fa fa-book " aria-hidden="true"></i> <span class="black">Course Completion</span><hr><span  style="font-size: 1vw !important;" >8 Today </span><i class="fa fa-arrow-up is" aria-hidden="true"></i> <span  style="font-size: 1vw !important; ">0 Weekly </span><i class="fa fa-arrow-up is" aria-hidden="true"></i>  -->
            <!-- </div> -->
            <div class="cat">
            <i class="fa fa-users "  aria-hidden="true"></i> <span class="black">Enrolled Users</span><hr><span  style="font-size: 1vw !important;" >5 Today </span><i class="fa fa-calendar is" aria-hidden="true"></i> <span  style="font-size: 1vw !important; ">0 Weekly </span><i class="fa fa-calendar-check-o is" aria-hidden="true"></i> 
            </div>
        </div>
    </div>
</div>
<br>
<script>
const ctx = document.getElementById('myChart1').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow','green','red','pink'],
        datasets: [{
            label: '# of Votes',
            data: [2, 9, 3,9,2,5],
            backgroundColor: [
               
            ],
            borderColor: [
            
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script> 
<!-- Amna Code End -->

<!-- hajra cide -->
<section class=" pb-5">
    <div class="course-container"style="box-shadow: 5px 3px 7px #888888;" >
            <div class="row co-urse">
                <div class="col-6">
                    <h3 class="mb-3">Courses Gallery</h3>
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
                                        <div class="card-body">
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



</div>