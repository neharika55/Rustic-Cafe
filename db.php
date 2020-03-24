<?php
session_start(); //SHOULD BE AT THE TOP BECAUSE IT DEALS WITH HEADER DATA
$con = mysqli_connect("localhost","root","","rotmtgfy_neharika");
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}