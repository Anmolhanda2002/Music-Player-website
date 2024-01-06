<?php
if(isset($_REQUEST["submit"]))
{
    $user_name = $_REQUEST["user_name"];
    $id = $_REQUEST["id"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $contact = $_REQUEST["contact"];
    include("config.php");
    echo $query = "update `users` set `user_name`='$user_name',`password`='$password', `email`='$email',`contact`='$contact' where `id`='$id'";
    $result = mysqli_query($conn,$query);

    if($result>0)
    {
       
        echo "<script>window.location.assign('view_users.php?msg=Record Updated')</script>";
    }
    else{
        echo mysqli_error($conn);
        echo "<script>window.location.assign('view_users.php?msg=Try again')</script>";
    }
}
?>