<?php

session_start();
$conn=mysqli_connect('localhost','root');

if($conn)
{
    echo"connected";

}
else
{
    echo"not connected";
}

mysqli_select_db($conn,'login11');


$name=$_POST['user'];
$pass=$_POST['password'];

$q="select* from signin where name='$name' && password='pass' ";

$result=mysqli_query($conn,$q);

$num=mysqli_num_rows($result);

if($num==1){
    echo"dulpicate data";

}else{
    $qy="insert into signin(name,password)values('name','%pass)' ";
    mysqli_query($conn,$qy);
}
?>