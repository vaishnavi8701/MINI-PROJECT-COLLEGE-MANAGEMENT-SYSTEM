<!DOCTYPE html>
<html><head>
<style>
div {
  width: 500px;
  height:500px;
  padding: 20px;
  border : 7px  solid white;
  margin-top:0.2cm;
  
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
}</style>
</head>
<body>
<?php


$link = mysqli_connect("localhost", "root", "", "demo");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$Personid = mysqli_real_escape_string($link, $_REQUEST['Personid']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$sql = "delete FROM persons where email='$email' AND Personid='$Personid'";
if(mysqli_query($link, $sql)){


        echo "<center><div style='width:500px;height:100px;margin-top:5cm;'><h1>Your application is deleted..</h1></div></center>"; 
		
    
} else {
    echo "<center><div style='width:500px;height:100px;margin-top:5cm;'><h1>Invalid Email Id or Application Id</h1></div></center>";
}

mysqli_close($link);
?>

</body>
</html>