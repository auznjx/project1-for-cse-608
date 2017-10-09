<input type="button" value="back" onclick="window.location.href='delete.php'"/>
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

if(!empty($_POST["title"])){

$sql = "delete 
from movietop1000
where title='$_POST[title]'
"
;
$sql2 = "delete 
from starsinmovie
where title='$_POST[title]'
"
;
$sql3 = "delete 
from directorinmovie
where title='$_POST[title]'
"
;
$sql4 = "delete 
from writerinmovie
where title='$_POST[title]'
"
;
$sql5 = "delete 
from star
where starname in (
select star1
from starsinmovie
where title='$_POST[title]'
)
"
;
$sql6 = "delete 
from star
where starname in (
select star2
from starsinmovie
where title='$_POST[title]'
)
"
;
$sql7 = "delete 
from director
where directorname in (
select director
from directorinmovie
where title='$_POST[title]'
)
"
;
$sql8 = "delete 
from writer
where writername in (
select writer
from writerinmovie
where title='$_POST[title]'
)
"
;
mysqli_query($conn, $sql8);
mysqli_query($conn, $sql7);
mysqli_query($conn, $sql6);
mysqli_query($conn, $sql5);
mysqli_query($conn, $sql4);
mysqli_query($conn, $sql3);
mysqli_query($conn, $sql2);
mysqli_query($conn, $sql);

}







if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo "record delete successfully";
} else {
    echo "Error delete record: " . $conn->error;
}
$conn->close();
 
 ?>