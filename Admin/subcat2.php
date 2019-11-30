

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
	$category=$_POST['category']; //$category is variable, category is name for select (refer line 72)
	$subcategory=$_POST['subcategory']; //$subcategory is variable, subcategory is name for select (refer line 94)
	$subcategory2 = $_POST['subcategory2']; //$subcategory2 is variable, subcategory2 is name for input (refer line 110)
$sql=$mysqli->query("insert into subcat2(categoryid,subcategoryid,subcat2) values('$category','$subcategory','$subcategory2')"); //Query insert ada tukar sikit, ikut kau la
$_SESSION['msg']="SubCategory Created !!";


}

if(isset($_GET['del']))
		  {
		          $mysqli->query("delete from subcat2 where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="SubCat2 deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| SubCategory</title>
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
								<h3>Sub Category 2</h3>
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

			<form class="form-horizontal row-fluid" name="subcat2" method="post" >

<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" required>
<option value="">Select Category</option> 
<?php $query=$mysqli->query("select * from category");
while($row=$query->fetch_array())
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Sub Category 1</label>
<div class="controls">
<select name="subcategory" class="span8 tip" required>
<option value="">Select Sub Category 1</option> 
<?php $query=$mysqli->query("select * from subcategory");
while($row=$query->fetch_array())
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['subcategory'];?></option>
<?php } ?>
</select>
</div>
</div>

									
<div class="control-group">
<label class="control-label" for="basicinput">Sub Category 2</label>
<div class="controls">
<input type="text" placeholder="Enter SubCategory 2 Name"  name="subcategory2" class="span8 tip" required>
</div>
</div>



	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Create</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	<div class="module">
							<div class="module-head">
								<h3>Sub Category 2</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Category</th>
											<th>Sub Category 1</th>
											<th>Sub Category 2</th>
											<th>Creation date</th>
											<th>Last Updated</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
	
<?php $query=$mysqli->query("select subcat2.id,category.categoryName,subcategory.subcategory,subcat2.subcat2,subcat2.creationDate,subcat2.updationDate from subcat2 join category on category.id=subcat2.categoryid join subcategory on subcategory.id=subcat2.subcategoryid ");
$cnt=1;
while($row=$query->fetch_array())
{
?>								
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['categoryName']);?></td>
											<td><?php echo htmlentities($row['subcategory']);?></td>
											<td><?php echo htmlentities($row['subcat2']);?></td>
											<td> <?php echo htmlentities($row['creationDate']);?></td>
											<td><?php echo htmlentities($row['updationDate']);?></td>
											<td>
											<a href="edit-subcategory2.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="subcat2.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
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