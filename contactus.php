<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Contact Us</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="css/w3.css">
		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
<body class="cnt-home">
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<style>
h3,h4,h5 { padding-left: 20px;}
h3 { color: green;
text-decoration-line: underline; text-decoration-style: solid;
}
h4 {font-weight: bold}
.boxed {
  border: 2px solid green ;
  width: 600px;
  height: 200px;
  float: left;
} 
.displayed {
    display: block;
	margin-top: 30px;
    margin-left: 50px;
    margin-right: auto }
</style>
<?php
$query=$mysqli->query("select * from ourlocation");
while($row=$query->fetch_array())
{
?>
<div class="w3-content" style="max-width:1100px">
<div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-small w3-hide-small">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3874638506245!2d103.79166631426494!3d1.5345183613829265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6dc393e878a9%3A0x72ae8e4ae438f462!2sEntregreen!5e0!3m2!1sen!2smy!4v1574126218213!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="w3-col m6 w3-padding-small">
    <h1 class="w3-center" style="font-weight: bold; font-style: italic; font-family: American Typewriter, serif;">OUR LOCATION</h1>
    <p style="text-align:justify; font-size: 20px; font-weight:bold; padding-top:20px; margin-left: 100px"> Entregreen office are located at</p>
	<p style="text-align:justify; font-size: 16px;margin-left: 100px"><span class="value"><?php echo htmlentities($row['companyaddress']);?></span></p>
	<p style="text-align:justify; font-size: 20px; font-weight:bold; margin-left: 100px"> For direction, kindly click this link:</p>
	<p style="text-align:justify; text-decoration:underline; font-size: 14px; margin-left: 100px"><a href="<?php echo htmlentities($row['link']);?>"><span class="value"><?php echo htmlentities($row['link']);?></span></a></p>
	<p style="font-size: 20px; font-weight:bold; margin-left: 100px">Any inquiries can directly to our office or contact us at</p>
	<p style="text-align:justify; font-size: 16px; margin-left: 100px">Office Phone Number: <span class="value"><?php echo htmlentities($row['officephone']);?></span></p>
	<p style="text-align:justify; font-size: 16px; margin-left: 100px">Company Email Address: <span class="value"><?php echo htmlentities($row['companyemail']);?></span></p>
	<br> 
    </div>
  </div>
</div>
<hr>
<?php }?>

<?php
$query=$mysqli->query("select * from contactus");
while($row=$query->fetch_array())
{
?>

<div class=" w3-padding-small" id="about">
<div class="boxed displayed" >
<img data-echo="admin/contact/<?php echo htmlentities($row['name']);?>/<?php echo htmlentities($row['image1']);?>" alt="" width="200" height="180" style="float:right;" />
<h3><span class="value"><?php echo htmlentities($row['position']);?></span></h3>
<h4><span class="value"><?php echo htmlentities($row['name']);?></span> </h4>
<h5><span class="value"><?php echo htmlentities($row['contact']);?></span> </h5>
<h5><span class="value"><?php echo htmlentities($row['email']);?></span> </h5>
</div>
</div> 
<?php }?>


<div class="w3-row w3-padding-32">
<?php include('includes/brands-slider.php');?>
</div>
<div>
<?php include('includes/footer.php');?>
</div>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>