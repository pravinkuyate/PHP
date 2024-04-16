<?php 
function cbv($a){
    $a="hey";
}
$str="hello";
cbv($str);
echo $str;


function cbr(&$b){
    $b= "hey";
}

$str= "hello";
cbr($str);
echo $str;

?>