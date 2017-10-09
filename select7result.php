<input type="button" value="back" onclick="window.location.href='select5.php'"/>
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




mysqli_query($conn,"set names utf8");



$sql = "select *
from  writerinmovie
where 


 title like '%$_POST[title]%'

 

 
                            



";



$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<table border="1" width="600" align="center">';
    echo '<caption><h1>Results</h1></caption>';
    echo '<tr bgcolor="#dddddd">';
    echo '<th>title</th><th>writer</th>';
    echo '</tr>';
    }
  
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo  '<td>'. $row["title"].'<td>'. $row["writer"].'</td>'. '</td>';
    }
    echo '</table>';
} else {
    echo '<br>';
    echo "0 results";
}
$conn->close();
 
 ?>
 
 
To get some detail about the writer <br/> <br/>

<meta http-equiv="content-type" content="text/html;charset=utf-8"/> 
<form action="select7d.php" method="post">
writerrname         : <input type="text" name="name"/><br/>

<input type="submit" value="submit"/><br/>

</form>
 
 