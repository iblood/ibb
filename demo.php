<?php 
session_start();
if (!isset($_SESSION['search'])) {
		$_SESSION['msg'] = "Please make a valid search";
		header('location: search.php');
	}
	?>
	<?php 
	$sqphonenumber = $_SESSION['phonenumber'];
	$sqbgroup = $_SESSION['sqbgroup'];
	$sqcountry = $_SESSION['sqcountry'];
	$sqstate = $_SESSION['sqstate'];
	$sqdistrict = $_SESSION['sqdistrict'];
	?>
	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search results | Indo Blood</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
.h1{
				font-size:18px;
				color:lightblue;
				}
				.srp{
								font-size:14px;
								color:pink;
								}
.p{
				color:green;
				font-size:12px;
				}								
.accordion {
  background-color: #eee;
  color: deeppink;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}
.active, .accordion:hover {
  background-color: deeppink;
}
.panel {
  padding: 0 18px;
  background-color: pink;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.accordion:after {
  content: '\02795';
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796";
}
.left {
				float:left;
				display :inline-block; 
				}
.center {
				text-align:center;
				display : inline-block; 
				}
.right {
				float:right;
				display:inline-block; 
				}
	.pagination{
					list-style-type: none;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}			
.pagination li{
  border:1px solid pink;
display:inline-block;
  text-align: center;
}
				</style>
</head>
<body>
<div><h1 class="h1">Indo Blood || Search</h1></div>
<div><h1 class="srp">Showing search results for the criteria you selected:-</h1>
<p class="p">Blood Group:<?php echo"$sqbgroup";?></p>
<p class="p">Country:<?php echo"$sqcountry";?></p>
<p class="p">State:<?php echo"$sqstate";?></p>
<p class="p">District:<?php echo"$sqdistrict";?></p>
</div>
<button class="accordion">Section 2</button>
<div class="panel">
  <p class="left">Phone Number:</p>
  <p class="center">Ex.1234567890</p>
  <p class="right">U+1F4DE</p>
</div>
<?php
include('db.php');

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 20;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($searchconn,"SELECT COUNT(*) As total_records FROM 'donors'");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

    $searchresult = mysqli_query($searchconn,"SELECT customusername, phonenumber FROM donors WHERE country='$sqcountry' AND bgroup ='$sqbgroup' AND state='$sqstate' AND district ='$sqdistrict'LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($searchresult)){
		echo "<button class='accordion'>"
		echo ".$row["customusername"]."
	echo	"</button>
		<div class='panel'>
		<p class='left'>Phone Number:</p>
		<p class='center'>"
		echo ".$row["phonenumber"]."
		echo "</p></div>";
        }
	mysqli_close($searchconn);
    ?>


<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
	<?php  if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
</body>
</html>
