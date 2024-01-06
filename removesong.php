<?php
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    include("config.php");
    $query = "DELETE FROM `playlist` WHERE `pid`='$id'";
    $result = mysqli_query($conn,$query);
    if($result>0)
    {
        echo "<script>window.location.assign('view_playlist.php?msg=Record Deleted')</script>";
    }
    else{
        echo "<script>window.location.assign('view_playlist.php?msg=Try Again')</script>";
    }
}
else{
    echo "<script>window.location.assign('view_playlist.php?msg=Error Occured')</script>";
}
?>