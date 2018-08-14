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

if (isset($_GET['firstname']) && is_numeric($_GET['firstname']))
{
$firstname= $_GET['firstname'];

$result = mysql_query("DELETE FROM studentdetails WHERE firstname=$firstname")
or die(mysql_error());

header("Location: view.php");
}
else

{
header("Location: view.php");
}
?>