<?php
function calculate( $width, $height, $depth){
    $area = $width * $height;
    echo "The area of the box is:"." ". $area."<br>";

    $volume = $width * $height * $depth;
    echo "The volume of the box is:"." ". $volume;
}
calculate(7,2,5);