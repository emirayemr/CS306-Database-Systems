<!DOCTYPE html>
<html>
<head>
	<title>Candidate Delete</title>
</head>

<link rel="stylesheet" href="projstyle.css">

<?php

include "config.php";

$id =  $_POST['id'];

$sql_statement = "DELETE FROM parties WHERE pid='$id' ";

$result = mysqli_query($db, $sql_statement);

echo "Deleting " . $id . " from candidates<br>";

?>

<body>
<br>
<a href="mainpage.html">return to main page</a><br>
<a href="adminpanel.html">return to admin panel</a><br>
</body>