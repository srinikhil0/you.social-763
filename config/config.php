<?php
ob_start(); //Turns on output buffering
session_start();

$timezone=date_default_timezone_set("America/New_York");

$con = mysqli_connect("db", "php_docker", "password", "you.social"); //connection variable

// $con = mysqli_connect("localhost", "root", "", "you.social"); //connection variable


if (mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno();
}
?>