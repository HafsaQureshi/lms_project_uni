<?php session_start();
$email = $_SESSION['email'];
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://kit.fontawesome.com/e151ebcf1a.js" crossorigin="anonymous"></script>




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


<!-- Top bar start -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light;" style=" background: black; z-index: 1000 !important; width: 100% !important;" id="navbar1">
  <div class="container-fluid">
  <img style="height: 12%; width: 12%; margin-left: -3.7%;"src="images/eLearning logo.png" alt="img">  
    <a class="btn " href="login.php" id="loginbtn" style="margin-right: -1%;" >Logout</a>
  </div>
</nav>
<!-- Top bar ended -->

<!-- side navbar start -->
<div class="sidenav">
    <br> <br> <br>
  <a href="http://localhost/LMS/student-dashboard.php?" class="active" >Dashboard</a>
  <a href="#services">Calender</a>
  <a  href="#clients">Course Registration</a>
  <a  href="http://localhost/LMS/report.php">Report</a>
</div>
<!-- side navbar ended -->


<style>

  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  .sticky + .content {
    padding-top: 60px;
  }
   button.dt-button, div.dt-button, a.dt-button, input.dt-button {
    position: relative;
    display: inline-block;
    box-sizing: border-box;
    margin-right: 0.333em;
    margin-bottom: 0.333em;
    padding: 0.5em 1em;
    border: 1px solid #7aa033;
    border-radius: 2px;
    cursor: pointer;
    font-size: .5em;
    line-height: 1.6em;
    color: white;
    white-space: nowrap;
    overflow: hidden;
    background: #7aa033 !important;}
    .tabledesign{
        box-shadow: 2px 2px 4px 2px #818181;
    }
    .dataTables_wrapper .dataTables_filter input {
    border: 1px solid #818181;
    border-radius: 5px;
    padding: 2px;
    background-color: transparent;
    margin-left: 3px;
}
label {
    display: inline-block;
    margin-bottom: 0px !important;
    font-size: 63%;
    margin-top: 4.5% !important;
}
div.dt-buttons {
    position: relative;
    float: left;
    margin-bottom: 1% !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current,{
    background: #7aa033 !important;
    color:white !important;
}
#example_paginate , #example_info{
    font-size: 62%;
    color: black !important;
}
#example_paginate > span > a {
    border: 1px solid #7aa033;
    border-radius: 2px;
    background: #7aa033 !important;
    color:white !important;
    font-size: 66%;
    line-height: 1.6em;
}
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
</style>


<div class="content " >

<div class="course-container" style="box-shadow: 5px 3px 7px #888888; padding:2%;" >
            <div class="row co-urse">
                <div class="col-6">
                    <h3 class="mb-3">Report</h3>
                </div>
                <div class="col-6 text-right">
                    <!-- <a class="btn green mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
                    <a class="btn green mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next"><i class="fa fa-arrow-right"></i></a> -->
                </div>
            </div>  
<br> 
<table id="example" class="display nowrap tabledesign" style="width:100%;">
        <thead>

<?php
        // echo "<xmp>";print_r($row);echo "</xmp>";
        ?>
            <tr>
                <th>S.NO</th>
                <th>Courses</th>
                <th>Enrolled Users</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
           
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
$sql = "SELECT * FROM courses WHERE  `id` IN ($Course) ";
$result=mysqli_query($con,$sql);
$nums = mysqli_num_rows($result);
$i=0; 

$currentDate =date('Y-m-d');
$timestamp1 = strtotime($currentDate);









while ($res = mysqli_fetch_array($result))
{
    
   echo  "<tr>
   <td>  ".++$i."</td>
    <td>".$res['fullname']."</td>";


    $saira=$res['id'];
    $ssql = " SELECT count(useer_id) FROM `course_enroll_users` WHERE course_id=$saira ";
    $resulttt = mysqli_query($con,$ssql);
    $all_coursesss = mysqli_fetch_assoc($resulttt);
    foreach ($all_coursesss as $key => $value) {
    echo" <td>";
    echo "$value";
    }
    echo  "</td>




    <td>".$res['startdate']."</td>
    <td>".$res['enddate']."</td>
    
    <td>";
    $a= strtotime($res['startdate']);
    $b= strtotime($res['enddate']);
    if( $a > $timestamp1)
    {
      echo " Not Yet Started";
    }
    elseif( $b < $timestamp1)
    {
        echo "Completed";
      }
    else{
        echo "In Progress";
    }
    echo"
    </td>
   
  </tr>";  
}?>
        </tbody>
    </table>
</div>
</div>
<br> <br>
<?php include("footer.php"); ?>  <!-- footer -->
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

//  Topbar script start 

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
//  Topbar script ended 
</script>
