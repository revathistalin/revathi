<?php
$name=$_POST['name'];
$cars=array(array("name"=>"volvo","speed"=>"100km/h","price"=>"3lakh"),
           array("name"=>"duster","speed"=>"150km/h","price"=>"4lakh"),
           array("name"=>"suzuki","speed"=>"160km/h","price"=>"6lakh"));

echo"<pre>";
print_r($cars);
foreach($cars as $key=>$value)
{
	if($value['name']==$name)
	{
      echo $value["name"];echo "<br>";
      echo $value["speed"];echo "<br>";
      echo $value["price"];echo "<br>";
	}
}


?>
 
