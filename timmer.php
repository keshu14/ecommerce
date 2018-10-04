<!doctype html>
<html>
<head>
<title>PHP Countdown Timer</title>
<style>
.green{color:green;}
 
h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<body>
<?php
$date = strtotime("October 3, 2018 12:00 AM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
?>
 
<h1 style="color:white;">There are <span class="green"><?php echo $days_remaining?></span> days and <span class="green"> <?php echo $hours_remaining?></span> hours left</h1>
</body>
</html>