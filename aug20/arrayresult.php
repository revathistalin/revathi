<?php
function result()
{
$name=$_POST['name'];
$carsdtails=array(array("name"=>"volvo","speed"=>"100km/h","price"=>"3lakh"),
           array("name"=>"duster","speed"=>"150km/h","price"=>"4lakh"),
           array("name"=>"suzuki","speed"=>"160km/h","price"=>"6lakh"));

echo"<pre>";
print_r($carsdtails);
foreach($carsdtails as $key=>$value)
{
	if($value['name']===$name)
	{
      echo "Name is:" .$value["name"];echo "<br>";
      echo "Value is:" .$value["speed"];echo "<br>";
      echo "Price is:" .$value["price"];echo "<br>";
	}

}
}
echo result();
?>
