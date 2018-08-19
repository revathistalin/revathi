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
		<form action="details.php" method="post" >
		tr><td><input type="submit" name="Add new" value="Add new"></td></tr>
	
</body>
</html>
