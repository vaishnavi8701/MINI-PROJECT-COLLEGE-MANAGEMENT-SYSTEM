<html><head><style>
div {
  width: 350px;
  height:300px;
  padding: 20px;
  border : 7px  solid white;
  margin-top: 0.5cm;
  background-color:white;
 
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body  {
  background-image: url("students-background.jpg");
  background-color: white;
}</style></head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);

$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);

$Password= mysqli_real_escape_string($link, $_REQUEST['Password']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 $Year = mysqli_real_escape_string($link, $_REQUEST['Year']);
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name,Gender ,Password ,email,Year) VALUES ('$first_name', '$last_name','$Gender','$Password','$email','$Year')";
if(mysqli_query($link, $sql)){
	echo "<br><b><center><font size=12px><u>STUDENT DETAILS</u></font></center></b><br><br><br>";
    echo "<center><div><table><tr><td><center>FIRST NAME :</td><td>". $first_name."</td></tr></center><br>";
	echo "<tr><td><center>LAST NAME :</td><td>". $last_name."</td></tr></center><br>";
	echo "<tr><td><center>GENDER :</td><td>". $Gender."</td></tr></center><br>";
	echo "<tr><td><center>EMAIL :</td><td> ". $email."</td></tr></center><br>";
	echo "<tr><td><center>YEAR :</td><td>". $Year."</td></center></tr></table></div></center><br>";
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>