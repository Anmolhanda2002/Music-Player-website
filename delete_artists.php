<?php
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    include("config.php");
    $q="SELECT * from `songs` where `artist`='$id'";
    $r=mysqli_query($conn,$q);
    if($data=mysqli_fetch_array($r)){
  
    $query = "DELETE FROM `artists` WHERE `id`='$id'";
    $result = mysqli_query($conn,$query);
    
    if($result>0)
    {
        echo "<script>window.location.assign('manage_artists.php?msg=Record Deleted')</script>";
    }
    else{
        echo "<script>window.location.assign('manage_artists.php?msg=Try Again')</script>";
    }
}
else{
    echo "<script>window.location.assign('manage_artists.php?msg=Cannot delete an artists having songs')</script>";
}
}
?>