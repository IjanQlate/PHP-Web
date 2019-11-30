
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$subcat=$_POST['subcategory'];
	$subcat2=$_POST['subcategory2'];
	$id=intval($_GET['id']);
$sql=$mysqli->query("update subcat2 set categoryid='$category',subcategory='$subcat',subcat2='$subcat2',updationDate='$currentTime' where id='$id'");
$_SESSION['msg']="Sub Category 2 Updated !!";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Edit SubCategory</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
								<h3>Edit SubCategory 2</h3>
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

			<form class="form-horizontal row-fluid" name="Category" method="post" >
<?php
$id=intval($_GET['id']);
$query=$mysqli->query("select category.id,category.categoryName,subcategory.id,subcategory.subcategory,subcat2.subcat2 from subcat2 join category on category.id=subcat2.categoryid join subcategory on subcategory.id=subcat2.subcategoryid where subcat2.id='$id'");
while($row=$query->fetch_array())
{
?>		

<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" required>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($catname=$row['categoryName']);?></option>
<?php $ret=$mysqli->query("select * from category");
while($result=$ret->fetch_array())
{
	$cat=$result['categoryName'];
if($catname=$cat)
{
	continue;
}
else{
?>
<option value="<?php echo $result['id'];?>"><?php echo $result['categoryName'];?></option>
<?php } }?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Sub Category 1</label>
<div class="controls">
<select name="subcategory" class="span8 tip" required>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($catname=$row['subcategory']);?></option>
<?php $ret=$mysqli->query("select * from subcategory");
while($result=$ret->fetch_array())
{
	$cat=$result['subcategory'];
if($catname=$cat)
{
	continue;
}
else{
?>
<option value="<?php echo $result['id'];?>"><?php echo $result['subcategory'];?></option>
<?php } }?>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">SubCategory 2 Name</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="subcategory2" value="<?php echo  htmlentities($row['subcat2']);?>" class="span8 tip" required>
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