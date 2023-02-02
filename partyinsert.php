<!DOCTYPE html>
<html>
<head>
	<title>Party Insert</title>
</head>

<link rel="stylesheet" href="projstyle.css">

<?php

include "config.php";

$id =  $_POST['id'];
$name =  $_POST['name'];
$votes =  $_POST['votes'];
$rate =  $_POST['rate'];

$sql_statement = "INSERT INTO parties(pid,pname,pvotes,pvrate)
						VALUES ('$id','$name','$votes','$rate')";

$result = mysqli_query($db, $sql_statement);

echo "Inserting " . $name . " with id= " . $id . " to parties. <br>";

?>

<body>
<br>
<a href="mainpage.html">return to main page</a><br>
<a href="adminpanel.html">return to admin panel</a><br>
</body>