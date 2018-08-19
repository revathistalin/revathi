<?php
$id= $_GET['id'];
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

$deletedata = "DELETE FROM studentdetails WHERE studentdetails.id=$id";

if ($conn->query($deletedata) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

echo '<td><b><font color="#663300"><a href="view.php?">view</a></font></b></td>';

?>
