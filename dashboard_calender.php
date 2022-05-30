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
<title>calender</title>

<?php 
include("top-side-nav-bar.php");
?>


<script>
// <!-- Topbar script start -->
var dt = new Date();
 function renderDate() {
 dt.setDate(1);
 var day = dt.getDay();
 var today = new Date();
 var endDate = new Date(
 dt.getFullYear(),
 dt.getMonth() + 1,
 0
 ).getDate();
 var prevDate = new Date(
 dt.getFullYear(),
 dt.getMonth(),
 0
 ).getDate();
 var months = [
 "January",
 "February",
 "March",
 "April",
 "May",
 "June",
 "July",
 "August",
 "September",
 "October",
 "November",
 "December"
 ]
 document.getElementById("month").innerHTML =
months[dt.getMonth()];
 document.getElementById("date_str").innerHTML =
dt.toDateString();
 var cells = "";
 for (x = day; x > 0; x--) {
 cells += "<div class='prev_date'>" + (prevDate - x +
1) + "</div>";
 }
 console.log(day);
 for (i = 1; i <= endDate; i++) {
 if (i == today.getDate() && dt.getMonth() ==
today.getMonth()) cells += "<div class='today'>" + i + "</div>";
 else
 cells += "<div>" + i + "</div>";
 }
 document.getElementsByClassName("days")[0].innerHTML =
cells;
 }
 function moveDate(para) {
 if(para == "prev") {
 dt.setMonth(dt.getMonth() - 1);
 } else if(para == 'next') {
 dt.setMonth(dt.getMonth() + 1);
 }
 renderDate();
 }
</script>
<style>
html{
  background-color:white !important; 
}
    body{
        /* background-color:transparent; */
    overflow-x:hidden;
    overflow-y: scroll;
}
    /* .calendar {
    margin-top:12% !important;
    margin-bottom:5% !important;
    margin-left:38%;
    width: 600px;
    background-color: #fff;
    box-shadow: 0px 0px 15px 4px rgba(0, 0, 0, 0.2);
   
    } */

    .calendar {
    margin-top: 10% !important;
    margin-bottom: 3% !important;
    margin-left: 22%;
    width: 75%;
    box-shadow: 0px 0px 15px 4px rgb(0 0 0 / 20%);
}
    .month {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* width: 100%; */
    padding: 40px 30px;
    text-align: center;
    background-color: #7da03b;
    color: #fff;
    }
    .weekdays {
    background-color: black;
    color: #fff;
    padding: 7px 0;
    display: flex;
    }
    .days {
    font-weight: 300;
    padding: 10px 0;
    display: flex;
    flex-wrap: wrap;
    }
    .weekdays div,
    .days div {
    text-align: center;
    width: 14.28%;
    }
    .days div {
    padding: 10px 0;
    margin-bottom: 10px;
    transition: all 0.4s;
    }
    .prev_date {
    color: #999;
    }
    .today {
    background-color: black;
    color: #fff;
    }
    .days div:hover {
    cursor: pointer;
    background-color: #dfe6e9
    }
    .prev,
    .next {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 23px;
    background-color: rgba(0, 0, 0, 0.1);
    transition: all 0.4s;
    }
    .prev:hover,
    .next:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.2);
    }
    #month {
      margin-right: 42%;
    font-size: 30px;
    font-weight: 500;}
</style>
<body onload="renderDate()">
    <!-- <div class="wrapper"> -->
        <div class="calendar">
            <div class="month">
                <div class="prev" onclick="moveDate('prev')">
                    <span>&#10094;</span>
                </div>
                <h2 id="month"></h2>
                <p id="date_str"></p>
                <div class="next" onclick="moveDate('next')">
                    <span>&#10095;</span>
                </div>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>

            </div>
            <div class="days"></div>
        </div>
    <!-- </div> -->

</body>

</html>

<?php include("footer.php"); ?>
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
