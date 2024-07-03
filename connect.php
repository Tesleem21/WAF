<?php
$server_Name="localhost";
$password="";
$username="root";
$database_Name="datastore";

$conn=new mysqli($server_Name,$username,$password,$database_Name);
if(mysqli_connect_errno()){
echo 'connection failed' . mysqli_connect_error();}
else{

echo "<b style='margin-left:350px;font-size:25px;'>"."complaint management system"."</b>";
echo "<br>";
}