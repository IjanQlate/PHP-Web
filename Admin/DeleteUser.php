
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['AdminId'];
	// Establish Connection with MYSQL
	$con = new mysqli("localhost","root");
	// Select Database
	$con->select_db("shopping");
	// Specify the query to Insert Record
	$sql = "delete from Admin_Master where AdminId='".$Id."'";
	// execute query
	$con->query($sql);
	// Close The Connection
	$con->close();
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';

?>
</body>
</html>
