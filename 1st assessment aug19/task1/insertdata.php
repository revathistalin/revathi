<?php
echo "name :"." ".$_POST["name"]."<br>";
echo "status :"." ".$_POST["status"]."<br>";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todolist";

$name=$_POST["name"];
$status=$_POST["status"];



echo "<pre>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*$name=$_POST['name'];
$status=$_POST['status'];
if($_POST['submit'])
{*/
$insertquery="INSERT INTO todotable(name,status)VALUES('$name','$status')";
echo $insertquery;
$data=mysqli_query($conn,$insertquery);
if (!$data) {
    echo "Error: " . $insertquery. "<br>" . $conn->error;

} else {
    echo "created successfully";
}
echo "<br>";
echo '<td><b><font color="#663300"><a href="todo.php?">view</a></font></b></td>';

?>

