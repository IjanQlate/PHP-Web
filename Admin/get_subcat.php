<?php
include('include/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=$mysqli->query("SELECT * FROM subcategory WHERE categoryid=$id");
?>
<option value="">Select Subcategory</option>
<?php
 while($row=$query->fetch_array())
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['subcategory']); ?></option>
  <?php
 }
}
?>