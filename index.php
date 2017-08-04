<!DOCTYPE html>
<html>
<head>
<?php include('contact.php'); ?>
<link rel="shortcut icon" href="fav_icon.ico" type="image/x-icon" />
  <title>DS Machine LP</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Precision Machining and Production">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  body, .jumbotron {
      position: relative;
      font-size:16px; 
  }
  #section1 {padding-top:50px;height:350px;color: black; background-color: white; margin-bottom: 20px;}
  #section2 {padding-top:50px;height:520px;color: black; background-color: whitesmoke;}
  #section3 {padding-top:50px;height:460px;color: black; background-color: white; margin-bottom: 50px;}
  #section4 {padding-top:50px;height:500px;color: black; background-color: whitesmoke;}
  #section5 {padding-top:50px;height:290px;color: black; background-color: white; margin-bottom: 40px;}  
#section2,
#section3,
#section4,
#section5 {
	border-top-style: solid; border-top-width: 1px;
  	border-top-color: #CC0000;
}  
  .container-fluid {
		background-color: #CC0000;  
  }
  h1, p {
		color:black;  
  }
  .navbar-toggle {
  	background-color: red;
  }
  
  .jumbotron {
 		height: 750px;
  }
  
  .col-lg-12 {
  	padding-top: 10%;

  }
  
  hr {
    width: 100px;
    display: inline-block;
    border-bottom: 2px solid #b7b7b7;
    border-top: none;
}
#rights {
	background-color: #CC0000;
	width: 100%;
	text-align: right;
	padding-top: 10px;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover
{
	background-color: #FF4C4C;
}
.navbar-inverse .navbar-nav>li>a {
	color: white;
}
.navbar-inverse .navbar-brand {
	color: white;
	
}
.navbar-nav {
	float: right;
}
.btn-default {
	color: black;
	background-color: #CC0000;
}
.jumbotron {
	background-image: url("DSC00132.JPG");
	background-attachment: fixed;
	background-size: 100%;
	background-repeat: no-repeat;
}

#rights {
	position: fixed;
	bottom: 0;
	width: 100%;
	height: 20px;
	padding-top: 1px;
	background-color: white;
}

#image {
	opacity: 0.7;
	filter: alpha(opacity=70);
	max-width: 100%;
	height: auto;
}

.btn-default {
	background-color: #ccc;
	text-transform: uppercase;
	border: none;
}
.btn-block {
	background-color: black;
	color: white;
}
#border {
	border-bottom: 1px solid rgba(192, 192, 192, 0.5);
	margin-bottom: 15px;
	border-bottom-width: 5px;
}
#top-description {
	color: white;
	font-size: 33px;
	letter-spacing: -0.024em;
	font-weight: bold;
}
.section-header {
	max-width: 70%;
	margin: 0 auto 70px;
}
.glyphicon .glyphicon-earphone {
	font-size: 30px;
}
img {
	max-height: 100%;
	max-width: 100%;
}
#map {
        height: 350px;
        width: 100%;
       }
a.value {
	font-weight: bolder;
	background-color: black;
	border-style: solid;
	border-color: white;
	border-width: 1px;
}
.dropdown-menu {
	background-color: #CC0000;
}
.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
	background-color: #FF4C4C;
}
.success {
	color: #29b22f;
	text-align: center;
}
.error {
	color: red;
	text-align: center;
	font-size: 15px;
}
@media screen and (max-width:992px) {
	#section5 {
		margin-bottom: 300px;
	}
}
@media screen and (max-width:461px) {
	.jumbotron {
	background-image: url("crop.jpg");
	background-size: contain;
	height: 600px;

	}
}
@media screen and (max-width:992px) {
	#examples-img {
		width: 33%;
		float: left;
		position: relative;
		padding-right: 0;
		padding-left: 0;
		box-sizing: border-box;
	}
	#capabilities-img {
		width: 400px;
		height: 360px;
		float: left;
	}
	#section2 {
		margin-bottom: 300px;
		background-color: white;
		text-align: center;
	}
}
@media screen and (max-width:767px) {
	#section5 {
		margin-bottom: 350px;
	}
	#section1 {
		margin-bottom: 100px;	
	}
	#section4 {
		height: 850px;
	}
}
@media screen and (max-width:631px) {
	#section2 {
		margin-bottom: 600px;
		background-color: white;
	}
		
}
@media screen and (max-width:1024px) {
	.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
		font-size: 12px;
	}
	#top-description {
		font-size: 20px;
		margin-top: auto;
	}
	.btn-group-lg>.btn, .btn-lg {
		padding: 7px 11px;
		font-size: 16px;
	}
	#image {
	height: 200px;	
	}
	.jumbotron {
		height: 530px;
		background-color: white;
	}

}
@media screen and (max-width:767px) {
	#map-padding{
		padding-top: 20px;
	}
		
}
  </style>
  


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                       
      </button>
      <a class="navbar-brand" href="#">
			| DS MACHINE LP |     
      </a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">ABOUT US</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CAPABILITIES <span class="caret"></span></a>
          	<ul class="dropdown-menu">
          		<li><a href="#section2">Capabilities</a></li>
          		<li><a href="equipment.html">Our Machines</a></li>
          	</ul>
          <li><a href="#section3">OUR WORK</a></li>
          <li><a href="#section4">CONTACT US</a></li>
          <li><a href="tel:817.834.2533" class="value"><i class="glyphicon glyphicon-earphone
