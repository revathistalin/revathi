<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "togo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_POST['id'];
$name=$_POST['name'];
$status=$_POST['status'];
$action=$_POST['action'];
$updatedata= "UPDATE togolist SET name='$name',status='$status',action='$action' WHERE id=$id";
if ($conn->query($updatedata) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

echo '<td><b><font color="#663300"><a href="todo.php?">update</a></font></b></td>';

?>