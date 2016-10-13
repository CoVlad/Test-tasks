<?php

/**
* Find alphanumeric filenames 
* with TXT extension in /datafiles folder 
* and display that list 
* sorted by filename
* 

* @author Vlad <covlad@ukr.net>
* @version 1.0
* @package files
*/

/**
*dir for scan files,  list ordered by increment - 0 in scan function
*/

$dir="./datafiles";
$fs= scandir($dir, 0);

/**
*iterrate all array
*/

for ($i=1;$i<=count($fs);$i++) {

/***
*find when we has a .txt file and display filename
*/
    if(preg_match("/[\s,\d]*\.txt/i",$fs[$i])) {
        echo $fs[$i]."<br />";
    }
}


?>