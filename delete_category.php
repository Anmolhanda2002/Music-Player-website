<?php
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    include("config.php");
    $q="SELECT * from `songs` where `category`='$id'";
    $r=mysqli_query($conn,$q);
    if($data=mysqli_fetch_array($r)){
    $query = "DELETE FROM `category` WHERE `id`='$id'";
    $result = mysqli_query($conn,$query);
    
    if($result>0)
    {
        echo "<script>window.location.assign('manage_category.php?msg=Record Deleted')</script>";
    }
    else{
        echo "<script>window.location.assign('manage_category.php?msg=Try Again')</script>";
    }
}
else{
    echo "<script>window.location.assign('manage_category.php?msg=Cannot delete category having songs')</script>";
}
}
?>