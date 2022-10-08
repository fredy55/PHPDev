<?php 

//Time Conversion

function timeConversion(string $S){
    //Convert time string to timestamp
    $timestamp = strtotime($S);

    //Convert timestamp to 24hr-time format
    return date("H:i:s", $timestamp);
}

echo timeConversion("07:05:45PM");