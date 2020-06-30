<?php
session_start();
 

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){ header('location: login.php');
}
?>
<?php 
$fullname = $_SESSION['fullname'];
$bgroup =$_SESSION['bgroup'];
$country= $_SESSION['country'];
$state = $_SESSION['state'];
$district = $_SESSION['district'];
$email = $_SESSION['email'];
$phonenumber = $_SESSION['phonenumber'];
$customusername= $_SESSION['customusername'];
$address = $_SESSION['address'];
$id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Profile Indo Blood</title>
<style>
body{
background-color:#2d2c3e;
}
*{
				box-sizing:border-box;
				}
.container{
				background-color:white;
				box-shadow:4px 4px 4px 4px rgba(0,0,0,0.2);
				padding:10px;
				margin-top:20px;
	border:0.8px solid #004e92;
border-radius:10px;
				}
.h1{
	text-align:center;
    color:#cc2b5e; letter-spacing:2px;
    font-size:25px;
    }
hr{
    border:2px solid #faaca8;
    margin-bottom:20px;
}
.group{
				color:#eb3349;
				font-size:16px;
				}
p{
display:inline;
font-size:16px;
text-transform:uppercase;
letter-spacing:1px;	padding-left:10px;
color:#2193b0;
				}
.container .top{
font-weight:bold;
padding:10px;
color:#7b4397;
display:inline;
				}
 .right{
    text-align:right;
                }
</style>
</head>
<body>
<div class="container">
<h1 class="h1">Profile <br>Indo Blood</h1>
</div>
<div class="container">
<div class="top">General Information</div>
<hr>
<div class="group">Full Name<p><?php echo "$fullname"; ?></p></div>
<div class="group">Email Id<p><?php echo "$email"; ?></p></div>
<div class="group">Phone Number<p> <?php echo "$phonenumber"; ?></p></div>
<div class="group">Address<p><?php echo "$address"; ?></p></div><hr>
<div class="right">Edit</div>
</div>
<div class="container">
<div class="top">Public Information</div><hr>
<div class="group">User Name<p><?php echo "$customusername"; ?></p></div>
<div class="group">Blood Group<p><?php echo "$bgroup"; ?></p></div>
<div class="group">
Country<p><?php echo "$country"; ?></p></div>
<div class="group">State <p><?php echo "$state"; ?></p></div>
<div class="group">District<p><?php echo "$district";?></p></div><hr>
<div class="right">Edit</div>
</div>
<div class="container">
<div class="group">User Id<p>
<?php echo "$id"; ?></p></div>
<div class="group">Password<p>••••••••</p></div>
<a href="logout.php">logout</a><hr>
<div class="right">Edit</div>
</div>
</body>
</html>
