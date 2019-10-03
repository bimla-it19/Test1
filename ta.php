<?php
 $link = mysqli_connect("121.200.55.60:3307","2019UIT1149";" 28-02-2002";"2019UIT1149");

if($link===false){
 die("ERROR: could not connect." . mysqli_connect_error());
}

$sql ="CREATE TABLE persons(
   id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   first_name VARCHAR(30) NOT NULL,
   last_name VARCHAR(30) NOT NULL,
   email VARCHAR(70) NOT NULL UNIQUE
)";
 if(mysqli_query($link,$sql))
{
echo "TABLE CREATED SUCCESSFULLY.";
}
else
{
echo "ERROR:could not able to execute $sql." . mysqli_error($link);
}
mysqli_close($link);
?>

