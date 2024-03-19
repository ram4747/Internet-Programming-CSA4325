<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="quiz";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  
echo 'Connected successfully<br/>';  

$stmt = $conn->prepare("INSERT INTO user VALUES(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sissisiss", $n, $r,$d,$p,$db,$e,$ph,$g,$c);
$n=$_POST["name"];
$r=$_POST["registernumber"];
$d=$_POST["department"];
$p=$_POST["pass"];
$db=$_POST["dob"];
$e=$_POST["email"];
$ph=$_POST["phoneno"];
$g=$_POST["gender"];
$c=$_POST["city"];

$stmt->execute();
 echo "Record inserted successfully";  
$stmt->close();
$conn->close();
header("refresh:3; url=Firstpage.html");
?> 
