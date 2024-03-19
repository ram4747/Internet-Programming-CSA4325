<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mark";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  
echo 'Connected successfully<br/>';  

$stmt = $conn->prepare("INSERT INTO score VALUES(?,?,?)");
$stmt->bind_param("sii",$n,$r,$s);
$n=$_POST["name"];
$r=$_POST["registernumber"];
$s=$_POST["score"];
$stmt->execute();
 echo "Record inserted successfully";  
$stmt->close();
$conn->close();
header("refresh:3; url=Firstpage.html");
?> 
