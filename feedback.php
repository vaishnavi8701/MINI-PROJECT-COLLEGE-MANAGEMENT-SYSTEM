<html>

<head><style>
div {
  width: 500px;
  height:100px;
  padding: 20px;
  border : 7px  solid white;
  margin-top:5cm;
  
  background-color:white;
 
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
$Personid = mysqli_real_escape_string($link, $_REQUEST['Personid']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);

$sql = "INSERT INTO Feedback (Personid, email ,comment) VALUES ('$Personid','$email','$comment')";


if(mysqli_query($link, $sql)){
	
	
	echo "<center><div><center> <h1><b>Your Feedback Is Submitted...</b></h1></center></div><center>";


	
	
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
</body>
</html>