<?php
include_once"database.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search your train</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="train001.css">
</head>
<body>
    <div class="container">
        <div class="top_img">Train Information</div>
        <div class="button_img"></div>
        <div class="title">Search Your Train</div>
        <div class="station_container">
            <form action="show.php" method="post">
                <input type="text" name="departure" placeholder="Enter Departure Station"  id="d" required>
                <input type="text" name="arrival" placeholder="Enter Arrival Station" id="a" required>
                <select name="type">
                    <option value="vip">VIP</option>
                    <option value="degree1">Degree 1</option>
                     <option value="degree2">Degree 2</option>
                    <option value="sleep">Sleep</option>
                    <option value="passenger">Passenger</option>
                </select>
                <input type="reset" value="Set To Default">
                <input type="submit" name="submit" value="Find">
            </form>
            <button onclick="change()" class="sub_btn">Substitute Values</button>
        </div>
    </div>
    <script>
                function change(args) {
                   var d=document.getElementById('d');
                   var a=document.getElementById('a');
                   var temp=a.value;
                   a.value=d.value
                   d.value=temp;
                }
            </script>
</body>
</html>
