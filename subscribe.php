<html><head><style>
div {
  width: 500px;
  height:150px;
  padding: 20px;
  border : 7px  solid white;
  margin-top:4cm;
  
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
  background-image: url("uni-image.jpg");
  background-color: white;
}</style></head>
<body>
<?php
$link = mysqli_connect("localhost", "root", "", "demo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email= mysqli_real_escape_string($link, $_REQUEST['email']);
$sql = "INSERT INTO subscribers (name, email) VALUES ('$name', '$email')";
if(mysqli_query($link, $sql)){
	echo "<br><br><center><b><Font color=grey size=12px>Hi  ". $name." ,</font></b></center>";
	echo "<center><div><h2><font color='#00964e'><center>Thanks for subscribing.... You will receive the updates of our University by means of your given mail id (<font color=blue>".$email."</font>) soon..<h2></font></center></div></center>";
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
</body>
</html>