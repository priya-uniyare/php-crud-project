<?php

$host="localhost";
$username="root";
$password="root";
$dbname="newonce";

$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn)
{
    die("Something Wrong!!".mysqli_connect_error());
}
else{

    echo "";
}
?>