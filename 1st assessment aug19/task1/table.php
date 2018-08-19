

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="todolist";
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$sql="CREATE TABLE todotable(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
status VARCHAR(30) NOT NULL)";


if (mysqli_query($conn,$sql)) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$conn->close();




?>
