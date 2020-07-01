<?php inculde('searchconfig.php');?>
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
      <h1>Search </h1>
      <p>Please fill in this form for searching donors.</p>
      <hr>
      <label for="username"><b>Your Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="squsername" required>
      <label for="sqphonenumber"><b>Your Phone Number</b></label>
      <input type="tel" placeholder="Enter Your Phone Number" name="sqphonenumber" required>
    <label for="bgroup">Blood Group</label>
<select id="bgroup" name="sqbgroup" required>
          <option value=""></option>
          <option value="a+">A +ve (A Positive)</option>
          <option value="a-">A -ve (A Negative)</option>  
          <option value="b+">B +ve (B Positive)</option>       
          <option value="b-">B -ve (B Negative)</option>      
          <option value="o+">O +ve (O Positive)</option>      
          <option value="o-">O -ve (O Negative)</option>      
          <option value="ab+">AB +ve (AB Positive)</option>    
          <option value="ab-">AB -ve (AB Negative)</option>        
</select>

<label for="country"><b>Country</b></label>
<select id="country"   name="sqcountry"   required>
<option value=""></option>
<option value="India">India</option>
</select>


<label for="states"><b>State</b></label>
 <select id="groups" name="sqstate" required>
<option value=""></option>
    <option value='Andhra_pradesh'>Andhra pradesh</option>
    <option value='Arunanchal pradesh'>Arunanchal pradesh</option>
    <option value='Assam'>Assam</option>
    <option value='Bihar'>Bihar</option>
    <option value='Chattisgar'>Chattisgar</option>
    <option value='Goa'>Goa</option>
    <option value='Gujarat'>Gujarat</option>
    <option value='Haryana'>Haryana</option>
    <option value='Himachal pradesh'>Himachal Pradesh</option>
    <option value='Jammu&Kashmir'>Jammu&Kashmir</option>
    <option value='Jharkhand'>Jharkhand</option>
    <option value='Karnataka'>Karnataka</option>
    <option value='Kerala'>Kerala</option>
    <option value='Madhya pradesh'>Madhya Pradesh</option>
    <option value='Maharashtra'>Maharashtra</option>
    <option value='Manipur'>Manipur</option>
	<option value='Megalaya'>Meghalaya</option>
    <option value='Mizoram'>Mizoram</option>
    <option value='Nagaland'>Nagaland</option>
    <option value='Odisha'>Odisha</option>
    <option value='Punjab'>Punjab</option>
    <option value='Rajasthan'>Rajasthan</option>
	<option value='sikkim'>Sikkim</option>
    <option value='Tamil Nadu'>Tamil Nadu</option>
    <option value='Telangana'>Telangana</option>
    <option value='Tripura'>Tripura</option>
    <option value='Uttar Pradesh'>Uttar Pradesh</option>
    <option value='Uttar Khand'>Uttar Khand</option>
    <option value='West Bengal'>West Bengal</option>
</select>
<label for="district"><b>District</b></label>
 <select id="sub_groups" name="sqdistrict" required>
<option data-group='SHOW' value=''></option>
<option data-group='Andhra_pradesh' value='anantapur'>Anantapur</option>
<option data-group='Andhra_pradesh' value='chittor'>Chittor</option>
<option data-group='Andhra_pradesh' value='east godavari'>East godavari</option>
<option data-group='Andhra_pradesh' value='west godavari'>West godavari</option>
<option data-group='Andhra_pradesh' value='guntur'>Guntur</option>
<option data-group='Andhra_pradesh' value='kadapa'>Kadapa</option>
<option data-group='Andhra_pradesh' value='krishna'>Krishna</option>
<option data-group='Andhra_pradesh' value='kurnool'>Kurnool</option>
<option data-group='Andhra_pradesh' value='prakasam'>Prakasam</option>
<option data-group='Andhra_pradesh' value='nellore'>Nellore</option>
<option data-group='Andhra_pradesh' value='srikakulam'>Srikakulam</option>
<option data-group='Andhra_pradesh' value='vishakapatnam'>Vishakapatnam</option>
<option data-group='Andhra_pradesh' value='vizianagaram'>Vizianagaram ziangaram</option>  
</select>
  <input type="checkbox"  name="remember" style="margin-bottom:15px" required> By proceeding you agree to our privacy policy and use data under fair use policy.
You promise us that you are using the data to find a true donor.

      </label>

      <p>By proceeding with <strong>INDO BLOOD</strong> you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
   <p>     Terminate and go to <a href="iblood.github.io">Home</a></p>
        <button type="submit" class="searchbtn" name="search_user">Search</button>
      </div>
    </div>
  </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(function(){
    $('#groups').on('change', function(){
        var val = $(this).val();
        var sub = $('#sub_groups');
        $('option', sub).filter(function(){
            if (
                 $(this).attr('data-group') === val 
              || $(this).attr('data-group') === 'SHOW'
            ) {
              if ($(this).parent('span').length) {
                $(this).unwrap();
              }
            } else {
              if (!$(this).parent('span').length) {
                $(this).wrap( "<span>" ).parent().hide();
              }
            }
        });
    });
    $('#groups').trigger('change');
});
</script>
</body>
</html>
