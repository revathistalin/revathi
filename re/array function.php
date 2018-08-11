<?php
$cars=array("Volvo","BMW","Toyota");//create array
echo"<pre>"; 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br>";
print_r($cars);
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");//create arry using key and value
print_r($age);
echo "<br>";
$vegetables=array("veg1"=>array("vegname"=>"potato","price"=>"150","colour"=>"brown"),"veg2"=>array("vegname"=>"tomato","price="=>"200","colour"=>"red"));
print_r($vegetables);
echo "<br>";
$fruits=array("fru1"=>array("fruname"=>"mango","price"=>"50","colour"=>"yellow"),"fru2"=>array("fruname"=>"orange","price="=>"140","colour"=>"orange"));
//print_r($fruits);
echo"<br>";
$market=array("vegetables"=>$vegetables,"fruits"=>$fruits);//combine two array
print_r($market);
print_r(array_change_key_case($fruits,CASE_UPPER));//change array key in upper case
print_r(array_chunk($cars,2));//split of arrry into two
$colour=array_column($fruits,'colour');//return a single column
$count=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($count));//count the value
$array = array('apple', 'orange', 'strawberry', 'blueberry', 'kiwi');
array_splice($array, 0, 1);
json_encode($array); 
// yields the array ['apple', 'orange', 'blueberry', 'kiwi']
print_r($array);




?>