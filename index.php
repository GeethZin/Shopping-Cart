<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" media="(min-width: 640px)" href="all_pc.css">
<link rel="stylesheet" media="(max-width: 640px)" href="all_smp.css">

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link href="flexslider.css" rel="stylesheet">
<script src="jquery.flexslider-min.js"></script>
<script>
  $(function(){
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
</script>

<style>
#more {display: none;}



input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.button1 {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.button1:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>

</head>

<body style="background-image:url(img/67Z.gif);">
<div id="pagebody" style="height: 1200spx;">
 <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
	<header>
	<div class="flexslider" style="border-color:#CFC;;">
      <ul class="slides">
        <li><img src="img/6.jpg" style="width:870px;height:275px;"></li>
        <li><img src="img/2.jfif" style="width:900px;height:275px;"></li>
        <li><img src="img/3.jpg" style="width:900px;height:275px;"></li>
        <li><img src="img/4.jpg" style="width:900px;height:275px;"></li>
        <li><img src="img/5.jpg" style="width:900px;height:275px;"></li>
        <li><img src="img/5.jpg" style="width:900px;height:275px;"></li>
        <li><img src="img/1.png" style="width:900px;height:275px;"></li>
       
      </ul>
    </div>

    <div class="topnav">
    	<div class="topnavde"><a href="index.php"><b>Home</b></a></div>
			<div class="topnavde"><a href="1.html"><b>Category</b></a></div>
			<div class="topnavde"><a href="2.html"><b>Brand</b></a></div>
			<div class="topnavde"><a href="3.html"><b>New Arrival</b></a></div>
			<div class="topnavde"><a href="5.html"><b>Contact us</b></a></div>

    </div>
    
	</header>

	<div class="container" style="height: 580px;">
<h2>About us</h2>
<p style = "text-align:justify";>
                                     	Shop Nepal has planned to develop an online shopping website.Now a day’s business promotions and business transactions are done through online or by internet. Buying and selling products over the internet is trending now which is also known as eCommerce. It is part of all industries. Our website is based on two online business category business to business which means doing business with each such as manufacture selling where we can sell as a wholesale to retailers.  And another one is business to consumers where product selling to the general public through catalogues utilizing shopping carts.




</script>

</br>
</br>



	
	</div>
	<div>
	<footer>Design by Nepal Group 2020 KCGI </footer>
</div>
</body>
</html>