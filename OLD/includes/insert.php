<?php
require_once 'dbh.php';



// Form POST to Variable
$dname = $_POST['dname'];
$dtype = $_POST['dtype'];
$i1 = $_POST['i1'];
$m1 = $_POST['m1'];
$i2 = $_POST['i2'];
$m2 = $_POST['m2'];
$i3 = $_POST['i3'];
$m3 = $_POST['m3'];
$i4 = $_POST['i4'];
$m4 = $_POST['m4'];
$i5 = $_POST['i5'];
$m5 = $_POST['m5'];
$i6 = $_POST['i6'];
$m6 = $_POST['m6'];
$i7 = $_POST['i7'];
$m7 = $_POST['m7'];
$i8 = $_POST['i8'];
$m8 = $_POST['m8'];

// Variable for Query

$new = "INSERT INTO `Drink` (`drinkName`, `drinkType`, `ingredient1`, `measure1`, `ingredient2`, `measure2`, `ingredient3`, `measure3`, `ingredient4`, `measure4`, `ingredient5`, `measure5`, `ingredient6`, `measure6`, `ingredient7`, `measure7`, `ingredient8`, `measure8`) VALUES ('$dname', '$dtype', '$i1', '$m1', '$i2', '$m2', '$i3', '$m3', '$i4', '$m4', '$i5', '$m5', '$i6', '$m6', '$i7', '$m7', '$i8', '$m8')";

$result = $db->exec($new);

header("Refresh:1; url=../index.php");

?>