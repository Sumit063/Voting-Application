<?php
$con = mysqli_connect("127.0.0.1:3310", "root", "", "votingsystem");
if(!$con) {
    die(mysqli_error($con));
}
?>