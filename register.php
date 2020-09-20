<?php
$servername = "remotemysql.com";
$database = "g6DbtocErH";
$username = "g6DbtocErH";
$password = "GJVUCglOMR";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";
 
$number = $_POST['number'];
$name = $_POST['name'];
$password = $_POST['psw'];
$sql = "INSERT INTO Hoemato (number, name, psw) VALUES ('$number', '$name', '$password')";
if (mysqli_query($conn, $sql)) {
    header("Location:login.html");
    exit;
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>