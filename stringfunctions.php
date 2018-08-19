<?php
$statement="welcome to all";
   //add a bachslash in front of the character o
$cslash=addcslashes($statement,"o");
echo($cslash)."<br>";
   //add a backslash infront of each double
$slash=addslashes('what is "your" name');
echo($slash)."<br>";
echo chr(052)."<br>"; //return character from ASCII values
echo chunk_split($statement,1,".")."<br>";//split a string
echo hex2bin("48656c6c6f20576f726c6421")."<br>";//convert hexadecimal to ASCII character
echo hebrev("ב חשון התשסג")."<br>";//convert hebrew text to visual text
$entity = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($entity)."<br>";//convert html entities to character
$array = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$array)."<br>";//join array elements
echo lcfirst("Hello world!")."<br>";//convert the first character to lowercase 
echo ltrim("hello world","hello")."<br>";//remove character from left side of string
echo md5("hello")."<br>";//calculate MD5 of the string
echo metaphone("hollo")."<br>";//calculate metaphone key
echo nl2br("One line.\nAnother line.")."<br>";//insert line break

?>