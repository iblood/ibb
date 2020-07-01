<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header('location: login.php');
    exit;
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

<?php inculde('editconfig.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Search | Indo Blood</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel ="icon" href="iblood.github.io/logo.png" type="image/x-icon"> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}

input[type=text],input[type=email],input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=password]{
width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus,
input[type=tel]:focus,
input[type=email]:focus{
  background-color: #ddd;
  outline: none;
border:0.7px solid green;
}
input[type=password]:focus{
background-color:#ddd;
outline:none;
border:0.7px solid green;
width:95%;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.searchbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.search:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}

.signin {
  text-align: center;
}


select {
  margin-bottom: 1em;
  padding: 15px;
  border: 0;
  border-bottom: 2px solid currentcolor; 
  font-weight: bold;
   width:100%;
  background:#f1f1f1;
  border-radius: 0;
  &:focus, &:active {
    outline: 0;
    border-bottom-color: red;
  }
}

.fa, .far, .fas {
    display: inline;
}

</style>
</head>
<body>

<form class="modal-content" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="post">
  <div class="container">
      <h1>Edit Email</h1>
<hr>
<label for="nphonenumber"><b>Your New Email</b></label>
      <input type="text" placeholder="Enter Your New Phone Number" name="nphonenumber" required>
      <input type="hidden" name="id" value="<?php echo"$id";?>>
      <p>By proceeding with <strong>Change</strong> you could not change it For 6 Months</p>

      <div class="clearfix">
   <p>     Terminate and go<a href="iblood.github.io">Back</a></p>
        <button type="submit" class="searchbtn" name="nbphonenumber">Commit Change(s)</button>
      </div>
    </div>
  </form>
</body>
</html>
