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
	
 $name = "";

if(isset($_POST['uname'])){
    $name = $_POST['uname'];
}
 $psw = "";
if(isset($_POST['psw'])){
    $psw = $_POST['psw'];
 }
 //$name = stripcslashes(name);
 //$lname = stripcslashes(lname);
 //$username = mysql_real_escape_string($username);
 //$password = mysql_real_escape_string($password);

$result = mysqli_query($conn,"SELECT * FROM Hoemato where name = '$name' and psw = '$psw'")
  or die('Failed to query database');
 $row = mysqli_fetch_array($result);
 if ( $row['name'] == $name && $row['psw'] == $psw  ) {
echo '<center><p>Login success! Welcome '.$row['name'];
echo '<center><p>
	 <button><a href="index.html">Continue </button>
	 </p></center>';
 
 } else {
     echo '<center><p>Failed to login!<br>
	 <button><a href="login.html">Return</button>
	 </p></center>';
}

?>