<?php
$id= $_GET['id'];
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




$getdata=mysqli_query($conn,"SELECT * FROM studentdetails WHERE id='$id'");
while($result=mysqli_fetch_assoc($getdata))
{
  //$Id=$result['id'];
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
  $image=$result['image'];
}

?>

<html>
<head>
<h1>UPDATE YOUR DETAILS</h1>
</head>
<body>
<form action="update.php" method="post" enctype="multipart/form-data" >
<table>
<tr><td></td><td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td></tr>
<tr><td>FirstName:</td><td><input type="text" name="firstname" placeholder="Enter your FirstName" value="<?php echo $Firstname  ?>"></td></tr>
<tr><td>LastName:</td><td><input type="text" name="lastname" placeholder="Enter Your LastName" value="<?php echo $Lastname ?>"></td></tr>
<tr><td>Date of birth:</td><td><input type="date" name="dateofbirth" value="<?php echo strftime('%Y-%m-%d',strtotime($Dateofbirth)); ?>"></td></tr> 
<tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $Email ?>"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="<?php echo $Password?>"></td></tr>
<tr><td>PhoneNo:</td><td><input type="number" name="phoneno" value="<?php echo $Phoneno ?>"></td></tr>

<tr><td>Country:</td><td><input type="country" name="country" value="<?php echo $Country?>"></td></tr>
	 
<tr><td>State:</td><td><select name="state" value="<?php echo $City?>"/>
	<option value="tamilnadu" <?php if($State=="tamilnadu")echo 'selected="selected"'?>>Tamilnadu</option>
	<option value="andhra" <?php if($State=="andhra")echo 'selected="selected"'?>>Andhra</option></td></tr>
</select></td></tr>

<tr><td>Gender:</td><td><input type="radio" name="gender" <?php if($Gender=="male"){echo "checked";} ?> value="male">male</td>
       <td><input type="radio" name="gender"  <?php if($Gender=="female"){echo "checked";}?> value="female">female</td>
       <td><input type="radio" name="gender" <?php if($Gender=="others"){echo "checked";}?> value="others">Others</td></tr>

<tr><td>City:</td><td><input type="checkbox" name="city" <?php if($City=="chennai") echo "checked";?>  value="chennai">Chennai<br>
                      <input type="checkbox" name="city" <?php if($City=="trichy") echo "checked";?>  value="trichy">Trichy<br>
                      <input type="checkbox" name="city" <?php if($City=="madurai") echo "checked";?> value="madurai">Madurai</td></tr><br>

 <tr><td>Address:</td><td><textarea name="address" row="6" column="40" ><?php echo $Address?></textarea></td></tr>                     
 <tr><td>image:</td><td><input type="file"  name="upload" value="<?php echo $image ?>" accept="image/*"></td><td><img src='<?php echo $image; ?>'width="100" height="100" alt='nature'/></td></tr>           


<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>
</table>

</body>
</html>
<?php
echo '<td><b><font color="#663300"><a href="view.php?">view</a></font></b></td>';
?>

