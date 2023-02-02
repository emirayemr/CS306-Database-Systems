<!DOCTYPE html>
<html>
<head>
	<title>Izmir</title>
</head>

<link rel="stylesheet" href="projstyle.css">

<body>

<ul>
    <li><a class="home" href="mainpage.html">Main</a></li>
    <li><a href="istanbul.php">Istanbul</a></li> 
    <li><a href="ankara.php">Ankara</a></li>
    <li><a href="izmir.php">Izmir</a></li>
    <li><a href="alldistricts.php">All Districts</a></li>
    <li><a style="background-color:black; color:white;" href="adminentry.html">Admin Panel</a></li>
</ul>
<br><br>

<div align="center">

	<table>

<tr> <th> ID </th> <th> NAME </th> <th>NEW MAYOR</th> <th>WINNER PARTY</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM districts";

$result = mysqli_query($db, $sql_statement);

$sql2 = "SELECT * FROM candidates";

$r2 = mysqli_query($db, $sql2);

$sql3 = "SELECT * FROM nom_by";

$r3 = mysqli_query($db, $sql3);

$sql4 = "SELECT * FROM parties";

$r4 = mysqli_query($db, $sql4);

$pid = 1;

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['did'];
  $name = $row['dname'];
  $voters = $row['dvoters'];
    if ($id >= 3500 ){
        if (3600>$id){
            mysqli_data_seek($r2,0);
            while ($w = mysqli_fetch_assoc($r2)) {
                $cid = $w['cid'];
                $cname = $w['cname'];
                if ($cid-$id == 10000) {

       
                    mysqli_data_seek($r3,0);
                    while ($p = mysqli_fetch_assoc($r3)) {
                        if ($cid == $p['cid']) {
                            $pid = $p['pid'];
                        }       
                        mysqli_data_seek($r4,0);
                        while ($p2 = mysqli_fetch_assoc($r4)) {
                            if ($pid == $p2['pid']) {
                                $pname = $p2['pname'];
                            }
                        }
                    }

                    echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $name . "</th>" . "<th>" . $cname . "</th>" . "<th>"  . $pname . "</th>" . "</tr>";

                }
            }

        }
    }
}

?>

</table>
</div>

</body>
</html>