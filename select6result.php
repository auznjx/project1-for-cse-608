<input type="button" value="back" onclick="window.location.href='select6.php'"/>
<input type="button" value="back to the home page" onclick="window.location.href='welcome.php'"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/> 
<?php
$servername = "database2.cs.tamu.edu";
$username = "auzn";
$password = "1Oo2336,";
$dbname = "auzn-project1";

header('Content-type: text/html; charset=UTF8');
	




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$star=$star1='';
$star2=$star3='';

mysqli_query($conn,"set names utf8");




$sql = "select *
from movietop1000
where movietop1000.title in (
select writerinmovie.title
from writerinmovie
where
 writer like '%$_POST[writer]%'
 )
 
                            



";



$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<table border="1" width="600" align="center">';
    echo '<caption><h1>Results</h1></caption>';
    echo '<tr bgcolor="#dddddd">';
    echo '<th>title</th><th>rating</th><th>classification</th><th>categoty</th><th>publishtime</th><th>length</th>';
    echo '</tr>';
    }
  
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'. $row["title"].'</td>'.  '<td>'. $row["rating"].'</td>'. '<td>'. $row["classification"].'</td>'. '<td>'. $row["category"].'</td>'. '<td>'. $row["publishtime"].'</td>'. '<td>'. $row["length"].'</td>';
    }
    echo '</table>';
} else {
    echo '<br>';
    echo "0 results";
}
$conn->close();
 
 ?>
 
 
 
 
 
 