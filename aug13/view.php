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
//$result=mysql_query("SELECT * FROM studentdetails");
$sql="SELECT * FROM studentdetails ";
$result=mysqli_query($conn,$sql);
echo "<table border='1' cellpadding=10>";
echo "<tr>
<th><font color='Red'>id</font></th>
<th><font color='Red'>firstname</font></th>
<th><font color='Red'>lastname</font></th>
<th><font color='Red'>email</font></th>
<th><font color='Red'>Edit</font></th>
<th><font color='Red'>Delete</font></th>
</tr>";

while($row = mysqli_fetch_assoc( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['firstname'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['lastname'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['email'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="Edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
