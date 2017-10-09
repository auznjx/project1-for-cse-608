<input type="button" value="back" onclick="window.location.href='update6.php'"/>
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

$sql = "UPDATE writerinmovie
SET title='$_POST[title2]',writer='$_POST[writer2]'
WHERE title='$_POST[title1]'
and writer='$_POST[writer1]'
"


;

$sql2="Update movietop1000
SET title='$_POST[title2]'
where title='$_POST[title1]'
";
$sql3="Update starsinmovie
SET title='$_POST[title2]'
where title='$_POST[title1]'
";
$sql4="Update directorinmovie
SET title='$_POST[title2]'
where title='$_POST[title1]'
";
$sql5="Update writer
SET writername='$_POST[writer2]'
where writername='$_POST[writer1]'
";

mysqli_query($conn, $sql2);
mysqli_query($conn, $sql3);
mysqli_query($conn, $sql4);
mysqli_query($conn, $sql5);

if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
 
 ?>