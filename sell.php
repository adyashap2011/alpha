<?php
$servername = "remotemysql.com";
$database = "g6DbtocErH";
$username = "g6DbtocErH";
$password = "GJVUCglOMR";
$conn= mysqli_connect($servername, $username, $password, $database);
	if(!$conn)
	{
		echo 'not connected to server';
	}
	if(!mysqli_select_db($conn,'g6DbtocErH'))
	{
		echo 'Database not selected';
	}
	$Food=$_POST['food'];
	$Loc=$_POST['location'];
    $ph=$_POST['Phone'];
	$Price=$_POST['Price'];
/* $name = "";

if(isset($_POST['uname'])){
    $name = $_POST['uname'];
}
 $psw = "";
if(isset($_POST['psw'])){
    $lname = $_POST['psw'];
 }*/
 //$name = stripcslashes(name);
 //$lname = stripcslashes(lname);
 //$username = mysql_real_escape_string($username);
 //$password = mysql_real_escape_string($password);

$sql = "INSERT INTO SELL (Food,Location,Phone,Price) VALUES ('$Food', '$Loc', '$ph' ,'$Price')";
if (mysqli_query($conn, $sql)) {
    header("Location:sell1.php");
exit;
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>