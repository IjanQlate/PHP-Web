<?php
session_start();
error_reporting(0);
include('includes/config.php');
$aid=intval($_GET['id']);

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

	    <title>About Us</title>

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

<!-- Page content -->
<?php
$query=$mysqli->query("select * from aboutus");
while($row=$query->fetch_array())
{
?>
<div class="w3-content" style="max-width:1100px">
 
  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-small w3-hide-small">
	<img data-echo="admin/img/<?php echo htmlentities($row['assign']);?>/<?php echo htmlentities($row['image1']);?>" alt="" width="100%" style="border: 2px solid black"></a>
    </div>

    <div class="w3-col m6 w3-padding-small">
      <h1 class="w3-center" style="font-weight: bold; font-style: italic; font-family: American Typewriter, serif;">ABOUT ENTREGREEN</h1>
      <p  class="w3-large" style= "text-align:justify"><span class="value"><?php echo htmlentities($row['description1']);?></span></p>
	</div>
	<?php }?>
  </div>
<hr>
  <?php
$query=$mysqli->query("select * from aboutus");
while($row=$query->fetch_array())
{
?>
  <!-- Menu Section -->
  <div class="w3-row w3-padding-small" id="menu">
    <div class="w3-col l6 w3 -padding-small">
 <p class="w3-large w3-text-grey w3-hide-medium" style= "text-align:justify"><span class="value"><?php echo htmlentities($row['description2']);?></span></p>
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img data-echo="admin/img/<?php echo htmlentities($row['assign']);?>/<?php echo htmlentities($row['image2']);?>" alt="" width="100%" style="border: 2px solid black"></a>
    </div>
  </div><br><br>
  <?php }?>
  <hr>
</div>
<div class="w3-row w3-padding-32">
<?php include('includes/brands-slider.php');?>
</div>

<?php include('includes/footer.php');?>
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