<?php 
function greet($name){
    echo "my name is " . $name;
}

greet("pravin");



function add($a,$b){
    return $a + $b;

}
echo add(3,5);
echo("<br>");
//function with default agrument

function add1($a,$b=20){
    return $a + $b;

}

echo add1(20);


function ui($a,$b){
    return add1($a,$b);
}
echo "<br>";
echo ui(23,76);

echo "<h3>annomous function : the fuction dont have name they are assigned inside the variable</h3>";
$power = function($num1,$num2){
    return $num1 ** $num2;
};
//echo power  (2*40);

function modular($num1,$num2){
    return $num1 % $num2;
};

$a=modular(12,8);
echo $a;

?>



