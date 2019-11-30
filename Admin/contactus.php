<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
	$position=$_POST['position'];
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$image1=$_FILES["image1"]["name"];
	$dir="contact/$name";
	mkdir($dir);// directory creation for product images
	move_uploaded_file($_FILES["image1"]["tmp_name"],"contact/$name/".$_FILES["image1"]["name"]);
	$sql=$mysqli->query("insert into contactus (position,name,contact,email,image1) values('$position','$name','$contact','$email','$image1')");
	$_SESSION['msg']="Contact Updated Successfully !!";
	echo"<script>document.location='contactus.php';</script>";
}
if(isset($_POST['submit1']))
{
	$link=$_POST['link'];
	$companyaddress=$_POST['companyaddress'];
	$officephone=$_POST['officephone'];
	$companyemail=$_POST['companyemail'];
	$sql=$mysqli->query("insert into ourlocation (link,companyaddress,officephone,companyemail) values('$link','$companyaddress','$officephone','$companyemail')");
	$_SESSION['msg']="Location Updated Successfully !!";
	echo"<script>document.location='contactus.php';</script>";
}

if(isset($_POST['submit2']))
{
	$assign=$_POST['assign'];
	$description1=$_POST['description1'];
	$image1=$_FILES["image1"]["name"];
	$description2=$_POST['description2'];
	$image2=$_FILES["image2"]["name"];
	$dir="img/$assign";
	mkdir($dir);
	move_uploaded_file($_FILES["image1"]["tmp_name"],"img/$assign/".$_FILES["image1"]["name"]);
	move_uploaded_file($_FILES["image2"]["tmp_name"],"img/$assign/".$_FILES["image2"]["name"]);
$sql=$mysqli->query("insert into aboutus(assign,description1,image1,description2,image2) values('$assign','$description1','$image1','$description2','$image2')");
$_SESSION['msg']="About Us Updated Successfully !!";
	echo"<script>document.location='contactus.php';</script>";
}

if(isset($_GET['del']))
		  {
		          $mysqli->query("delete from contactus where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Contact deleted !!";
		  }

if(isset($_GET['del1']))
		  {
		          $mysqli->query("delete from ourlocation where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Location deleted !!";
		  }
}
if(isset($_GET['del2']))
		  {
		          $mysqli->query("delete from aboutus where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="About Us deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Contact US</title>
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
								<h3>UPDATE  About Us</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit2']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del2']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">


<div class="control-group">
<label class="control-label" for="basicinput">Remarks</label>
<div class="controls">
<input type="text"    name="assign"  placeholder="Enter code of about us" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">First Description</label>
<div class="controls">
<input type="text"    name="description1"  placeholder="Enter first Description" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">First Image</label>
<div class="controls">
<input type="file" name="image1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Second Description</label>
<div class="controls">
<input type="text"    name="description2"  placeholder="Enter second description" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Second Image</label>
<div class="controls">
<input type="file" name="image2" class="span8 tip" required>
</div>
</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit2" class="btn">UPDATE</button>
											</div>
										</div>
									</form>
							</div>
						</div>

					</div><!--/.content-->
						<div class="module">
							<div class="module-head">
								<h3>Manage Contact</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>First Description</th>
											<th>First Image</th>
											<th>Second Description</th>
											<th>Second Image</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=$mysqli->query("select * from aboutus");
$cnt=1;
while($row=$query->fetch_array())
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['description1']);?></td>
											<td><?php echo htmlentities($row['image1']);?></td>
											<td> <?php echo htmlentities($row['description2']);?></td>
											<td><?php echo htmlentities($row['image2']);?></td>
											<td>
											<a href="edit-aboutus.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="contactus.php?id=<?php echo $row['id']?>&del2=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div><!-- module-body -->
						</div><!-- module -->
			
					<div class="content"> <!-- location -->

						<div class="module">
							<div class="module-head">
								<h3>UPDATE Our Location</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit1']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del1']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<div class="control-group">
<label class="control-label" for="basicinput">Google Maps Link</label>
<div class="controls">
<input type="text"    name="link"  placeholder="Enter link from google maps" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Company Address</label>
<div class="controls">
<input type="text"    name="companyaddress"  placeholder="Enter Company Address" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Office Phone</label>
<div class="controls">
<input type="text"    name="officephone"  placeholder="Enter Office Number" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Company Email</label>
<div class="controls">
<input type="text"    name="companyemail"  placeholder="Enter Company Email" class="span8 tip" required>
</div>
</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit1" class="btn">UPDATE</button>
											</div>
										</div>
									</form>
							</div>
						</div>

					</div><!--/.content-->
	<div class="module">
							<div class="module-head">
								<h3>Manage Contact</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Google Maps Link</th>
											<th>Company Address</th>
											<th>Office Number</th>
											<th>Company Email Address</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=$mysqli->query("select * from ourlocation");
$cnt=1;
while($row=$query->fetch_array())
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['link']);?></td>
											<td><?php echo htmlentities($row['companyaddress']);?></td>
											<td> <?php echo htmlentities($row['officephone']);?></td>
											<td><?php echo htmlentities($row['companyemail']);?></td>
											<td>
											<a href="edit-location.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="contactus.php?id=<?php echo $row['id']?>&del1=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div><!-- module-body -->
						</div><!-- module -->



	
					<div class="content">

						<div class="module">
						<div class="module-head">
								<h3>UPDATE  Contact Name</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">




<div class="control-group">
<label class="control-label" for="basicinput">Position</label>
<div class="controls">
<input type="text"    name="position"  placeholder="Enter position" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Name</label>
<div class="controls">
<input type="text"    name="name"  placeholder="Enter your name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Contact Number</label>
<div class="controls">
<input type="text"    name="contact"  placeholder="Enter contact number" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email Address</label>
<div class="controls">
<input type="text"    name="email"  placeholder="Enter email address" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Image</label>
<div class="controls">
<input type="file" name="image1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">UPDATE</button>
											</div>
										</div>
									</form>
							</div>
						</div>

					</div><!--/.content-->
						<div class="module">
							<div class="module-head">
								<h3>Manage Contact</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Position</th>
											<th>Name</th>
											<th>Contact Number</th>
											<th>Email Address</th>
											<th>Image</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=$mysqli->query("select * from contactus");
$cnt=1;
while($row=$query->fetch_array())
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['position']);?></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td> <?php echo htmlentities($row['contact']);?></td>
											<td><?php echo htmlentities($row['email']);?></td>
											<td><?php echo htmlentities($row['image1']);?></td>
											<td>
											<a href="edit-contactus.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="contactus.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div><!-- module-body -->
						</div><!-- module -->
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