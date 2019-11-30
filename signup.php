<?php
session_start();
//error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
{        
		$first_name;$last_name;$email;$contactno;$gender;$companyname;$password;$shippingAddress;$shippingState;$shippingCity;$shippingPincode;$captcha;
		
		if(isset($_POST['first_name'])){
         $first_name=$_POST['first_name'];
        }
		if(isset($_POST['last_name'])){
         $last_name=$_POST['last_name'];
        }
        if(isset($_POST['email'])){
         $email=$_POST['email'];
        }
        if(isset($_POST['contactno'])){
         $contactno=$_POST['contactno'];
        }
		if(isset($_POST['gender'])){
         $gender=$_POST['gender'];
        }
		if(isset($_POST['details'])){
         $details=$_POST['details'];
       }
		if(isset($_POST['companyname'])){
         $companyname=$_POST['companyname'];
       }
		if(isset($_POST['password'])){
         $password=md5($_POST['password']);
        }
		if(isset($_POST['ssm'])){
         $ssm=($_POST['ssm']);
       }
		if(isset($_POST['department'])){
         $department=($_POST['department']);
        }
		if(isset($_POST['shippingAddress'])){
         $shippingAddress=$_POST['shippingAddress'];
        }
		if(isset($_POST['shippingState'])){
         $shippingState=$_POST['shippingState'];
        }
		if(isset($_POST['shippingCity'])){
         $shippingCity=$_POST['shippingCity'];
        }
		if(isset($_POST['shippingPincode'])){
         $shippingPincode=$_POST['shippingPincode'];
       }
       if(isset($_POST['g-recaptcha-response'])){
         $captcha=$_POST['g-recaptcha-response'];
        }
       if(!$captcha){
         echo "<script>alert('Not register. Please tick Captcha button!');</script>";
		 echo"<script>document.location='signup.php';</script>";
         exit;
       }
		
        $secretKey = "6LdFEb4UAAAAAHadd6kbJ1jBsfx3nih8mpQuEB7d";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
			
			$sql = "insert into users (first_name,last_name,email,contactno,gender,details,companyname,password,ssm,department,shippingAddress,shippingState,shippingCity,shippingPincode) values('$first_name','$last_name','$email','$contactno','$gender','$details','$companyname','$password','$ssm','$department','$shippingAddress','$shippingState','$shippingCity','$shippingPincode')";

			if ($mysqli->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
                //echo "<script>console.log($query);</script>";
				//echo"<script>document.location='login.php';</script>";
        } else {
			   //echo "<script>alert('Not register. Please tick Captcha button!');</script>";
			   echo "WOI";
        }
}
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

	    <title>Shopping Portal | Signi-in | Signup</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="css/styles.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

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
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
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
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Authentication</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="sign-in-page inner-bottom-sm">
			<div class="row">

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">create a new account</h4>
	<p class="text title-tag-line">Create your own Shopping account.</p>
	
	<div class="contain">
            <div class="signup-content">
                <div class="signup-form">
				<hr>
                    <form class="register-form" role="form" method="post" name="register" onSubmit="return valid();">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="first_name" required />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email Address</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="email" required />
                                </div>
                                <div class="form-input">
                                    <label for="contactno" class="required">Telephone Number</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="contactno"  required />
                                </div>
								<div class="form-input">
                                    <label class="info-title">Address</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="shippingAddress" required />
                                </div>
								<div class="form-input">
                                    <label  class="info-title">City</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="shippingCity" required />
                                </div>
								
								<div class="form-input">
									<label class="info-title" for="password">Password. <span>*</span></label>
									<input type="password" class="form-control unicase-form-control text-input" id="password" name="password"  required >
                                </div>
								
								<div class="form-input">
                                    <label class="info-title" for="confirmpassword">Confirm Password. <span>*</span></label>
									<input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required >
                                </div>
								<script src='https://www.google.com/recaptcha/api.js' async defer></script>
								<div class="g-recaptcha" data-sitekey="6LdFEb4UAAAAABRImYyHyTdkNiHhtg9877bkUbzV" required></div>

								
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="last_name">Last name</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="last_name" required />
								</div>
								<div class="form-radio">
                                    <div class="label-flex">
                                        <label for="gender">Gender</label>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item" >
                                           <label style="font-weight:bold; font-size:16px" ><input type="radio" value="Male" name="gender"  /> &nbsp; Male</label>
                                        </div>
                                        <div class="form-radio-item">
                                            <label style="font-weight:bold; font-size:16px"><input type="radio" value="Female" name="gender"/> &nbsp; Female</label>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-radio">
								
											<label class="info-title">Details<span>*</span></label><br>
												<div class="form-radio-item" >
												<label for="chkNo" style="font-weight:bold; font-size:16px"><input type="radio" value="Individual" id="chkNo" name="details" onclick="ShowHideDiv()"/>
													Individual
												</label>
												</div>
												<div class="form-radio-item" >
												<label for="chkYes" style="font-weight:bold; font-size:16px"><input type="radio" value="Company" id="chkYes" name="details" onclick="ShowHideDiv()"  />
													Company
												</label>
												<div id="dvPassport" style="display: none" >
													
													<label style="font-weight:bold; font-size:16px">Company Name:</label>
													<input style="margin-left: 30px;" type="text" name="companyname" id="txtPassportNumber"  />
													
													<label style="font-weight:bold; font-size:16px">SSM number:</label>
													<input style="margin-left: 30px;" type="text" name="ssm" id="txtPassportNumber"  />
													
													<label style="font-weight:bold; font-size:16px">Department:</label>
													<input style="margin-left: 30px;" type="text" name="department" id="txtPassportNumber"  />
	
												</div>
												</div>
								</div>
								
								<div class="form-input">
                                    <label class="info-title">Region/State</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="shippingState" required />
								</div>
								
								 <div class="form-input">
                                    <label class="info-title">Postcode</label>
                                    <input type="text" class="form-control unicase-form-control text-input" name="shippingPincode" required />
                                </div>
                            </div>
                        </div>
						
						<div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
					<hr>
                </div>
            </div>
    </div>
		



</div>	
<!-- create a new account -->
</div><!-- /.row -->
</div>
<?php include('includes/brands-slider.php');?>
</div>
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
	
	<!-- <script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script> -->
	<script>
		function ShowHideDiv() {
            var chkYes = document.getElementById("chkYes");
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = chkYes.checked ? "block" : "none";
        }
	</script>

</body>
</html>
			
			
