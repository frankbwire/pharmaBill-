<?php
$db='';
$conn=mysqli_connect('localhost','root','');
if (!$conn){
    echo "error during connection" . mysqli_error();
}

$db=mysqli_select_db($conn,'pharmabill');
if (!$db){
    echo "error db" . mysqli_error();
}
?>