<html>
<?php
$a=array("pr" => 12,"gh" => 12);
$b=array("fh"=> 12,"gh"=> 12);

print_r($a);

//OR you right like that

$c=["tyt" =>12,"fk"=> 12];
print_r($c);

foreach($c as $i){
    echo  "<li>" ,$i ,"</li>";
}
    ?>

</html>