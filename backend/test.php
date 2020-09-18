<?php
$servername = "sql12.freesqldatabase.com";
$database = "sql12365251";
$username = "sql12365251";
$password = "2amQBQELaD";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$name = $_POST['name'];
$last = $_POST['lname'];
$email = $_POST['email'];
$sql = "INSERT INTO Students (name, lastname, email) VALUES ('$name', '$last', '$email')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>