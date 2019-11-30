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
         <style>
         <?php
$query=$mysqli->query("select * from joinus order by id desc limit 1");
while($row=$query->fetch_array())
{
?>  
 * {
    box-sizing: border-box;
    margin: 0;
    padding: 0
}
.tele {
    margin-top: 5%;
}
ul, ol {
    list-style: none
}
.main {
    width: 60%;
    margin: auto;
    overflow: hidden;
    color: #fff
}
.slider {
    position: relative
}
.slider .slider-parent {
    padding: 0;
    display: flex
}
.slider .slider-parent .images-list {
    background-size: cover;
}
.slider .slider-parent .images-list:first-of-type, .slider .slider-parent .images-list:last-of-type {
    background-image: url("<?php echo htmlentities($row['image1']);?>")
}
.slider .slider-parent .images-list:nth-of-type(2) {
    background-image: url("<?php echo htmlentities($row['image2']);?>")
}
.slider .buttom-circles {
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    bottom: 10px
}
.slider .buttom-circles .buttom-circles-list {
    display: inline-block
}
.slider .buttom-circles .buttom-circles-list:hover .fa:before, .slider .buttom-circles .buttom-circles-list.slider-active .fa:before {
    content: "f111";
}
.slider > .fa {
    position: absolute;
    top: 45%
}
.slider > .fa:first-of-type { right: 5px}
.slider > .fa:last-of-type { left: 5px}
.slider .fa {
    text-shadow: 5px 5px 5px #555;
    cursor: pointer
}
 
@media(min-width: 100px) and (max-width: 767px) {
    .slider > .fa { font-size: 25px }
    .slider .buttom-circles .buttom-circles-list { visibility: hidden }
}
@media(min-width: 768px) and (max-width: 991px) { 
    .slider > .fa { font-size: 50px }
    .slider .buttom-circles .buttom-circles-list { visibility: hidden }
}
@media(min-width: 992px) and (max-width: 1199px) { 
    .slider > .fa { font-size: 75px }
    .slider .buttom-circles .buttom-circles-list { font-size: 17px }
}
@media(min-width: 1200px) { 
    .slider > .fa { font-size: 100px }
    .slider .buttom-circles .buttom-circles-list { font-size: 25px }
}
<?php }?>
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
 
<div class="tele">
  <div class="main">
    <div class="slider">
      <ul class="slider-parent">
        <li class="images-list" data-slider="1"></li>
        <li class="images-list" data-slider="2"></li>
        <li class="images-list" data-slider="3"></li>
      </ul>
      <ol class="buttom-circles">
        <li class="buttom-circles-list slider-active" data-slider="1"><i class="fa fa-circle-thin"></i></li>
        <li class="buttom-circles-list" data-slider="2"><i class="fa fa-circle-thin"></i></li>
        <li class="buttom-circles-list" data-slider="3"></li>
      </ol>
      <i class="fa fa-chevron-right fa-5x"></i>
      <i class="fa fa-chevron-left fa-5x"></i>
    </div>
  </div>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script  src="function.js"></script>
 
</div>


<!-- ========================================== SECTION – END HERO ========================================= -->
<!-- Page content --> 
<?php
$query=$mysqli->query("select * from joinus order by id desc limit 1");
while($row=$query->fetch_array())
{
?>

        <h1 class="w3-center" style="font-weight: bold; font-style: italic; font-family: American Typewriter, serif;">
        TELEGRAM</h1>

        <p  class="w3-large" style= "text-align:center;">
            <span class="value"><?php echo htmlentities($row['description1']);?></span></p>

        <p  class="w3-large" style= "text-align:center;">
            <a href="<?php echo htmlentities($row['telelink']);?>"><span class="value"><img style="width: 50px; height: 50px" src="telegram.png"></span></a></p>

        <h1 class="w3-center" style="font-weight: bold; font-style: italic; font-family: American Typewriter, serif;">
        GOOGLE FORM</h1>

        <p  class="w3-large" style= "text-align:center;">
            <span class="value"><?php echo htmlentities($row['description2']);?></span></p>

        <p  class="w3-large" style= "text-align:center;">
            <a href="<?php echo htmlentities($row['formlink']);?>"><span class="value"><img style="width: 50px; height: 50px" src="form.png"></span></a></p>
      

    <?php }?>

 <br/><br/><br/><br/>

<?php include('includes/brands-slider.php');?>


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
$(function () {
    "use strict";
    
    var slider          = $('.slider'),
        sliderUl        = slider.find('.slider-parent'),
        sliderUlLi      = sliderUl.find('.images-list'),
        sliderOl        = slider.find('.buttom-circles'),
        sliderOlLi      = sliderOl.find('.buttom-circles-list'),
        sliderFaRight   = slider.find('> .fa:first-of-type'),
        sliderFaLeft    = slider.find('> .fa:last-of-type'),
        sliderTime      = 1000,
        sliderWait      = 3000,
        sliderSetInt,
        resumeAndPause;
    
    sliderFaLeft.fadeOut();
    
 
    function resetWH() {
        slider.width(slider.parent().width()).height(slider.parent().width() * 0.5);
        sliderUl.width(slider.width() * sliderUlLi.length).height(slider.height());
        sliderUlLi.width(slider.width()).height(slider.height());
    }
    resetWH();
 
    function runSlider() {
        if (sliderOlLi.hasClass('slider-active')) {
            sliderUl.animate({
                marginLeft: -slider.width() * ($('.slider-active').data('slider') - 1)
            }, sliderTime);
        }
        if ($('.slider-active').is(':first-of-type')) {
            sliderFaLeft.fadeOut();
        } else {
            sliderFaLeft.fadeIn();
        }
        if ($('.slider-active').next().is(':last-of-type')) {
            sliderFaRight.fadeOut();
        } else {
            sliderFaRight.fadeIn();
        }
    }
 
    function runRight() {
        slider.each(function () {
            $('.slider-active').next().addClass('slider-active').siblings().removeClass('slider-active');
            runSlider();
        });
    }
 
    function runLeft() {
        slider.each(function () {
            $('.slider-active').prev().addClass('slider-active').siblings().removeClass('slider-active');
            runSlider();
        });
    }
 
    sliderSetInt = function autoRunSlider() {
        if ($('.slider-active').next().is(':last-of-type')) {
            sliderUl.animate({
                marginLeft: -sliderUlLi.width() * $('.slider-active').data('slider')
            }, sliderTime, function () {
                sliderUl.css('margin-left', 0);
                sliderOlLi.first().addClass('slider-active').siblings().removeClass('slider-active');
            });
        } else {
            runRight();
        }
    };
    
    resumeAndPause = setInterval(sliderSetInt, sliderWait);
    
 
    $(window).on('resize', function () {
        resetWH();
    });
    
 
    slider.each(function () {
        sliderOlLi.click(function () {
            $(this).addClass('slider-active').siblings().removeClass('slider-active');
            runSlider();
        });
    });
    
    sliderFaRight.on('click', function () {
        runRight();
    });
    sliderFaLeft.on('click', function () {
        runLeft();
    });
    
    slider.find('.fa').hover(function () {
        clearInterval(resumeAndPause);
    }, function () {
        resumeAndPause = setInterval(sliderSetInt, sliderWait);
    });
});
</script>
    

</body>
</html>