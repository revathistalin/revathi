<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$insert= "INSERT INTO studentform (firstname, lastname, email,password,phoneno,country,state,gender,city,address)
VALUES ('veni', 'subash', 'xxx@example.com','132143','8907651234','london','kerala','female','chennai','qqqqq')";

if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $conn->error;
}

$conn->close();
?>
