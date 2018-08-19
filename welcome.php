<?php

echo "FirstName :"." ".$_POST["firstname"]."<br>";
echo "LastLame :"." ".$_POST["lastname"]."<br>";
echo "Dateofbirth :"." ".$_POST["dateofbirth"]."<br>";
echo "Email :"." ".$_POST["email"]."<br>";
echo "Password :"." ".$_POST["password"]."<br>";
echo "PoneNo :"." ".$_POST["phoneno"]."<br>";
echo "Country :"." ".$_POST["country"]."<br>";
echo "State :"." ".$_POST["state"]."<br>";
echo "Gender :"." ".$_POST["gender"]."<br>";
echo "City :"." ".$_POST["city"]."<br>";
echo "Adreess :"." ".$_POST["address"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student";


echo "<pre>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//sql to insert table
$Firstname=$_POST['firstname'];
$Lastname=$_POST['lastname'];
$Dateofbirth=$_POST['dateofbirth'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Phoneno=$_POST['phoneno'];
$Country=$_POST['country'];
$State=$_POST['state'];
$Gender=$_POST['gender'];
$City=$_POST['city'];
$Address=$_POST['address'];


$insertquery="INSERT INTO studentdetails(firstname,lastname,dateofbirth,email,password,phoneno,country,state,gender,city,address)VALUES('$Firstname','$Lastname','$Dateofbirth','$Email','$Password','$Phoneno','$Country','$State','$Gender','$City','$Address')";
echo $insertquery;
$data=mysqli_query($conn,$insertquery);
if (!$data) {
    echo "Error: " . $insertquery. "<br>" . $conn->error;

} else {
    echo "created successfully";
}


?>


























