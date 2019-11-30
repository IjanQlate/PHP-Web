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
	$assign=$_POST['assign'];
	$image1=$_FILES["image1"]["name"];
$ret=$mysqli->query("select image1 from aboutus where id='$lid'");
$result=$ret->fetch_row();
//$dir="productimages";
//unlink($dir.'/'.$pimage);


	move_uploaded_file($_FILES["image1"]["tmp_name"],"img/$assign/".$_FILES["image1"]["name"]);
	$sql=$mysqli->query("update  aboutus set image1='$image1' where id='$lid' ");
$_SESSION['msg']="Image Updated Successfully !!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Update Product Image</title>
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
								<h3>Update First Image</h3>
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

$query=$mysqli->query("select assign,image1 from aboutus where id='$lid'");
$cnt=1;
while($row=$query->fetch_array())
{
  


?>


<div class="control-group">
<label class="control-label" for="basicinput">Remarks</label>
<div class="controls">
<input type="text"    name="assign"  readonly value="<?php echo htmlentities($row['assign']);?>" class="span8 tip" readonly>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Current First Image</label>
<div class="controls">
<img src="img/<?php echo htmlentities($row['assign']);?>/<?php echo htmlentities($row['image1']);?>" width="200" height="100"> 
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">New First Image</label>
<div class="controls">
<input type="file" name="image1" id="productimage1" value="" class="span8 tip" required>
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