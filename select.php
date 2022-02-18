<?php

// method getAreas
// Object


require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', 'NewPassword');

function getAreasByFirstDigit($number)
{
    $newRegion = new Region();
//    @TODO
// 
// "select `name` from `regions` where name ilike `Area_`"
    $result = select("select name from `regions` where name like 'Area%'");
    return $result;
}





$listOfResults = getAreasByFirstDigit(5);

echo('<pre>');
var_export($listOfResults);
echo('</pre>');
