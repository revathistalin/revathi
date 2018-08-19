<?php
$id= $_GET['id'];
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

$getdata=mysqli_query($conn,"SELECT * FROM todotable WHERE id='$id'");
while($result=mysqli_fetch_assoc($getdata))
{
  //$id=$result['id'];
  $name=$result['name'];
  $status=$result['status'];

}

?>


<html>
<head>

</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">Add New Todo List</h2>
	</div>
	<form method="post" action="updatevalue.php" class="input_form">
        <tr><td></td><td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td></tr>
        <tr><td>name:</td><td><input type="text" name="name" placeholder="Enter the name" value="<?php echo $name  ?>"></td></tr>
        <tr><td>status:</td><td><input type="text" name="status" placeholder="Enter the status" value="<?php echo $status  ?>"></td></tr>
        
    	<tr><td><input type="submit" name="update" value="update"></td></tr>

	</form>
</body>
</html>




