<?php
$array=array(array("1","2","3","4"),array("a","b","c","d"),array("A","B","C","D"),array("x","y","z","w"));
echo "<pre>";
print_r($arr1);
echo "<br>";
$element=array("reva","subash","dinesh","prabha");
print_r($arr2);
foreach($array as $key=>$value)
{
array_splice($array[$key],$key,0,$element[$key]);
	
}
//array_splice($arr1[1],1,0,$arr2[1]);
//array_splice($arr1[2],2,0,$arr2[2]);
//array_splice($arr1[3],3,0,$arr2[3]);
print_r($array);



?>