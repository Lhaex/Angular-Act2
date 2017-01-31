<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ass1";
$con = mysqli_connect("localhost","root","","ass1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$arr = array();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$f = $request->f;
$m = $request->m;
$l = $request->l;
$g = $request->g;
$d = $request->d;
$a = $request->a;
$uf = $request->uf;
$ul = $request->ul;
$sql = "INSERT INTO user (Firstname, Middlename, Lastname, Gender, DOB, Address)
VALUES ('$f', '$m', '$l','$g', '$d', '$a')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $cnn->error;
}

?>