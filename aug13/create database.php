<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// Create database
<<<<<<< HEAD
$sql=mysqli_query($conn, "CREATE DATABASE todolist");
=======
$sql=mysqli_query($conn, "CREATE DATABASE dbase");
>>>>>>> 427a875e91eb35c142b517e3c2f02284af85cf01
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


// sql to create table
<<<<<<< HEAD
$sql1=mysql_query($conn, "CREATE TABLE listtable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
status VARCHAR(30) NOT NULL");
=======
$sql1=mysql_query($conn, "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP)");
>>>>>>> 427a875e91eb35c142b517e3c2f02284af85cf01


if (mysqli_query($conn,$sql1)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);





?>
