<?php
//echo $_GET['id'];
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
$getdata=mysqli_query($conn,"SELECT firstname,lastname,dateofbirth,email,password,phoneno,country,state,gender,city,address FROM studentdetails");
while($result=mysqli_fetch_assoc($getdata))
{
  $Firstname=$result['firstname'];
  $Lastname=$result['lastname'];
  $Dateofbirth=$result['dateofbirth'];
  $Email=$result['email'];
  $Password=$result['password'];
  $Phoneno=$result['phoneno'];
  $Country=$result['country'];
  $State=$result['state'];
  $Gender=$result['gender'];
  $City=$result['city'];
  $Address=$result['address'];
}
?>

<html>
<head>']'
	<h1>UPDATE YOUR DETAILS</h1>
</head>
<body style=>
<form action="update.php" method="post">
<table>
<tr><td>FirstName:</td><td><input type="text" name="firstname" placeholder="Enter your FirstName" value="<?php echo $result['firstname'];?>"</td></tr>
<tr><td>LastName:</td><td><input type="text" name="lastname" placeholder="Enter Your LastName" value="<?php echo $result['lastname'];?>"</td></tr>
<tr><td>Date of birth:</td><td><input type="date" name="dateofbirth" value="<?php echo $result['dateofbirth'];?>"</td></tr> 
<tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $result['email'];?>"</td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="<?php echo $result['password'];?>"</td></tr>
<tr><td>PhoneNo:</td><td><input type="number" name="phoneno" value="<?php echo $result['phoneno'];?>"</td></tr>

<tr><td>Country:</td><td><input type="country" name="country" value="<?php echo $result['country'];?>"</td></tr>
	 
<tr><td>State:</td><td><select name="state">
	<option value="tamilnadu">Tamilnadu</option>
	<option value="Kerala">Kerala</option>
	<option value="andhra">Andhra</option>
</select></td></tr>

<tr><td>Gender:</td><td><input type="radio" name="gender" value="male" checked>Male<br>
       <input type="radio" name="gender" value="female" >Female
       <input type="radio" name="gender" value="others">Others</td></tr>

<tr><td>City:</td><td><input type="checkbox" name="city"  value="chennai">Chennai
                      <input type="checkbox" name="city"  value="trichy">Trichy
                      <input type="checkbox" name="city"  value="madurai">Madurai</td></tr><br>

 <tr><td>Address:</td><td><textarea name="address" row="6" column="40"></textarea></td></tr>                     


<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>
</table>

</body>
</html>

<?php


?>
