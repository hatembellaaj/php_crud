<?php
$servername = "localhost";
$username = "root";
$password = "lbeina";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//create sql request 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];

$sql = "INSERT INTO client( fname, lname, email) VALUES ('".$fname."','".$lname."','".$email."')";


//execute request 
if ($conn->query($sql) === TRUE) {
    header( 'Location: ./index.php' ) ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection 
$conn->close();
?>