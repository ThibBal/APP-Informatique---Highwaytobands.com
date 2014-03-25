<?php
$con=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO membre (login, password, zipcode, mail, photo)
VALUES
('$_POST[login]','$_POST[password]','$_POST[zipcode]','$_POST[mail]','$_POST[photo]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Vous êtes inscrit";

mysqli_close($con);
?>
