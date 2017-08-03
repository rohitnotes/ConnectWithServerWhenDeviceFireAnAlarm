<?php

include_once("CheckClass.php");
$checkClass = new CheckClass();
//$_POST['date'] = "2017-08-03";
$checkClass->prepare($_POST);
$checkClass->check();

?>