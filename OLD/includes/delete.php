<?php
require_once 'dbh.php';



// Form POST to Variable
$done = $_POST['task-id'];


// Variable for Query
$delete = "DELETE FROM TASK
            WHERE TaskID = $done";

$hold = $db->exec($delete);

header("Refresh:1; url=../index.php");

?>