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

$updatedata= "UPDATE studentdetails SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',dateofbirth='$_POST[dateofbirth]',
    email='$_POST[email]',password='$_POST[password]',phoneno='$_POST[phoneno]',country='$_POST[country]',state='$_POST[state]',
    gender='$_POST[gender]',city='$_POST[city]',address='$_POST[address]' WHERE id=1";

if ($conn->query($updatedata) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>tude