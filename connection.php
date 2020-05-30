<?php
 
    $con=mysqli_connect('localhost','root','','phptutorials');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
