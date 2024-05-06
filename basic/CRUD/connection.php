<?php

$servername="localhost";
$username="root";
$password="";
$dbname="responsivefoam1";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if ($conn){
    echo"connection sucessful";

}

else{
    echo "connection failed" .mysqli_connect_error();
}


?>