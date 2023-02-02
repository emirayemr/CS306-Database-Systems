<!DOCTYPE html>
<html>
<head>
	<title>Candidate Insert</title>
</head>

<link rel="stylesheet" href="projstyle.css">

<?php

include "config.php";

$cid =  $_POST['id'];
$pid =  $_POST['pid'];


$sql_statement = "INSERT INTO nom_by(cid,pid)
						VALUES ('$cid','$pid')";

$result = mysqli_query($db, $sql_statement);

?>

<body>

<p> Candidate Insertion </p>

<form action="candidateinsert.php" method="POST">
	<input type="text" id="id" name="id" placeholder="ID"><br>
	<input type="text" id="name" name="name" placeholder="Name"><br>
    <input type="text" id="votes" name="votes" placeholder="Votes"><br>
	<input type="text" id="rate" name="rate" placeholder="Rate"><br>
	<button class="button">SEND</button>
</form>
<br>
<form action="nom_byinsert.php" method="POST">
	<input type="text" id="id" name="id" placeholder="Candidate ID"><br>
	<input type="text" id="pid" name="pid" placeholder="Party ID"><br>
	<button class="button">SEND</button>
</form>

<br><br>
<?php echo "Inserted to nom_by. <br>"; ?>

<br>
<a href="mainpage.html">return to main page</a><br>
<a href="adminpanel.html">return to admin panel</a><br>

</body>

</html>