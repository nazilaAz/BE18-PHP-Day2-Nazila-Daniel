<?php
global $math;
global $physic;
global $english;

function calculationGrades($math, $physic, $english)
{
    $sum = $math + 
           $physic +
           $english;
echo $sum ."<br>";

$avg = $sum /3;
echo $avg;
}
calculationGrades(3,4,5);

