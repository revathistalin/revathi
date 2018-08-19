
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todolist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM todotable ";
$result=mysqli_query($conn,$sql);
echo "<table border='1' cellpadding=10>";
echo "<tr>
<th><font color='Red'>id</font></th>
<th><font color='Red'>name</font></th>
<th><font color='Red'>status</font></th>
<th><font color='Red'>action</font></th>
<th><font color='Red'>Edit</font></th>
</tr>";

while($row = mysqli_fetch_assoc( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['name'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['status'] . '</font></b></td>';
if($row['status']=='pending')
{
	$action="processing";
}
elseif($row['status']=='processing')
{
	$action="completed";

}
else
{
	$action="___";
}
echo '<td><b><font color="#663300">' . $action . '</font></b></td>';

echo '<td><b><font color="#663300"><a href="index.php?id=' . $row['id'] . '">Edit</a></font></b></td>';

}

echo "</table>";
?>