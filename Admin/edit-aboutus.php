
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$aid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$description1=$_POST['description1'];
	$description2=$_POST['description2'];
	$query=$mysqli->query("select description1 from aboutus where id='aid'");
	
$sql=$mysqli->query("update aboutus set description1='$description1',description2='$description2' where id='$aid' ");
$_SESSION['msg']="About Us Updated Successfully !!";
echo"<script>document.location='contactus.php';</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Edit About Us</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update About Us</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 
$query=$mysqli->query("select * from aboutus where id='$aid'");
$cnt=1;
while($row=$query->fetch_array())
{
?>

<div class="control-group">
<label class="control-label" for="basicinput">First Description</label>
<div class="controls">
<input type="text"    name="description1" value="<?php echo htmlentities($row['description1']);?>" class="span8 tip" required >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">First Image</label>
<div class="controls">
<img src="img/<?php echo htmlentities($row['assign']);?>/<?php echo htmlentities($row['image1']);?>" width="200" height="100"> <a href="change-image-aboutus.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Second Description</label>
<div class="controls">
<input type="text"    name="description2" value="<?php echo htmlentities($row['description2']);?>" class="span8 tip" required >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Second Image</label>
<div class="controls">
<img src="img/<?php echo htmlentities($row['assign']);?>/<?php echo htmlentities($row['image2']);?>" width="200" height="100"> <a href="change-image2-aboutus.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>
<?php } ?>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>