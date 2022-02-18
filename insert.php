<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', 'NewPassword');

$rand_var = rand(1, 999);

$newRegion = new Region();
$newRegion->name = 'Area ' . $rand_var;
$newRegion->slug = 'area_' . $rand_var;
$newRegion->insert();


echo('<pre>');
var_export($newRegion);
echo('</pre>');
