<?php
$conn=mysqli_connect("localhost","root","");

if(!$conn){
    echo "connect error" . mysqli_connect_error($error);
}

$sql="CREATE DATABASE IF NOT EXISTS todoapp";

$result=mysqli_query($conn,$sql);

mysqli_close($conn);

$conn=mysqli_connect("localhost","root","","todoapp");

if(!$conn){
    echo "connect error " . mysqli_connect_error($conn);
}

 $sqll="CREATE TABLE IF NOT EXISTS tasks(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL
 )";

 $res = mysqli_query($conn,$sqll);




// echo mysqli_error($conn);
echo "<pre>";

var_dump($conn);
