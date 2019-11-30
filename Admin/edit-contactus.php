
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$lid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$position=$_POST['position'];
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$query=$mysqli->query("select name from contactus where id='lid'");
	
$sql=$mysqli->query("update contactus set position='$position',name='$name',contact='$contact',email='$email' where id='$lid' ");
$_SESSION['msg']="Product Updated Successfully !!";
echo"<script>document.location='contactus.php';</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Insert Product</title>
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
								<h3>Update Our Location</h3>
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
$query=$mysqli->query("select * from contactus where id='$lid'");
$cnt=1;
while($row=$query->fetch_array())
{
?>

<div class="control-group">
<label class="control-label" for="basicinput">position</label>
<div class="controls">
<input type="text"    name="position" value="<?php echo htmlentities($row['position']);?>" class="span8 tip" required >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Full Nameame</label>
<div class="controls">
<input type="text"    name="name" value="<?php echo htmlentities($row['name']);?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Contact Number</label>
<div class="controls">
<input type="text"    name="contact" value="<?php echo htmlentities($row['contact']);?>"  class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email Address</label>
<div class="controls">
<input type="text"    name="email" value="<?php echo htmlentities($row['email']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Contact Image</label>
<div class="controls">
<img src="contact/<?php echo htmlentities($row['name']);?>/<?php echo htmlentities($row['image1']);?>" width="200" height="100"> <a href="change-image-contact.php?id=<?php echo $row['id'];?>">Change Image</a>
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