"></i> 817-834-2533</a></li>

        </ul>
      </div>
    </div>
  </div>
</nav>    
<section class="jumbotron text-center">

		<div class="col-lg-12">
	<img id="image" src="large2.jpg" alt="logo"><br>
	<hr>
	<h3 id="top-description">Custom Precision CNC Machining and Production
	<br>
	<p id="top-description">4515 Waldemar Fort Worth, Texas 76117</p>
	</h3>
	<a href="tel:817.834.2533" type="button" class="btn btn-default btn-lg">Call Us: 817.834.2533</a>		
		</div>

</section>
<div id="section1" class="container text-center">
	<head class="section-header mb-0"></head>
<h1>About Us</h1><hr><br>

	  <p><strong>DS Machine LP</strong> is a small family owned business in Fort Worth.
				We have been in business for 28 years with over 40 years of experience. 
				We specialize in machining CNC products to customers specifications. Whether
				you bring us a sample part or a drawing we can machine your product for you.
				We can machine a variety of materials such as steel, stainless steel, copper, brass, 
				aluminum, plastic,
				and many others.</p>

</div>
<div id="section2" class="container-fluid">
<div class="row">
	<div class="col-md-4">
		<img class="center-block" id="capabilities-img" src="Fadal_3015_CNC_mill.JPG" width="540px" height="430px" alt="machine">
	</div>
	<div class="col-md-4"><h1>Capabilities</h1>	  
		<p class="lead"><strong>Short - Long Run - Production</strong><br>
				Servicing the following Industries (not limited to):			 	
				<ul class="list-unstyled">
					<li>Aerospace</li>
					<li>Oil & Gas</li>
					<li>Alternate Energy</li>
					<li>Water Utilities</li>
					<li>Transportation</li>
					<li>Rigging & Sling Companies</li>
					<li>Aluminum Foundries</li>
					<li>Many other industries...</li>
					<li>Cick <a href="equipment.html">here</a>
					 to view our machines</li>
				</ul></p>	</div>
		<div class="col-md-4">
			<center><hr></center><br><p>Mastercam and SolidWorks are two of the softwares we work with.</p>
			<img src="MASTERCAM_logo.png" alt="mastercam software" class="center-block"
				width="420px" height="100px"><br>
				<img src="SolidWorks_Logo.jpg" alt="software" class="center-block"
					width="300px" height="130px">
		</div>
</div>


			

</div>
<div id="section3" class="container-fluid">
<h1>Our Work</h1><p>Slide to view our featured work, or click 
		<a href="equipment.html">here</a>
 			to view the machines we use.</p>
<div style="background-color:white; height:330px; overflow:auto;">
		<div class="image-scroll" style="width: 4000px; height: 290px;">
			<img src="DSC00083.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00070.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00125.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00119.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00118.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00116.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00113.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00112.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00106.JPG" width="390" height="410" alt="bbc news special" />
			<img src="DSC00101.JPG" width="390" height="410" alt="bbc news special" />
		</div>
	</div>
        
</div>

<div id="section4" class="container-fluid">
  <h1>Contact Us</h1>
<div class="container">
<div class="col-sm-6">
	<form id="form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>#form" method="post">
	<div class="form-group row">
		<fieldset>
		<label for="first-name-input">Name</label>
				<input type="text" class="form-control" name="name" value="<?= $name ?>">
				<span class="error"><?= $name_error ?></span>
		</fieldset>

	</div>
	<div class="form-group row">
		<fieldset>
			<label for="name-text-input">Email</label>
		<input type="text" class="form-control" placeholder="email@example.com" name="email"
			value="<?= $email ?>">
			<span class="error"><?= $email_error ?></span>
		</fieldset>
		
	</div>
	<div class="form-group row">
		<fieldset> 
		<label for="name-text-input">Message</label>
		<textarea type="text" class="form-control" value="<?= $message ?>" name="message"></textarea>
		</fieldset>
	</div>
		<fieldset>
				<button type="submit" class="btn btn-block" name="submit" data-submit="...Sending">Submit</button>
		</fieldset>
			<div class="success"><?= $success ?></div>
	</form>
</div>


<div class="col-sm-6" id="map-padding">
	<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 32.789533, lng: -97.280895};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBa_86QAPFHqf6sZVGOt6uXHsx2KzDA7Xg&callback=initMap">
    </script>
    
</div>
</div>


</div>
<div id="section5" class="container-fluid">
	<div class="row">
        <div class="col-md-4"><img src="small_logo.jpg" alt="logo"></div>
        <div class="col-md-4">
       <span class="glyphicon glyphicon-map-marker" style="font-size: 1.6em"></span>
        <h3 id="border">Location</h3>
					<p>4515 Waldemar<br>
					Fort Worth, Texas 76117<br>
					<a href="tel:817.834.2533">817.834.2533</a><br>
					<a href="mailto:dsmachine@dsmachine.us">dsmachine@dsmachine.us</a></p>
					</div>
        <div class="col-md-4" id="hours">
        <span class="glyphicon glyphicon-time" style="font-size: 1.6em"></span>
        	<h3 id="border">Hours</h3>
        	<p>
        	Monday - Thursday: 8:00am - 4:30pm<br>
        	Friday: 8:00am - 3:30pm<br>
        	Saturday & Sunday: Closed
        	</p>
        </div>
    </div>
  </div>
<div id="rights" class="container-fluid"><p>&copy; 2017 DS Machine LP | All rights reserved.</p>
	
</div>
</body>
</html>