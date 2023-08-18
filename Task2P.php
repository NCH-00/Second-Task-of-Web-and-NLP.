<?php 



$con= mysqli_connect ("localhost","root","","botmap") or die (mysqli_connect_error());

mysqli_query($con,"CREATE TABLE IF NOT EXISTS map ( id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
 direction VARCHAR(10),
 distance VARCHAR(10))");
 


echo"<br/>";

if (isset($_POST['btn1']))
  mysqli_query($con,"INSERT INTO map (direction,distance) VALUES ('Left','1m')") or die (mysqli_connect_error()); 

elseif (isset($_POST['btn2']))
	mysqli_query($con,"INSERT INTO map (direction,distance) VALUES ('Right','1m')") or die (mysqli_connect_error());
elseif (isset($_POST['btn3']))
	mysqli_query($con,"INSERT INTO map (direction,distance) VALUES ('Backward','1m')") or die (mysqli_connect_error());
elseif (isset($_POST['btn4']))
	mysqli_query($con,"INSERT INTO map (direction,distance) VALUES ('Forward','1m')") or die (mysqli_connect_error());
elseif (isset($_POST['btn5']))
	mysqli_query($con,"INSERT INTO map (direction,distance) VALUES ('Stop','0m')") or die (mysqli_connect_error());
else
  echo "The last direction and distance are: ";
  $Result= mysqli_query ($con,"select * from map ORDER BY id DESC LIMIT 1") or die (mysqli_connect_error());
  $row = mysqli_fetch_array($Result);
  echo $row['direction']."-".$row['distance'];
  echo"<br/>";

 
	
?>