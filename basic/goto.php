<?php
for ($i = 0; $i < 7; $i++) {
    echo $i . "<br>";
        if ($i==5){
            
            goto abc;
        };
    
}
abc:
echo "this is label abc";
?>