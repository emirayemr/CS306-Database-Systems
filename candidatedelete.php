<!DOCTYPE html>
<html>
<head>
	<title>Candidate Delete</title>
</head>

<link rel="stylesheet" href="projstyle.css">

<?php

include "config.php";

$id =  $_POST['id'];

$sql_statement = "DELETE FROM candidates WHERE cid='$id' ";

$result = mysqli_query($db, $sql_statement);

?>

<body>

<body>

<p> Candidate Deletion </p>

<form action="candidatedelete.php" method="POST">
	<input type="text" id="id" name="id" placeholder="ID"><br>
		<button class="button">SEND</button>
</form>

<br><br>
<?php echo "Deleting with id = " . $id . " from candidates. <br>"; ?>

<br>
<a href="mainpage.html">return to main page</a><br>
<a href="adminpanel.html">return to admin panel</a><br>

</body>

</html>