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

// sql to create table
$table = "CREATE TABLE studentdetails( 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
dateofbirth VARCHAR(20),
email VARCHAR(50)  NOT NULL,
password VARCHAR(50) NOT NULL,
phoneno VARCHAR(50) NOT NULL,
country VARCHAR(50) NOT NULL,
state VARCHAR(50) NOT NULL,
gender VARCHAR(50) NOT NULL,
city VARCHAR(50) NOT NULL,
address VARCHAR(50) NOT NULL)";

if ($conn->query($table) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>