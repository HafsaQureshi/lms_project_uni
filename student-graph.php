<!-- Query Work -->
<?php
include_once('db_connection.php');
$sql = "SELECT * FROM user_infoo WHERE `email` = '".$_SESSION['email']."' ";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$Course="SELECT Distinct course_id FROM course_enroll_users WHERE `useer_id` = $id ";
$result1 = mysqli_query($con,$Course);
$data=array();
foreach ($result1 as $values){     
    $data[]= $values['course_id'];
}
$var = $data;
$Course= "'".implode("','",$var)."'";

// Not Yet Started
$currentDate =date('Y-m-d');
$timestamp1 = strtotime($currentDate);
$sql = "SELECT count(fullname) FROM courses WHERE UNIX_TIMESTAMP(startdate) > $timestamp1 AND `id` IN ($Course) ";
$result=mysqli_query($con,$sql);
$NYS = mysqli_fetch_array($result);
// echo "<xmp>";print_r($NYS['0']);echo "</xmp>";

// Completed
$currentDate =date('Y-m-d');
$timestamp1 = strtotime($currentDate);
$sql = "SELECT count(fullname) FROM courses WHERE UNIX_TIMESTAMP(enddate) < $timestamp1 AND `id`  IN ($Course) ";
$result=mysqli_query($con,$sql);
$completed = mysqli_fetch_array($result);
// echo "<xmp>";print_r($completed['0']);echo "</xmp>";

// Inprogress
$currentDate =date('Y-m-d');
$timestamp1 = strtotime($currentDate);
$sql = "SELECT count(fullname) FROM courses WHERE UNIX_TIMESTAMP(startdate) <= $timestamp1 AND UNIX_TIMESTAMP(enddate) >= $timestamp1 AND `id`  IN ($Course) ";
$result=mysqli_query($con,$sql);
$Inprogress = mysqli_fetch_array($result);
// echo "<xmp>";print_r($Inprogress['0']);echo "</xmp>";

?>
<div class="row" style=" height:78% !important; width:100% !important; box-shadow: 5px 3px 7px #888888;">
<div class="row co-urse">
                <div class="col-6">
                    <h3 class="mb-3">Learning Journey</h3>
                </div>
            </div>   
<div class="col-6 sm-col-6 xl-col-6 lg-col-6 md-col-6 xm-col-6" >
<br>
<canvas id="myChart1" width="31%" height="21%"></canvas>
<br>
</div>
<div class="col-6 sm-col-6 xl-col-6 lg-col-6 md-col-6 xm-col-6">
    <br>  
<div class="cat">
            <i class="fa fa-spinner is" aria-hidden="true"></i> <span class="black"><?php echo $Inprogress['0']?> Inprogress Courses </span><hr>
            </div>

            <div class="cat">
            <i class="fa fa-check is" aria-hidden="true"></i> <span class="black"> <?php echo $completed['0']?> Completed Courses</span><hr>
            </div>

            <div class="cat">
            <i class="fa fa-times-circle-o is" aria-hidden="true"></i> <span class="black"><?php echo $NYS['0']?> Not Yet Started </span><hr>
            </div>
            
</div>
</div>
<br> <br>
<script>
const ctx = document.getElementById('myChart1').getContext('2d');
const myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ['Inprogress', 'Completed', 'Not yet started'],
datasets: [{
    label: 'Courses Overview',
    data: [<?php echo $Inprogress['0']?>, <?php echo $completed['0']?>, <?php echo $NYS['0']?>],
    backgroundColor: [
        'rgb(0,0,128)',
        'rgb(255,0,0)',
        '#7aa033'
    ],
    borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)'
    ],
    borderWidth: 1
}]
},
options: {
}
});
</script> 