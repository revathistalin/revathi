<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "login Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "login  Not Set";
}
?>

<html>
<head>
	<title>MY TODO LIST</title>
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">My Todo List</h2>	</div>
	
</body>
</html>

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
$sql="SELECT * FROM listtable ";
$result=mysqli_query($conn,$sql);
echo "<table border='1' cellpadding=10>";
echo "<tr>
<th><font color='Red'>id</font></th>
<th><font color='Red'>name</font></th>
<th><font color='Red'>status</font></th>
<th><font color='Red'>action</font></th>
</tr>";

while($row = mysqli_fetch_assoc( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['name'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['status'] . '</font></b></td>;




//echo '<td><b><font color="#663300"><a href="status.php?id=' . $row['id'] . '">status</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="index.php?id=' . $row['id'] . '">action</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>