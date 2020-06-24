<?php
$searchconn = mysqli_connect('','','','');
if($_SERVER["REQUEST_METHOD"] == "POST") {
$squsername = mysqli_real_escape_string($searchconn, $_POST["squsername"]);
$sqcountry = mysqli_real_escape_string($searchconn, $_POST["sqcountry"]);
$sqbgroup = mysqli_real_escape_string($searchconn, $_POST["sqbgroup"];
$sqstate = mysqli_real_escape_string($searchconn, $_POST["sqdistrict"];
$sqdistrict = mysqli_real_escape_string($searchconn, $_POST["sqdistrict"];
$sqphonenumber = mysqli_real_escape_string($searchconn, $_POST["sqphonenumber"];
if (empty($squsername)){array_push($errors, "Please fill your name");}
if (empty($sqphonenumber)){array_push($errors, "Please enter your phonenumber");}
if (count($errors) === 0){
$searchquery = "SELECT customusername, phonenumber FROM donors WHERE bgroup='$sqbgroup' AND country='$sqcountry' AND state='$sqstate' AND district='$sqdistrict'";
$sqresults = mysqli_query($searchconn, $searchquery);
 ?>
