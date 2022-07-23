<?php 
	$str= "BEAUTIFUL TOGETHER FOUNDATION";
	
	$newstr =str_replace(" ","",$str);
	echo strtolower($newstr);
	echo "<br>";
	$fc=substr($str,8,1);
    echo $fc;
	$lc=substr($str,-12,1);
	echo $lc;
	$lc=substr($str,-1,1);
	echo $lc;
    ?>