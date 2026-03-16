<?php 
$server="localhost";
$user="root";
$password="";
$dbname="Librarydb";

$conn=new mysqli($server, $user, $password, $dbname);
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
} else {
    print "Connected successfully"."<br>";
}
?>