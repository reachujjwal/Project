<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successfull";
}else{
    echo "No Connection";
}

mysqli_select_db($con,'internship');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$jobs = $_POST['jobs'];

$query =" insert into jobsdata (username, email,  mobile, jobs) 
values ('$username', '$email' , '$mobile' , '$jobs') ";

echo "$query";

mysqli_query($con, $query);

header('location:form.php');


?>