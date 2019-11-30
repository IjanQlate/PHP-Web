<?php

include('includes/config.php');
session_start();


if(count($_POST)>0) {
if($_POST["captcha_code"]==$_SESSION["captcha_code"]){
$success_message = "Your message received successfully";
mysqli_query($mysqli, "INSERT INTO inquiries(first_name, email, contactno, message)VALUES('" . $_POST['first_name']. "', '" . $_POST['email']. "', '" . $_POST['contactno']. "','" . $_POST['message']. "')");
}
else{
$error_message = "Incorrect Captcha Code";
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
<style>
.me {
    margin-left:20px;
    margin-top:20px;
    font-size: 1.5em;
  font-family:calibri;
  width:980px;
  border-radius: 5px;

   
}
.demo-error {
  display:inline-block;
  color:#FF0000;
  margin-left:5px;
  border-radius: 5px;
}
.demo-input {
    width: 90%;
    border-radius: 5px;
    border: #CCC 1px solid;
    padding: 8px;
    margin-left:5px;
    margin-right:5px;
    margin-top:10px;
    margin-bottom: 20px;
}
.demo-btn {

    padding: 1px;
    border-radius: 5px;
    background: #478347;
    border: #325a32 1px solid;
    color: #FFF;
    width: 90%;
    cursor:pointer;
     margin-left:5px;
    margin-right:5px;
     margin-top:10px;
    margin-bottom: 20px;
}
.demo-heading {
  font-size: 2.5em;
    border-bottom: #CCC 1px solid;
    margin-bottom:5px;
    border: 2px solid grey;
    border-radius: 5px;
}
.demo-table {
    background: #dcfddc;
    padding: 20px;
    border: 2px solid green;
    border-radius: 5px solid green;
}
.demo-success {
    margin-top: 5px;
    color: #478347;
    background: #e2ead1;
    padding: 10px;
    border-radius: 5px;
}
.captcha-input {
  background:#FFF url('captcha_code.php') repeat-y;
   padding: 1px;
  padding-left: 85px;
  border-radius: 5px;
  
}

</style>
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



    <center>
       <?php
$query=$mysqli->query("select * from users where id='".$_SESSION['id']."'");
while($row=$query->fetch_array())
{
?>
<?php if(isset($success_message)) { ?>
<div class="demo-success"><?php echo $success_message; ?></div>
<?php } ?>
<form class="me" name="frmContact" method="post" action="">
<div ><h2 style="text-decoration-line: underline; text-decoration-style: solid;">INQUIRIES FORM</h2></div>
<table cellpadding="10" cellspacing="10" width="100%">
<tr class="tablerow">
<td width="50%">Name<br/><input type="text" name="first_name" class="demo-input" value="<?php echo htmlentities($row['first_name']);?>" required></td>
<td colspan="2">Phone<br/><input type="text" name="contactno" class="demo-input" value="<?php echo $row['contactno'];?>" required></td>
</tr>
<tr class="tablerow">
<td colspan="2">Email<br/><input type="email" style="width:95%" name="email" class="demo-input" value="<?php echo $row['email'];?>" required></td>

</tr>
<tr class="tablerow">
<td colspan="2">Message<br/><textarea style="width:95%" name="message" class="demo-input" rows="5" required></textarea></td>
</tr>
<tr class="tablerow">
<td>Captcha Code: <div id="error-captcha" class="demo-error"><?php if(isset($error_message)) { echo $error_message; } ?></div><br/>
<input name="captcha_code" type="text" class="demo-input captcha-input">
</td>
<td><br/><input type="submit" name="submit" value="Submit" class="demo-btn"></td>
</tr>
</table>

</form></center><br><br>
<!-- create a new account -->

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
  
  <script src="switchstylesheet/switchstylesheet.js"></script>
  

  <!-- For demo purposes – can be removed on production : End -->
  <script>
  function ShowHideDiv() {
            var chkYes = document.getElementById("chkYes");
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = chkYes.checked ? "block" : "none";
        }
  </script>
  

</body>
</html>
  <?php } ?>    
      
