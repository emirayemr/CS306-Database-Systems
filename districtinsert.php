<!DOCTYPE html>
<html>
<head>
	<title>District Insert</title>
</head>

<link rel="stylesheet" href="projstyle.css">

<?php

include "config.php";

$id =  $_POST['id'];
$name =  $_POST['name'];
$voters =  $_POST['voters'];

$sql_statement = "INSERT INTO districts(did,dname,dvoters)
					VALUES ('$id','$name','$voters')";

$result = mysqli_query($db, $sql_statement);

?>

<body>

<p> District Insertion </p>

<form action="districtinsert.php" method="POST">
	<input type="text" id="id" name="id" placeholder="ID"><br>
	<input type="text" id="name" name="name" placeholder="Name"><br>
    <input type="text" id="voters" name="voters" placeholder="Total Voters"><br>

	<button class="button">SEND</button>
</form>

<br><br>
<?php echo "Inserted: " . $name . " with id =" . $id . " to districts. <br>"; ?>

<br>
<a href="mainpage.html">return to main page</a><br>
<a href="adminpanel.html">return to admin panel</a><br>

</body>

</html>