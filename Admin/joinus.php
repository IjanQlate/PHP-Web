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
	$assign=$_POST['assign'];
	$telelink=$_POST['telelink'];
	$description1=$_POST['description1'];
	$formlink=$_POST['formlink'];
	$description2=$_POST['description2'];
	$image1=$_FILES["image1"]["name"];
	$image2=$_FILES["image2"]["name"];
	$dir="img/$assign";
	mkdir($dir);
	move_uploaded_file($_FILES["image1"]["tmp_name"],"img/$assign/".$_FILES["image1"]["name"]);
	move_uploaded_file($_FILES["image2"]["tmp_name"],"img/$assign/".$_FILES["image2"]["name"]);
$sql=$mysqli->query("insert into joinus(assign,telelink,description1,image1,formlink,description2,image2) values('$assign','$telelink','$description1','$image1','$formlink','$description2','$image2')");
$_SESSION['msg']="About Us Updated Successfully !!";
	echo"<script>document.location='joinus.php';</script>";
}

if(isset($_GET['del']))
		  {
		          $mysqli->query("delete from joinus where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Join us deleted !!";
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
									<strong>Oh snap!</strong><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
<div class="control-group">
<label class="control-label" for="basicinput">Name for image file</label>
<div class="controls">
<input type="text"    name="assign"  placeholder="Enter name for image file" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Telegram Link</label>
<div class="controls">
<input type="text"    name="telelink"  placeholder="Enter telegram link" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Description for Telegram</label>
<div class="controls">
<input type="text"    name="description1"  placeholder="Enter Description for Telegram" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Google Form Link</label>
<div class="controls">
<input type="text"    name="formlink"  placeholder="Enter google form link" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Description for Google Form</label>
<div class="controls">
<input type="text"    name="description2"  placeholder="Enter description for google form" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">First Image</label>
<div class="controls">
<input type="file" name="image1" id="productimage1" value="" class="span8 tip" required>
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
												<button type="submit" name="submit" class="btn">SUBMIT</button>
											</div>
										</div>
									</form>
							</div>
						</div>

					</div><!--/.content-->
						<div class="module">
							<div class="module-head">
								<h3>Manage Join Us</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Telegram Link</th>
											<th>Tele Description</th>
											<th>Google Form Link</th>
											<th>Form Description</th>
											<th>First Image</th>
											<th>Second Image</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=$mysqli->query("select * from joinus");
$cnt=1;
while($row=$query->fetch_array())
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['telelink']);?></td>
											<td><?php echo htmlentities($row['description1']);?></td>
											<td><?php echo htmlentities($row['formlink']);?></td>
											<td> <?php echo htmlentities($row['description2']);?></td>
											<td><?php echo htmlentities($row['image1']);?></td>
											<td><?php echo htmlentities($row['image2']);?></td>
											<td>
											<a href="edit-joinus.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="joinus.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div><!-- module-body -->
						</div><!-- module -->
			
					<?php } ?>



	
					

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