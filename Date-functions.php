<?php 

//Unit timestamp

$t = time(); //time in milliseconds
$years = date("y");

/**
 * Y, Y => years
 * M, m => months
 * D, d => days
 * h => hours
 * i => minutes
 * s => seconds
 * A, a => am/PM
 */

//echo $years;
//$timeNow = date("d/m/Y", $t);
//$timeNow = date("m/d/Y", $t);
//$timeNow = date("m-d-Y", $t);
date_default_timezone_set("Africa/Lagos"); //GMT +1

//$timeNow = date("d-m-Y h:i:s a", $t);

//$strtime = "12:00pm March 23 2021";
//$strtime = "next Tuesday";
//$strtime = "-3 Days";
//$strtime = "+3 Weeks";
//$strtime = "+30 Days";
//$strtime = strtotime($strtime);
//echo date("M d, Y h:i A", $strtime);

$start = strtotime("next Saturday");
$end = strtotime("+30 Days", $start);

while($start<$end){
    echo date("d M, Y", $start).'<br>';

    $start = strtotime("+7 Days", $start);
}

//echo $end;

