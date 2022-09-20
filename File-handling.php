<?php 

// I/O => Input/Output => Read/Write (Streams)

//echo readfile("private/readnow.txt");

/**
 * r = read
 * w = write / overrite
 * a = append
 */
// $furl = "private/readnow.txt";

// $myfile = fopen($furl, "r") or die('Unable to open file'); //open file

// echo fread($myfile, filesize($furl)); //read file content

// fclose($myfile); //Close file

// $furl = "private/students.txt";

// $myfile = fopen($furl, "w") or die('Unable to open file'); //open file

// $fcontent = "All the students are in attendance.\n
//             That is nice.";

// fwrite($myfile, $fcontent); //read file content

// echo readfile($furl);

// fclose($myfile); //Close file


$furl = "private/students.txt";

// $myfile = fopen($furl, "a") or die('Unable to open file'); //open file

//$fcontent = "\n I like their performance.";

// fwrite($myfile, $fcontent); //read file content

// echo readfile($furl);

// fclose($myfile); //Close file

// $myfile = fopen($furl, "r") or die('Unable to open file'); //open file

// echo fgets($myfile); //read file single line

// fclose($myfile); //Close file

$myfile = fopen($furl, "r") or die('Unable to open file'); //open file

while(!feof($myfile)){

   echo fgets($myfile).'<br>'; //read file single line
}

fclose($myfile); //Close file

//[a,e, i, o, u]

