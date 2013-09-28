<?php
 $handle = fopen("xy.ini", "r");
 $result="[";

 while (!feof($handle)) {
 	$buffer = fgets($handle, 4096);
 	if($buffer=="") break;
 	if($result=="[")
 	{
 		$result .= $buffer;
 	}
 	else
 	{
 		$result .= ",". $buffer;
 	}
 }


 $result .= "]";
 echo $result;
?>