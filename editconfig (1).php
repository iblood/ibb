<?php
$errors = array();
require('db.php');

if (isset($_POST['nbfullname'])){
$fullname = mysqli_real_escape_string($searchconn, $_POST['nfullname']);
$id = mysqli_real_escape_string($searchconn, $_POST['id']);
				if (empty($fullname)) { array_push($errors, "Pleaselenter valid name"); }
                if(empty($id)){array_push($errors, "qwety");}
				if (count($errors) == 0) {
    $sql = "SELECT fny, fnm, fnd FROM edit WHERE id='$id'";
$sqlresult = mysqli_query($searchconn, $sql);
while($result = mysqli_fetch_array($sqlresult)){
$y = $result["fny"];
$m = $result["fnm"];
$d = $result["fnd"]; 
$ny = date ("Y");
$nm = date("m");
$nd= date ("d");$date1=date_create("$y-$m-$d");
$date2=date_create("$ny-$nm-$nd");
$diff=date_diff($date1,$date2);
if ($diff->format("%R%a days") >= +90){
$set = "UPDATE edit SET fny='$ny', fnm='$nm', fnd='$nd' WHERE id='$id'";
mysqli_query($searchconn, $set);
$history = "INSERT INTO historyrecords (id,text,year,month,day) VALUES ('$id','Edited Full Name','$ny','$nm','$nd')";
mysqli_query($searchconn,$historyrecords);
	$query="UPDATE donors SET fullname='$fullname' WHERE id='$id'";					
if(mysqli_query($searchconn, $query)){	
    header ('location: index.php');				}			}
    else{array_push($errors,"Couldnot Commit Change With in 90days of previous Change");
    } } } }
?>