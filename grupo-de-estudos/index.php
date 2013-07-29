<?php


//$array = array(0.001 => 'b', .1 => 'c');
//
//print_r($array);

$dh = opendir(".");

while($file = readdir($dh)) {
    echo $file.'<br />';
}