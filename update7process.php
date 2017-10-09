<input type="button" value="back" onclick="window.location.href='update7.php'"/>
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

$sql = "UPDATE writer
SET writername = '$_POST[name2]',writerborndate = '$_POST[borndate2]' , writerbornplace = '$_POST[bornplace2]'
WHERE writername = '$_POST[name1]'
and  writerborndate = '$_POST[borndate1]' 
and  writerbornplace = '$_POST[bornplace1]'
"


;

if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
 
 ?>