<?php
// var_dump(date("D/Y/M"));
function minutes($number){
$hour = round($number / 60);
$minute = $number % 60;

echo $number." "."Minutes is: ".$hour. " Hour(s) and ".$minute." minute(s)";
}
minutes(400);