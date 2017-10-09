<input type="button" value="back" onclick="window.location.href='insert.php'"/>
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

$sql = "insert into movietop1000
Values('$_POST[title]','$_POST[score]','$_POST[classification]','$_POST[category]','$_POST[publishtime]','$_POST[length]')
"
;
}

if(!empty($_POST["title"]) and !empty($_POST["directorname"] )){
$sql2="insert into directorinmovie
Values('$_POST[title]','$_POST[directorname]')
";
mysqli_query($conn, $sql2);
}
if(!empty($_POST["title"]) and !empty($_POST["directorname"] )){
$sql3="insert into director
Values('$_POST[directorname]','$_POST[directorborndate]','$_POST[directorbornplace]')
";
mysqli_query($conn, $sql3);
}

if(!empty($_POST["title"]) and (!empty($_POST["star1name"]) or !empty($_POST["star2name"]))){
$sql4="insert into starsinmovie
Values('$_POST[title]','$_POST[star1name]','$_POST[star2name]')
";
mysqli_query($conn, $sql4);
}

if(!empty($_POST["title"]) and !empty($_POST["star1name"] )){
$sql5="insert into star
Values('$_POST[star1name]','$_POST[star1borndate]','$_POST[star1bornplace]')
";
mysqli_query($conn, $sql5);
}

if(!empty($_POST["title"]) and !empty($_POST["star2name"] )){
$sql6="insert into star
Values('$_POST[star2name]','$_POST[star2borndate]','$_POST[star2bornplace]')
";
mysqli_query($conn, $sql6);
}

if(!empty($_POST["title"]) and !empty($_POST["writername"] )){
$sql7="insert into writerinmovie
Values('$_POST[title]','$_POST[writername]')
";
mysqli_query($conn, $sql7);
}
if(!empty($_POST["title"]) and !empty($_POST["writername"] )){
$sql8="insert into writer
Values('$_POST[writername]','$_POST[writerborndate]','$_POST[writerbornplace]')
";
mysqli_query($conn, $sql8);
}






if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo "New record created successfully";
} else {
    echo "Error insert record: " . $conn->error;
}
$conn->close();
 
 ?>