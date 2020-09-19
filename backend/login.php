<?php
$servername = "sql12.freesqldatabase.com";
$database = "sql12365251";
$username = "sql12365251";
$password = "2amQBQELaD";
$conn= mysqli_connect($servername, $username, $password, $database);
	if(!$conn)
	{
		echo 'not connected to server';
	}
	if(!mysqli_select_db($conn,'sql12365251'))
	{
		echo 'Database not selected';
	}
	
 $name = "";

if(isset($_POST['name'])){
    $name = $_POST['name'];
}
 $lname = "";
if(isset($_POST['lname'])){
    $lname = $_POST['lname'];
 }
 //$name = stripcslashes(name);
 //$lname = stripcslashes(lname);
 //$username = mysql_real_escape_string($username);
 //$password = mysql_real_escape_string($password);

$result = mysqli_query($conn,"select * from Students where name = '$name' and lastname = '$lname'")
  or die('Failed to query database');
 $row = mysqli_fetch_array($result);
 if ( $row['name'] == $name && $row['lastName'] == $lname  ) {
echo '<center><p>Login success! Welcome '.$row['name'];
 
 } else {
     echo '<center><p>Failed to login!<br>
	 <button><a href="login.html">Return</button>
	 </p></center>';
}

?>