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

$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
echo $fileType;



//sql to insert table
//$image=$_POST['image'];
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

if($_POST['submit'])
{
$insertquery="INSERT INTO studentdetails(image,firstname,lastname,dateofbirth,email,password,phoneno,country,state,gender,city,address)VALUES('$fileName','$Firstname','$Lastname','$Dateofbirth','$Email','$Password','$Phoneno','$Country','$State','$Gender','$City','$Address')";
$insertquery;
die();
$data=mysqli_query($conn,$insertquery);
if (!$data) {
    echo "Error: " . $insertquery. "<br>" . $conn->error;

} else {
    echo "created successfully";
}
}

?>


























