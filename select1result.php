<input type="button" value="back" onclick="window.location.href='select1.php'"/>
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
$score=0;
$score2=0;
$classification=$classification1='';
$category=$category1='';
$publishtime=$publishtime1='';
$publishtime2=$publishtime3='';
$length=$length1='';
$length2=$length3='';
if(empty($_POST["score"])){
    $score=11;
} else{
    
    $score=$_POST["score"];
    $score=floatval($score);
}
if(empty($_POST["score2"])){
    $score2=11;
} else{
    
    $score2=$_POST["score2"];
    $score2=floatval($score2);
}
if(empty($_POST["classification"])){
    $classification1=11;
} else{
    
    $classification1=0;
    $classification=$_POST["classification"];
}
if(empty($_POST["category"])){
    $category1=11;
} else{
    
    $category1=0;
    $category=$_POST["category"];
    
}
if(empty($_POST["publishtime"])){
    $publishtime1=11;
} else{
    
    $publishtime1=0;
    $publishtime=$_POST["publishtime"];
    
}
if(empty($_POST["publishtime2"])){
    $publishtime3=11;
} else{
    
    $publishtime3=0;
    $publishtime2=$_POST["publishtime2"];
    
}
if(empty($_POST["length"])){
    $length1=11;
} else{
    
    $length1=0;
    $length=$_POST["length"];
    
}
if(empty($_POST["length2"])){
    $length3=11;
} else{
    
    $length3=0;
    $length2=$_POST["length2"];
    
}


$sql = "select *
from movietop1000 
where title like '%$_POST[title]%'
and movietop1000.rating >= case
                            when 10>$score
                                then $score
                            else movietop1000.rating
                            end
                            
and movietop1000.rating <= case
                            when 10>$score2
                                then $score2
                            else movietop1000.rating
                            end
                            
and movietop1000.classification =       case
                            when 10>$classification1
                                then '$classification'
                            else movietop1000.classification
                            end
                            
and movietop1000.category       =       case
                            when 10>$category1
                                then '$category'
                            else movietop1000.category
                            end
and movietop1000.publishtime       >=    case
                            when 10>$publishtime1
                                then '$publishtime'
                            else movietop1000.publishtime
                            end

and movietop1000.publishtime       <=    case
                            when 10>$publishtime3
                                then '$publishtime2'
                            else movietop1000.publishtime
                            end
                            
and movietop1000.length       >=    case
                            when 10>$length1
                                then '$length'
                            else movietop1000.length
                            end
                            
and movietop1000.length       <=    case
                            when 10>$length3
                                then '$length2'
                            else movietop1000.length
                            end





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