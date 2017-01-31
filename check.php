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
$uf = $request->uf;
$ul = $request->ul;

$i=0;
$sql = "SELECT Firstname, Lastname FROM user WHERE Firstname ='$uf' AND Lastname ='$ul'";
$result = $con->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
         
    
        $arr[$i]['f'] = $row['Firstname'];
        $arr[$i]['l'] = $row['Lastname'];
        
    }
}
  
echo json_encode($arr);