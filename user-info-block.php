<?php
include ("db_connection.php");
$sql = "SELECT * FROM user_infoo WHERE `email` = '".$_SESSION['email']."' ";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$typeid = $row['type_login'];
$id = $row['id'];
$email = $row['email'];
$country = $row['country'];
$dob = $row['dob'];
?>
    <!-- Hafsa code -->
  <div id="admin" >
    <div class="row co-urse">
        <div class="col-6">
        <p class="stu-info"><img class="stu-info-img" src="https://lms.edwantage.net/jsbl/pluginfile.php/5/user/icon/edumy/f1?rev=12691" alt="user" width="100"><p>
        <p class="mb-3" style="margin-right: 22%;"><?php echo $_SESSION['name'] ?></p>
        </div>
    </div> 
           <center> 
            <table class="table table-striped" style="width: 92%;  box-shadow: 5px 3px 7px #888888;">
            <br>
    <thead>
      <tr>
        <th>Role</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
<?php
if($typeid == 1){
  echo "Student";
}
else {
  echo "Teacher";
}
?>
        </td>
        <td><?php echo $email?></td>
      </tr>
      <tr>
      <th>DOB</th>
       <th>Country</th>
  
      </tr>
      <tr>
      <td><?php 
      echo  date("d-M-Y",strtotime($dob));
       ?></td>
      <td> <?php echo $country ; ?></td>
   
      </tr>
    </tbody> 
  </table>   </center> 
   <br>
    </div>

<style>
.stu-info{
    z-index: 1;
    position: absolute;
}
..stu-info-img{
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    vertical-align: middle;
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