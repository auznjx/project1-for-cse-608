<input type="button" value="back" onclick="window.location.href='update2.php'"/>
<input type="button" value="back to the home page" onclick="window.location.href='welcome.php'"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/> 

<?php
$servername = "database2.cs.tamu.edu";
$username = "auzn";
$password = "1Oo2336,";
$dbname = "auzn-project1";


header("Content-type: text/html; charset=utf8");
	




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_query($conn, 'set names utf8');

$sql = "UPDATE starsinmovie
SET title='$_POST[title2]',star1='$_POST[star3]',star2='$_POST[star4]'
WHERE title='$_POST[title1]'
and star1='$_POST[star1]'
and star2='$_POST[star2]'
"


;

$sql2="Update movietop1000
SET title='$_POST[title2]'
where title='$_POST[title1]'
";
$sql3="Update directorinmovie
SET title='$_POST[title2]'
where title='$_POST[title1]'
";
$sql4="Update writerinmovie
SET title='$_POST[title2]'
where title='$_POST[title1]'
";
$sql5="Update star
SET starname='$_POST[star3]'
where starname='$_POST[star1]'
";
$sql6="Update star
SET starname='$_POST[star4]'
where starname='$_POST[star2]'
";
mysqli_query($conn, $sql2);
mysqli_query($conn, $sql3);
mysqli_query($conn, $sql4);
mysqli_query($conn, $sql5);
mysqli_query($conn, $sql6);
if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
 
 ?>