<?php
session_start();
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('login.php?msg=Please Login')</script>";
}
else{
    $email=$_SESSION['email'];
    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];
        include('config.php');
        $query="INSERT INTO `playlist`(`email`, `song`) VALUES ('$email','$id')";
        $res=mysqli_query($conn,$query);
        if($res>0){
            echo "<script>window.location.assign('song_category.php?msg=Song Added to playlist&id=$id')</script>";
        }
        else{
            echo "<script>window.location.assign('song_category.php?msg=Error try Again&id=$id')</script>";
        }
    }
}

?>