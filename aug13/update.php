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

/*$updatedata= "UPDATE studentdetails SET Firstname='$_POST[firstname]',Lastname='$_POST[lastname]',Dateofbirth='$_POST[dateofbirth]',
    Email='$_POST[email]',Password='$_POST[password]',Phoneno='$_POST[phoneno]',Country='$_POST[country]',State='$_POST[state]',
    Gender='$_POST[gender]',Address='$_POST[address]' WHERE 'Id=$_POST[id]'";*/
$ID=$_POST['id'];
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

$updatedata= "UPDATE studentdetails SET firstname='$Firstname',lastname='$Lastname',dateofbirth='$Dateofbirth',email='$Email',password='$Password',phoneno='$Phoneno',country='$Country',state='$State',gender='$Gender',city='$City',address='$Address' WHERE id=$ID";
if ($conn->query($updatedata) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

echo '<td><b><font color="#663300"><a href="view.php?">view</a></font></b></td>';

?>